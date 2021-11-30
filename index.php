<?php
require 'Code/Functions.php';
//pageProtect();
require 'Inc/Settings.php';
require 'Inc/header.php';


?>


    <!--MAIN CONTENT-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto bg-secondary sticky-top">
                <div class="d-flex flex-md-column flex-row flex-nowrap bg-secondary align-items-center sticky-top">
                    <div class="d-flex flex-column align-items-center text-center mt-5"><img
                                class="rounded-circle" width="150px" src="/Assets/images/Profile.png">
                        <hr>
                        <span class="font-weight-bold">Software Engineer</span>
                        <span class="font-weight-bold">Systems Engineer</span>
                    </div>

                    <hr>


                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="" data-bs-toggle="tooltip" data-bs-placement="right"
                               data-bs-original-title="Home">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link" title="" data-bs-toggle="tooltip" data-bs-placement="right"
                               data-bs-original-title="Dashboard">
                                <i class="fa fa-clock"> Resume</i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link" title="" data-bs-toggle="tooltip" data-bs-placement="right"
                               data-bs-original-title="Orders">
                                <i class="fa fa-clock"> Portfolio</i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link" title="" data-bs-toggle="tooltip" data-bs-placement="right"
                               data-bs-original-title="Products">
                                <i class="fa fa-clock"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link" title="" data-bs-toggle="tooltip" data-bs-placement="right"
                               data-bs-original-title="Customers">
                                <i class="bi-people fs-1"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <a href="#"
                           class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle"
                           id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-person-circle h2"></i>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm p-3 min-vh-100">
                <!-- content -->
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
        </div>
    </div>


<?php require "Inc/JsLinks.php"; ?>

<?php require "Inc/DashboardFooter.php"; ?>
<?php require "Inc/PageEnd.php"; ?>