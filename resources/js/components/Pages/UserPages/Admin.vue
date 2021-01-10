<template>
    <section>
        <nav-bar/>
        <div class="wrapper container">
            <div class="jumbotron mt-5 mb-0">
                <div class="col-sm-8 mx-auto">
                    <h1 class="text-center">Admin</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mt-5 mx-auto">
                    <form>
                        <div class="form-group">
                            <label for="imagePost">Upload image</label>
                            <input id="imagePost" type="file" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label for="tags">Add tags</label>
                            <div class="row">
                                <div class="col-8 pr-0">
                                    <input id="tags" type="text"  class="form-control" name="tag" placeholder="Add tags">
                                </div>
                                <div class="col-4 pl-0">
                                    <button class="btn btn-md btn-primary btn-block">Add tag</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input id="date" type="date" class="form-control" name="date" placeholder="Date">
                        </div>
                        <div class="form-group">
                            <label for="title">Post title</label>
                            <input id="title" type="text" class="form-control" name="titile" placeholder="Post title">
                        </div>
                        <div class="form-group">
                            <editor></editor>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block">Publish</button>
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
import Editor from "./Editor/Editor";

export default{
    components: {NavBar, Editor, FooterSection},

}
</script>
