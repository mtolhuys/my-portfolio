<template>
    <div class="about-content">
        <nav-bar/>
        <section class="py-5">
            <div class="container py-4">
                <div class="row text-center">
                    <div class="col-lg-8 mx-auto">
                        <h1>Checkout my pictures on Instagram!</h1>
                    </div>
                </div>
                <div class="elfsight-app-2fe22db3-d5eb-43f8-8f05-c724b01dd913"></div>
            </div>
        </section>
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
        },
    }
</script>
