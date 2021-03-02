<template>
    <section class="bg-white pb-5">
        <div class="container-fluid px-0 pnb-4">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="post-thumnail"><img class="img-fluid w-100 header-image" src="images/flowers.jpg" alt=""></div>
                </div>
                <div class="col-lg-6 mx-auto text-center">
                    <h1 class="mb-4">Hi! My name is Deisi.</h1>
                    <h3>l'art pour l'art... Art for Art's sake!</h3>
                    <span>Front-end Developer, based in Den Helder, the Netherlands.</span>
                    <p class="text-muted">
                        I Work as a Front-end developer at Growing Minds. During my spare time I like to read and draw and take pictures of the Dutch landscape and the places I visit.
                        I started this blog as a way to showcase and share tips related to Art and Photography.
                     </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "HeaderImage"
}
</script>

<style scoped>
    .header-image {
        max-height: 600px;
        object-fit: cover;
    }

</style>
