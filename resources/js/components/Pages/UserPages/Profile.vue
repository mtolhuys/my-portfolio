<template>
    <section>
        <nav-bar/>
        <div class="container">
            <div class="jumbotron mt-5">
                <div class="col-sm-8 mx-auto">
                    <h1 class="text-center">Profile</h1>
                </div>

                <table class="table col-md-6 mx-auto">
                    <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{ whole_name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ email }}</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <footer-section/>
    </section>

</template>


<script>

import NavBar from "../../NavBar";
import FooterSection from "../../FooterSection";

export default{
    components: {NavBar, FooterSection},
    data() {
        this.getUser().then(res => {
            this.wholename = res.user.name
            this.email = res.user.email
            return res
        })

        return {
            wholename: '',
            email: ''
        }
    },
    methods: {
        getUser() {
            return axios.get('api/profile', {
                headers:{
                    Authorization: 'Bearer' ${localStorage.usertoken}
                }
            })
                .then(res => {
                    return res.date
                })
                .catch(err =>{
                    console.log(err,'test')
                })
        }
    }
}
</script>
