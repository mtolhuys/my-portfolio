<template>
    <div id="page-content">
        <nav-bar/>
        <div class="jumbotron">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h1 class="display-4">Hola! Ik ben Deisi</h1>
                        <span>Front-end Developer, based in Den Helder, the Netherlands.</span>
                        <p class="lead">
                            I Work as a Front-end developer at Growing Minds. During my spare time I like to read and draw.
                            I started this blog as a way to showcase and share tips related to Art, but also to improve my programming skills.
                            Currently I'm learning Vue and my goal is to complete this website entirely on vue and learn Laravel on the way.
                        </p>
                        <hr class="my-4">
                        <p>Follow me on Social Media.</p>
                        <p class="lead">
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <skills/>
        </div>
        <footer-section/>
    </div>
</template>

<script>
    import NavBar from "../NavBar";
    import FooterSection from "../FooterSection";
    import Skills from "../Skills";

    export default {
        components: { FooterSection, NavBar, Skills },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
.fab, .fas {
    font-size: 24px;
    padding: 5px;
}
</style>
