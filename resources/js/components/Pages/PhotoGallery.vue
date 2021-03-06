<template>
    <div class="about-content">
        <nav-bar/>
        <h1><a :href="instapage">@artsy_capptures on instagram</a></h1>
        <template v-if="grams.length > 0">
            <div v-for="(gram, index) in grams">
                <a href="https://www.instagram.com/p/BjXplo-ASdr/">
                    <img :src="gram.images.standard_resolution.url" :alt="gram.text" />
                </a>
            </div>
        </template>
        <div v-else class="loading"></div>
        <div v-if="error" class="error">Sorry, the Instagrams couldn't be fetched.</div>
        <button @click="getMoreGrams">Load More</button>
        <footer-section/>
    </div>
</template>

<script>
    import NavBar from "../NavBar";
    import FooterSection from "../FooterSection";

    export default {
    name: "PhotoGallery",
        components: {
            FooterSection,
            NavBar,
        },
        data() {
            return {
                access_token: "IGQVJXQ1Y0aDdjTm95ZAHpacktOVDRLS1BOSmtPX25hQ3VMOTd1NmxCeWRRNGRiWml0MEpDekh0SEkzU3FaLUNNZAGNNTVdHVWNISjJyalY4bDItR3V4dm9UNkktbDNNd0pFWnphNkloNGdZAcmRyLWtwTgZDZD",
                url: "https://api.instagram.com/v1/users/self/media/recent/",
                username: "",
                grams: [],
                next_url: "",
                error: false
            }
        },
        computed: {
            instapage() {
                return 'https://www.instagram.com/' + this.username
            }
        },
        methods: {
            getGrams() {
                axios.get(this.url + "?access_token=" + this.access_token)
                    .then(({data}) => {
                        this.grams = data.data
                        this.username = data.data[0].user.username
                        this.next_url = data.pagination.next_url
                    })
                    .catch(function (error) {
                        console.log(error)
                        this.error = true
                    });
            },
            getMoreGrams(){
                axios.get(this.next_url)
                    .then(({data}) => {
                        this.grams = this.grams.concat(data.data)
                        this.next_url = data.pagination.next_url
                    })
                    .catch(function (error) {
                        console.log(error)
                        this.error = true
                    });
            }
        },
        created() {
            this.getGrams();
        }
    }
</script>
<style scoped type="text/css">
:root{
    --color: #ef5285;
    --spacing: 1rem;
    --speed: 1700ms;
    --fontsize: 2rem;
}
body{
    margin: 0;
    padding: var(--spacing);
    font-family: Karbon, Helvetica, sans-serif;
    color: var(--color);
}
#app{
    display: grid;
    grid-gap: var(--spacing);
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    min-height: calc(100vh - var(--spacing)*2);
}
h1{
    align-self: start;
}
h1, button{
    margin: 0;
    padding: 0;
    grid-column: 1 / -1;
    font-size: var(--fontsize);
    line-height: 1.2;
    font-weight: 300;
}
img{
    max-width: 100%;
    display: block;
}
button{
    border-radius: 0;
    color: var(--color);
    background: transparent;
    grid-column: 1 / -1;
    outline: none;
    cursor: pointer;
    align-self: end;
}
a{
    color: inherit;
    text-decoration: none;
}
.error{
    grid-column: 1 / -1;
    justify-self: center;
}
.loading{
    width: calc(var(--spacing)*3);
    height: calc(var(--spacing)*3);
    grid-column: 1 / -1;
    justify-self: center;
    align-self: center;
    background: var(--color);
    animation: load var(--speed) infinite ease-in-out;
    transform: rotate(0);
}
@keyframes load{
    100%{
        transform: rotate(360deg);
    }
}
</style>
