<template>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light py-4 index-forward bg-white">
            <div class="container d-flex justify-content-center justify-content-lg-between align-items-center">
                <ul class="list-inline small mb-0 text-dark d-none d-lg-block">
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="https://github.com/dtolhuijs" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="https://www.linkedin.com/in/deisibonilla/" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="https://www.instagram.com/deisi_art/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="https://www.flickr.com/photos/deisib/" target="_blank">
                            <i class="fab fa-flickr"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="https://www.youtube.com/channel/UCnZeCa3xT7TOjzeqiMwlxQw" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>

                <inertia-link class="navbar-brand" href="/">
                    <img src="images/my-logo.png" alt="D'art logo" width="100">
                </inertia-link>

                <a class="reset-anchor text-small mb-0 h6 d-none d-lg-block" href="#" @click="showModal = true">
                    <i class="far fa-envelope mr-2 text-primary">
                    </i>Send me a message!
                </a>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light border-top border-bottom border-light">
            <div class="container">
                <ul class="list-inline small mb-0 text-dark d-block d-lg-none">
                    <li class="list-inline-item">
                        <a class="reset-anchor"  href="https://github.com/dtolhuijs" target="_blank">
                            <i class="fab fa-github"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="https://www.linkedin.com/in/deisibonilla/" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="https://www.instagram.com/deisi_art/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="https://www.flickr.com/photos/deisib/" target="_blank">
                            <i class="fab fa-flickr"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="https://www.youtube.com/channel/UCnZeCa3xT7TOjzeqiMwlxQw" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        id="drop-down-menu">
                    <span></span><span></span><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <!-- Navbar link-->
                            <inertia-link class="nav-link" href="/">Home</inertia-link>
                        </li>
                        <li class="nav-item">
                            <!-- Navbar link-->
                            <inertia-link class="nav-link"  href="about">About</inertia-link>
                        </li>
                        <li class="nav-item">
                            <!-- Navbar link-->
                            <inertia-link class="nav-link"  href="gallery">Gallery</inertia-link>
                        </li>
                        <li class="nav-item">
                            <!-- Navbar link-->
                            <inertia-link class="nav-link blog"  href="blog">Blog posts</inertia-link>
                        </li>
                        <li class="nav-item">
                            <!-- Navbar link-->
                            <inertia-link class="nav-link admin"  href="admin">Admin</inertia-link>
                        </li>
                        <li class="nav-item">
                            <!-- Navbar link-->
                            <inertia-link class="nav-link login"  href="login">Login</inertia-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <contact v-if="showModal" @close="showModal = false"/>
    </header>
</template>

<script>
import Contact from "./Pages/UserPages/Contact";

export default {
    components: {
        Contact
    },

    data() {
        return {
            auth: '',
            user: '',
            showModal: false
        }
    },

    methods:{
        logout() {
            localStorage.removeItem('usertoken')
        }
    },

    mounted() {
        EventBus.$on('logged-in', status => {
            this.auth - status
        })
    }
}
</script>
