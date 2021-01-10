<template>
    <section>
        <nav-bar/>
        <div class="wrapper container">
            <div class="row">
                <div class="col-md-6 mt-5 mx-auto">
                    <form v-on:submit.prevent="register">
                        <h1 class="h3 mb-3 font-weight-normal">Register</h1>

                        <div class="form-group">
                            <label for="first_name"> First Name</label>
                            <input id="first_name"
                                   type="text"
                                   v-model="first_name"
                                   class="form-control"
                                   name="first_name"
                                   placeholder="first name">
                        </div>

                        <div class="form-group">
                            <label for="last_name"> Last Name</label>
                            <input id="last_name"
                                   type="text"
                                   v-model="last_name"
                                   class="form-control"
                                   name="last_name"
                                   placeholder="last name">
                        </div>

                        <div class="form-group">
                            <label for="email"> Email Address</label>
                            <input id="email" type="email" v-model="email" class="form-control" name="email" placeholder="Email Address">
                        </div>

                        <div class="form-group">
                            <label for="password"> Password</label>
                            <input id="password"
                                   type="password"
                                   v-model="password"
                                   class="form-control"
                                   name="password"
                                   placeholder="Password">
                        </div>

                        <button class="btn btn-lg btn-primary btn-block">Register</button>
                    </form>
                </div>
            </div>
            <div class="push"></div>
        </div>
        <footer-section/>
    </section>
</template>

<script>
import NavBar from "../../NavBar";
import FooterSection from "../../FooterSection";

export default {
    components: {FooterSection, NavBar},

    name: "Registration",

    data() {
        return {
            first_name: '',
            last_name: '',
            email: '',
            password: '',
        }
    },

    methods: {
        register() {
            axios.post('/api/register',
                {
                    name:this.first_name +' '+ this.last_name,
                    email:this.email,
                    password:this.password,
                })
                .then((res) => {
                    console.log(res)
                    router.push({name: 'Login'})
                })
                .catch((err) => {
                    console.log(err)
                })
        },


    }
}
</script>

<style scoped>

</style>
