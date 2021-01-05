<template>
    <section>
        <div class="instagram-section-title d-none d-sm-block">
            <i class="fab fa-instagram mr-2"></i>
            Follow on Instagram @deisi_art
        </div>
        <insta-feed
            fields="media_url,media_type,caption,permalink"
            container-class="image-container"
            :mediatypes="['IMAGE']"
        >
            <template v-slot:feeds="props">
                <div class="col-lg-2 col-4 p-0">
                    <a class="d-block instagram-item" :href="props.feed.permalink" rel="noopener" target="_blank">
                        <img class="img-fluid" :src="props.feed.media_url" alt="Instagram post">
                    <div class="instagram-item-overlay">
                        <i class="fab fa-instagram">
                        </i>
                    </div>
                    </a>
                </div>
            </template>
        </insta-feed>
    </section>
</template>

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
<style scoped>
    img.img-fluid {
        width: 300px;
        height: 300px;
        object-fit: cover;
    }
</style>
