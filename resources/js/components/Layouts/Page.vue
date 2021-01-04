<template>
    <div class="container">
        <nav-bar/>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        Index
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import NavBar from "../NavBar";

    export default {
        components: {NavBar},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
