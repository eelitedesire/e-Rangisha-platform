<?php
require '../constants/config.php';
require '../constants/check-login.php';

if ($logged == "1") {
	   if ($myrole == "user") {

	   }else{

	   	header("location:../");

	   }

	}else{

		header("location:../");

	}

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*10)-10;
}         
}else{
$page1 = 0;
$page = 1;  
}


?>

<!DOCTYPE html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - My Pending Post</title>

<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="../assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
<link rel="icon" href="../assets/icon/favicon.ico">
<link rel="icon" type="image/x-icon" href="icon/rwandaicon.png">
</head>
<body>

<header id="header-wrap">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-5 col-xs-12">

<ul class="list-inline">
<li><a style="padding-top:5px;" class="header-top-button"><i class="lni-envelope"></i><?php echo $site_email; ?></a></li>
</ul>

</div>
<div class="col-lg-5 col-md-7 col-xs-12">

<div class="header-top-right float-right">
	<?php
	if ($logged == "1") {
		?>
		<a href="./" class="header-top-button"><i class="lni-user"></i> My Account</a> |
       <a href="../logout" class="header-top-button"><i class="lni-enter"></i> Log Out</a>
       <?php

	}else{

		?>
		<a href="../login" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
       <a href="../register" class="header-top-button"><i class="lni-pencil"></i> Register</a>
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
<a id="site_logo"  class="navbar-brand"><?php echo $site_title; ?></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item">
<a class="nav-link" href="../">
Home
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../listings">
Listings
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../faq">
FAQ
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../contact">
Contact
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../about">
About
</a>
</li>

</ul>
<div class="post-btn">
    <?php
	if ($logged == "1") {
		print '<a class="btn btn-common" href="upload"><i class="lni-pencil-alt"></i> Post Document</a>';

		}else{

		print '<a class="btn btn-common" href="login"><i class="lni-lock"></i> Login to Post</a>';

		}

      ?>

</div>
</div>
</div>

<ul class="mobile-menu">
<li>
<a class="" href="../">
Home
</a>
<li>
<a href="../listings">
Listings
</a>
<li>
<li>
<a  href="../faq">
FAQ
</a>
<li>
<li>
<a href="../contact">
Home
</a>
<li>
<li>
<a class="about" href="../about">
About
</a>
<li>
</ul>

</nav>

</header>

<div class="page-header" >
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">My Pending Post</h2>
<ol class="breadcrumb">
<li><a href="../">Home /</a></li>
<li class="current" style="color:white">My Pending Post</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
<aside>
<div class="sidebar-box">
<div class="user">
<figure>
<a >
	<?php 
	if ($myavatar == null) {

		print '<img class="user_avatar" src="../assets/img/blank_avatar.png" alt="">';

	}else{
		print '<img class="user_avatar" src="../uploads/avatar/'.$myavatar.'" alt="">';

	}

	?>
	
</a>
</figure>
<div class="usercontent">
<h3>@<?php echo $myusername; ?>
	<?php if ($accver == "YES") { print '<span class="lni-check-mark-circle"></span>'; } ?>
</h3>
<h4>ID: <?php echo $myid; ?></h4>
</div>
</div>
<nav class="navdashboard">
<ul>
<li>
<a  href="./">
<i class="lni-user"></i>
<span>My Account</span>
</a>
</li>

<li>
<a  href="myads">
<i class="lni-layers"></i>
<span>My Post</span>
</a>
</li>
<li>
<a href="my-active-ads">
<i class="lni-cloud-check"></i>
<span>My Active Post</span>
</a>
</li>
<li>
<a  class="active" href="my-pending-ads">
<i class="lni-cloud-upload"></i>
<span>My Pending Post</span>
</a>
</li>
<li>
<a href="my-featured-ads">
<i class="lni-star"></i>
<span>My Featured Post</span>
</a>
</li>
<li>
<a href="upload">
<i class="lni-upload"></i>
<span>Upload Post</span>
</a>
</li>
<li>
<a href="../logout">
<i class="lni-enter"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>

</aside>
</div>
<div class="col-sm-12 col-md-8 col-lg-9">
<div class="page-content">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">My Pending Post</h2>
</div>
<div class="dashboard-wrapper">
<?php require 'constants/check_reply.php'; ?>
<table class="table table-responsive dashboardtable tablemyads">
<thead>
<tr>

<th>Photo</th>
<th>Title</th>
<th>Category</th>
<th>Post Status</th>
<th>Phone</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<div id="all_rows">
  <?php

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE author = :author AND status = 'inactive' ORDER BY enc_id DESC LIMIT $page1,10");
    $stmt->bindParam(':author', $myid);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach($result as $row)
    {
      $ad_id = $row['ad_id'];
      $directory = "../uploads/ads/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[2];

      $status = $row['status'];
      if ($status == "active") {
        $st_p = '<span class="adstatus adstatusactive">Active</span>';
      }
            if ($status == "inactive") {
        $st_p = '<span class="adstatus adstatusexpired">Inactive</span>';
      }

      ?>
      <tr data-category="active">

<td class="photo"><img class="img-fluid img-list-dash" src="<?php echo $firstFile; ?>" alt=""></td>
<td data-title="Title">
<h3><?php echo $row['title']; ?></h3>
<span>Ad ID: <?php echo $row['ad_id']; ?></span>
</td>
<td data-title="Category"><span class="adcategories"><?php echo $row['category']; ?></span></td>
<td data-title="Ad Status"><?php echo $st_p; ?></td>
<td data-title="Price">
<h3><?php echo ($row['price']); ?></h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" target="_blank" href="../ad/<?php echo $row['ad_id']; ?>"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="edit-ad?node=<?php echo $row['ad_id']; ?>"><i class="lni-pencil"></i></a>
<a onclick = "return confirm('Are you sure you want to delete ?'); " class="btn-action btn-delete" href="app/drop-ad.php?node=<?php echo base64_encode($row['ad_id']); ?>"><i class="lni-trash"></i></a>
</div>
</td>
</tr>

<?php
    

    }
            
    }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



  ?>

</tbody>
</table>
</div>




</div>
</div>
<div class="pagination-bar">
<nav>
<ul class="pagination justify-content-center">
  <?php
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE author = :author  AND status = 'inactive' ORDER BY enc_id DESC");
    $stmt->bindParam(':author', $myid);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);

    $total_pages = $rec /10;
    $total_pages = ceil($total_pages);

    if ($total_pages > 1) {

        for ($b=1;$b<=$total_pages;$b++) {

          print '<li class="page-item"><a class="page-link '; if ($b == $page) { print ' active '; } print '" href="my-pending-ads?page='.$b.'">'.$b.'</a></li>';

        }
                                 

    }

            
  }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>

</ul>
</nav>
</div>
</div>

</div>
</div>
</div>
</div>


<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">About</h3>
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
<h3 class="block-title">Quick Links</h3>
<ul class="menu">
<li><a href="../">- Home</a></li>
<li><a href="../listings">- Listings</a></li>
<li><a href="../faqs">- FAQ's</a></li>
<li><a href="../contact">- Contact</a></li>
<li><a href="../About">- About</a></li>
<li><a href="#">- Developer</a></li>
    <?php
	if ($logged == "1") {
print '<li><a href="./">- My Account</a></li>
       <li><a href="../logout">- Log Out</a></li>';

	}else{
print '<li><a href="../login">- Login</a></li>
       <li><a href="../register">- Register</a></li>';

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


<script src="../assets/js/jquery-min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/jquery.slicknav.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/form-validator.min.js"></script>
<script src="../assets/js/contact-form-script.min.js"></script>
<script src="../assets/js/summernote.js"></script>
<script src="../assets/js/password-validate.js"></script>


</body>

</html>