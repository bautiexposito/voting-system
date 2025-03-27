<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Software</title>
    <link rel="stylesheet" href="<?php echo base_url();?>frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>frontend/assets/css/styles.css">
</head>
<body class="bg-dark">

    <!-- Header menu -->
    <div class="header container-fluid">
        <div class="nav-col text-white shadow-md mb-3 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-3 pb-2 align-items-center">
                        <h4>
                            <span class="text-light fw-bold">E-</span>
                            <span class="text-primary fw-bold">Voting</span>
                        </h4>
                    </div>

                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="float-end mul d-inline-block">
                            <li class="float-md-start px-4 py-3 pe-1">
                                <a href="<?php echo base_url();?>login">
                                    <button class="btn fw-bold fs-8 btn-outline-light px-5">Login</button>
                                </a>
                            </li>
                            <li class="float-md-start px-4 py-3 pe-1">
                                <a href="<?php echo base_url();?>register">
                                    <button class="btn fw-bold fs-8 btn-primary px-5">Create Account</button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="container-fluid bg-dark big-padding">
        <div class="row section-title">
            <h4 class="fs-4 text-white text-center fw-bold">ONLINE VOTING SYSTEM</h4>
            <p class="text-muted">Complete online voting software</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="text-white text-center mb-4 votcard shadow-md bg-gradient bg-light p-4 pt-5">
                    <img class="rounded-pill shadow-md p-2" src="<?php echo base_url();?>/frontend/assets/images/member-01.jpg" alt="Contestant Image">
                    <h4 class="mt-3 fs-5 mb-1 fw-bold">Donald Trump</h4>
                    <h6 class="fs-7">Running to be:
                        <span class="text-primary fw-bold">President</span>
                    </h6>
                    <p class="text-dark mt-3 mb-3 fs-8">If i am elected as president, i will make things different.</p>
                    <a href="">
                        <button class="btn btn-primary fw-bolder px-4 ms-2 fs-8">Vote</button>
                    </a>
                    <button class="btn btn-danger fw-bolder px-4 ms-2 fs-8">
                        <small class="badge badge-warning">234</small>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="copy bg-dark">
        <div class="container">
            <a href="#">2025 &copy; All Rights Reserved | Footer Notes</a>
        </div>
    </div>

</body>
</html>
