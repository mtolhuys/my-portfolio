<template>
    <div id="page-content">
        <nav-bar/>
        <header-image/>
        <insta-gallery/>
        <footer-section/>
    </div>
</template>

<script>
    import NavBar from "../NavBar";
    import FooterSection from "../FooterSection";
    import HeaderImage from "../Layouts/HeaderImage";
    import InstaGallery from "./InstaGallery";

    export default {
        components: {
            FooterSection,
            NavBar,
            HeaderImage,
            InstaGallery
        },
    }
</script>

<style scoped>
.fab, .fas {
    font-size: 24px;
    padding: 5px;
}
</style>
