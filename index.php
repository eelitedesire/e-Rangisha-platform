<?php
require 'constants/config.php';
require 'constants/check-login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <a href=""><title><?php echo $site_title; ?> - Find your documents here freely</title></a>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

<link rel="icon" type="image" href="icon/icon1.png">
<link rel="icon" type="image/x-icon" href="icon/rwandaicon.png">




</head>
<body>

<header id="header-wrap">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-8 col-xs-12">

<ul class="list-inline">
<li><a style="padding-top:5px;" class="header-top-button"><i class="lni-envelope"></i> <?php echo  $site_email ?></a></li>
</ul>

</div>
<div class="col-lg-5 col-md-7 col-xs-9">

<div class="header-top-right float-right">
	<?php
	if ($logged == "1") {
		?>
		<a href="<?php echo $myrole ; ?>" class="header-top-button"><i class="lni-user"></i> My Account</a> |
       <a href="logout" class="header-top-button"><i class="lni-enter"></i> Log Out</a>

       <?php

	}else{

		?>
		<a href="login" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
       <a href="register" class="header-top-button"><i class="lni-pencil"></i> Register</a>   |
       <div id="google_translate_element" class="header-top-button"></div>
	   <input type="select" name="" id="">

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	   
       
	   


   <?php

	}

	?>

</div>
</div>
</div>
</div>
</div>


<nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
<div class="container">

<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
</button>
 <a href="#"><a id="site_logo"  class="navbar-brand"><?php echo $site_title; ?></a></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item active">
<a class="nav-link" href="./">
Home
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="listings">
Listings
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="faqs">
FAQ
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact">
Contact
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="about">
About
</a>
</li>
</ul>
<ul>
	<a href="seekdoc"><li id="button1"><i class="lni-book"></i>Apply now</li>  </a>
	
	<style>
		#button1 {
  background-color: white;
  color: black;
  border: solid #e91e63;
  height: 37px;
  width: 120px;
  border-radius: 4px;
  text-align:center;
  margin-right: 20px;
  color: black;
  position: relative;
}
.lni-book {
margin-right:5px;
position: relative;
}
...
	</style>
</ul>
<div class="post-btn">
    <?php
	if ($logged == "1") {
		print '<a class="btn btn-common" href="'.$myrole.'/upload"><i class="lni-pencil-alt"></i> Post Document</a>';

		}else{

		print '<a class="btn btn-common" href="login"><i class="lni-lock"></i> Login to Post</a>';
		

		}

      ?>

</div>
</div>
</div>

<ul class="mobile-menu">
<li>
<a class="active" href="./">
Home
</a>
<li>
<a href="listings">
Listings
</a>
<li>
<li>
<a  href="faqs">
FAQ
</a>
<li>
<li>
<a href="contact">
Home
</a>
<li>
<li>
<a class="about" href="about">
About
</a>
<li>
</ul>

</nav>


<div id="hero-area">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12 col-lg-9 col-xs-12 text-center">
<div class="contents">
<h1 class="head-title">Welcome to The Rangisha Platform</h1>
<p>Meet with people who lost or found your document here anywhere for free</p>
<div class="search-bar">
<div class="search-inner">
<form class="search-form" action="listings" autocomplete="off">
<div class="form-group">
<input type="text" name="keyword" class="form-control" placeholder="What are you looking for ?">
</div>
<div class="form-group inputwithicon">
<div class="select" >
<select name="city" required>
<option value="all">All Cities</option>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_cities ORDER BY city");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
		print '<option value="'.$row['city'].'">'.$row['city'].'</option>';
	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
</select>
</div>
<i class="lni-target"></i>
</div>
<div class="form-group inputwithicon">
<div class="select" >
<select name="category" required>
<option value="all">All Categories</option>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
		print '<option value="'.$row['category'].'">'.$row['category'].'</option>';
	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
</select>
</div>
<i class="lni-menu"></i>
</div>
<button type="submit" name="search" value="✓" class="btn btn-common" type="button"><i class="lni-search"></i> Search Now</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</header>





<section class="featured section-padding">
<div class="container">
<h1 class="section-title">Latest Post</h1>
<div class="row">

	<?php require 'constants/fetch-latest-ads.php'; ?>


</div>
</div>
</section>


<section class="featured-lis section-padding">
<div class="container">
<div class="row">
<div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
<h3 class="section-title">Featured Post </h3>
<div id="new-products" class="owl-carousel owl-theme">

<?php require 'constants/fetch-featured-ads.php'; ?>

</div>
</div>
</div>
</div>
</section>


<section class="works section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h3 class="section-title">How It Works?</h3>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-users"></i>
</div>
<p>Create an Account</p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-bookmark-alt"></i>
</div>
<p>Post document Free</p>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">
<div class="works-item">
<div class="icon-box">
<i class="lni-thumbs-up"></i>
</div>
<p>Deal Done</p>
</div>
</div>
<hr class="works-line">
</div>
</div>
</section>
<center>
<section class="works section-padding">
<div class="container">


<div class="row">
<div class="col-12">
<h3 class="section-title">Our Teams</h3>
</div>
<div class="col-lg-6 col-md-6 col-xs-12">
<div class="works-item">
<div class="icon-box" >
	<img src="img/gigs.jpg" style="height: 100%; width: 100%;" alt="" srcset="" id="imgs" >
	<style>
		#imgs {
			border-radius: 80%;
		}
	</style>
<i class=""></i>
</div>
<p>AHOHARANYERERA Jean Marie Vianney</p>
<b><h3>Software Engineer</h3></b>
<strong><b><h6>gigsrangisha.com</h6></b></strong>

</div>
</div>
<div class="col-lg-6 col-md-6 col-xs-12">
<div class="works-item">
	
<div class="icon-box">
	<img src="img/emelyse.jpeg" id="imgs"  style="height: 100%; width: 100%;" alt="" srcset="" >
<style>
	#imgs {
		border-radius: 80%;
	}

</style>
<i class=""></i>
</div>
<p>Muhimpundu Emelyse</p>
<b><h3>Project manager</h3></b>
<b><h6>emelyse@rangisha.com</h6></b>

</div>
</div>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/22695288.js"></script>
<!-- End of HubSpot Embed Code -->
</section>




<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<div class="footer-logo"><h3 class="block-title">About</h3></div>
<div class="textwidget">
<p><?php echo $about_site; ?></p>
</div>
<ul class="mt-3 footer-social">
<li><a class="facebook" href="<?php echo $facebook_link; ?>"><i class="lni-facebook-filled"></i></a></li>
<li><a class="twitter" href="<?php echo $twitter_link; ?>"><i class="lni-twitter-filled"></i></a></li>
<li><a class="instaram" href="<?php echo $instagram_link; ?>"><i class="lni-instagram-filled"></i></a></li>

<li><a class="google-plus" href="<?php echo $googleplus_link; ?>"><i class="lni-google-plus"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Quick Link</h3>
<ul class="menu">
<li><a href="./">- Home</a></li>
<li><a href="listings">- Listings</a></li>
<li><a href="faqs">- FAQ's</a></li>
<li><a href="contact">- Contact</a></li>
<li><a href="About">- About</a></li>
<li><a href="#">- Developer</a></li>
    <?php
	if ($logged == "1") {
print '<li><a href="'.$myrole.'">- My Account</a></li>
       <li><a href="logout">- Log Out</a></li>';

	}else{
print '<li><a href="login">- Login</a></li>
       <li><a href="register">- Register</a></li>';

	}

	?>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Contact Info</h3>
<ul class="contact-footer">
<li>
<strong><i class="lni-phone"></i></strong><span><?php echo $site_phone; ?></span>
</li>
<li>
<strong><i class="lni-envelope"></i></strong><span><?php echo $site_email; ?></span>
</li>
<li>
<strong><i class="lni-map-marker"></i></strong><span><?php echo $site_address; ?></span>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="site-info text-center">
<p>Developed with <i class="lni-heart-filled"></i> by <a target="_blank" href="#" rel="nofollow">Rangisha Ltd</a></p>
</div>
</div>
</div>
</div>
</div>

</footer>


<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/summernote.js"></script>
</body>

</html>
