<template>
    <div id="page-content">
        <nav-bar/>
        <div class="container">
            <insta-feed
                token="IGQVJYekZA2b2lyek9HZAXhiaXNBbDhORXFyVU14TTZAQSjdvNXM3UmZASdXpoS3M4UjNieVJpc1BYTC1uQnpZATnN3VTNSUTdGZAUkwZAGRWT3FfRjNPajg5MTZAZAYmZA6RVBqX3VhNVloQzh1b0w4UUZAzU214UQZDZD"
                fields="media_url,media_type,caption,permalink"
                container-class="image-container"
                :mediatypes="['IMAGE']"
            >
                <template v-slot:loading="props">
                    <h1 v-if="props.loading" class="fancy-loading">
                        Loading, please wait...
                    </h1>
                </template>

                <template v-slot:feeds="props">
                    <div class="">
                        <div class="">
                            <div class="col-12">
                                <div class="feed">
                                    <div class="bg-white border">
                                        <div>
                                            <div class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
                                                <div class="d-flex flex-row align-items-center feed-text px-2">
                                                    <a :href="props.feed.permalink" rel="noopener" target="_blank">
                                                        <div class="instagram-image">
                                                            <img class="instagram-image" :src="props.feed.media_url" alt="Instagram post">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2 px-3">
                                            <span>
                                                <strong>
                                                    <a href="https://www.instagram.com/deisi_art/" target="_blank">deisi_art</a>
                                                </strong>
                                            </span>
                                        </div>
                                        <div class="p-2 px-3"><span>{{ props.feed.caption }}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>

                <template v-slot:error="props">
                    <div class="fancy-alert">
                        {{ props.error }}
                    </div>
                </template>
            </insta-feed>
        </div>

        <footer-section/>
    </div>
</template>

<style>
    .container {
        max-width: 1600px;
    }
    img.instagram-image {
        width: 300px;
        height: 300px;
        object-fit: cover;
    }
    .time {
        font-size: 9px !important
    }

    .socials i {
        margin-right: 14px;
        font-size: 17px;
        color: #d2c8c8;
        cursor: pointer
    }

    .feed {
        width: min-content ;
        padding: 10px;
    }

    .image-container {
        padding: 40px 0;
    }

    .feed-image img {
        width: 100%;
        height: auto
    }
</style>

<script>
import NavBar from "../NavBar";
import FooterSection from "../FooterSection";
import InstaFeed from "../InstaFeed";

    export default {
        components: {FooterSection, NavBar, InstaFeed},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
