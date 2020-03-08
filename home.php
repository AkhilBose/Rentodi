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


<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="keywords" content="#">
	<meta name="description" content="#">
	<title>RENTODI/RENTAL HUB</title>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
	<link rel="apple-touch-icon-precomposed" href="#">
	<link rel="shortcut icon" href="#">
	<!-- Bootstrap -->
	<link href="home_files/bootstrap.css" rel="stylesheet">
	<!-- Fontawesome -->
	<link href="home_files/font-awesome.css" rel="stylesheet">
	<!-- Flaticons -->
	<link href="home_files/flaticon.css" rel="stylesheet">
	<!-- Swiper Slider -->
	<link href="home_files/swiper.css" rel="stylesheet">
	<!-- Range Slider -->
	<link href="home_files/ion.css" rel="stylesheet">
	<!-- magnific popup -->
	<link href="home_files/magnific-popup.css" rel="stylesheet">
	<!-- Nice Select -->
	<link href="home_files/nice-select.css" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link href="home_files/style.css" rel="stylesheet">
	<!-- Custom Responsive -->
	<link href="home_files/responsive.css" rel="stylesheet">
	<!-- Color Change -->
	<link rel="stylesheet" class="color-changing" href="home_files/color2.css">
	<!-- Google Fonts -->
	<link href="home_files/css.css" rel="stylesheet">
	<!-- place -->
	<script type="text/javascript" charset="UTF-8" src="home_files/common.js"></script>
	<script type="text/javascript" charset="UTF-8" src="home_files/util.js"></script>
	<style>
.cart-dropdown .cart-detail-box,
.notification-btn .notification-dropdown,
.user-dropdown1 {
    position: absolute;
    background: #fff;
    border: 1px solid #ccc;
    border-radius: 3px;
    top: 100%;
    left: 15%;
    right: 0;
    width: 225px;
    opacity: 0;
    visibility: hidden;
    transition: 0.3s;
}
.cart-dropdown .cart-detail-box,
.notification-btn .notification-dropdown {
    left: auto;
    right: -15%;
}
.header .user-details:hover>.user-dropdown1 {
    opacity: 1;
    visibility: visible;
    left: -50%;
    transition: 0.3s;
}
.user-dropdown1 ul {
    padding: 10px 15px;
    display: inline-table;
}
.user-dropdown1 ul>li {
    display: inline-block;
    width: 50%;
    position: relative;
    float: left;
    padding: 15px 10px;
    height: 85px;
    margin-bottom: 15px;
    padding-bottom: 0;
}
.header .user-details .user-dropdown1 ul>li>a {
    display: block;
}
.user-dropdown1 ul>li>a .icon {
    display: block;
    margin: 0 auto;
    text-align: center;
}
.user-dropdown1 ul>li>a .icon i {
    font-size: 30px;
}
.user-details .user-dropdown1 ul>li>a span.details {
    display: block;
    margin: 0 auto;
    text-align: center;
    padding-right: 0;
    font-size: 12px;
    font-weight: 500;
}
.user-dropdown1 .user-footer {
    display: flex;
    position: relative;
    width: 100%;
    padding: 15px 0;
    text-align: center;
    align-items: center;
    justify-content: center;
    border-top: 1px solid #ccc;
    font-weight: 500;
}
.user-dropdown1 .user-footer span {
    margin-right: 8px;
}
.header .right-side,
.header .user-details1>a,
.header .gem-points a,
.header .right-side>.cart-btn>a {
    padding: 14px 0;
    justify-content: center;
    z-index: 1;
    display: flex;
    align-items: center;
}
.header .logo img {
    transform: scale(1.3);
}
.header .right-side {
    padding: 0;
}
.header .gem-points i,
.header .right-side .cart-btn a i {
    font-size: 30px;
}
.header .user-details1>a>span,
.header .gem-points span {
    margin-left: 8px;
}
.header .right-side .catring,
.header .right-side .user-details1,
.header .right-side .user-details1,
.header .right-side .gem-points,
.header .right-side .cart-btn {
    margin: 0 15px;
}
.header .right-side .cart-btn:last-child {
    margin-right: 0;
}
.header .right-side .user-details1>a>span {
    padding-right: 30px;
}
.header .mobile-address .delivery-add span,
.header .search-form span,
.sorting-addressbox .full-address {
    font-size: 16px;
    font-weight: 600;
    padding: 8px 0;
    position: relative;
}
.header .mobile-address .delivery-add,
.header .search-form a.delivery-add {
    display: flex;
    padding: 8px 0;
    white-space: nowrap;
}
.header .search-form span.icon {
    margin-right: 10px;
}
.header .mobile-address .delivery-add span.address,
.header .search-form span.address {
    padding-right: 25px;
}
.header .mobile-address .delivery-add span.address:before,
.header .mobile-address .delivery-add span.address:after,
.header .search-form span.address:before,
.header .search-form span.address:after,
.header .user-details1>a>span:before,
.header .user-details1>a>span:after {
    transition: all 0.3s ease-in-out;
    background-color: #ff0018;
    position: absolute;
    content: '';
    height: 2px;
    width: 8px;
    top: 20px;
}
.header .user-details1>a>span:before,
.header .user-details1>a>span:after {
    top: 30px;
}
.header .user-details1>a>span:before,
.header .mobile-address .delivery-add span.address:before,
.header .search-form span.address:before {
    transform: rotate(45deg);
    right: 10px;
}
.header .user-details1>a>span:after,
.header .mobile-address .delivery-add span.address:after,
.header .search-form span.address:after {
    transform: rotate(-45deg);
    right: 6px;
}
.header .search-form a.delivery-add.open span.address:before {
    transform: rotate(-45deg);
}
.header .search-form a.delivery-add.open span.address:after {
    transform: rotate(45deg);
}
.location-picker,
.header .search-form .search-box {
    display: flex;
    align-items: center;
}
.header .search-form .search-box input {
    padding: .375rem 10px .375rem 40px;
    border-radius: 0;
}
.header .right-side .cart-btn .user-alert-cart,
.header .right-side .cart-btn .user-alert-notification {
    background: #bc2634;
    color: #fff;
    position: absolute;
    border-radius: 50%;
    right: auto;
    color: #fff;
    display: flex;
    align-items: center;
    padding: 6px;
    line-height: normal;
    height: auto;
    font-size: 10px;
    top: 14px;
    margin-left: 8px;
}
.header .right-side .cart-btn .user-alert-cart {
    height: 18px;
    right: 6px;
}
.header .search-form .search-box:before {
    content: '\f002';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1;
    position: absolute;
    padding: 0 8px;
    font-size: 18px;
    color: #6b6b83;
}
.location-picker {
    position: absolute;
    top: 100%;
    left: 0;
    width: 50%;
    display: none;
}
.location-picker input {
    padding: 20px 10px 20px 40px;
    border-radius: 0;
}
.location-picker:before {
    content: '\f3c5';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1;
    position: absolute;
    padding: 0 15px;
    font-size: 18px;
    color: #6b6b83;
    pointer-events: none;
}
.location-picker.open,
.sorting-addressbox .btns {
    display: flex;
}
.cart-dropdown .cart-detail-box,
.notification-btn .notification-dropdown,
.user-dropdown {
    position: absolute;
    background: #fff;
    border: 1px solid #ccc;
    border-radius: 3px;
    top: 100%;
    left: 15%;
    right: 0;
    width: 225px;
    opacity: 0;
    visibility: hidden;
    transition: 0.3s;
}
.cart-dropdown .cart-detail-box,
.notification-btn .notification-dropdown {
    left: auto;
    right: -15%;
}
.header .user-details1:hover>.user-dropdown {
    opacity: 1;
    visibility: visible;
    left: -50%;
    transition: 0.3s;
}
.user-dropdown ul {
    padding: 10px 15px;
    display: inline-table;
}
.user-dropdown ul>li {
    display: inline-block;
    width: 50%;
    position: relative;
    float: left;
    padding: 15px 10px;
    height: 85px;
    margin-bottom: 15px;
    padding-bottom: 0;
}
.header .user-details1 .user-dropdown ul>li>a {
    display: block;
}
.user-dropdown ul>li>a .icon {
    display: block;
    margin: 0 auto;
    text-align: center;
}
.user-dropdown ul>li>a .icon i {
    font-size: 30px;
}
.user-details1 .user-dropdown ul>li>a span.details {
    display: block;
    margin: 0 auto;
    text-align: center;
    padding-right: 0;
    font-size: 12px;
    font-weight: 500;
}        
</style>
</head>

<body>
	<!-- Navigation -->
    
    <?php include "topbar.php"; ?>
    
    
	<div class="main-sec"></div>
	<!-- Navigation -->
	<!-- slider -->
	<section class="about-us-slider swiper-container p-relative swiper-container-initialized swiper-container-horizontal" style="cursor: grab;">
		<div class="swiper-wrapper" style="transform: translate3d(-4047px, 0px, 0px); transition-duration: 0ms;">
			<div class="swiper-slide slide-item swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" style="width: 1349px; height: 200px;">
				<img src="home_files/banner-6.jpg" class="img-fluid full-width" alt="Banner">
<!--
				<div class="transform-center">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-lg-7 align-self-center">
								<div class="right-side-content text-right">
									<h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
									<h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="btn-second btn-submit">Learn More.</a>
								</div>
							</div>
						</div>
					</div>
				</div>
-->
			</div>
			<div class="swiper-slide slide-item swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 1349px;height: 200px;">
				<img src="home_files/banner-4.jpg" class="img-fluid full-width" alt="Banner">
<!--
				<div class="transform-center">
					<div class="container">
						<div class="row justify-content-start">
							<div class="col-lg-7 align-self-center">
								<div class="right-side-content">
									<h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
									<h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="btn-second btn-submit">Learn More.</a>
								</div>
							</div>
						</div>
					</div>
				</div>
-->
			</div>
			<div class="swiper-slide slide-item swiper-slide-prev" data-swiper-slide-index="1" style="width: 1349px;height: 200px;">
				<img src="home_files/banner-5.jpg" class="img-fluid full-width" alt="Banner">
<!--
				<div class="transform-center">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8 align-self-center">
								<div class="right-side-content text-center">
									<h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
									<h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="btn-second btn-submit">Learn More.</a>
								</div>
							</div>
						</div>
					</div>
				</div>
-->
			</div>
			<div class="swiper-slide slide-item swiper-slide-active" data-swiper-slide-index="2" style="width: 1349px;height: 200px;">
				<img src="home_files/banner-6.jpg" class="img-fluid full-width" alt="Banner">
<!--
				<div class="transform-center">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-lg-7 align-self-center">
								<div class="right-side-content text-right">
									<h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
									<h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="btn-second btn-submit">Learn More.</a>
								</div>
							</div>
						</div>
					</div>
				</div>
-->
			</div>
			<div class="swiper-slide slide-item swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 1349px;height: 200px;">
				<img src="home_files/banner-4.jpg" class="img-fluid full-width" alt="Banner">
<!--
				<div class="transform-center">
					<div class="container">
						<div class="row justify-content-start">
							<div class="col-lg-7 align-self-center">
								<div class="right-side-content">
									<h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
									<h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="btn-second btn-submit">Learn More.</a>
								</div>
							</div>
						</div>
					</div>
				</div>
-->
			</div>
		</div>
		<!-- Add Arrows -->
		
		<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
	</section>
	<!-- slider -->

	<!-- your previous order -->
	<section class="recent-order section-padding">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-header-left">
						<h3 class="text-light-black header-title title">CATEGORY<span class="fs-14"><a href="file:///E:/Gargo%20site/Order%20tracking.html"></a></span></h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="product-box mb-md-20">
						<div class="product-img">
							<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
								<img src="div3.jpg" class="img-fluid full-width" alt="product-img">
							</a>
						</div>
						<div class="product-caption">
							<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">ELECTRONICS</a></h6>
							<p class="text-light-white"></p>
							<div class="product-btn">
								<a href="file:///E:/Gargo%20site/Order%20tracking.html" class="btn-first white-btn full-width text-light-green fw-600">VIEW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="product-box mb-md-20">
						<div class="product-img">
							<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
								<img src="div4.jpg" class="img-fluid full-width" alt="product-img">
							</a>
						</div>
						<div class="product-caption">
							<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black "> FURNITURE</a></h6>
							<!-- <p class="text-light-white">Rs.30/Kilogram</p> -->
							<div class="product-btn">
								<a href="file:///E:/Gargo%20site/Order%20tracking.html" class="btn-first white-btn full-width text-light-green fw-600">VIEW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="product-box mb-md-20">
						<div class="product-img">
							<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
								<img src="div2.jpg" class="img-fluid full-width" alt="product-img">
							</a>
						</div>
						<div class="product-caption">
							<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black "> VEHICLES</a></h6>
							<!-- <p class="text-light-white">Rs.40/Kilogram</p> -->
							<div class="product-btn">
								<a href="file:///E:/Gargo%20site/Order%20tracking.html" class="btn-first white-btn full-width text-light-green fw-600">VIEW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="product-box mb-md-20">
						<div class="product-img">
							<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
								<img src="div1.jpg" class="img-fluid full-width" alt="product-img">
							</a>
						</div>
						<div class="product-caption">
							<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black "> </a>PROPERTY</h6>
							<!-- <p class="text-light-white">Rs.35/Kilogram</p> -->
							<div class="product-btn">
								<a href="file:///E:/Gargo%20site/Order%20tracking.html" class="btn-first white-btn full-width text-light-green fw-600">VIEW</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- your previous order -->
	<!-- Explore collection -->
	<section class="ex-collection section-padding">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-header-left">
						<h3 class="text-light-black header-title title"> </h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="ex-collection-box mb-xl-20">
						<img src="cam.jpg" class="img-fluid full-width" alt="image">
						<div class="category-type overlay padding-15"> <a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="category-btn">Top rated</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="ex-collection-box mb-xl-20">
						<img src="card2.jpg" class="img-fluid full-width" alt="image">
						<div class="category-type overlay padding-15"> <a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="category-btn">Top rated</a>
						</div>
					</div>
				</div>
			</div>
            

            
			<!-- advertisement banner-->
			<div class="row">
<!--
				<div class="col-lg-3 col-md-4">
					<div class="large-product-box mb-xl-20 p-relative">
						<img src="home_files/Banner-2.jpg" class="img-fluid full-width" alt="image">
						<div class="category-type overlay padding-15">
							<button class="category-btn">Most popular near you</button> <a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
						</div>
					</div>
				</div>
-->
				<div class="col-lg-12 col-md-12">
					<div class="row">
                        
                      
                        <?php
                        
                        
                        $q =mysqli_query($con, "select * from center");
                        while ($r = mysqli_fetch_array($q))
                        {
                         $cid = $r['id'];
                        ?>
                         
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="<?php echo $r['mainim']; ?>" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
										
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="recycle_centers.php?cid=<?php echo $cid; ?>" class="text-light-black "><?php echo $r['cname']; ?></a></h6>
											<div class="tags"> <span class="text-custom-white rectangle-tag bg-green">INR
											<?php echo $r['price']; ?>
											</span>
										</div>
									</div>
									<p class="text-light-white"><?php echo $r['caddr']; ?></p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">4.5</span>
											<span class="text-light-white price"><?php echo $r['owner']; ?></span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/004-leaf.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
                        
                        
                        <?php
                        }
                            ?>
                        
                        
                        
<!--
                        
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-26.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Flavor Town</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
												2.1
											</span>
										</div>
									</div>
									<p class="text-light-white">Breakfast, Lunch &amp; Dinner</p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/007-chili-1.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/004-leaf.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/009-lemon.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-27.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<span class="type-tag bg-gradient-green text-custom-white">
												Trending
											</span>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black">Big Bites</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
												4.5
											</span>
										</div>
									</div>
									<p class="text-light-white">Pizzas, Fast Food</p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/005-chef.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/004-leaf.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-28.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<span class="type-tag bg-gradient-green text-custom-white">
												Trending
											</span>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Smile N’ Delight</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
												4.5
											</span>
										</div>
									</div>
									<p class="text-light-white">Desserts, Beverages</p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/005-chef.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/008-protein.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/009-lemon.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
						
                       
-->
<!--
                        
                        
                        
                        <div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-15.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
													20%
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black">Lil Johnny’s</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
												2.1
											</span>
										</div>
									</div>
									<p class="text-light-white">Continental &amp; Mexican</p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/008-protein.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-16.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<span class="text-custom-white type-tag bg-gradient-orange">
												NEW
											</span>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Choice Foods</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
												4.5
											</span>
										</div>
									</div>
									<p class="text-light-white">Indian, Chinese, Tandoor</p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/005-chef.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/008-protein.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/009-lemon.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>		
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-16.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<span class="text-custom-white type-tag bg-gradient-orange">
												NEW
											</span>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Choice Foods</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
												4.5
											</span>
										</div>
									</div>
									<p class="text-light-white">Indian, Chinese, Tandoor</p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/005-chef.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/008-protein.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/009-lemon.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>			
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-16.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<span class="text-custom-white type-tag bg-gradient-orange">
												NEW
											</span>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Choice Foods</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
												4.5
											</span>
										</div>
									</div>
									<p class="text-light-white">Indian, Chinese, Tandoor</p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/005-chef.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/008-protein.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/009-lemon.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
                        
                        
-->
                
                        
                        
					</div>
				</div>
			</div>
			<!-- advertisement banner-->
            
<!--
            
			<div class="row">
				<div class="col-12">
					<div class="banner-adv2 mb-xl-20">
						<img src="home_files/vbanner-1.jpg" class="img-fluid full-width" alt="banner"> <span class="text">Unlimited Free Delivery with. <img src="home_files/tag.jpg" alt="logo">
							<a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="btn-second btn-submit">Try 30 Days FREE</a></span>
						<span class="close-banner"></span>
					</div>
				</div>
			</div>
            
            
-->
            
			<!-- advertisement banner-->
            
<!--
            
            
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-17.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
													10%
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Great Burger</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">
												3.1
											</span>
										</div>
									</div>
									<p class="text-light-white">American, Fast Food</p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/004-leaf.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/006-chili.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/005-chef.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/008-protein.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/009-lemon.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-18.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Flavor Town</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
												2.1
											</span>
										</div>
									</div>
									<p class="text-light-white">Breakfast, Lunch &amp; Dinner</p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/007-chili-1.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/004-leaf.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/009-lemon.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-19.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<span class="type-tag bg-gradient-green text-custom-white">
												Trending
											</span>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Big Bites</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
												4.5
											</span>
										</div>
									</div>
									<p class="text-light-white">Pizzas, Fast Food</p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/005-chef.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/004-leaf.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-20.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<span class="type-tag bg-gradient-green text-custom-white">
												Trending
											</span>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Smile N’ Delight</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
												4.5
											</span>
										</div>
									</div>
									<p class="text-light-white">Desserts, Beverages</p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/005-chef.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/008-protein.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/009-lemon.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-21.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<div class="custom-tag"> <span class="text-custom-white rectangle-tag bg-gradient-red">
													20%
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Lil Johnny’s</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
												2.1
											</span>
										</div>
									</div>
									<p class="text-light-white">Continental &amp; Mexican</p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/008-protein.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-22.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<span class="text-custom-white type-tag bg-gradient-orange">
												NEW
											</span>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Choice Foods</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
												4.5
											</span>
										</div>
									</div>
									<p class="text-light-white">Indian, Chinese, Tandoor </p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/005-chef.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/008-protein.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/009-lemon.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-22.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<span class="text-custom-white type-tag bg-gradient-orange">
												NEW
											</span>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Choice Foods</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
												4.5
											</span>
										</div>
									</div>
									<p class="text-light-white">Indian, Chinese, Tandoor </p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/005-chef.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/008-protein.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/009-lemon.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="product-box mb-xl-20">
								<div class="product-img">
									<a href="file:///E:/Gargo%20site/Recycle%20centers.html">
										<img src="home_files/shop-22.jpg" class="img-fluid full-width" alt="product-img">
									</a>
									<div class="overlay">
										<div class="product-tags padding-10"> <span class="circle-tag">
												<img src="home_files/013-heart-1.svg" alt="tag">
											</span>
											<span class="text-custom-white type-tag bg-gradient-orange">
												NEW
											</span>
										</div>
									</div>
								</div>
								<div class="product-caption">
									<div class="title-box">
										<h6 class="product-title"><a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="text-light-black ">Choice Foods</a></h6>
										<div class="tags"> <span class="text-custom-white rectangle-tag bg-green">
												4.5
											</span>
										</div>
									</div>
									<p class="text-light-white">Indian, Chinese, Tandoor </p>
									<div class="product-details">
										<div class="price-time"> <span class="text-light-black time">30-40 min</span>
											<span class="text-light-white price">$10 min</span>
										</div>
										<div class="rating"> <span>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
												<i class="fas fa-star text-yellow"></i>
											</span>
											<span class="text-light-white text-right">4225 ratings</span>
										</div>
									</div>
									<div class="product-footer"> <span class="text-custom-white square-tag">
											<img src="home_files/005-chef.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/008-protein.svg" alt="tag">
										</span>
										<span class="text-custom-white square-tag">
											<img src="home_files/009-lemon.svg" alt="tag">
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="large-product-box mb-xl-20 p-relative">
						<img src="home_files/Banner-3.jpg" class="img-fluid full-width" alt="image">
						<div class="category-type overlay padding-15">
							<button class="category-btn">Most popular near you</button> <a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="btn-first white-btn text-light-black fw-600 full-width">See all</a>
						</div>
					</div>
				</div>
			</div>
            
            
-->
<!--
            
			<div class="row">
				<div class="col-md-6">
					<div class="ex-collection-box mb-sm-20">
						<img src="home_files/collection-3.jpg" class="img-fluid full-width" alt="image">
						<div class="category-type overlay padding-15"> <a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="category-btn">Top rated</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="ex-collection-box">
						<img src="home_files/collection-4.jpg" class="img-fluid full-width" alt="image">
						<div class="category-type overlay padding-15"> <a href="file:///E:/Gargo%20site/Recycle%20centers.html" class="category-btn">Top rated</a>
						</div>
					</div>
				</div>
			</div>
		
        
-->
        
        </div>
	</section>
	<!-- Explore collection -->

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

	
	<!-- Place all Scripts Here -->
	<!-- jQuery -->
	<script src="home_files/jquery_002.js"></script>
	<!-- Popper -->
	<script src="home_files/popper.js"></script>
	<!-- Bootstrap -->
	<script src="home_files/bootstrap.js"></script>
	<!-- Range Slider -->
	<script src="home_files/ion.js"></script>
	<!-- Swiper Slider -->
	<script src="home_files/swiper.js"></script>
	<!-- Nice Select -->
	<script src="home_files/jquery.js"></script>
	<!-- magnific popup -->
	<script src="home_files/jquery_003.js"></script>
	<!-- Maps -->
	<script src="home_files/js"></script>
	<!-- sticky sidebar -->
	<script src="home_files/sticksy.js"></script>
	<!-- Munch Box Js -->
	<script src="home_files/munchbox.js"></script>
	<!-- /Place all Scripts Here -->



</body>

</html>
