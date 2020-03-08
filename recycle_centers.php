<?php include "db.php"; ?>

<?php
session_start();
if ( !empty($_SESSION['name']) && !empty($_SESSION['id']) )
{
   
$id = $_SESSION['id'];  
$name = $_SESSION['name'];
}
else
{
    header("location:error.html");
}
?>

<?php

if (isset($_GET['cid']))
{
    $cid = mysqli_real_escape_string($con,$_GET['cid']);
    
    
}else
{
    header("location:home.php");
}

?>

<?php

if (isset($_GET['cid']))
{
    $cid = mysqli_real_escape_string($con,$_GET['cid']);
    $qur = mysqli_fetch_array(mysqli_query($con, "select cname, caddr, mainim from center where id like '$cid'"));
    
}else
{
    header("location:home.php");
}

?>









<!DOCTYPE html>
<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="#">
    <meta name="description" content="#">
    <title>GARGO | GARBAGE GO</title>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
    <link rel="apple-touch-icon-precomposed" href="#">
    <link rel="shortcut icon" href="#">
    <!-- Bootstrap -->
    <link href="Recycle%20centers_files/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="Recycle%20centers_files/font-awesome.css" rel="stylesheet">
    <!-- Flaticons -->
    <link href="Recycle%20centers_files/flaticon.css" rel="stylesheet">
    <!-- Swiper Slider -->
    <link href="Recycle%20centers_files/swiper.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="Recycle%20centers_files/ion.css" rel="stylesheet">
    <!-- magnific popup -->
    <link href="Recycle%20centers_files/magnific-popup.css" rel="stylesheet">
    <!-- Nice Select -->
    <link href="Recycle%20centers_files/nice-select.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="Recycle%20centers_files/style.css" rel="stylesheet">
    <!-- Custom Responsive -->
    <link href="Recycle%20centers_files/responsive.css" rel="stylesheet">
    <!-- Color Change -->
      <link rel="stylesheet" class="color-changing" href="Recycle%20centers_files/color2.css">
    <!-- Google Fonts -->
    <link href="Recycle%20centers_files/css.css" rel="stylesheet">
    <!-- place -->
<script type="text/javascript" charset="UTF-8" src="Recycle%20centers_files/common.js"></script><script type="text/javascript" charset="UTF-8" src="Recycle%20centers_files/util.js"></script></head>

<body>
    	<!-- Navigation -->
        
    <?php include "topbar.php"; ?>
    
    
    
	<div class="main-sec"></div>
	<!-- Navigation -->
    <!-- restaurent top -->
   
    <!-- restaurent top -->
    <!-- restaurent details -->
    <section class="restaurent-details  u-line">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <div class="logo mainNavCol">
                            <a href="http://slidesigma.com/themes/html/munchbox/index.html">
                                <img src="<?php echo $qur['mainim']; ?>" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                    <div class="heading padding-tb-10">
                        <h3 class="text-light-black title fw-700 no-margin"><?php echo $qur['cname']; ?></h3>
                        <p class="text-light-black sub-title no-margin"><?php echo $qur['caddr']; ?> <span><a href="http://slidesigma.com/themes/html/munchbox/checkout.html" class="text-success"></a></span>
                        </p>
                        <div class="head-rating">
                            <div class="rating"> <span class="fs-16 text-yellow">
                              <i class="fas fa-star"></i>
                            </span>
                                            <span class="fs-16 text-yellow">
                              <i class="fas fa-star"></i>
                            </span>
                                            <span class="fs-16 text-yellow">
                              <i class="fas fa-star"></i>
                            </span>
                                            <span class="fs-16 text-yellow">
                              <i class="fas fa-star"></i>
                            </span>
                                            <span class="fs-16 text-dark-white">
                              <i class="fas fa-star"></i>
                            </span>
                                <span class="text-light-black fs-12 rate-data">58 rating</span>
                            </div>
                            <div class="product-review">
                                <div class="restaurent-details-mob">
                                    <a href="#"> <span class="text-light-black"><i class="fas fa-info-circle"></i></span>
                                        <span class="text-dark-white">info</span>
                                    </a>
                                </div>
                                <div class="restaurent-details-mob">
                                    <a href="#"> <span class="text-light-black"><i class="fas fa-info-circle"></i></span>
                                        <span class="text-dark-white">info</span>
                                    </a>
                                </div>
                                <div class="restaurent-details-mob">
                                    <a href="#"> <span class="text-light-black"><i class="fas fa-info-circle"></i></span>
                                        <span class="text-dark-white">info</span>
                                    </a>
                                </div>
                                <div class="restaurent-details-mob">
                                    <a href="#"> <span class="text-light-black"><i class="fas fa-info-circle"></i></span>
                                        <span class="text-dark-white">info</span>
                                    </a>
                                </div>
                                <h6 class="text-light-black no-margin">91<span class="fs-14">% good</span></h6>
                                <h6 class="text-light-black no-margin">91<span class="fs-14">% good</span></h6>
                                <h6 class="text-light-black no-margin">91<span class="fs-14">% good</span></h6>
                            </div>
                        </div>
                    </div>
<!--
                   gargo certified <div class="restaurent-logo">
                        <img src="Recycle%20centers_files/logo-4.jpg" class="img-fluid" alt="#">
                    </div>
-->
                </div>
            </div>
        </div>
    </section>
    <!-- restaurent details -->
    <!-- restaurent tab -->
    <div class="restaurent-tabs u-line">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="restaurent-menu scrollnav">
                        <ul class="nav nav-pills">
                            <li class="nav-item"> <a class="nav-link active text-light-white fw-700" data-toggle="pill" href="#menu">Menu</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link text-light-white fw-700" data-toggle="pill" href="#about">About</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link text-light-white fw-700" data-toggle="pill" href="#review">Reviews</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link text-light-white fw-700" data-toggle="pill" href="#mapgallery">Map &amp; Gallery</a>
                            </li>
                        </ul>
                        <div class="add-wishlist">
                            <img src="Recycle%20centers_files/013-heart-1.svg" alt="tag">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- restaurent tab -->
    <!-- restaurent address -->
    <div class="restaurent-address u-line">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="address-details">
                        <div class="address">
                            <div class="delivery-address"> <a href="http://slidesigma.com/themes/html/munchbox/order-details.html" class="text-light-black"></a>
                                <div class="delivery-type"> <span class="text-success fs-12 fw-500">No minimun</span><span class="text-light-white"></span>
                                </div>
                            </div>
                            <div class="change-address"> <a href="http://slidesigma.com/themes/html/munchbox/checkout.html" class="fw-500">Change</a>
                            </div>
                        </div>
                        <p class="text-light-white no-margin">We ensure quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- restaurent address -->
<!-- restaurent meals -->
    <section class="section-padding restaurent-meals bg-light-theme">
        <div class="container-fluid">
            <div class="row">
              
                <div class="col-xl-3 col-lg-3">
                    <div class="advertisement-slider swiper-container h-auto mb-xl-20 mb-md-40 swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                            <?php
                                
                             $a = mysqli_query($con,"select * from product where cid like '$cid'");
                        while ($r = mysqli_fetch_array($a))
                        {
                         $pid = $r['id'];
                            
                                ?>
                            <div class="swiper-slide swiper-slide-active" style="width: 307px;">
                                <div class="testimonial-wrapper">
                                    <div class="testimonial-box">
                                        <div class="testimonial-img p-relative">
                                            <a href="#">
                                                <img src="collection-2.jpg" class="img-fluid full-width" alt="testimonial-img">
                                            </a>
                                            <div class="overlay">
<!--
                                                <div class="brand-logo">
                                                    <img src="Recycle%20centers_files/user-3_002.png" class="img-fluid" alt="logo">
                                                </div>
-->
                                                <div class="add-fav text-success">
                                                    <img src="Recycle%20centers_files/013-heart-1.svg" alt="tag">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial-caption padding-15">
                                            <p class="text-light-white text-uppercase no-margin fs-12">Featured</p>
                                            <h5 class="fw-600"><a href="#" class="text-light-black"><?php echo $r['pname']; ?></a></h5>
                                            <div class="testimonial-user-box">
                                                <img src="Recycle%20centers_files/user-1_003.png" class="rounded-circle" alt="#">
                                                <div class="testimonial-user-name">
                                                    <p class="text-light-black fw-600">Sarra</p> <i class="fas fa-trophy text-black"></i><span class="text-light-black">Top Reviewer</span>
                                                </div>
                                            </div>
                                            <div class="ratings"> <span class="text-yellow fs-16">
                                                          <i class="fas fa-star"></i>
                                                        </span>
                                                                                <span class="text-yellow fs-16">
                                                          <i class="fas fa-star"></i>
                                                        </span>
                                                                                <span class="text-yellow fs-16">
                                                          <i class="fas fa-star"></i>
                                                        </span>
                                                                                <span class="text-yellow fs-16">
                                                          <i class="fas fa-star"></i>
                                                        </span>
                                                                                <span class="text-yellow fs-16">
                                                          <i class="fas fa-star"></i>
                                                        </span>
                                            </div>
                                            <p class="text-light-black">Good product</p>
                                            <p class="text-light-white fw-100"><strong class="text-light-black fw-700">Local delivery: </strong> From Rs.<?php echo $r['price']; ?> (4.0 mi)</p>
                                            <a href="#" class="btn-second btn-submit">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                         <?php
                        }
                            ?>

                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                        <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    
                    
                    
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
<!--
                        <div class="col-lg-12">
                            <div class="promocodeimg mb-xl-20 p-relative">
                                <img src="Recycle%20centers_files/banner.jpg" class="img-fluid full-width" alt="promocode">
                                <div class="promocode-text">
                                    <div class="promocode-text-content">
                                        <h5 class="text-custom-white mb-2 fw-600">Get $10 off your first order!</h5>
                                        <p class="text-custom-white no-margin">Spend $15 or more and get $10 off your first delivery order.</p>
                                    </div>
                                    <div class="promocode-btn"> <a href="#">Get Deal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
-->
                        <div class="col-lg-12 restaurent-meal-head mb-md-40">
                            <div class="card">
                                <div class="card-header">
                                    <div class="section-header-left">
                                        <h3 class="text-light-black header-title">
                                            <a class="card-link text-light-black no-margin" data-toggle="collapse" href="#collapseOne">
                                            New Arrivals
                                          </a>
                                        </h3>
                                    </div>
                                </div>
                             
                                
                                
                         
                                
                                <div id="collapseOne" class="collapse show">
                                    <div class="card-body no-padding">
                                        
                                     
                                        
                                        
                                        <div class="row">
                                                   <?php
                                
                             $a = mysqli_query($con,"select * from product where cid like '$cid'");
                        while ($r = mysqli_fetch_array($a))
                        {
                         $pid = $r['id'];
                            
                                ?>
                                            
                                            <div class="col-lg-12">
                                                <div class="restaurent-product-list">
                                                    <div class="restaurent-product-detail">
                                                        <div class="restaurent-product-left">
                                                            <div class="restaurent-product-title-box">
                                                                <div class="restaurent-product-box">
                                                                    <div class="restaurent-product-title">
                                                                        <h6 class="mb-2"><a href="addCart.php?cid=<?php echo $cid; ?>&pid=<?php echo $pid; ?>" class="text-light-black fw-600"><?php echo $r['pname']; ?></a></h6>
                                                                        <p class="text-light-white">10-15 grams</p>
                                                                    </div>
<!--
                                                                    <div class="restaurent-product-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                                        <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                                                    </div>
-->
                                                                </div>
                                                                <div class="restaurent-product-rating">
                                                                    <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                                    </div>
                                                                    <div class="rating-text">
                                                                        <p class="text-light-white fs-12 title">3845 ratings</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="restaurent-product-caption-box"> <span class="text-light-white">A Gargo Verified Product</span>
                                                            </div>
                                                            <div class="restaurent-tags-price">
                                                                <div class="restaurent-tags">
                                                                    <span class="text-custom-white square-tag">
                                                                        <img src="Recycle%20centers_files/004-leaf.svg" alt="tag">
                                                                    </span>
                                                                </div>
                                                                    <span class="circle-tag">
                                                                        <img src="Recycle%20centers_files/010-heart.svg" alt="tag">
                                                                    </span>
                                                                <div class="restaurent-product-price">
                                                                    <h6 class="text-success fw-600 no-margin">Rs.<?php echo $r['price']; ?></h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="restaurent-product-img">
                                                            <img src="cam.jpg" class="img-fluid" alt="#">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
    
                                            <?php
                        }
                            ?>
                                            
<!--
                                            
                                            <div class="col-lg-12">
                                                <div class="restaurent-product-list">
                                                    <div class="restaurent-product-detail">
                                                        <div class="restaurent-product-left">
                                                            <div class="restaurent-product-title-box">
                                                                <div class="restaurent-product-box">
                                                                    <div class="restaurent-product-title">
                                                                        <h6 class="mb-2" data-toggle="modal" data-target="#restaurent-popup"><a href="javascript:void(0)" class="text-light-black fw-600">Bacon Egg &amp; Vegan Burger - Meal</a></h6>
                                                                        <p class="text-light-white">600-700 Cal.</p>
                                                                    </div>
                                                                    <div class="restaurent-product-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                                        <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                                                    </div>
                                                                </div>
                                                                <div class="restaurent-product-rating">
                                                                    <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                                    </div>
                                                                    <div class="rating-text">
                                                                        <p class="text-light-white fs-12 title">3845 ratings</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="restaurent-product-caption-box"> <span class="text-light-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</span>
                                                            </div>
                                                            <div class="restaurent-tags-price">
                                                                <div class="restaurent-tags"> <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/004-leaf.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/006-chili.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/005-chef.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/008-protein.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/009-lemon.svg" alt="tag">
                                  </span>
                                                                </div> <span class="circle-tag">
                                  <img src="Recycle%20centers_files/013-heart-1.svg" alt="tag">
                                </span>
                                                                <div class="restaurent-product-price">
                                                                    <h6 class="text-success fw-600 no-margin">$7.99+</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="restaurent-product-img">
                                                            <img src="Recycle%20centers_files/dish-2.jpg" class="img-fluid" alt="#">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="restaurent-product-list">
                                                    <div class="restaurent-product-detail">
                                                        <div class="restaurent-product-left">
                                                            <div class="restaurent-product-title-box">
                                                                <div class="restaurent-product-box">
                                                                    <div class="restaurent-product-title">
                                                                        <h6 class="mb-2" data-toggle="modal" data-target="#restaurent-popup"><a href="javascript:void(0)" class="text-light-black fw-600">Bacon Egg &amp; Vegan Burger - Meal</a></h6>
                                                                        <p class="text-light-white">600-700 Cal.</p>
                                                                    </div>
                                                                    <div class="restaurent-product-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                                        <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                                                    </div>
                                                                </div>
                                                                <div class="restaurent-product-rating">
                                                                    <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                                    </div>
                                                                    <div class="rating-text">
                                                                        <p class="text-light-white fs-12 title">3845 ratings</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="restaurent-product-caption-box"> <span class="text-light-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</span>
                                                            </div>
                                                            <div class="restaurent-tags-price">
                                                                <div class="restaurent-tags"> <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/004-leaf.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/006-chili.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/005-chef.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/008-protein.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/009-lemon.svg" alt="tag">
                                  </span>
                                                                </div> <span class="circle-tag">
                                  <img src="Recycle%20centers_files/010-heart.svg" alt="tag">
                                </span>
                                                                <div class="restaurent-product-price">
                                                                    <h6 class="text-success fw-600 no-margin">$7.99+</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="restaurent-product-img">
                                                            <img src="Recycle%20centers_files/dish-3.jpg" class="img-fluid" alt="#">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="restaurent-product-list">
                                                    <div class="restaurent-product-detail">
                                                        <div class="restaurent-product-left">
                                                            <div class="restaurent-product-title-box">
                                                                <div class="restaurent-product-box">
                                                                    <div class="restaurent-product-title">
                                                                        <h6 class="mb-2" data-toggle="modal" data-target="#restaurent-popup"><a href="javascript:void(0)" class="text-light-black fw-600">Bacon Egg &amp; Vegan Burger - Meal</a></h6>
                                                                        <p class="text-light-white">600-700 Cal.</p>
                                                                    </div>
                                                                    <div class="restaurent-product-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                                        <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                                                    </div>
                                                                </div>
                                                                <div class="restaurent-product-rating">
                                                                    <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                                    </div>
                                                                    <div class="rating-text">
                                                                        <p class="text-light-white fs-12 title">3845 ratings</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="restaurent-product-caption-box"> <span class="text-light-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</span>
                                                            </div>
                                                            <div class="restaurent-tags-price">
                                                                <div class="restaurent-tags"> <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/004-leaf.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/006-chili.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/005-chef.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/008-protein.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/009-lemon.svg" alt="tag">
                                  </span>
                                                                </div> <span class="circle-tag">
                                  <img src="Recycle%20centers_files/013-heart-1.svg" alt="tag">
                                </span>
                                                                <div class="restaurent-product-price">
                                                                    <h6 class="text-success fw-600 no-margin">$7.99+</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="restaurent-product-img">
                                                            <img src="Recycle%20centers_files/dish-4.jpg" class="img-fluid" alt="#">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="restaurent-product-list">
                                                    <div class="restaurent-product-detail">
                                                        <div class="restaurent-product-left">
                                                            <div class="restaurent-product-title-box">
                                                                <div class="restaurent-product-box">
                                                                    <div class="restaurent-product-title">
                                                                        <h6 class="mb-2" data-toggle="modal" data-target="#restaurent-popup"><a href="javascript:void(0)" class="text-light-black fw-600">Bacon Egg &amp; Vegan Burger - Meal</a></h6>
                                                                        <p class="text-light-white">600-700 Cal.</p>
                                                                    </div>
                                                                    <div class="restaurent-product-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                                        <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                                                    </div>
                                                                </div>
                                                                <div class="restaurent-product-rating">
                                                                    <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                                    </div>
                                                                    <div class="rating-text">
                                                                        <p class="text-light-white fs-12 title">3845 ratings</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="restaurent-product-caption-box"> <span class="text-light-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</span>
                                                            </div>
                                                            <div class="restaurent-tags-price">
                                                                <div class="restaurent-tags"> <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/004-leaf.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/006-chili.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/005-chef.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/008-protein.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/009-lemon.svg" alt="tag">
                                  </span>
                                                                </div> <span class="circle-tag">
                                  <img src="Recycle%20centers_files/010-heart.svg" alt="tag">
                                </span>
                                                                <div class="restaurent-product-price">
                                                                    <h6 class="text-success fw-600 no-margin">$7.99+</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="restaurent-product-img">
                                                            <img src="Recycle%20centers_files/dish-5.jpg" class="img-fluid" alt="#">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        
-->
                                        
                                        
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
<!--
                            
                            <div class="card">
                                <div class="card-header">
                                    <div class="section-header-left">
                                        <h3 class="text-light-black header-title">
                                            <a class="card-link text-light-black no-margin" data-toggle="collapse" href="#collapseTwo">
                        Combo Meals
                      </a>
                                        </h3>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="collapse show">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="restaurent-product-list">
                                                    <div class="restaurent-product-detail">
                                                        <div class="restaurent-product-left">
                                                            <div class="restaurent-product-title-box">
                                                                <div class="restaurent-product-box">
                                                                    <div class="restaurent-product-title">
                                                                        <h6 class="mb-2" data-toggle="modal" data-target="#restaurent-popup"><a href="javascript:void(0)" class="text-light-black fw-600">Hakka Noodles &amp; Sticky Date Cake - Meal</a></h6>
                                                                        <p class="text-light-white">600-700 Cal.</p>
                                                                    </div>
                                                                    <div class="restaurent-product-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                                        <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                                                    </div>
                                                                </div>
                                                                <div class="restaurent-product-rating">
                                                                    <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                                    </div>
                                                                    <div class="rating-text">
                                                                        <p class="text-light-white fs-12 title">3845 ratings</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="restaurent-product-caption-box"> <span class="text-light-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</span>
                                                            </div>
                                                            <div class="restaurent-tags-price">
                                                                <div class="restaurent-tags"> <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/004-leaf.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/006-chili.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/005-chef.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/008-protein.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/009-lemon.svg" alt="tag">
                                  </span>
                                                                </div> <span class="circle-tag">
                                  <img src="Recycle%20centers_files/013-heart-1.svg" alt="tag">
                                </span>
                                                                <div class="restaurent-product-price">
                                                                    <h6 class="text-success fw-600 no-margin">$7.99+</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="restaurent-product-img">
                                                            <img src="Recycle%20centers_files/dish-6.jpg" class="img-fluid" alt="#">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="restaurent-product-list">
                                                    <div class="restaurent-product-detail">
                                                        <div class="restaurent-product-left">
                                                            <div class="restaurent-product-title-box">
                                                                <div class="restaurent-product-box">
                                                                    <div class="restaurent-product-title">
                                                                        <h6 class="mb-2" data-toggle="modal" data-target="#restaurent-popup"><a href="javascript:void(0)" class="text-light-black fw-600">Hakka Noodles &amp; Sticky Date Cake - Meal</a></h6>
                                                                        <p class="text-light-white">600-700 Cal.</p>
                                                                    </div>
                                                                    <div class="restaurent-product-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                                        <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                                                    </div>
                                                                </div>
                                                                <div class="restaurent-product-rating">
                                                                    <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                                    </div>
                                                                    <div class="rating-text">
                                                                        <p class="text-light-white fs-12 title">3845 ratings</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="restaurent-product-caption-box"> <span class="text-light-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</span>
                                                            </div>
                                                            <div class="restaurent-tags-price">
                                                                <div class="restaurent-tags"> <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/004-leaf.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/006-chili.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/005-chef.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/008-protein.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/009-lemon.svg" alt="tag">
                                  </span>
                                                                </div> <span class="circle-tag">
                                  <img src="Recycle%20centers_files/010-heart.svg" alt="tag">
                                </span>
                                                                <div class="restaurent-product-price">
                                                                    <h6 class="text-success fw-600 no-margin">$7.99+</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="restaurent-product-img">
                                                            <img src="Recycle%20centers_files/dish-7.jpg" class="img-fluid" alt="#">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="restaurent-product-list">
                                                    <div class="restaurent-product-detail">
                                                        <div class="restaurent-product-left">
                                                            <div class="restaurent-product-title-box">
                                                                <div class="restaurent-product-box">
                                                                    <div class="restaurent-product-title">
                                                                        <h6 class="mb-2" data-toggle="modal" data-target="#restaurent-popup"><a href="javascript:void(0)" class="text-light-black fw-600">Hakka Noodles &amp; Sticky Date Cake - Meal</a></h6>
                                                                        <p class="text-light-white">600-700 Cal.</p>
                                                                    </div>
                                                                    <div class="restaurent-product-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                                        <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                                                    </div>
                                                                </div>
                                                                <div class="restaurent-product-rating">
                                                                    <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                                    </div>
                                                                    <div class="rating-text">
                                                                        <p class="text-light-white fs-12 title">3845 ratings</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="restaurent-product-caption-box"> <span class="text-light-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</span>
                                                            </div>
                                                            <div class="restaurent-tags-price">
                                                                <div class="restaurent-tags"> <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/004-leaf.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/006-chili.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/005-chef.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/008-protein.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/009-lemon.svg" alt="tag">
                                  </span>
                                                                </div> <span class="circle-tag">
                                  <img src="Recycle%20centers_files/013-heart-1.svg" alt="tag">
                                </span>
                                                                <div class="restaurent-product-price">
                                                                    <h6 class="text-success fw-600 no-margin">$7.99+</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="restaurent-product-img">
                                                            <img src="Recycle%20centers_files/dish-8.jpg" class="img-fluid" alt="#">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="restaurent-product-list">
                                                    <div class="restaurent-product-detail">
                                                        <div class="restaurent-product-left">
                                                            <div class="restaurent-product-title-box">
                                                                <div class="restaurent-product-box">
                                                                    <div class="restaurent-product-title">
                                                                        <h6 class="mb-2" data-toggle="modal" data-target="#restaurent-popup"><a href="javascript:void(0)" class="text-light-black fw-600">Hakka Noodles &amp; Sticky Date Cake - Meal</a></h6>
                                                                        <p class="text-light-white">600-700 Cal.</p>
                                                                    </div>
                                                                    <div class="restaurent-product-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                                        <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                                                    </div>
                                                                </div>
                                                                <div class="restaurent-product-rating">
                                                                    <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                                    </div>
                                                                    <div class="rating-text">
                                                                        <p class="text-light-white fs-12 title">3845 ratings</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="restaurent-product-caption-box"> <span class="text-light-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</span>
                                                            </div>
                                                            <div class="restaurent-tags-price">
                                                                <div class="restaurent-tags"> <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/004-leaf.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/006-chili.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/005-chef.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/008-protein.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/009-lemon.svg" alt="tag">
                                  </span>
                                                                </div> <span class="circle-tag">
                                  <img src="Recycle%20centers_files/010-heart.svg" alt="tag">
                                </span>
                                                                <div class="restaurent-product-price">
                                                                    <h6 class="text-success fw-600 no-margin">$7.99+</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="restaurent-product-img">
                                                            <img src="Recycle%20centers_files/dish-9.jpg" class="img-fluid" alt="#">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="restaurent-product-list">
                                                    <div class="restaurent-product-detail">
                                                        <div class="restaurent-product-left">
                                                            <div class="restaurent-product-title-box">
                                                                <div class="restaurent-product-box">
                                                                    <div class="restaurent-product-title">
                                                                        <h6 class="mb-2" data-toggle="modal" data-target="#restaurent-popup"><a href="javascript:void(0)" class="text-light-black fw-600">Hakka Noodles &amp; Sticky Date Cake - Meal</a></h6>
                                                                        <p class="text-light-white">600-700 Cal.</p>
                                                                    </div>
                                                                    <div class="restaurent-product-label"> <span class="rectangle-tag bg-gradient-red text-custom-white">Label</span>
                                                                        <span class="rectangle-tag bg-dark text-custom-white">Combo</span>
                                                                    </div>
                                                                </div>
                                                                <div class="restaurent-product-rating">
                                                                    <div class="ratings"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star"></i></span>
                                                                        <span class="text-yellow"><i class="fas fa-star-half-alt"></i></span>
                                                                    </div>
                                                                    <div class="rating-text">
                                                                        <p class="text-light-white fs-12 title">3845 ratings</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="restaurent-product-caption-box"> <span class="text-light-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</span>
                                                            </div>
                                                            <div class="restaurent-tags-price">
                                                                <div class="restaurent-tags"> <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/004-leaf.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/006-chili.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/005-chef.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/008-protein.svg" alt="tag">
                                  </span>
                                                                    <span class="text-custom-white square-tag">
                                    <img src="Recycle%20centers_files/009-lemon.svg" alt="tag">
                                  </span>
                                                                </div> <span class="circle-tag">
                                  <img src="Recycle%20centers_files/013-heart-1.svg" alt="tag">
                                </span>
                                                                <div class="restaurent-product-price">
                                                                    <h6 class="text-success fw-600 no-margin">$7.99+</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="restaurent-product-img">
                                                            <img src="Recycle%20centers_files/dish-4.jpg" class="img-fluid" alt="#">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   
                        
                        
-->
                        
                        </div>
                        
                        
                    </div>
                </div>
<!--
                <div class="col-xl-3 col-lg-3">
                    <div class="sidebar">
                        <div class="video-box mb-xl-20">
                            <div class="video_wrapper video_wrapper_full js-videoWrapper">
                                <iframe class="videoIframe js-videoIframe" src="Recycle%20centers_files/AdZrEIo6UYU.html" data-src="https://www.youtube.com/embed/AdZrEIo6UYU?autoplay=1&amp;rel=0" allow="autoplay"></iframe>
                                <div class="videoPoster js-videoPoster">
                                    <div class="video-inner">
                                        <i class="far fa-play-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="discount-box main-box padding-tb-10">
                                <div class="discount-price padding-10">
                                    <div class="left-side">
                                        <h6 class="text-light-black fw-600 no-margin">Watch Now and get 50% discount</h6>
                                        <p class="text-light-white no-margin">The hung-over foody (2019)</p>
                                    </div>
                                    <div class="right-side justify-content-end">
                                        <div class="dis-text">
                                            <span class="badge bg-light-green text-custom-white fw-400">Discount</span>
                                            <h4 class="text-light-black no-margin">50%</h4>
                                        </div>
                                        <a href="http://slidesigma.com/themes/html/munchbox/restaurent.html">
                                            <img src="Recycle%20centers_files/logo-3.jpg" class="img-fluid" alt="logo">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="cart-detail-box">
                            <div class="card">
                                <div class="card-header padding-15 fw-700">Your Order</div>
                                <div class="card-body no-padding" id="scrollstyle-4">
                                    <div class="cat-product-box">
                                        <div class="cat-product">
                                            <div class="cat-name">
                                                <a href="#">
                                                    <p class="text-light-green fw-700"><span class="text-dark-white">1</span> Chilli Chicken Pizza</p> <span class="text-light-white fw-700">small, chilli chicken</span>
                                                </a>
                                            </div>
                                            <div class="delete-btn">
                                                <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                                </a>
                                            </div>
                                            <div class="price"> <a href="#" class="text-dark-white fw-500">
                          $2.25
                        </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cat-product-box">
                                        <div class="cat-product">
                                            <div class="cat-name">
                                                <a href="#">
                                                    <p class="text-light-green fw-700"><span class="text-dark-white">1</span> Chilli Chicken Pizza</p> <span class="text-light-white fw-700">small, chilli chicken</span>
                                                </a>
                                            </div>
                                            <div class="delete-btn">
                                                <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                                </a>
                                            </div>
                                            <div class="price"> <a href="#" class="text-dark-white fw-500">
                          $2.25
                        </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cat-product-box">
                                        <div class="cat-product">
                                            <div class="cat-name">
                                                <a href="#">
                                                    <p class="text-light-green fw-700"><span class="text-dark-white">1</span> Chilli Chicken Pizza</p> <span class="text-light-white fw-700">small, chilli chicken</span>
                                                </a>
                                            </div>
                                            <div class="delete-btn">
                                                <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                                </a>
                                            </div>
                                            <div class="price"> <a href="#" class="text-dark-white fw-500">
                          $2.25
                        </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cat-product-box">
                                        <div class="cat-product">
                                            <div class="cat-name">
                                                <a href="#">
                                                    <p class="text-light-green fw-700"><span class="text-dark-white">1</span> Chilli Chicken Pizza</p> <span class="text-light-white fw-700">small, chilli chicken</span>
                                                </a>
                                            </div>
                                            <div class="delete-btn">
                                                <a href="#" class="text-dark-white"> <i class="far fa-trash-alt"></i>
                                                </a>
                                            </div>
                                            <div class="price"> <a href="#" class="text-dark-white fw-500">
                          $2.25
                        </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-total">
                                        <div class="total-price border-0"> <span class="text-dark-white fw-700">Items subtotal:</span>
                                            <span class="text-dark-white fw-700">$9.00</span>
                                        </div>
                                        <div class="empty-bag padding-15 fw-700"> <a href="#">Empty bag</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer padding-15"> <a href="http://slidesigma.com/themes/html/munchbox/checkout.html" class="btn-first green-btn text-custom-white full-width fw-500">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
-->
            </div>
        </div>
    </section>
    <!-- restaurent meals -->
    <!-- restaurent about -->
    <section class="section-padding restaurent-about smoothscroll" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-light-black fw-700 title">Camera</h3>
                    <p class="text-light-white no-margin">We ensure quality poducts</p> <span class="text-success fs-16">$</span>
                    <span class="text-success fs-16">$</span>
                    <span class="text-success fs-16">$</span>
                    <span class="text-dark-white fs-16">$</span>
                    <span class="text-dark-white fs-16">$</span>
                    <ul class="about-restaurent">
                        <li> <i class="fas fa-map-marker-alt"></i>
                            <span>
                <a href="#" class="text-light-white">
                  Near Post Office,<br>
                  Manacaud.P.O, TVPM-9
                </a>
              </span>
                        </li>
                        <li> <i class="fas fa-phone-alt"></i>
                            <span><a href="tel:" class="text-light-white">(347) 123456789</a></span>
                        </li>
                        <li> <i class="far fa-envelope"></i>
                            <span><a href="mailto:" class="text-light-white">demo@domain.com</a></span>
                        </li>
                    </ul>
                    <ul class="social-media pt-2">
                        <li> <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li> <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li> <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li> <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                        <li> <a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="restaurent-schdule">
                        <div class="card">
                            <div class="card-header text-light-white fw-700 fs-16">Hours</div>
                            <div class="card-body">
                                <div class="schedule-box">
                                    <div class="day text-light-black">Monday</div>
                                    <div class="time text-light-black">Delivery: 7:00am - 10:59pm</div>
                                </div>
                                <div class="collapse" id="schdule">
                                    <div class="schedule-box">
                                        <div class="day text-light-black">Tuesday</div>
                                        <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                                    </div>
                                    <div class="schedule-box">
                                        <div class="day text-light-black">Wednesday</div>
                                        <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                                    </div>
                                    <div class="schedule-box">
                                        <div class="day text-light-black">Thursday</div>
                                        <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                                    </div>
                                    <div class="schedule-box">
                                        <div class="day text-light-black">Friday</div>
                                        <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                                    </div>
									    <div class="schedule-box">
                                        <div class="day text-light-black">Saturday</div>
                                        <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                                    </div>
                                        <div class="schedule-box">
                                        <div class="day text-light-black">Sunday</div>
                                        <div class="time text-light-black">Delivery: 7:00am - 10:00pm</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer"> <a class="fw-500 collapsed" data-toggle="collapse" href="#schdule">See the full schedule</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- restaurent about -->
    <!-- map gallery -->
    <div class="map-gallery-sec section-padding bg-light-theme smoothscroll" id="mapgallery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-box">
                        <div class="row">
                            <div class="col-md-6 map-pr-0">
                                <iframe id="locmap" src="https://maps.google.com/maps?q=kerala&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                            </div>
                            <div class="col-md-6 map-pl-0">
                                <div class="gallery-box padding-10">
                                    <ul class="gallery-img">
                                        <li>
                                            <a class="image-popup" href="#" title="Image title">
                                                <img src="cam.jpg" class="img-fluid full-width" alt="9.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="image-popup" href="#" title="Image title">
                                                <img src="cam.jpg" class="img-fluid full-width" alt="9.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="image-popup" href="#" title="Image title">
                                                <img src="cam.jpg" class="img-fluid full-width" alt="9.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="image-popup" href="#" title="Image title">
                                                <img src="cam.jpg" class="img-fluid full-width" alt="9.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="image-popup" href="#" title="Image title">
                                                <img src="cam.jpg" class="img-fluid full-width" alt="9.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="image-popup" href="#" title="Image title">
                                                <img src="cam.jpg" class="img-fluid full-width" alt="9.jpg">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- map gallery -->
    <!-- restaurent reviews -->
    <section class="section-padding restaurent-review smoothscroll" id="review">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Reviews of Product</h3>
                    </div>
                    <div class="restaurent-rating mb-xl-20">
                        <div class="star"> <span class="text-yellow fs-16">
                <i class="fas fa-star"></i>
              </span>
                            <span class="text-yellow fs-16">
                <i class="fas fa-star"></i>
              </span>
                            <span class="text-yellow fs-16">
                <i class="fas fa-star"></i>
              </span>
                            <span class="text-dark-white fs-16">
                <i class="fas fa-star"></i>
              </span>
                            <span class="text-dark-white fs-16">
                <i class="fas fa-star"></i>
              </span>
                        </div> <span class="fs-12 text-light-black">58 Ratings</span>
                    </div>
                    <p class="text-light-black mb-xl-20">Here's what people are saying:</p>
                    <ul>
                        <li>
                            <h6 class="text-light-black mb-1">73%</h6>
                            <span class="text-light-black fs-12 fw-400">good</span>
                        </li>
                        <li>
                            <h6 class="text-light-black mb-1">85%</h6>
                            <span class="text-light-black fs-12 fw-400">Good Product</span>
                        </li>
                        <li>
                            <h6 class="text-light-black mb-1">68%</h6>
                            <span class="text-light-black fs-12 fw-400">Order was accurate</span>
                        </li>
                    </ul>
                    <div class="u-line"></div>
                </div>
                <div class="col-md-12">
                    <div class="review-box">
                        <div class="review-user">
                            <div class="review-user-img">
                                <img src="Recycle%20centers_files/user-1_003.png" class="rounded-circle" alt="#">
                                <div class="reviewer-name">
                                    <p class="text-light-black fw-600">Sarra <small class="text-light-white fw-500">Muttathara</small>
                                    </p> <i class="fas fa-trophy text-black"></i><span class="text-light-black">Top Reviewer</span>
                                </div>
                            </div>
                            <div class="review-date"> <span class="text-light-white">Sep 20, 2020</span>
                            </div>
                        </div>
                        <div class="ratings"> <span class="text-yellow fs-16">
                <i class="fas fa-star"></i>
              </span>
                            <span class="text-yellow fs-16">
                <i class="fas fa-star"></i>
              </span>
                            <span class="text-yellow fs-16">
                <i class="fas fa-star"></i>
              </span>
                            <span class="text-yellow fs-16">
                <i class="fas fa-star"></i>
              </span>
                            <span class="text-yellow fs-16">
                <i class="fas fa-star"></i>
              </span>
                            <span class="ml-2 text-light-white">2 days ago</span>
                        </div>
                        <p class="text-light-black">Product was good 
</p> <span class="text-light-white fs-12 food-order">Kathy
              ordered:</span>
                        <ul class="food">
                            
                            <li>
                                <button class="add-pro bg-dark">Bags <span class="close">+</span>
            </button>
                            </li>
                            
                            
                        </ul>
                    </div>
                  
                  
                  
                </div>
                <div class="col-12">
                    <div class="review-img">
                        <img src="Recycle%20centers_files/review-footer.png" class="img-fluid" alt="#">
                        <div class="review-text">
                            <h2 class="text-light-white mb-2 fw-600">Be one of the first to review</h2>
                            <p class="text-light-white">Order now and write a review to give others the inside scoop.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- restaurent reviews -->
    
    <!-- offer near -->
    
    <!-- modal boxes -->
    <div class="modal fade" id="address-box">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title fw-700">Change Address</h4>
                </div>
                <div class="modal-body">
                    <div class="location-picker">
                        <input type="text" class="form-control" placeholder="Enter a new address">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="search-box">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <div class="search-box p-relative full-width">
                        <input type="text" class="form-control" placeholder="Pizza, Burger, Chinese">
                    </div>
                </div>
                <div class="modal-body"></div>
            </div>
        </div>
    </div>
  
    
    <!-- product popup -->
    <div class="modal fade restaurent-popup" id="restaurent-popup">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <img src="Recycle%20centers_files/800x200.png" class="img-fluid full-width" alt="#">
                </div>
                <div class="modal-body">
                    <div class="name padding-10">
                        <h3 class="text-light-black fw-700 mb-2">Sausage Egg McMuffin - Meal</h3>
                        <h5 class="text-light-black fw-600 no-margin">$7.40</h5>
                    </div>
                    <div class="padding-10">
                        <p class="text-light-black no-margin">600-770 Cal.</p>
                    </div>
                    <div class="u-line">
                        <div class="product-quantity padding-10"> <span class="text-light-black fw-700 fs-16">Quantity</span>
                            <div class="input-group quantity">
                                <div class="input-group-append">
                                    <button class="minus-btn" type="button" name="button"> <i class="fas fa-minus"></i>
                  </button>
                                </div>
                                <input type="text" class="text-center" name="name" value="1">
                                <div class="input-group-prepend">
                                    <button class="plus-btn" type="button" name="button"><i class="fas fa-plus"></i>
                  </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sub product -->
                    <div class="additional-product">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="no-margin">
                                    <a class="card-link collapsed text-light-black fw-700" data-toggle="collapse" href="#additionalOne">
                                        <span>Select Breakfast Drink
                      <span class="text-light-white fw-500 fs-12 padding-tb-10">Select one (Required)</span></span>
                                    </a>
                                </h5>
                            </div>
                            <div id="additionalOne" class="collapse">
                                <div class="card-body padding-10">
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="no-margin">
                                    <a class="card-link collapsed text-light-black fw-700" data-toggle="collapse" href="#additionalTwo">
                                        <span>Select Breakfast Drink
                      <span class="text-light-white fw-500 fs-12 padding-tb-10">Select one (Required)</span></span>
                                    </a>
                                </h5>
                            </div>
                            <div id="additionalTwo" class="collapse">
                                <div class="card-body padding-10">
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="no-margin">
                                    <a class="card-link collapsed text-light-black fw-700" data-toggle="collapse" href="#additionalThree">
                                        <span>Select Breakfast Drink
                      <span class="text-light-white fw-500 fs-12 padding-tb-10">Select one (Required)</span></span>
                                    </a>
                                </h5>
                            </div>
                            <div id="additionalThree" class="collapse">
                                <div class="card-body padding-10">
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="no-margin">
                                    <a class="card-link collapsed text-light-black fw-700" data-toggle="collapse" href="#additionalFour">
                                        <span>Select Breakfast Drink
                      <span class="text-light-white fw-500 fs-12 padding-tb-10">Select one (Required)</span></span>
                                    </a>
                                </h5>
                            </div>
                            <div id="additionalFour" class="collapse">
                                <div class="card-body padding-10">
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                    <button class="add-pro">Small Premium Roast Coffee (0 Cal.) <span>+$0.59</span>
                    <span class="close">+</span>
                  </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sub product -->
                </div>
                <div class="modal-footer padding-10">
                    <button class="btn-second btn-submit">Add Bag : $7.40</button>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Place all Scripts Here -->
    <!-- jQuery -->
    <script src="Recycle%20centers_files/jquery_002.js"></script>
    <!-- Popper -->
    <script src="Recycle%20centers_files/popper.js"></script>
    <!-- Bootstrap -->
    <script src="Recycle%20centers_files/bootstrap.js"></script>
    <!-- Range Slider -->
    <script src="Recycle%20centers_files/ion.js"></script>
    <!-- Swiper Slider -->
    <script src="Recycle%20centers_files/swiper.js"></script>
    <!-- Nice Select -->
    <script src="Recycle%20centers_files/jquery.js"></script>
    <!-- magnific popup -->
    <script src="Recycle%20centers_files/jquery_003.js"></script>
    <!-- Maps -->
    <script src="Recycle%20centers_files/js"></script>
    <!-- sticky sidebar -->
    <script src="Recycle%20centers_files/sticksy.js"></script>
    <!-- Munch Box Js -->
    <script src="Recycle%20centers_files/munchbox.js"></script>
    <!-- /Place all Scripts Here -->



</body></html>