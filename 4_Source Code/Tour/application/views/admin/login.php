<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Login</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/fontawesome/css/font-awesome.min.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css" id="maincss">
</head>

<body>
   <div class="wrapper">
      <div class="block-center mt-xl wd-xl" style="margin-top: 150px !important;">
         <!-- START panel-->
         <div class="panel panel-dark panel-flat">
            <div class="panel-heading text-center">
               <a href="#">
                  <img class="block-center img-rounded" src="<?php echo base_url()?>assets/images/logo.png" alt="Image">
               </a>
            </div>
            <div class="panel-body">
               <p class="text-center pv">SIGN IN TO CONTINUE.</p>
               <?php include 'message.php'; ?>
               <form class="mb-lg" role="form" method="post" data-parsley-validate="" novalidate="">
                  <div class="form-group has-feedback">
                     <input class="form-control" id="admin_email" name="admin_email" type="email" value="<?php echo $email?>" placeholder="Enter email" autocomplete="off" required>
                  </div>
                  <div class="form-group has-feedback">
                     <input class="form-control" id="admin_pass" name="admin_pass" type="password" value="<?php echo $pass?>" placeholder="Password" required>
                  </div>
                  <button name="admin_login" class="btn btn-block btn-primary mt-lg" type="submit">Login</button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="<?php echo base_url()?>assets/css/vendor/modernizr/modernizr.custom.js"></script>
   <!-- JQUERY-->
   <script src="<?php echo base_url()?>assets/css/vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="<?php echo base_url()?>assets/css/vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="<?php echo base_url()?>assets/css/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
   <!-- PARSLEY-->
   <script src="<?php echo base_url()?>assets/css/vendor/parsleyjs/dist/parsley.min.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="<?php echo base_url()?>assets/js/app.js"></script>
</body>

</html>