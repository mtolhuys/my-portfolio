<template>
    <div class="about-content">
        <nav-bar/>
        <section class="py-5">
            <div class="container py-4">
                <div class="row text-center">
                    <div class="col-lg-8 mx-auto">
                        <h1>Front-end Developer with background in Design!</h1>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <!-- Blog sidebar-->
                    <div class="col-lg-3">
                        <!-- About category-->
                        <div class="card rounded-0 border-0 bg-light mb-4 py-lg-4">
                            <div class="card-body text-center">
                                <h2 class="h3 mb-3">About me</h2><img class="rounded-circle mb-3" src="images/me.jpg" alt="Profile image" width="200">
                                <p class="text-small text-muted">
                                    I grew up in central Mexico and started drawing at a young age. My first drawings were mostly about my dolls and my mom's flowers.
                                </p>
                                <p class="text-small text-muted">At Age 14 I moved to California and went to
                                    <a href="https://www.hartnell.edu/" target="_blank">Hartnell College</a> to study design. I graduated <i>summa cum laude</i> with an A.A. degree</p>
                                <p class="text-small text-muted">In 2013 I moved to Den Helder, The Netherlands with my husband and in 2014 started to work in Horeca at a beach restaurant called<br>
                                    <a href="https://www.paal17.com/" target="_blank">Paal 17</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <p class="lead drop-caps mb-5">
                            I studied art history and design, my goal was to become an art teacher or architect.
                            I had a lot of fun working on new designs and learning about the different art movements and artistic developments.
                            Even though I enjoyed experimenting with different mediums and art styles
                            I did not see myself working full time as a designer so I decided to go in a different direction.
                        </p>
                        <h2>My journey in web development</h2>
                        <p class="mb-4">After working 2 years in Horeca I decided try a new career path,
                            I always been interested in computers and after seen my husband busy with code
                            (he's a tech-lead at <a href="https://socialblue.com/get-to-know-our-backend-developer-maarten-tolhuijs/" target="_blank">Social Blue</a>),
                            I became really interested and found the idea of building my own website very exciting.
                            I  signed up to a coding bootcamp in Amsterdam called <a href="https://codaisseur.com/" target="_blank">Codaisseur</a>
                            where I learned all the basics about web development.<br>
                            It wasn't until I got my first job at <a href="https://www.growingminds.nl/" target="_blank">Growing Minds</a>
                            where I fully started to get what Web development is all about
                        </p>
                        <p>At Growing Minds I have learned to build dynamic forms with dynamic content for our multiple clients,
                            I been able to contribute to the main product which is <a href="https://growingminds.nl/products/formulieren-bouwen/" target="_blank">Form Suite</a>.
                            Recently we started to modernized our stack and have the opportunity to learn new technologies and best practices.
                        </p>
                        <p>My goal is to ultimately become a full stack developer, I want to know the ins and outs of building a web applications.</p><br>

                        <!-- Skills category-->
                        <skills/>
                    </div>
                </div>
            </div>
        </section>
        <footer-section/>
    </div>
</template>

<script>
import NavBar from "../NavBar";
import FooterSection from "../FooterSection";
import Skills from "../Layouts/Skills";

export default {
    components: { FooterSection, NavBar, Skills },
name: "About"
}
</script>

<style scoped>

</style>
