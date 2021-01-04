<template>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(246 202 202)">
        <a class="navbar-brand" href="/">
            <img width="50px" src="images/round-logo.png" alt="logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <inertia-link class="nav-link" href="/">Home</inertia-link>
                </li>
                <li class="nav-item">
                    <inertia-link class="nav-link" href="instafeed">Instagram Gallery</inertia-link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
