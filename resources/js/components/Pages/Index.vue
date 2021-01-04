<template>
    <div id="page-content">
        <nav-bar/>
        <div class="jumbotron">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h1 class="display-4">D'art</h1>
                        <span>D'art pour l'art</span>
                        <p class="lead"><i>Art for Art's sake!</i><br>
                            I like to draw & paint as a hobby, my favorite subject are flowers and animals.
                            I like to experiment with different styles and mediums. Check out my current pieces on Instagram!
                        </p>
                        <span>Based in Den Helder</span>
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
        <footer-section/>
    </div>
</template>

<style>
    .fab, .fas {
        font-size: 24px;
        padding: 5px;
    }
</style>

<script>
    import NavBar from "../NavBar";
    import FooterSection from "../FooterSection";

    export default {
        components: { FooterSection, NavBar },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
