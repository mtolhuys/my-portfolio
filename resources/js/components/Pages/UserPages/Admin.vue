<template>
    <section>
        <nav-bar/>
        <div class="wrapper container">
            <div class="jumbotron mt-5 mb-0">
                <div class="col-sm-8 mx-auto">
                    <h1 class="text-center">Admin</h1>
                </div>
            </div>
            <div id="admin" class="row">
                <div class="col-md-8 mt-5 mx-auto">
                    <div class="form-group">
                        <div class="d-flex align-items-center flex-column flex-sm-row mb-4 p-4 bg-light">
                            <h3 class="h4 mb-3 mb-sm-0">Tags</h3>
                            <ul class="list-inline mb-0 ml-0 ml-sm-3">
                                <li v-for="tag in tags"  class="list-inline-item my-1 mr-2">
                                    <span class="sidebar-tag-link" v-text="tag"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-8 pr-0">
                                <input v-model="newTag" id="tags" type="text"  class="form-control" name="tag" placeholder="Add tags">
                            </div>
                            <div class="col-4 pl-0">
                                <button @click="addTag" class="btn btn-md btn-primary btn-block">Add tag</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div v-if="!image">
                            <label for="imagePost">Upload image</label>
                            <input type="file" @change="onFileChange" id="imagePost"  class="form-control-file" name="image">
                        </div>
                        <div v-else>
                            <img :src="image" />
                            <button @click="removeImage">Remove image</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input v-model="date" id="date" type="date" class="form-control" name="date" placeholder="Date">
                        <p>{{ date }}</p>
                    </div>
                    <div class="form-group">
                        <label for="title">Post title</label>
                        <input v-model="title" id="title" type="text" class="form-control" name="titile" placeholder="Post title">
                        <p>{{ title }}</p>
                    </div>
                    <div class="form-group">
                        <editor></editor>
                    </div>

                    <button class="btn btn-lg btn-outline-info btn-block">Publish Post</button><br>

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
    components: {
        NavBar,
        Editor,
        FooterSection,
    },
    data() {
        return {
            newTag: '',
            tags: ['Art','Design'],
            date: '',
            title: '',
            image: ''
        }
    },
    methods: {
        addTag() {
            this.tags.push(this.newTag);
            this.newTag = '';
        },
        onFileChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createImage(files[0]);
        },
        createImage(file) {
            let image = new Image();
            let reader = new FileReader();
            let vm = this;
            reader.onload = (e) => {
                vm.image = e.target.result;
            };
            reader.readAsDataURL(file);
        },
        removeImage: function (e) {
            this.image = '';
        }
    }
}
</script>
