<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php echo $this->pageTitle ?></title>

<!-- Vendor Style -->
	<!-- Jquery -->			
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	
	<!-- FONT AWESOME-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/fontawesome/css/font-awesome.min.css">
    
	<!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/simple-line-icons/css/simple-line-icons.css">
    
    <!-- AMINATION -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/animate.css/animate.min.css">
    
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/whirl/dist/whirl.css">
    
    <!-- MODERNIZR-->
    <script src="<?php echo base_url(); ?>assets/css/vendor/modernizr/modernizr.custom.js"></script>
    
    <!-- MATCHMEDIA POLYFILL-->
    <script src="<?php echo base_url(); ?>assets/css/vendor/matchMedia/matchMedia.js"></script>

    <!-- BOOTSTRAP-->
    <script src="<?php echo base_url(); ?>assets/css/vendor/bootstrap/dist/js/bootstrap.js"></script>
   
    <!-- STORAGE API-->
    <script src="<?php echo base_url(); ?>assets/css/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
    
    <!-- JQUERY EASING-->
    <script src="<?php echo base_url(); ?>assets/css/vendor/jquery.easing/js/jquery.easing.js"></script>
   
    <!-- ANIMO-->
    <script src="<?php echo base_url(); ?>assets/css/vendor/animo.js/animo.js"></script>
    
    <!-- SLIMSCROLL-->
   <script src="<?php echo base_url(); ?>assets/css/vendor/slimScroll/jquery.slimscroll.min.js"></script>
   
    <!-- SWEET ALERT-->
	<script src="<?php echo base_url()?>assets/css/vendor/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/sweetalert/dist/sweetalert.css">
   
    <!-- SCREENFULL-->
    <script src="<?php echo base_url(); ?>assets/css/vendor/screenfull/dist/screenfull.js"></script>
 
    <!-- LOCALIZE-->
    <script src="<?php echo base_url(); ?>assets/css/vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
    
    <!-- MOMENT JS-->
	<script src="<?php echo base_url()?>assets/css/vendor/moment/min/moment-with-locales.js"></script>
   
    <!-- RTL demo-->
   <script src="<?php echo base_url(); ?>assets/js/demo/demo-rtl.js"></script>
		
	<!-- DATATABLES-->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/datatables/media/css/dataTables.bootstrap.css">
	<script src="<?php echo base_url()?>assets/css/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()?>assets/css/vendor/datatables-colvis/js/dataTables.colVis.js"></script>
	<script src="<?php echo base_url()?>assets/css/vendor/datatables/media/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url()?>assets/css/vendor/datatables-buttons/js/dataTables.buttons.js"></script>
	<script src="<?php echo base_url()?>assets/css/vendor/datatables-buttons/js/buttons.bootstrap.js"></script>
	<script src="<?php echo base_url()?>assets/css/vendor/datatables-buttons/js/buttons.colVis.js"></script>
	<script src="<?php echo base_url()?>assets/css/vendor/datatables-buttons/js/buttons.flash.js"></script>
	<script src="<?php echo base_url()?>assets/css/vendor/datatables-buttons/js/buttons.html5.js"></script>
	<script src="<?php echo base_url()?>assets/css/vendor/datatables-buttons/js/buttons.print.js"></script>
	<script src="<?php echo base_url()?>assets/css/vendor/datatables-responsive/js/dataTables.responsive.js"></script>
	<script src="<?php echo base_url()?>assets/css/vendor/datatables-responsive/js/responsive.bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo/demo-datatable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/demo/demo-rtl.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/dataTables.fontAwesome/index.css">
	
	<!-- PARSLEY-->
   <script src="<?php echo base_url()?>assets/css/vendor/parsleyjs/dist/parsley.min.js"></script>
   
	<!-- Loading -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/loading.css">

   <!-- custom js -->
	<script src="<?php echo base_url(); ?>assets/js/common.js"></script>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	
	<link href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet" type="text/css">

    <!-- =============== APP SCRIPTS ===============-->
	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
	
<script type="text/javascript">

    $(document).ready(function() {

    	//hideLoading();
   
    });

    //set layout reponsive 
    function goBack() {
        window.history.back();
    }

    function logout() {
    	location.href = '<?php echo base_url()?>admin_cms/logout';
    }
    
</script>

</head>
<body>
	<!--  LOADING -->
	<div style="display: none" id="overlay_loading" class="loading">Loading&#8230;</div>
	<script type="text/javascript">
		//showLoading(); 
	</script>
	
	<div class="wrapper">
		<header class="topnavbar-wrapper">
			<nav class="navbar topnavbar" role="navigation">
				<div class="navbar-header">
	               <a class="navbar-brand" href="">
	                  <div class="brand-logo small-logo">
	                     <img style="height: 35px;" class="img-responsive" src="<?php echo base_url(); ?>assets/images/logo.png" alt="App Logo">
	                  </div>
	               </a>
	            </div>
	            <div class="nav-wrapper">
	               <ul class="nav navbar-nav navbar-right">
	                  <!-- START Offsidebar button-->
	                  <li>
	                     <a href="" id="swal-demo4">
	                        <em class="icon-logout"></em>
	                     </a>
	                  </li>
	                  <!-- END Offsidebar menu-->
	               </ul>
	            </div>
			</nav>
		</header>
		<aside class="aside">
			<div class="aside-inner">
				<nav class="sidebar" data-sidebar-anyclick-close="">
					<ul class="nav">
	                  <li class="<?php if (isset($this->curentPage) && $this->curentPage == 'tour') {echo 'active'; }?>">
	                  	<a href="<?php echo base_url(); ?>admin/tour" title="Tour">
	                        <em class="fa fa-home fa-1x"></em>
	                        <span data-localize="sidebar.nav.HOME">Tour</span>
	                     </a>
	                  </li>
	                  <li class="<?php if (isset($this->curentPage) && $this->curentPage == 'Car') {echo 'active'; }?>">
	                  	<a href="<?php echo base_url(); ?>admin/xe" title="Car">
	                        <em class="fa fa-car fa-1x"></em>
	                        <span data-localize="sidebar.nav.CAR">Xe</span>
	                     </a>
	                  </li>
	                  <li class="<?php if (isset($this->curentPage) && $this->curentPage == 'Plan') {echo 'active'; }?>">
	                  	<a href="<?php echo base_url(); ?>admin/lichtrinh" title="Plan">
	                        <em class="fa fa-sticky-note fa-1x"></em>
	                        <span data-localize="sidebar.nav.PLAN">Lịch Trình</span>
	                     </a>
	                  </li>
	                  <li class="<?php if (isset($this->curentPage) && $this->curentPage == 'Place') {echo 'active'; }?>">
	                  	<a href="<?php echo base_url(); ?>admin/diadiem" title="Place">
	                        <em class="fa fa-map fa-1x"></em>
	                        <span data-localize="sidebar.nav.PLACE">Địa Điểm</span>
	                     </a>
	                  </li>
	                  <li class="<?php if (isset($this->curentPage) && $this->curentPage == 'Client') {echo 'active'; }?>">
	                  	<a href="<?php echo base_url(); ?>admin/khachhang" title="Client">
	                        <em class="fa fa-users fa-1x"></em>
	                        <span data-localize="sidebar.nav.CLIENT">Khách Hàng</span>
	                     </a>
	                  </li>
	                  <li class="<?php if (isset($this->curentPage) && $this->curentPage == 'Bill') {echo 'active'; }?>">
	                  	<a href="<?php echo base_url(); ?>admin/dattour" title="Bill">
	                        <em class="fa fa-book fa-1x"></em>
	                        <span data-localize="sidebar.nav.BILL">Đặt Tour</span>
	                     </a>
	                  </li>
					</ul>
				</nav>
			</div>
		</aside>
		<section>
			<div class="content_right">
				<?php $this->load->view($view); ?>
			</div>
		</section>
	</div>
</body>
</html>