<template>
    <section>
        <nav-bar/>

        <!-- Login form -->
        <div class="wrapper container">
            <div class="row">
                <div class="col-md-6 mt-5 mx-auto">
                    <form v-on:submit.prevent="login">
                        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

                        <div class="form-group">
                            <label for="email"> Email Address</label>
                            <input id="email" type="email" v-model="email" class="form-control" name="email"
                                   placeholder="Email Address">
                        </div>

                        <div class="form-group">
                            <label for="password"> Password</label>
                            <input id="password" type="password" v-model="password" class="form-control" name="password"
                                   placeholder="Password">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-md btn-primary btn-block">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="push"></div>
        </div>
        <br>

        <footer-section/>
    </section>
</template>

<script>

    import NavBar from "../../NavBar";
    import FooterSection from "../../FooterSection";

export default {
    name: "Login",

    components: {
        FooterSection,
        NavBar
    },

    data() {

        return {
            email: '',
            password: '',
        }
    },

    methods: {
        login() {
            this.$inertia.post('/api/login', {
                email: this.email,
                password: this.password,
            });
        }
    }
}
</script>

<style scoped>
.wrapper {
    min-height: 100%;

    /* Equal to height of footer */
    /* But also accounting for potential margin-bottom of last child */
    margin-bottom: 0;
}
</style>
