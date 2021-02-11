<template>
    <section>
        <transition name="modal">
            <div class="modal-mask">
                <div class="modal-wrapper">
                    <div class="modal-container">
                        <form @submit.prevent="submit" action="?" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input v-model="fields.name" id="name" type="text" class="form-control" name="name" placeholder="Your Name">
                                <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input v-model="fields.email" id="email" type="email" class="form-control" name="email" placeholder="Your Email">
                                <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea v-model="fields.message" id="message" type="message" class="form-control" name="message" placeholder="Your Message"></textarea>
                                <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
                            </div>

                            <button class="btn btn-primary" @click="$emit('close')">
                                <i class="fas fa-times"></i>
                            </button>

                            <button class="btn btn-primary sendMessage" type="submit">Send message</button>

                            <div v-if="success" class="alert alert-success mt-3">
                                Message sent!
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LcwDVQaAAAAALEbtoyVyjx5s127fv9fHT2UqDGy"></div>
                        </form>
                    </div>
                </div>
            </div>
        </transition>
    </section>
</template>

<script>
export default {
    data() {
        return {
            fields: {},
            errors: {},
            success: false,
            loaded: true,
        }
    },
    methods: {
        submit() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};
                axios.post('/submit', this.fields).then(response => {
                    this.fields = {}; //Clear input fields.
                    this.loaded = true;
                    this.success = true;
                }).catch(error => {
                    this.loaded = true;
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
            }
        }
    }
}
</script>

<style scoped>

</style>
