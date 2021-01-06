<template>
    <footer class="py-4" style="background: #111">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-md-4 text-lg-left"><img src="images/round-logo.png" alt="..." width="60"></div>
                <div class="col-md-4 text-center">
                    <div class="d-flex align-items-center flex-wrap justify-content-center">
                        <h6 class="text-muted mb-0 py-2 mr-3">Follow me<span class="ml-3">-</span></h6>
                        <ul class="list-inline small mb-0 text-white">
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-github"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li class="list-inline-item"><a class="reset-anchor" href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 text-lg-right">
                    <p class="mb-0 text-muted text-small text-heading">
                        Made with ❤️ by Deisi
                    </p>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    mounted() {
        console.log('Footer mounted.')
    }
}
</script>
