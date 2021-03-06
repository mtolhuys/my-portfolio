<template>
    <div class="about-content">
        <nav-bar/>

        <footer-section/>
    </div>
</template>

<script>
    import NavBar from "../NavBar";
    import FooterSection from "../FooterSection";

    export default {
    name: "PhotoGallery",
        components: {
            FooterSection,
            NavBar,
        }
    }
</script>
