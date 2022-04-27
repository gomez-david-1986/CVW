<?php
//redirect to ssl site.
if (!isset($_SERVER['HTTPS'])) {

    $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
}

require 'Code/Functions.php';
require 'Inc/Settings.php';
//pageProtect();

require 'Inc/Header.php';


?>


    <!--MAIN CONTENT-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 p-1 bg-secondary sticky-top">
                <div class="d-flex flex-md-column flex-row flex-nowrap bg-secondary align-items-center sticky-top">
                    <div class="d-flex flex-column align-items-center text-center mt-5"><img
                                class="rounded-circle" width="150px" src="/Assets/images/Profile.png">
                        <hr>
                        <span class="font-weight-bold">Software & Systems</span>
                        <span class="font-weight-bold">Engineer</span>
                    </div>

                    <hr>


                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-left">
                        <li class="nav-item">
                            <button id="about_btn" class=" btn" title="" data-bs-toggle="tooltip"
                                    data-bs-placement="right"
                                    data-bs-original-title=""><i class="fa fa-address-card"></i> About Me
                            </button>
                        </li>

                        <li>
                            <button id="projects_btn" class=" btn" title="" data-bs-toggle="tooltip"
                                    data-bs-placement="right"
                                    data-bs-original-title=""><i class="fa fa-laptop-code"></i> Projects
                            </button>
                        </li>
                        <li>
                            <button id="experience_btn" class=" btn" title="" data-bs-toggle="tooltip"
                                    data-bs-placement="right"
                                    data-bs-original-title=""><i class="fa fa-briefcase"></i> Experience
                            </button>
                        </li>
                        <li>
                            <button id="skills_btn" class=" btn" title="" data-bs-toggle="tooltip"
                                    data-bs-placement="right"
                                    data-bs-original-title=""><i class="fa fa-clipboard-list"></i> Skills
                            </button>
                        </li>
                        <li>
                            <button id="hobbies_btn" class=" btn" title="" data-bs-toggle="tooltip"
                                    data-bs-placement="right"
                                    data-bs-original-title=""><i class="fa fa-tools"></i> Hobbies
                            </button>
                        </li>
                        <li>
                            <button id="resume_btn" class=" btn" title="" data-bs-toggle="tooltip"
                                    data-bs-placement="right"
                                    data-bs-original-title=""><i class="fa fa-file"></i> Resume
                            </button>
                        </li>
                    </ul>

                    <div class="d-flex flex-column align-items-center text-center mt-5"><img
                                class="rounded-circle" width="150px" src="/Assets/images/LogoWht.png">
                        <hr>
                        <span class="font-weight-bold">Software & Systems</span>
                        <span class="font-weight-bold">Engineer</span>
                        <span><br></span>
                        <span class="font-weight-bold">203-810-8700</span>
                        <span class="font-weight-bold">Gomez.david.1986@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="col-10 min-vh-100">

                <div id="dv_about">
                    <div class="text-center">Test</div>
                    <div class="row">
                        <div class="card col-4">
                            <img src="/Assets/images/Personal/20210731_182250.jpg"
                                 class="card-img-top rounded img-thumbnail" alt="...">

                        </div>
                        <div class="card col-7 ">
                            <div class="card-body " style="">
                                Who I am: I'm a self-taught software developer, I have been programming professionally
                                for the past 15 years I mostly work as an independent contractor and I have to wear many
                                hats. from Back-end to Front-End Development, Database & System Administrator.

                                I have been intrigued with technology and how things work since I was very young and I
                                have explored a few fields of engineering going as basic as logical gates to artificial
                                intelligence.
                                I enjoy being able to help a company with their technology needs and be able to use
                                software to help all the aspects of the company from organization to creating a system
                                where the user can optimize his work and at the same time improve the quality and
                                revenue.

                                I have developed software for small to medium businesses where the tools that I have
                                created have helped the company archive new and better results. I'm a fear believer that
                                technology is here to help us and I used that logic to create software that doesn't
                                restrict a user from his task but helps him archive his goals faster and more
                                efficiently.
                                regardless of the technology that is used I always try to strive to do my best and to
                                satisfy the customer professional needs.


                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="card col-4">
                            <div class="card-body " style="">
                                Who I am: I'm a self-taught software developer, I have been programming professionally
                                for the past 15 years I mostly work as an independent contractor and I have to wear many
                                hats. from Back-end to Front-End Development, Database & System Administrator.

                                I have been intrigued with technology and how things work since I was very young and I
                                have explored a few fields of engineering going as basic as logical gates to artificial
                                intelligence.
                                I enjoy being able to help a company with their technology needs and be able to use
                                software to help all the aspects of the company from organization to creating a system
                                where the user can optimize his work and at the same time improve the quality and
                                revenue.

                                I have developed software for small to medium businesses where the tools that I have
                                created have helped the company archive new and better results. I'm a fear believer that
                                technology is here to help us and I used that logic to create software that doesn't
                                restrict a user from his task but helps him archive his goals faster and more
                                efficiently.
                                regardless of the technology that is used I always try to strive to do my best and to
                                satisfy the customer professional needs.


                            </div>
                        </div>
                        <div class="card col-7">
                            <img src="/Assets/images/Personal/IMG-20201101-WA0033.jpeg"
                                 class="card-img-top rounded img-thumbnail" alt="...">
                        </div>
                    </div>

                    <div class="row">
                        <div class="card col-4">
                            <img src="/Assets/images/Personal/canvas.png" class=" rounded img-thumbnail" alt="...">

                        </div>
                        <div class="card col-7">
                            <div class="card-body " style="">

                            </div>
                        </div>
                    </div>


                </div>
                <div class="row card-columns ml-1" id="dv_projects" style="display: none;">
                    <div class="row col-12">
                        <div class="card  align-content-center">
                            <div class="h2 text-center text-white">Web Applications</div>
                        </div>
                    </div>

                    <div class="row card-columns ">
                        <div class="card col-md-2 col-lg-3   ">
                            <div class="card-header text-center">CRM</div>
                            <img src="/Assets/images/Crm.png" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card col-md-2 col-lg-3  ">
                            <div class="card-header text-center">Logistic Calendar</div>
                            <img src="/Assets/images/CAL.png" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <p class="card-text">Custom Calendar for Scheduling Truck Deliveries</p>
                            </div>
                        </div>
                        <div class="card    col-md-2 col-lg-3  ">
                            <div class="card-header text-center">Project Mng.</div>
                            <img src="/Assets/images/Crm.png" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <p class="card-text">Project Management</p>
                            </div>
                        </div>
                        <div class="card    col-md-2 col-lg-3  ">
                            <div class="card-header text-center">TPS</div>
                            <img src="/Assets/images/TPS.png" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <p class="card-text">Transaction Processing System</p>
                            </div>
                        </div>

                        <div class="card    col-md-2 col-lg-3  ">
                            <div class="card-header text-center">ITS</div>
                            <img src="/Assets/images/Crm.png" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <p class="card-text">Invoice Tracking System</p>
                            </div>
                        </div>
                        <div class="card    col-md-2 col-lg-3  ">
                            <div class="card-header text-center">Web Processing App</div>
                            <img src="/Assets/images/Crm.png" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <p class="card-text">web Processing</p>
                            </div>
                        </div>
                        <div class="card    col-md-2 col-lg-3  ">
                            <div class="card-header text-center">Custom Calendar</div>
                            <img src="/Assets/images/CCAL.png" class="card-img-top img-thumbnail mt-2" alt="...">
                            <div class="card-body">
                                <p class="card-text">Custom Calendar</p>
                            </div>
                        </div>

                    </div>

                    <div class="row col-12">
                        <div class="card  align-content-center">
                            <div class="h2 text-center text-white">Desktop Applications</div>
                        </div>
                    </div>


                    <div class="row col-12">
                        <div class="card  align-content-center">
                            <div class="h2 text-center text-white">Monitoring</div>
                        </div>
                    </div>

                    <div class="row card-columns ">
                        <div class="card    col-md-2 col-lg-3  ">
                            <div class="card-header text-center">Server Monitoring</div>
                            <img src="/Assets/images/400x200/ServerMonitoring.png"
                                 class="card-img-top img-thumbnail mt-2" alt="...">
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                        <div class="card   col-md-2 col-lg-3  ">
                            <div class="card-header text-center">Staff Monitoring</div>
                            <img src="/Assets/images/400x200/StatusProjWh.png" class="card-img-top img-thumbnail mt-2"
                                 alt="...">
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                        <div class="card    col-md-2 col-lg-3  ">
                            <div class="card-header text-center">Issues Monitoring</div>
                            <img src="/Assets/images/400x200/CustServ.png" class="card-img-top img-thumbnail mt-2"
                                 alt="...">
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
                        <div class="card    col-md-2 col-lg-3  ">
                            <div class="card-header text-center">CRM</div>
                            <img src="/Assets/images/Crm.png" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="card  align-content-center">
                            <div class="h2 text-center text-white">Automatization</div>
                        </div>
                    </div>
                </div>
                <div class="row" id="dv_experience" style="display: none;">
                    <p class="text-black-50">experience</p>
                </div>
                <div class="row" id="dv_skills" style="display: none;">
                    <div class="card col-12">
                        <div class="card-body">
                            <ul>
                                <li>Java 11 & 17</li>
                                <ul>
                                    <li>Spring</li>
                                    <li>Spring-core</li>
                                    <li>Spring-MVC</li>
                                    <li>Spring-DAO</li>
                                    <li>JPA</li>
                                    <li>Hibernate</li>
                                    <li>JavaFX</li>
                                    <li>Java Networking</li>
                                    <li>File I/O</li>
                                </ul>
                                <li>REST API's</li>
                                <li>GraphQL</li>
                                <li>PHP</li>
                                <ul>
                                    <li>Laravel</li>
                                    <li>Symfony</li>
                                    <li>API</li>
                                    <li>Symfony</li>
                                </ul>
                                <li>MySql</li>
                                <li>Postgresql</li>
                                <li>MongoDb</li>
                                <li>Bash</li>
                                <li>Linux</li>
                                <li>CentOS</li>
                                <li>Networking</li>
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JavaScript</li>
                                <li>Ajax</li>
                                <li>Python</li>
                                <ul>
                                    <li>Pandas</li>
                                    <li>Matpltlib</li>
                                    <li>Flask</li>
                                    <li>Numpy</li>
                                    <li>Image and Video Processing</li>
                                    <li>Rich</li>
                                    <li>API</li>
                                    <li>Scripting</li>
                                    <li>Machine Learning</li>
                                    <li>OpenCV</li>
                                    <li>Tenserflow</li>
                                </ul>
                                <li>CSV</li>
                                <li>JSON</li>
                                <li>XML</li>
                                <li>Express.js</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card col-12">

                    </div>


                </div>
                <div class="row" id="dv_hobbies" style="display: none;">

                </div>
                <div class="row embed-responsive embed-responsive-16by9  p-1" id="dv_resume" style="display: none;">


                    <object class="embed-responsive-item" data="/Assets/Test.pdf" type="application/pdf"></object>

                </div>

            </div>


        </div>
    </div>
<?php require "Inc/Footer.php"; ?>
    </div>


<?php require "Inc/JsLinks.php"; ?>

    <script>

        document.getElementById("about_btn").addEventListener("click", function () {
            $('#dv_about').show();
            $('#dv_projects').hide();
            $('#dv_experience').hide();
            $('#dv_skills').hide();
            $('#dv_hobbies').hide();
            $('#dv_resume').hide();
        });

        document.getElementById("projects_btn").addEventListener("click", function () {
            $('#dv_about').hide();
            $('#dv_projects').show();
            $('#dv_experience').hide();
            $('#dv_skills').hide();
            $('#dv_hobbies').hide();
            $('#dv_resume').hide();
        });

        document.getElementById("experience_btn").addEventListener("click", function () {
            $('#dv_about').hide();
            $('#dv_projects').hide();
            $('#dv_experience').show();
            $('#dv_skills').hide();
            $('#dv_hobbies').hide();
            $('#dv_resume').hide();
        });
        document.getElementById("skills_btn").addEventListener("click", function () {
            $('#dv_about').hide();
            $('#dv_projects').hide();
            $('#dv_experience').hide();
            $('#dv_skills').show();
            $('#dv_hobbies').hide();
            $('#dv_resume').hide();
        });
        document.getElementById("hobbies_btn").addEventListener("click", function () {
            $('#dv_about').hide();
            $('#dv_projects').hide();
            $('#dv_experience').hide();
            $('#dv_skills').hide();
            $('#dv_hobbies').show();
            $('#dv_resume').hide();
        });
        document.getElementById("resume_btn").addEventListener("click", function () {
            $('#dv_about').hide();
            $('#dv_projects').hide();
            $('#dv_experience').hide();
            $('#dv_skills').hide();
            $('#dv_hobbies').hide();
            $('#dv_resume').show();
        });


    </script>

<?php require "Inc/PageEnd.php"; ?>