<template>
    <section>
        <a href="https://www.instagram.com/deisi_art/" target="_blank">
            <div class="instagram-section-title d-none d-sm-block">
                <i class="fab fa-instagram mr-2"></i>Follow on Instagram @deisi_art
            </div>
        </a>
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
            components: {
                FooterSection,
                NavBar,
                InstaFeed
            }
        }
</script>
<style scoped>
    img.img-fluid {
        width: 300px;
        height: 300px;
        object-fit: cover;
    }
    @media (max-width: 500px) {
        img.img-fluid {
            width: 100%;
            height: 150px;
            object-fit: cover;
            object-position: center;
        }
    }
</style>
