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
import axios from 'axios';

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
        feeds: [],
    }),

    mounted () {
        this.getUserFeed();
    },

    methods: {
        getUserFeed: function () {
            this.loading = true;

            axios.get('insta-feed')
                .then((response) => {
                    this.loading = false;

                    if (response.status !== 200) {
                        this.error = response.error.message;

                        return;
                    }

                    response.data.data.slice(0, this.count).forEach(picture => {
                        if (this.correctMediaType(picture)) {
                            this.feeds.push(picture);
                        }
                    });
                })
                .catch((error) => {
                    throw error
                })
        },

        correctMediaType(picture) {
            return picture.hasOwnProperty('media_type')
                && this.mediatypes.includes(picture.media_type);
        }
    }
}
</script>
