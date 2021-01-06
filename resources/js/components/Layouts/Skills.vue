<template>
    <div class="">
        <h2 class="text-center">Professional Skill set</h2>
        <div class="skillbar" data-percent="100%">
            <div class="skillbar-title">HTML & CSS</div>
            <div class="skill-bar-percent">100%</div>
            <div class="skillbar-bar" style="width: 100%"></div>
        </div>
        <div class="skillbar" data-percent="80%">
            <div class="skillbar-title">jQuery / Javascript</div>
            <div class="skill-bar-percent">80%</div>
            <div class="skillbar-bar" style="width: 80%"></div>
        </div>
        <div class="skillbar" data-percent="40%">
            <div class="skillbar-title">Vue.js</div>
            <div class="skill-bar-percent">40%</div>
            <div class="skillbar-bar" style="width: 40%"></div>
        </div>
        <div class="skillbar" data-percent="70%">
            <div class="skillbar-title">Templating languages Twig & Blade</div>
            <div class="skill-bar-percent">70%</div>
            <div class="skillbar-bar" style="width: 70%"></div>
        </div>
        <div class="skillbar" data-percent="80%">
            <div class="skillbar-title">Adobe Illustrator & Adobe XD</div>
            <div class="skill-bar-percent">80%</div>
            <div class="skillbar-bar" style="width: 80%"></div>
        </div>
        <div class="skillbar" data-percent="80%">
            <div class="skillbar-title">Sketch</div>
            <div class="skill-bar-percent">80%</div>
            <div class="skillbar-bar" style="width: 80%"></div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Skills"
}
</script>

<style scoped>
    .skillbar {
        position: relative;
        display: block;
        width: 100%;
        margin-bottom: 30px;
    }

    .skillbar-bar:before {
        background: #5b5b5b;
        content: "";
        height: 3px;
        position: absolute;
        width: 100%;
        z-index: -1;
    }

    .skillbar-bar {
        height: 3px;
        width: 0px;
        background: #ef5285;
        transition-property: width, background-color;
    }

    .skillbar-title {
        color: #ef5285;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
        display: inline-block;
    }

    .skill-bar-percent {
        float: right;
        display: inline-block;
        color: #2b2b2b;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
    }

    /* CENTERING ONLY */
    .wrapper {
        position: relative;
        width: 80%;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(0%);
    }
</style>
