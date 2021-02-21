<template>
    <div class="blog-content">
        <nav-bar/>
        <section class="py-5">
            <div class="container py-4">
                <div class="row">
                    <!-- Blog listing-->
                    <div class="col-lg-9 mb-5 mb-lg-0">
                        <div class="row">
                            <post/>
                        </div>
                        <!-- Pagination-->
                        <blog-pagination/>
                    </div>
                    <!-- Blog sidebar-->
                    <div class="col-lg-3">
                        <!-- Tags-->
                        <tags/>
                    </div>
                </div>
            </div>
        </section>
        <footer-section/>
    </div>
</template>

<script>
    import NavBar from "../NavBar";
    import FooterSection from "../FooterSection";
    import Tags from "../PostComponents/Tags";
    import BlogPagination from "../PostComponents/BlogPagination";
    import Post from "../PostComponents/Post";

export default {
    name: "Blog",

    components: {
        FooterSection,
        NavBar,
        Tags,
        BlogPagination,
        Post
    },
}
</script>

<style scoped>

</style>
