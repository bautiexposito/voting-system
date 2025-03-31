<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url();?>backend/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>backend/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url();?>backend/assets/modules/jquery-selectric/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>backend/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>backend/assets/css/components.css">
  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
  <style>
    .val-error{
      color:red;
    }
  </style>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <?php if($this->session->flashdata('message')){?>
              <div class="alert alert-success text-center">
                <?php echo $this->session->flashdata('message');?>
              </div>
              <?php unset($_SESSION['message']);
            }?>

            <?php if($this->session->flashdata('error')){?>
              <div class="alert alert-danger text-center">
                <?php echo $this->session->flashdata('error');?>
              </div>
              <?php unset($_SESSION['error']);
            }?>
           
            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>
              <?php echo validation_errors('<span class="val-error">', '</span>'); ?>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url();?>register/addUser/create" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="first_name">First Name</label>
                      <input id="first_name" type="text" class="form-control" name="first_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password2" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>

                  <div class="form-divider">
                    Your Home
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Country</label>
                      <select class="form-control selectric" name="country" required>
                        <option value="Argentina">Argentina</option>
                        <option value="China">China</option>
                        <option value="Mexico">Mexico</option>
                        <option value="United States">United States</option>
                        <option value="Japon">Japon</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>City</label>
                      <select class="form-control selectric" name="city" required>
                        <option value="West Java">West Java</option>
                        <option value="East Java">East Java</option>
                        <option value="Lagos">Lagos</option>
                        <option value="London">London</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Gender</label>
                      <select name="gender" id="" class="form-control" required>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Profile Image</label>
                      <input type="file" class="form-control" name="user_file" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Voting Software
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo base_url();?>backend/assets/modules/jquery.min.js"></script>
  <script src="<?php echo base_url();?>backend/assets/modules/popper.js"></script>
  <script src="<?php echo base_url();?>backend/assets/modules/tooltip.js"></script>
  <script src="<?php echo base_url();?>backend/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>backend/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url();?>backend/assets/modules/moment.min.js"></script>
  <script src="<?php echo base_url();?>backend/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="<?php echo base_url();?>backend/assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url();?>backend/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url();?>backend/assets/js/page/auth-register.js"></script>
  
  <!-- Template JS File -->
  <script src="<?php echo base_url();?>backend/assets/js/scripts.js"></script>
  <script src="<?php echo base_url();?>backend/assets/js/custom.js"></script>
</body>
</html>