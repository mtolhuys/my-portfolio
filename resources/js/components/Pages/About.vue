<template>
    <div class="about-content">
        <nav-bar/>
        <section class="py-5">
            <div class="container py-4">
                <div class="row text-center">
                    <div class="col-lg-8 mx-auto">
                        <h1>Incredible Graffiti Art Spotted in East Village</h1>
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
                                <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <p class="lead drop-caps mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                        <h2>Heading level two</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

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
