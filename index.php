<?php
//redirect to ssl site.
if (!isset($_SERVER['HTTPS'])) {

    $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header("Location: $url");
}

require 'Code/Functions.php';
require 'Inc/Settings.php';
//pageProtect();

require 'Inc/header.php';


?>


    <!--MAIN CONTENT-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-secondary sticky-top">
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
                    </div>
                </div>
            </div>


            <div class="col-10 p-1 min-vh-100">
                <!-- content -->


                <div class="row" id="dv_about">
                    <div class="alert alert-primary" role="alert">
                        This is a primary alert—check it out!
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        This is a secondary alert—check it out!
                    </div>
                    <div class="alert alert-success" role="alert">
                        This is a success alert—check it out!
                    </div>
                    <div class="alert alert-danger" role="alert">
                        This is a danger alert—check it out!
                    </div>
                    <div class="alert alert-warning" role="alert">
                        This is a warning alert—check it out!
                    </div>
                    <div class="alert alert-info" role="alert">
                        This is a info alert—check it out!
                    </div>
                    <div class="alert alert-light" role="alert">
                        This is a light alert—check it out!
                    </div>
                    <div class="alert alert-dark" role="alert">
                        This is a dark alert—check it out!
                    </div>
                </div>
                <div class="row" id="dv_projects" style="display: none;">
                    <div class="row col-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header text-center">CRM</div>
                            <img src="/Assets/images/Crm.png" class="card-img-top mt-2" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row" id="dv_experience" style="display: none;">
                    <p class="text-black-50">experience</p>
                </div>
                <div class="row" id="dv_skills" style="display: none;">
                    <p class="text-black-50">skills</p>
                </div>
                <div class="row" id="dv_hobbies" style="display: none;">

                </div>
                <div class="row embed-responsive embed-responsive-16by9 m-1 p-1" id="dv_resume" style="display: none;">


                    <object class="embed-responsive-item" data="/Assets/Test.pdf" type="application/pdf"></object>

            </div>


        </div>
    </div>
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

<?php require "Inc/DashboardFooter.php"; ?>
<?php require "Inc/PageEnd.php"; ?>