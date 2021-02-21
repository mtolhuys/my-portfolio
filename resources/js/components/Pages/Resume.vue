<template>
    <div class="resume-content">
        <nav-bar/>
        <section class="py-5">
            <!-- ======= Resume Section ======= -->
            <div class="container py-4">
                <section id="resume" class="resume">
                    <div class="container">

                        <div class="section-title">
                            <h2>Resume</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="resume-title">Education</h3>
                                <div class="resume-item">
                                    <h4>ROC Kop van Noord-Holland</h4>
                                    <h5>2016 - 2018</h5>
                                    <p><em>Diploma Staatsexamen NT2</em></p>
                                    <p>NT2 level Nederlands taal cursussen</p>
                                </div>
                                <div class="resume-item">
                                    <h4>Codaisseur</h4>
                                    <h5>June 2016 - Aug 2016</h5>
                                    <p><em>Coding Bootcamp</em></p>
                                    <p>Web Developer Bootcamp of 6 weeks. Worked on weekly projects in teams, and one real world project for a company invited by Codaisseur.
                                        My favorite part of the Bootcamp was working with Ruby. It was really fun and exciting to built web apps and integrating services like Devise and Cloudinary.
                                        Switching over to React.js/Javascript was a bit uncomfortable at first but as I did more with it, the syntax became more familiar.</p>
                                </div>
                                <div class="resume-item">
                                    <h4>Treehouse</h4>
                                    <h5>2015 - 2016</h5>
                                    <p><em>Online courses</em></p>
                                    <p>Learned the basics of web design</p>
                                </div>
                                <div class="resume-item">
                                    <h4>Associate of Arts Degree</h4>
                                    <h5>2009 - 2012</h5>
                                    <p><em>Hartnell College, Salinas, CA</em></p>
                                    <p>Studied Art History and Design</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="resume-title">Professional Experience</h3>
                                <div class="resume-item">
                                    <h4>Front-end Developer</h4>
                                    <h5>Dec 2017 - Present</h5>
                                    <p><em>Growing Minds, Amsterdam</em></p>
                                    <span>
                                        <ul>
                                            <li>Build subscribe and donation forms for charities</li>
                                            <li>Contribute to main product Form Suite</li>
                                        </ul>
                                    </span>
                                </div>
                                <div class="resume-item">
                                    <h4>Web Designer / Email developer</h4>
                                    <h5>July 2017 - Nov 2017</h5>
                                    <p><em>AmigoAmigo, Amsterdam</em></p>
                                    <p>
                                        I work on the creation of email creatives, banners and landing pages for commercial campaigns.
                                        I'm responsible for the creation and otimization of emal creatives and templates.
                                        Every campaign is made with the goal of increasing the conversion/revenue rate.
                                    </p>
                                </div>
                                <div class="resume-item">
                                    <h4>Web Designer / Email developer</h4>
                                    <h5>March 2017 - May 2017</h5>
                                    <p><em>Kobi digital, Amsterdam</em></p>
                                    <p>
                                        I worked on the creation of email creatives, banners and landing pages for commercial campaigns.
                                        I was responsible for the creation and optimization of e-mail creatives, templates and newsletters.
                                        Every campaign is made with the aim of increasing the conversion/revenue as well as deliverability per title.
                                    </p>
                                </div>
                                <div class="resume-item">
                                    <h4>Junior developer Intership</h4>
                                    <h5>Sept 2016 - Feb 2017</h5>
                                    <p><em>AppAtSchool, Alkmaar</em></p>
                                    <p>
                                        In this internship I worked mostly with google tools which required me to write scripts and use the
                                        AppAtSchool platform to build and expand the functionality of forms and spreadsheets.
                                    </p>
                                </div>
                                <div class="resume-item">
                                    <h4>Horeca Medewerker</h4>
                                    <h5>June 2014 - May 2016</h5>
                                    <p><em>Strandpaviljoen Paal 17, Texel</em></p>
                                    <p>
                                        I started working in Paal 17 in the summer of 2014, it was my first job in the Netherlands.
                                        And I was very happy to work in a very nice area with friendly people.
                                        I got to meet people from all over the world and get better acquaintance with dutch work culture and society.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </section><!-- End Resume Section -->
            </div>
        </section>
        <footer-section/>
    </div>
</template>

<script>
    import NavBar from "../NavBar";
    import FooterSection from "../FooterSection";

    export default {
        name: "Resume",

        components: {
            FooterSection,
            NavBar
        },
    }
</script>
