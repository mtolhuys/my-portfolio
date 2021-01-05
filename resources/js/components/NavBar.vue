<template>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light py-4 index-forward bg-white">
            <div class="container d-flex justify-content-center justify-content-lg-between align-items-center">
                <ul class="list-inline small mb-0 text-dark d-none d-lg-block">
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="#">
                            <i class="fab fa-github">
                            </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor"
                           href="#">
                            <i class="fab fa-twitter">
                            </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="#">
                            <i class="fab fa-instagram">
                            </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="#">
                            <i class="fab fa-linkedin">
                            </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="#">
                            <i class="fab fa-youtube">
                            </i>
                        </a>
                    </li>
                </ul>
                <a class="navbar-brand" href="index.html">
                    <img src="images/my-logo.png" alt="D'art logo" width="100">
                </a>
                <a class="reset-anchor text-small mb-0 h6 d-none d-lg-block"
                   href="mailto:deisi.bonilla@gmail.com">
                    <i class="far fa-envelope mr-2 text-primary"></i>
                        deisi.bonilla@gmail.com
                </a>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light border-top border-bottom border-light">
            <div class="container">
                <ul class="list-inline small mb-0 text-dark d-block d-lg-none">
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="#">
                            <i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="#">
                            <i class="fab fa-twitter">
                            </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="#">
                            <i class="fab fa-instagram">
                            </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="#">
                            <i class="fab fa-linkedin">
                            </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="reset-anchor" href="#">
                            <i class="fab fa-youtube">
                            </i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <!-- Navbar link-->
                            <inertia-link class="nav-link active"  href="instafeed">Home</inertia-link>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                               id="listingVariants" href="#"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">
                                Blog Listing
                            </a>
                            <div class="dropdown-menu mt-2"
                                 aria-labelledby="listingVariants">
                                <a class="dropdown-item"
                                   href="listing-1.html">
                                    Post column
                                </a>
                                <a class="dropdown-item"
                                   href="listing-2.html">
                                    Post row
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- Navbar link-->
                            <inertia-link class="nav-link active"  href="instafeed">Home</inertia-link>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                               id="pages"
                               href="#"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu mt-2"
                                 aria-labelledby="pages">
                                <a class="dropdown-item"
                                   href="index.html">
                                    Home
                                </a>
                                <a class="dropdown-item"
                                   href="listing-1.html">
                                    Listing
                                </a>
                                <a class="dropdown-item"
                                   href="post.html">
                                    Post
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
