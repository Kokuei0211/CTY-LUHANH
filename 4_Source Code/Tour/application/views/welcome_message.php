<!DOCTYPE html>
<html lang="en">
	<head>
		<title>About</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico" />
		<link rel="stylesheet" href="<?php echo base_url()?>assets/booking/css/booking.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/camera.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
		<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery-migrate-1.2.1.js"></script>
		<script src="<?php echo base_url()?>assets/js/script.js"></script>
		<script src="<?php echo base_url()?>assets/js/superfish.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.ui.totop.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.equalheights.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.mobilemenu.js"></script>
		<script src="<?php echo base_url()?>assets/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo base_url()?>assets/js/owl.carousel.js"></script>
		<script src="<?php echo base_url()?>assets/js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="<?php echo base_url()?>assets/js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="<?php echo base_url()?>assets/booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="index.html">ABOUT</a></li>
								<li><a href="index-1.html">HOT TOURS</a></li>
								<li><a href="index-2.html">SPECIAL OFFERS</a></li>
								<li><a href="index-3.html">BLOG</a></li>
								<li><a href="/Tour/admin/">ADMIN</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="<?php echo base_url()?>assets/images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="<?php echo base_url()?>assets/images/PQ3.jpg">
					<div class="caption fadeIn">
						<h2>PHÚ QUỐC</h2>
						<div class="price">
							Giá từ
							<span>3.500.000 VND</span>
						</div>
						<a href="#">Đặt tour</a>
					</div>
				</div>
				<div data-src="<?php echo base_url()?>assets/images/ĐN.jpg">
					<div class="caption fadeIn">
						<h2>ĐÀ NẴNG</h2>
						<div class="price">
							Giá từ
							<span>5.200.000 VND</span>
						</div>
						<a href="#">Đặt tour</a>
					</div>
				</div>
				<div data-src="<?php echo base_url()?>assets/images/NT_1.jpg">
					<div class="caption fadeIn">
						<h2>NHA TRANG</h2>
						<div class="price">
							Giá từ
							<span>4.200.000 VND</span>
						</div>
						<a href="#">Đặt tour</a>
					</div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<img src="<?php echo base_url()?>assets/images/ĐL.jpg" alt="">
						<div class="label">
							<div class="title">ĐÀ LẠT</div>
							<div class="price">Giá từ<span>2.000.000 VND</span></div>
							<a href="#">Đặt tour</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="<?php echo base_url()?>assets/images/pt.jpg" alt="">
						<div class="label">
							<div class="title">PHAN THIẾT</div>
							<div class="price">Giá từ<span>2.000.000 VND</span></div>
							<a href="#">Đặt tour</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<img src="<?php echo base_url()?>assets/images/mt.jpg" alt="">
						<div class="label">
							<div class="title">MIỀN TÂY</div>
							<div class="price">Giá từ<span>3.500.000 VND</span></div>
							<a href="#">Đặt tour</a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="grid_6">
					<h3>Booking Form</h3>
					<form id="bookingForm">
						<div class="fl1">
							<div class="tmInput">
								<input name="Name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
							</div>
							<div class="tmInput">
								<input name="Country" placeHolder="Country:" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<input name="Email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
							</div>
							<div class="tmInput mr0">
								<input name="Hotel" placeHolder="Hotel:" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="clear"></div>
						<strong>Check-in</strong>
						<label class="tmDatepicker">
							<input type="text" name="Check-in" placeHolder='	' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						<strong>Check-out</strong>
						<label class="tmDatepicker">
							<input type="text" name="Check-out" placeHolder='' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						<div class="tmRadio">
							<p>Comfort</p>
							<input name="Comfort" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
							<span>Cheap</span>
							<input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
							<span>Standart</span>
							<input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
							<span>Lux</span>
						</div>
						<div class="clear"></div>
						<div class="fl1 fl2">
							<em>Adults</em>
							<select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<div class="clear"></div>
							<em>Rooms</em>
							<select name="Rooms" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="fl1 fl2">
							<em>Children</em>
							<select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>0</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</div>
						<div class="clear"></div>
						<div class="tmTextarea">
							<textarea name="Message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
						</div>
						<a href="#" class="btn" data-type="submit">Submit</a>
					</form>
				</div>
				<div class="grid_5 prefix_1">
					<h3>Chào mừng công ty Your Trip </h3>
					<img src="<?php echo base_url()?>assets/images/page1_img1.jpg" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<p>Lorem ipsum dolor sit ere amet, consectetur ipiscin.</p>
						In mollis erat mattis neque facilisis, sit ametiol
					</div>
					<div class="clear cl1"></div>
					<p>Find the detailed description of this <span class="col1"><a href="http://blog.templatemonster.com/free-website-templates/" rel="dofollow">freebie</a></span> at TemplateMonster blog.</p>
					<p><span class="col1"><a href="http://www.templatemonster.com/category/travel-website-templates/" rel="nofollow">Travel Website Templates</a></span> category offers you a variety of designs that are perfect for travel sphere of business.</p>
					Proin pharetra luctus diam, a scelerisque eros convallis
					<h4>Ý kiến khách hàng</h4>
					<blockquote class="bq1">
						<img src="<?php echo base_url()?>assets/images/PQ.jpg" alt="" class="img_inner noresize fleft">
						<div class="extra_wrapper">
							<p>Trong 4 ngày vừa qua (4/6-7/6) em đã có kỳ nghỉ tuyệt vời tại hòn đảo ngọc Phú Quốc. Về cơ bản, gia đình khá hài lòng về chuyến đi này.

Về khách sạn Kim Hoa thì gia đình vô cùng hài lòng về chất lượng. Phòng ốc đẹp, đầy đủ tiện nghi, buffet sáng khá đa dạng và hợp khẩu vị, nhân viên tươi tắn và nhiệt tình. Em xin được dành tặng 5/5* về mức độ hài lòng.

Các bữa ăn chính tại các nhà hàng thì khá ngon và hợp khẩu vị, đồ ăn thì nhiều . </p>
							<div class="alright">
								<div class="col1">L.T.Tha</div>
								<a href="#" class="btn">Còn tiếp</a>
							</div>
						</div>
					</blockquote>
				</div>
				<div class="grid_12">
					<h3 class="head1">Tin Tức Tour</h3>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2018-10-20">20<span>Oct</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Phú Quốc</a></div>
							Du ngoạn trên biển, trải nghiệm cuộc sống của ngư dân, bơi lội giữa biển và ngắm san hô.Tắm biển Bãi Sao (hoặc bãi Ông Lang) - một trong những bãi biển đẹp nhất tại Phú Quốc,...
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2019-01-01">01<span>Jan</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Nha Trang.</a></div>
							Chiêm ngưỡng Bãi biển cát trắng Cà Ná - một trong những bãi biển đẹp nổi tiếng của miền Trung,Tới khu du lịch Hòn Lao - đảo Khỉ, thư giãn, xem xiếc hoặc thử các môn thể thao bãi biển,...
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2018-12-24">24<span>Dec</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Đà Lạt</a></div>
							Tham quan thác Dambri - ngọn thác hùng vĩ tại cao nguyên Bảo Lộc,tham quan Khu Du Lịch Trang Trại Rau và Hoa, nằm trải rộng cả một thung lũng với bốn bề là rau và hoa đẹp tuyệt vời,...
						</div>
					</div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						Your Trip (c) 2018 | <a href="#">Privacy Policy</a> 
					</div>
				</div>
			</div>
		</footer>
		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>

