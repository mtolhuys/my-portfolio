<template>
    <div :class="containerClass">
        <slot name="loading" :loading="loading" />

        <div class="row align-items-start">
            <div class="container-fluid px-0">
                <div class="row">
            <slot
                v-for="(feed, index) in feeds"
                :index="index"
                :feed="feed"
                name="feeds"
            />
                </div>
            </div>
        </div>
        <slot name="error" :error="error" />
    </div>
</template>

<style>
    .align-items-start {
        margin: 0 auto;
    }
</style>

<script>
import axios from 'axios'
export default {
    props: {
        /*
         * Media Fields (see https://developers.facebook.com/docs/instagram-basic-display-api/reference/media#fields)
         */
        fields: {
            type: String,
            required: true
        },
        /*
         * Number of posts rendered.
         */
        count: {
            type: Number,
            default: 6
        },
        /*
         * Kinds of media to filter (Can be IMAGE, VIDEO, or CAROUSEL_ALBUM.).
         */
        mediatypes: {
            type: Array,
            required: true
        },
        // Class for container div
        containerClass: {
            type: String,
            default: '',
            required: false
        }
    },
    data: () => ({
        error: null,
        loading: false,
        feeds: []
    }),
    mounted () {
        this.getUserFeed()
    },
    methods: {
        getUserFeed () {
            this.loading = true
            axios.get('insta-feed')
                .then((response) => {
                    this.loading = false
                    if (response.status === 400) {
                        this.error = response.error.message
                    }
                    if (response.status === 200) {
                        for (const n in response.data.data) {
                            if (this.mediatypes.includes(response.data.data[n].media_type)) {
                                this.feeds.push(response.data.data[n])
                                if (this.feeds.length >= this.count) {
                                    return
                                }
                            }
                        }
                    }
                })
                .catch((error) => {
                    throw error
                })
        }
    }
}
</script>
