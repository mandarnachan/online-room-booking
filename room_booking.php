<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Luxehotel Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<p class="site">www.yoursitehere.com</p>
						</div>
						<div class="col-xs-8 text-right">
							<p class="num">Call: +01-123-456</p>
							<ul class="colorlib-social">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">Luxehotel</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li class="has-dropdown">
									<a href="rooms-suites.html">Rooms</a>
									<ul class="dropdown">
										<li><a href="#">Web Design</a></li>
										<li><a href="#">eCommerce</a></li>
										<li><a href="#">Branding</a></li>
										<li><a href="#">API</a></li>
									</ul>
								</li>
								<li><a href="dining-bar.html">Dining &amp; Bar</a></li>
								<li><a href="aminities.html">Aminities</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="about.html">About</a></li>
								<li class="active"><a href="contact.html">Contact</a></li>
								<li><a href="login.php">Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner slider-text-inner2 text-center">
				   					<h2>Experience new</h2>
				   					<h1>Join Us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Search Room</h3>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-4">
									<label for="chkin_date">Check-in:</label>
									<i class="icon icon-calendar2"></i>
			                      <input type="text" id="chkin_date" name="chkin_date" class="form-control date" placeholder="mm/dd/yyyy">
								</div>
								<div class="col-md-4">
									<label for="chkout_date">Check-out:</label>
									<i class="icon icon-calendar2"></i>
									<input type="text" id="chkout_date" name="chkout_date" class="form-control date" placeholder="mm/dd/yyyy">
								</div>
							</div>
							<div class="row" id="roomsDiv">
								<div class="row form-group" id="subDiv0">
									<div class="col-md-2"><label>Room 1</label></div>
									<div class="col-md-3">
										<label for="adults0">Adults</label>
										<i class="icon icon-arrow-down3"></i>
										<select name="adults0" id="adults0" class="form-control">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</div>
									<div class="col-md-3">
										<label for="children0">Children</label>
										<i class="icon icon-arrow-down3"></i>
										<select name="children0" id="children0" class="form-control">
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-4">
									<input type="button" value="Add room" class="btn btn-primary" onclick="javascript:addRooms();">
									<input type="button" value="Done" class="btn btn-primary" onclick="javascript:validateRoomBking();">
								</div>	
							</div>

						</form>		
					</div>
				</div>
			</div>
		</div>

		<div id="map" class="colorlib-map"></div>
	
		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Sign Up for a Newsletter</h2>
						<p>Get A 50% Discounts in every Rooms, Book now!</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Luxehotel</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Accomodation</a></li>
								<li><a href="#">Dining &amp; Bar</a></li>
								<li><a href="#">Restaurants</a></li>
								<li><a href="#">Beach &amp; Resorts</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<h4>Recents Blog Post</h4>
						<ul class="colorlib-footer-links">
							<li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
							<li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
							<li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
						</ul>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="http://luxehotel.com">luxehotel.com</a></li>
						</ul>
					</div>
				</div>
				<!--div class="row">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							</small> 
							<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						</p>
					</div>
				</div-->
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script type="text/javascript">
		
		var roomStr = "";
		var roomCount = 0;
		var roomsArray = [];
		
		$(document).ready(function() {
			var dateInput = $('input[name="chkin_date"]'); // Our date input has the name "date"
			var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : 'body';
			dateInput.datepicker({
				format: 'mm/dd/yyyy',
				container: container,
				todayHighlight: true,
				autoclose: true,
				startDate: truncateDate(new Date()) // <-- THIS WORKS
			});

			$('#chkin_date').datepicker('setStartDate', truncateDate(new Date())); // <-- SO DOES THIS
			
			var dateInput1 = $('input[name="chkout_date"]'); // Our date input has the name "date"
			var container1 = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : 'body';
			dateInput1.datepicker({
				format: 'mm/dd/yyyy',
				container1: container1,
				todayHighlight: true,
				autoclose: true,
				startDate: truncateDate(new Date()) // <-- THIS WORKS
			});

			$('#chkout_date').datepicker('setStartDate', truncateDate(new Date())); // <-- SO DOES THIS
		});

		function truncateDate(date) {
		  return new Date(date.getFullYear(), date.getMonth(), date.getDate());
		}
		
		function addRooms(){
			if(roomCount < 4){	
				roomCount++;
				console.log(roomCount);
				roomStr = '<div class="row form-group" id="subDiv'+roomCount+'">'+
						  '<div class="col-md-2"><label id="roomLabel'+roomCount+'"></label></div>'+
						  '<div class="col-md-3"><label for="adults">Adults</label><i class="icon icon-arrow-down3"></i>'+
						  '<select name="adults'+roomCount+'" id="adults'+roomCount+'" class="form-control">'+
						  '<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>'+
						  '</select></div>'+
						  '<div class="col-md-3"><label for="children">Children</label><i class="icon icon-arrow-down3"></i>'+
						  '<select name="children'+roomCount+'" id="children'+roomCount+'" class="form-control"><option value="1">1</option><option value="2">2</option>'+
						  '</select></div>'+
						  '<div class="col-md-1"><input type="button" value="Delete" class="btn btn-primary" onclick="javascript:removeRoom('+roomCount+');"/></div>'+
						  '</div>';
				roomsArray[roomCount]	= 1;	  
				$('#roomsDiv').append(roomStr);
				serialNumber();
			}	
		}
		
		function removeRoom(count){
			$('#subDiv'+count).remove();
			roomsArray[count]	= 0;
			serialNumber();
		}
		
		function serialNumber(){		
			var count=1;
			for (var i=1;i<=roomCount;i++)
			{	if(roomsArray[i]!=0){
					count++;
					document.getElementById('roomLabel'+i+'').innerHTML = 'Room '+count;
				}
			}
		}
		
		function compareDate(date1,date2){
			var d1 = date1.split("/");
			d1 = new Date(d1[2],d1[0]-1,d1[1]);
			
			var d2 = date2.split("/");
			d2 = new Date(d2[2],d2[0]-1,d2[1]);
			
			if(d1>d2){
				return false;
			}else{
				return true;
			}
		}
		
		function validateRoomBking(){
			var chkin_date = $('#chkin_date').val();
			var chkout_date = $('#chkout_date').val();
			
			if(chkin_date!=''){
				alert("Please select check in date");
			}else if(chkout_date!=''){
				alert("Please select check out date");
			}else if(!compareDate(chkin_date,chkout_date)){
				alert("check in date must be smaller than check out date");
			}else{
				alert("Success!!");
			}
			
		}
	</script>
	</body>
</html>