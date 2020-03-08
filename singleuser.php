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


 if (isset($_POST['submit']))
 {
         $pname = mysqli_real_escape_string($con, $_POST['pname']);
 		$addr = mysqli_real_escape_string($con, $_POST['addr']);
 		$price = mysqli_real_escape_string($con, $_POST['price']);
 		$cat = mysqli_real_escape_string($con, $_POST['cat']);
 		$des= mysqli_real_escape_string($con, $_POST['des']);
 		$img= mysqli_real_escape_string($con, $_POST['img']);
 		echo 'hi';
 		die('died');
		$query1 = " INSERT INTO `product`( cid, pname, cat , price, dest, img) VALUES ('1','$pname','Electronics','1000','hihiii','image')";
		$result1 = mysqli_query($con,$query1); 
		 if($result1)
		 {echo $price;}
		 else echo "error";
		

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
	<title>Gargo | Add Recycle Centers</title>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
	<link rel="apple-touch-icon-precomposed" href="#">
	<link rel="shortcut icon" href="#">
	<!-- Bootstrap -->
	<link href="Add%20Recyclecenter_files/bootstrap.css" rel="stylesheet">
	<!-- Fontawesome -->
	<link href="Add%20Recyclecenter_files/font-awesome.css" rel="stylesheet">
	<!-- Flaticons -->
	<link href="Add%20Recyclecenter_files/flaticon.css" rel="stylesheet">
	<!-- Swiper Slider -->
	<link href="Add%20Recyclecenter_files/swiper.css" rel="stylesheet">
	<!-- Range Slider -->
	<link href="Add%20Recyclecenter_files/ion.css" rel="stylesheet">
	<!-- magnific popup -->
	<link href="Add%20Recyclecenter_files/magnific-popup.css" rel="stylesheet">
	<!-- Nice Select -->
	<link href="Add%20Recyclecenter_files/nice-select.css" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link href="Add%20Recyclecenter_files/style.css" rel="stylesheet">
	<!-- Custom Responsive -->
	<link href="Add%20Recyclecenter_files/responsive.css" rel="stylesheet">
	<!-- Color Change -->
	<link rel="stylesheet" class="color-changing" href="Add%20Recyclecenter_files/color2.css">
	<!-- Google Fonts -->
	<link href="Add%20Recyclecenter_files/css.css" rel="stylesheet">
	<!-- place -->
	<script type="text/javascript" charset="UTF-8" src="Add%20Recyclecenter_files/common.js"></script>
	<script type="text/javascript" charset="UTF-8" src="Add%20Recyclecenter_files/util.js"></script>
</head>

<body>
	<!-- Navigation -->
	 <?php include "topbar.php"; ?>
	<div class="main-sec"></div>
	<!-- Navigation -->
	<section class="register-restaurent-sec section-padding bg-light-theme">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9">
					<div class="sidebar-tabs main-box padding-20 mb-md-40">
						<div id="add-restaurent-tab" class="step-app">
							<div class="row">
								<!-- <div class="col-xl-4 col-lg-5 mb-md-40">
									<ul class="step-steps steps-1">
										<li class="stepbtn done active" id="step1">
											<a href="#"> <span class="number"></span>
												<span class="step-name">General Info</span>
											</a>
										</li>
							
									</ul>
									<ul class="step-steps steps-2">
										<li class="add-res-tab done active" id="stepbtn1"> <a href="#" class="add-res-tab">Product Info</a>
										</li>
									
									</ul>
									<div class="step-footer">
									
										<button class="btn-first white-btn none" id="finish-1" style="display: inline-block;">Finish</button>
									</div>
								</div> -->
								<div class="col-xl-8 col-lg-7">
									<div class="step-content">
										<div class="step-tab-panel active" id="steppanel1">
											<div class="general-sec">
												<form>
													<div class="row">
														<div class="col-12">
															<h5 class="text-light-black fw-700">Product Information</h5>
														</div>
<!--
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Owner Name <sup class="fs-16">*</sup>
																</label>
																<input type="text" name="#" class="form-control form-control-submit" placeholder="User Name">
															</div>
														</div>	
-->
															<script>
														function myFunction() {
  var x = document.getElementById("sub");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
														</script>
														<form action="" method="post">
																<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Product Name <sup class="fs-16">*</sup>
																</label>
																<input type="text" name="pname" class="form-control form-control-submit" placeholder="Product Name" required="">
															</div>
														</div>
																			<div class="col-12">
															<div class="form-group">
																<label class="text-light-black fw-700">Category <sup class="fs-16">*</sup>
																</label>
																<select class="form-control form-control-submit custom-select-2 full-width" style="display: none;">
																	<option value="" selected="">Select Category</option>
																	<option value="India" name="cat">Electronics</option>

																	<option value="canada" data-name="">Property</option>
																	<option value="france" data-name="">Vehicles</option>
																	<option value="india" data-name="">Furniture</option>
																	<option value="italy" data-name="">Utensils</option>
																	<option value="spain" data-name="">Costumes</option>
																	<option value="united-kingdom" data-name="">Events</option>
																	

																</select>
																<div class="nice-select form-control form-control-submit custom-select-2 full-width" tabindex="0"><span class="current" >Select Category</span>
																	<ul class="list">
																		<li data-value="" class="option selected">Select Country</li>
															<option value="India" data-name="" onclick="myFunction()">Electronics</option>

																	<option value="canada" data-name="">Property</option>
																	<option value="france" data-name="">Vehicles</option>
																	<option value="india" data-name="">Furniture</option>
																	<option value="italy" data-name="">Utensils</option>
																	<option value="spain" data-name="">Costumes</option>
																	<option value="united-kingdom" data-name="">Events</option>

																	</ul>
																</div>
															</div>
														</div>
																			<div class="col-md-6" id="sub" style="display : none;">
															<div class="form-group">
																<label class="text-light-black fw-700">Under Electronics</label>
																<select class="form-control form-control-submit custom-select-2 full-width" style="display: none;">
																	<option value="" selected="selected">Select Subcategory</option>
																	<option value="Kerala">Camera</option>
																	<option value="Tamil-Nadu">Led Display</option>
																	<option value="Delhi">Laptops</option>
																	<option value="uttar-pradesh">Projector</option>
																	<option value="uttar-pradesh">Refrigerator</option>
																	<option value="uttar-pradesh">Light</option>
																	<option value="uttar-pradesh">Speakers</option>
																</select>
																<div class="nice-select form-control form-control-submit custom-select-2 full-width" tabindex="0"><span class="current">Under Electronics</span>
																	<ul class="list">
																		<li data-value="" class="option selected">Select Subcategory</li>
																<option value="Kerala">Camera</option>
																	<option value="Tamil-Nadu">Led Display</option>
																	<option value="Delhi">Laptops</option>
																	<option value="uttar-pradesh">Projector</option>
																	<option value="uttar-pradesh">Refrigerator</option>
																	<option value="uttar-pradesh">Light</option>
																	<option value="uttar-pradesh">Speakers</option>
																	</ul>
																</div>
															</div>
														</div>
																<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Price <sup class="fs-16">*</sup>
																</label>
																<input type="text" name="price" class="form-control form-control-submit" placeholder="">
															</div>
														</div>
																		<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Address</label>
																<input type="text" name="addr" class="form-control form-control-submit" placeholder="Enter Your Address">
															</div>
														</div>
														<div class="col-md-6">
														<div class="form-group" onclick="myFunction1()">
    <label for="exampleFormControlFile1" ><span >Upload product images</span></label>
    <input type="file" name= "img" class="form-control-file" id="exampleFormControlFile1">
  </div>
														</div>		
																<div class="col-md-6" id="newpic" style="display:none;">
														<div class="form-group" onclick="myFunction2()">
    <label for="exampleFormControlFile1">Upload next image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
														</div>			
														<div class="col-md-6" id="newpic1" style="display:none;">
														<div class="form-group">
    <label for="exampleFormControlFile1">Upload next image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
														</div>
																								<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Discription </label>
																<input type="text" name="des" class="form-control form-control-submit" placeholder="Enter description about product">
															</div>
														</div>
																					<script>
														function myFunction1() {
  var x = document.getElementById("newpic");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}									
																						function myFunction2() {
  var x = document.getElementById("newpic1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
														</script>
<!--
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Phone No</label>
																<input type="text" name="#" class="form-control form-control-submit" placeholder="i.e 91 7356895456">
															</div>
														</div>
-->
<!--
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Manager Name</label>
																<input type="text" name="#" class="form-control form-control-submit" placeholder="i.e Alard Willaim">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Manager Contact phone</label>
																<input type="text" name="#" class="form-control form-control-submit" placeholder="i.e +1 321 828 6662">
															</div>
														</div>
-->
<!--
														<div class="col-md-12">
															<div class="form-group">
																<label class="text-light-black fw-700">Contact Email</label>
																<input type="email" name="#" class="form-control form-control-submit" placeholder="i.e user@example.com ">
															</div>
														</div>
-->
													<div class="row">
														<div class="col-12">
															<div class="u-line mb-xl-20"></div>
														</div>
													</div>
													<div class="row">
														<div class="col-12">
															<h5 class="text-light-black fw-700">Location</h5>
														</div>
														<div class="col-12">
															<div class="form-group">
																<label class="text-light-black fw-700">Country <sup class="fs-16">*</sup>
																</label>
																<select class="form-control form-control-submit custom-select-2 full-width" style="display: none;">
																	<option value="" selected="selected">Select Country</option>
																	<option value="India" data-name="">India</option>
<!--
																	<option value="canada" data-name="">Canada</option>
																	<option value="france" data-name="">France</option>
																	<option value="india" data-name="">India</option>
																	<option value="italy" data-name="">Italy</option>
																	<option value="spain" data-name="">Spain</option>
																	<option value="united-kingdom" data-name="">United Kingdom</option>
																	<option value="united-states" data-name="">United States</option>
-->
																</select>
																<div class="nice-select form-control form-control-submit custom-select-2 full-width" tabindex="0"><span class="current">Select Country</span>
																	<ul class="list">
																		<li data-value="" class="option selected">Select Country</li>
																		<li data-value="India" class="option">India</li>
<!--
																		<li data-value="canada" class="option">Canada</li>
																		<li data-value="france" class="option">France</li>
																		<li data-value="india" class="option">India</li>
																		<li data-value="italy" class="option">Italy</li>
																		<li data-value="spain" class="option">Spain</li>
																		<li data-value="united-kingdom" class="option">United Kingdom</li>
																		<li data-value="united-states" class="option">United States</li>
-->
																	</ul>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">State</label>
																<select class="form-control form-control-submit custom-select-2 full-width" style="display: none;">
																	<option value="" selected="selected">Select State</option>
																	<option value="Kerala">Kerala</option>
																	<option value="Tamil-Nadu">Tamil Nadu</option>
																	<option value="Delhi">Karnataka</option>
																	<option value="uttar-pradesh">Uttar Pradesh</option>
																</select>
																<div class="nice-select form-control form-control-submit custom-select-2 full-width" tabindex="0"><span class="current">Select State</span>
																	<ul class="list">
																		<li data-value="" class="option selected">Select State</li>
																		<option value="Kerala">Kerala</option>
																	<option value="Tamil-Nadu">Tamil Nadu</option>
																	<option value="Delhi">Delhi</option>
																	<option value="uttar-pradesh">Uttar Pradesh</option>
																	</ul>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">City</label>
																<select class="form-control form-control-submit custom-select-2 full-width" style="display: none;">
																	<option value="" selected="selected">Select City</option>
																	<option value="Trivandrum">Trivandrum</option>
																	<option value="Ernakulam">Ernakulam</option>
																	<option value="Thrissur">Thrissur</option>
																</select>
																<div class="nice-select form-control form-control-submit custom-select-2 full-width" tabindex="0"><span class="current">Select City</span>
																	<ul class="list">
																		<li data-value="" class="option selected">Select City</li>
																<option value="Trivandrum">Trivandrum</option>
																	<option value="Ernakulam">Ernakulam</option>
																	<option value="Thrissur">Thrissur</option>
																	</ul>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Latitude</label>
																<input type="text" name="#" class="form-control form-control-submit" value="40.4167754">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Longitude</label>
																<input type="text" name="#" class="form-control form-control-submit" value="-3.7037901999999576">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Find On Map</label>
																<input type="text" name="#" class="form-control form-control-submit" placeholder="Type Your Address">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<div class="form-group"></div>
																<button type="submit" class="btn-second btn-submit">Search Location</button>
															</div>
														</div>
														<div class="col-md-12">
															<div class="form-group">
																<iframe id="locmap" class="w-100" src="https://maps.google.com/maps?q=Kerala&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" height="300"></iframe>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-12">
															<div class="u-line mb-xl-20"></div>
														</div>
													</div>
<!--
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="text-light-black fw-700">Delivery/Pickup</label>
																<select class="form-control form-control-submit custom-select-2 full-width" style="display: none;">
																	<option value="delivery">Delivery</option>
																	<option value="pickup">Pickup</option>
																	<option value="delivery_and_pickup" selected="selected">Delivery &amp; Pickup</option>
																</select>
																<div class="nice-select form-control form-control-submit custom-select-2 full-width" tabindex="0"><span class="current">Delivery &amp; Pickup</span>
																	<ul class="list">
																		<li data-value="delivery" class="option">Delivery</li>
																		<li data-value="pickup" class="option">Pickup</li>
																		<li data-value="delivery_and_pickup" class="option selected focus">Delivery &amp; Pickup</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="col-md-12">
															<div class="form-group">
																<label class="text-light-black fw-700">Cuisines <sub>*</sub>
																</label>
																<input type="text" class="form-control form-control-submit" placeholder="Cuisines">
															</div>
														</div>
													</div>
-->
													<div class="row">
														<div class="col-12">
															<div class="u-line mb-xl-20"></div>
														</div>
													</div>
													<div class="row">
														<div class="col-12">
															<h5 class="text-light-black fw-700">Account Information</h5>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Username</label>
																<input type="text" class="form-control form-control-submit" placeholder="Username">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Email</label>
																<input type="email" class="form-control form-control-submit" placeholder="Email I'D">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-12">
															<div class="u-line mb-xl-20"></div>
														</div>
													</div>
													<div class="row">
														<div class="col-12">
															<label class="custom-checkbox text-light-black fw-700">
																<input type="checkbox" name="#"> <span class="checkmark"></span>By Registering You Confirm That You Accept The Terms &amp; Conditions And Privacy Policy</label>
														</div>
													</div>
														<div class="row">
														<div class="col-md-6">
															<div class="form-group" id="">
																
																<button id="finish-1" type="submit" name="submit" class="btn-second btn-submit">Submit</button>
													
															</div>
														</div>
													</div>
													</form>	
												
														<div class="row">
														<div class="col-md-6">
															<div class="form-group" id="">
																	<li class="stepbtn " id="step4" style="list-style-type: none;">
											<a href="#"> <span class="number"></span>
												<span class="step-name btn-second btn-submit">Preview</span>
											</a>
											
										</li>
															</div>
														</div>
													</div>
												
											</div>
										</div>
										
										<div class="step-tab-panel" id="steppanel2">
											<div class="package-sec">
												<div class="row">
													<div class="col-lg-6">
														<div class="package-box main-box">
															<div class="package-img">
																<a href="#">
																	<img src="Add%20Recyclecenter_files/package-1.jpg" class="img-fluid full-width" alt="package image">
																</a>
															</div>
															<div class="package-caption padding-20 bg-black">
																<div class="package-item-first">
																	<div class="pack-type fs-18 text-custom-white">Silver Package</div>
																	<div class="pack-type fs-18 text-light-green">$ 18</div>
																</div>
																<ul>
																	<li class="text-custom-white"><span>10 days</span>
																	</li>
																	<li class="text-custom-white"><span>1 dip free (with every meal)</span>
																	</li>
																	<li class="text-custom-white"><span>1 Soft drinks</span>
																	</li>
																	<li class="text-custom-white"><span>Unlimited order</span>
																	</li>
																	<li class="text-custom-white"><span>Free delivery</span>
																	</li>
																</ul>
																<div class="package-btn"> <a href="#" class="btn-second btn-submit full-width">Choose Plan</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="package-box main-box">
															<div class="package-img">
																<a href="#">
																	<img src="Add%20Recyclecenter_files/package-2.jpg" class="img-fluid full-width" alt="package image">
																</a>
															</div>
															<div class="package-caption padding-20 bg-black">
																<div class="package-item-first">
																	<div class="pack-type fs-18 text-custom-white">Gold Package</div>
																	<div class="pack-type fs-18 text-light-green">$ 35</div>
																</div>
																<ul>
																	<li class="text-custom-white"><span>20 days</span>
																	</li>
																	<li class="text-custom-white"><span>2 dip free (with every meal)</span>
																	</li>
																	<li class="text-custom-white"><span>3 Soft drinks</span>
																	</li>
																	<li class="text-custom-white"><span>Unlimited order</span>
																	</li>
																	<li class="text-custom-white"><span>Free delivery</span>
																	</li>
																</ul>
																<div class="package-btn"> <a href="#" class="btn-second btn-submit full-width">Choose Plan</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="step-tab-panel" id="steppanel3">
											<div class="payment-sec">
												<div class="section-header-left">
													<h3 class="text-light-black header-title">Payment information</h3>
												</div>
												<div class="row">
													<div class="col-12">
														<div id="accordion">
<!--
															<div class="card">
																<div class="card-header"> <a class="collapsed card-link fw-500 fs-14" data-toggle="collapse" href="#collapseOne">
																		Pay with a Gift Card
																	</a>
																</div>
																<div id="collapseOne" class="collapse" data-parent="#accordion">
																	<div class="card-body no-padding payment-option-tab">
																		<div class="form-group">
																			<div class="credit-card gift-card p-relative">
																				<input type="text" name="#" class="form-control-submit fs-16" value="AC2B76">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card">
																<div class="card-header"> <a class="collapsed card-link fw-500 fs-14" data-toggle="collapse" href="#collapseTwo">
																		Add a promo code
																	</a>
																</div>
																<div id="collapseTwo" class="collapse" data-parent="#accordion">
																	<div class="card-body no-padding payment-option-tab">
																		<div class="form-group">
																			<div class="credit-card promocode p-relative input-group">
																				<input type="text" name="#" class="form-control-submit fs-16" placeholder="AC2B76">
																				<button type="submit" class="btn-second btn-submit ml-1">Apply</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
-->
															<div class="payment-option-tab">
																<ul class="nav nav-tabs">
																	<li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#savecreditcard">Saved credit card</a>
																	</li>
																	<li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#newcreditcard">New credit card</a>
																	</li>
																
																
																</ul>
																<div class="tab-content">
																	<div class="tab-pane active" id="savecreditcard">
																		<div class="form-group">
																			<div class="credit-card p-relative">
																				<input type="text" name="#" class="form-control form-control-submit" value="VISA....1877,exp 12/21">
																			</div>
																		</div>
<!--
																		<div class="section-header-left">
																			<h3 class="text-light-black header-title">Donate the change</h3>
																		</div>
																		<div class="form-group">
																			<label class="custom-checkbox">
																				<input type="checkbox" name="#"> <span class="checkmark"></span>

																				Donate $0.77 to No kid Hungry. By checking this box you agree to
																				the Donate the Change <a href="#">Terms of use</a> <span class="ml-2"><a href="#">Learn More</a></span>
																			</label>
																		</div>
-->
																		<div class="form-group">
																			<button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Pay</button>
																		</div>
																		<p class="text-center text-light-black no-margin">By paying, you agree to Rentodi's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
																		</p>
																	</div>
																	<div class="tab-pane fade" id="newcreditcard">
																		<div class="row">
																			<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
																				<div class="form-group">
																					<label class="text-light-white fw-700">Card Number</label>
																					<div class="credit-card card-front p-relative">
																						<input type="text" name="#" class="form-control form-control-submit" placeholder="1234 5678 9101 1234">
																					</div>
																				</div>
																			</div>
																			<div class="col-xl-2 col-lg-6 col-md-2 col-sm-6">
																				<div class="form-group">
																					<label class="text-light-white fw-700">Expires on</label>
																					<input type="text" name="#" class="form-control form-control-submit" placeholder="12/21">
																				</div>
																			</div>
																			<div class="col-xl-3 col-lg-6 col-md-3 col-sm-6">
																				<div class="form-group">
																					<label class="text-light-white fw-700">Security Code</label>
																					<div class="credit-card card-back p-relative">
																						<input type="text" name="#" class="form-control form-control-submit" placeholder="123">
																					</div>
																				</div>
																			</div>
																			<div class="col-xl-3 col-lg-6 col-md-3 col-sm-6">
																				<div class="form-group">
																					<label class="text-light-white fw-700">ZIP Code</label>
																					<input type="text" name="#" class="form-control form-control-submit" placeholder="123456">
																				</div>
																			</div>
																			<div class="col-12">
																				<div class="form-group">
																					<label class="custom-checkbox">
																						<input type="checkbox" name="#"> <span class="checkmark"></span>
																						Save Credit card</label>
																				</div>
																			</div>
																		</div>
<!--
																		<div class="section-header-left">
																			<h3 class="text-light-black header-title">Donate the change</h3>
																		</div>
																		<div class="form-group">
																			<label class="custom-checkbox">
																				<input type="checkbox" name="#"> <span class="checkmark"></span>

																				Donate $0.77 to No kid Hungry. By checking this box you agree to
																				the Donate the Change <a href="#">Terms of use</a> <span class="ml-2"><a href="#">Learn More</a></span>
																			</label>
																		</div>
-->
																		<div class="form-group">
																			<button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Pay</button>
																		</div>
																		<p class="text-center text-light-black no-margin">By paying, you agree to Rentodi's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
																		</p>
																	</div>
<!--
																	<div class="tab-pane fade" id="cash">
																		<p class="text-light-black">Have the cash ready when you receive your order.</p>
																		<div class="section-header-left">
																			<h3 class="text-light-black header-title">Donate the change</h3>
																		</div>
																		<div class="form-group">
																			<label class="custom-checkbox">
																				<input type="checkbox" name="#"> <span class="checkmark"></span>

																				Apologies, but you can't donate with the selected payment type</label>
																		</div>
																		<div class="form-group">
																			<button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Place Your Order</button>
																		</div>
																		<p class="text-center text-light-black no-margin">By placing your order, you agree to Munchbox's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
																		</p>
																	</div>
-->
<!--
																	<div class="tab-pane fade" id="paypal">
																		<p class="text-light-black">Please review your order and make any necessary changes before checking out with PayPal.</p>
																		<div class="section-header-left">
																			<h3 class="text-light-black header-title">Donate the change</h3>
																		</div>
																		<div class="form-group">
																			<label class="custom-checkbox">
																				<input type="checkbox" name="#"> <span class="checkmark"></span>

																				Donate $0.77 to No kid Hungry. By checking this box you agree to
																				the Donate the Change <a href="#">Terms of use</a> <span class="ml-2"><a href="#">Learn More</a></span>
																			</label>
																		</div>
																		<div class="form-group">
																			<button type="submit" class="btn-first paypal-btn text-custom-white full-width fw-500">Checkout with
																				<img src="Add%20Recyclecenter_files/pay-pal.png" alt="image">
																			</button>
																		</div>
																		<p class="text-center text-light-black no-margin">By placing your order, you agree to Munchbox's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
																		</p>
																	</div>
																	<div class="tab-pane fade" id="amexcheckout">
																		<div class="card">
																			<div class="card-header"> <a class="card-link fw-500 fs-14" data-toggle="collapse" href="#saveamex">
																					Saved Card
																				</a>
																			</div>
																			<div id="saveamex" class="collapse show" data-parent="#accordion">
																				<div class="card-body no-padding payment-option-tab">
																					<div class="form-group">
																						<div class="credit-card amex-card-front p-relative">
																							<input type="text" name="#" class="form-control form-control-submit" value="VISA....1877,exp 12/21">
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="card">
																			<div class="card-header"> <a class="collapsed card-link fw-500 fs-14" data-toggle="collapse" href="#newcardamex">
																					Add New Card
																				</a>
																			</div>
																			<div id="newcardamex" class="collapse" data-parent="#accordion">
																				<div class="card-body no-padding payment-option-tab">
																					<div class="row">
																						<div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
																							<div class="form-group">
																								<label class="text-light-white fw-700">Card Number</label>
																								<div class="credit-card amex-card-front p-relative">
																									<input type="text" name="#" class="form-control form-control-submit" placeholder="1234 5678 9101 1234">
																								</div>
																							</div>
																						</div>
																						<div class="col-xl-2 col-lg-6 col-md-2 col-sm-6">
																							<div class="form-group">
																								<label class="text-light-white fw-700">Expires on</label>
																								<input type="text" name="#" class="form-control form-control-submit" placeholder="12/21">
																							</div>
																						</div>
																						<div class="col-xl-3 col-lg-6 col-md-3 col-sm-6">
																							<div class="form-group">
																								<label class="text-light-white fw-700">Security Code</label>
																								<div class="credit-card amex-card-back p-relative">
																									<input type="text" name="#" class="form-control form-control-submit" placeholder="123">
																								</div>
																							</div>
																						</div>
																						<div class="col-xl-3 col-lg-6 col-md-3 col-sm-6">
																							<div class="form-group">
																								<label class="text-light-white fw-700">ZIP Code</label>
																								<input type="text" name="#" class="form-control form-control-submit" placeholder="123456">
																							</div>
																						</div>
																						<div class="col-12">
																							<div class="form-group">
																								<label class="custom-checkbox">
																									<input type="checkbox" name="#"> <span class="checkmark"></span>
																									Save Credit card</label>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="section-header-left">
																			<h3 class="text-light-black header-title">Donate the change</h3>
																		</div>
																		<div class="form-group">
																			<label class="custom-checkbox">
																				<input type="checkbox" name="#"> <span class="checkmark"></span>

																				Donate $0.77 to No kid Hungry. By checking this box you agree to
																				the Donate the Change <a href="#">Terms of use</a> <span class="ml-2"><a href="#">Learn More</a></span>
																			</label>
																		</div>
																		<div class="form-group">
																			<button type="submit" class="btn-first green-btn text-custom-white full-width fw-500">Place Your Order</button>
																		</div>
																		<p class="text-center text-light-black no-margin">By placing your order, you agree to Munchbox's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
																		</p>
																	</div>
-->
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="step-tab-panel " id="steppanel4">
											<div class="thankmsg-sec">
												<div class="msg-wrapper text-center">
													<div class="wrapper-1">
														<h1 class="text-success mb-2">Thank You</h1>
														<h3 class="text-dark-white">You have successfully created your rental product , Complete payment to get listed.</h3>	
														<h3 class="text-dark-white" style="color:black;">Preview</h3>
													</div>
													<div class="row text-left">
<!--
														<div class="col-lg-6">
															<div class="product-box mb-xl-20">
																<div class="product-img">
																	<a href="http://slidesigma.com/themes/html/munchbox/restaurant.html">
																		<img src="Add%20Recyclecenter_files/shop-2.jpg" class="img-fluid full-width" alt="product-img">
																	</a>
																	<div class="overlay">
																		<div class="product-tags padding-10"> <span class="circle-tag">
																				<img src="Add%20Recyclecenter_files/013-heart-1.svg" alt="tag">
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
																		<h6 class="product-title"><a href="http://slidesigma.com/themes/html/munchbox/restaurant.html" class="text-light-black "> Great Burger</a></h6>
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
																			<img src="Add%20Recyclecenter_files/004-leaf.svg" alt="tag">
																		</span>
																		<span class="text-custom-white square-tag">
																			<img src="Add%20Recyclecenter_files/006-chili.svg" alt="tag">
																		</span>
																		<span class="text-custom-white square-tag">
																			<img src="Add%20Recyclecenter_files/005-chef.svg" alt="tag">
																		</span>
																		<span class="text-custom-white square-tag">
																			<img src="Add%20Recyclecenter_files/008-protein.svg" alt="tag">
																		</span>
																		<span class="text-custom-white square-tag">
																			<img src="Add%20Recyclecenter_files/009-lemon.svg" alt="tag">
																		</span>
																	</div>
																</div>
															</div>
														</div>
-->
														<div class="col-lg-6">
															<div class="product-box mb-xl-20">
																<div class="product-img">
																	<a href="http://slidesigma.com/themes/html/munchbox/restaurant.html">
																		<img src="Add%20Recyclecenter_files/shop-1.jpg" class="img-fluid full-width" alt="product-img">
																	</a>
																	<div class="overlay">
																		<div class="product-tags padding-10"> <span class="circle-tag">
																				<img src="Add%20Recyclecenter_files/013-heart-1.svg" alt="tag">
																			</span>
																		</div>
																	</div>
																</div>
																<div class="product-caption">
																	<div class="title-box">
																		<h6 class="product-title"><a href="http://slidesigma.com/themes/html/munchbox/restaurant.html" class="text-light-black "> Flavor Town</a></h6>
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
																			<img src="Add%20Recyclecenter_files/007-chili-1.svg" alt="tag">
																		</span>
																		<span class="text-custom-white square-tag">
																			<img src="Add%20Recyclecenter_files/004-leaf.svg" alt="tag">
																		</span>
																		<span class="text-custom-white square-tag">
																			<img src="Add%20Recyclecenter_files/009-lemon.svg" alt="tag">
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
<!--
													<p class="text-light-black">For cancellation or more information Please Contact Us</p>
													<ul class="contact-details">
														<li> <i class="fas fa-phone-alt text-light-black"></i>
															<span><a href="tel:" class="text-light-black">(347) 123456789</a></span>
														</li>
														<li> <i class="fas fa-fax text-light-black"></i>
															<span><a href="tel:" class="text-light-black">(347) 123456789</a></span>
														</li>
														<li> <i class="far fa-envelope text-light-black"></i>
															<span><a href="mailto:" class="text-light-black">demo@domain.com</a></span>
														</li>
													</ul>
-->
															<li class="stepbtn" id="step3" style="list-style-type: none;">
											<a href="#"> <span class="number"></span>
												<span class="step-name btn-second btn-submit">Payment</span>
											</a>
										</li>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<!--
				<div class="col-lg-3">
					<div class="advertisement-slider swiper-container h-auto swiper-container-initialized swiper-container-horizontal">
						<div class="swiper-wrapper" style="transform: translate3d(-921px, 0px, 0px); transition-duration: 0ms;">
							<div class="swiper-slide" style="width: 307px;">
								<div class="large-product-box p-relative pb-0">
									<img src="Add%20Recyclecenter_files/sidebanner-1.jpg" class="img-fluid full-width" alt="image">
								</div>
							</div>
							<div class="swiper-slide" style="width: 307px;">
								<div class="large-product-box p-relative pb-0">
									<img src="Add%20Recyclecenter_files/sidebanner-2.jpg" class="img-fluid full-width" alt="image">
								</div>
							</div>
							<div class="swiper-slide swiper-slide-prev" style="width: 307px;">
								<div class="large-product-box p-relative pb-0">
									<img src="Add%20Recyclecenter_files/sidebanner-3.jpg" class="img-fluid full-width" alt="image">
								</div>
							</div>
							<div class="swiper-slide swiper-slide-active" style="width: 307px;">
								<div class="large-product-box p-relative pb-0">
									<img src="Add%20Recyclecenter_files/sidebanner-2.jpg" class="img-fluid full-width" alt="image">
								</div>
							</div>
						</div>
						<div class="swiper-button-next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"></div>
						<div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"></div>
						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
					</div>
				</div>
-->
			</div>
		</div>
	</section>
	<!-- footer -->
	<div class="footer-top section-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 col-sm-4 col-6 mb-sm-20">
					<div class="icon-box"> <span class="text-light-green"><i class="flaticon-credit-card-1"></i></span>
						<span class="text-light-black">100% Payment<br>Secured</span>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-6 mb-sm-20">
					<div class="icon-box"> <span class="text-light-green"><i class="flaticon-wallet-1"></i></span>
						<span class="text-light-black">Support lots<br> of Payments</span>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-6 mb-sm-20">
					<div class="icon-box"> <span class="text-light-green"><i class="flaticon-help"></i></span>
						<span class="text-light-black">24 hours / 7 days<br>Support</span>
					</div>
				</div>
<!--
				<div class="col-md-2 col-sm-4 col-6">
					<div class="icon-box"> <span class="text-light-green"><i class="flaticon-truck"></i></span>
						<span class="text-light-black">Free Delivery<br>with $50</span>
					</div>
				</div>
-->
				<div class="col-md-2 col-sm-4 col-6">
					<div class="icon-box"> <span class="text-light-green"><i class="flaticon-guarantee"></i></span>
						<span class="text-light-black">Best Price<br>Guaranteed</span>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-6">
					<div class="icon-box"> <span class="text-light-green"><i class="flaticon-app-file-symbol"></i></span>
						<span class="text-light-black">Mobile Apps<br>Ready</span>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--
	<footer class="section-padding bg-light-theme pt-0 u-line">
		<div class="u-line instagram-slider swiper-container swiper-container-initialized swiper-container-horizontal">
			<ul class="hm-list hm-instagram swiper-wrapper" style="transform: translate3d(-1573.83px, 0px, 0px); transition-duration: 0ms;">
				<li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" style="width: 224.833px;" data-swiper-slide-index="2">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-2.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-duplicate" style="width: 224.833px;" data-swiper-slide-index="3">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-4.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-duplicate" style="width: 224.833px;" data-swiper-slide-index="4">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-5.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-duplicate" style="width: 224.833px;" data-swiper-slide-index="5">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-6.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-duplicate" style="width: 224.833px;" data-swiper-slide-index="6">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-7.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-duplicate" style="width: 224.833px;" data-swiper-slide-index="7">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-8.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-prev" style="width: 224.833px;" data-swiper-slide-index="0">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-3.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-active" style="width: 224.833px;" data-swiper-slide-index="1">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-1.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-next" style="width: 224.833px;" data-swiper-slide-index="2">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-2.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide" style="width: 224.833px;" data-swiper-slide-index="3">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-4.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide" style="width: 224.833px;" data-swiper-slide-index="4">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-5.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide" style="width: 224.833px;" data-swiper-slide-index="5">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-6.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide" style="width: 224.833px;" data-swiper-slide-index="6">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-7.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide" style="width: 224.833px;" data-swiper-slide-index="7">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-8.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" style="width: 224.833px;" data-swiper-slide-index="0">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-3.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 224.833px;" data-swiper-slide-index="1">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-1.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" style="width: 224.833px;" data-swiper-slide-index="2">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-2.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-duplicate" style="width: 224.833px;" data-swiper-slide-index="3">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-4.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-duplicate" style="width: 224.833px;" data-swiper-slide-index="4">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-5.jpg" alt="instagram"></a>
				</li>
				<li class="swiper-slide swiper-slide-duplicate" style="width: 224.833px;" data-swiper-slide-index="5">
					<a href="#"><img src="Add%20Recyclecenter_files/insta-6.jpg" alt="instagram"></a>
				</li>
			</ul>
			<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl col-lg-4 col-md-4 col-sm-6">
					<div class="footer-contact">
						<h6 class="text-light-black">Need Help</h6>
						<ul>
							<li class="fw-600"><span class="text-light-white">Call Us</span> <a href="tel:" class="text-light-black">+(347) 123 456 789</a>
							</li>
							<li class="fw-600"><span class="text-light-white">Email Us</span> <a href="mailto:" class="text-light-black">demo@domain.com</a>
							</li>
							<li class="fw-600"><span class="text-light-white">Join our twitter</span> <a href="#" class="text-light-black">@munchbox</a>
							</li>
							<li class="fw-600"><span class="text-light-white">Join our instagram</span> <a href="#" class="text-light-black">@munchbox</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl col-lg-4 col-md-4 col-sm-6">
					<div class="footer-links">
						<h6 class="text-light-black">Get to Know Us</h6>
						<ul>
							<li><a href="#" class="text-light-white fw-600">About Us</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Blog</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Socialize</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Munchbox</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Perks</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl col-lg-4 col-md-4 col-sm-6">
					<div class="footer-links">
						<h6 class="text-light-black">Let Us Help You</h6>
						<ul>
							<li><a href="#" class="text-light-white fw-600">Account Details</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Order History</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Find restaurant</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Login</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Track order</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl col-lg-4 col-md-4 col-sm-6">
					<div class="footer-links">
						<h6 class="text-light-black">Doing Business</h6>
						<ul>
							<li><a href="#" class="text-light-white fw-600">Suggest an Idea</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Be a Partner restaurant</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Create an Account</a>
							</li>
							<li><a href="#" class="text-light-white fw-600">Help</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl col-lg-4 col-md-4 col-sm-6">
					<div class="footer-links">
						<h6 class="text-light-black">Download Apps</h6>
						<div class="appimg">
							<a href="#">
								<img src="Add%20Recyclecenter_files/playstore.jpg" class="img-fluid" alt="app logo">
							</a>
						</div>
						<div class="appimg">
							<a href="#">
								<img src="Add%20Recyclecenter_files/appstore.jpg" class="img-fluid" alt="app logo">
							</a>
						</div>
					</div>
				</div>
				<div class="col-xl col-lg-4 col-md-4 col-sm-6">
					<div class="footer-contact">
						<h6 class="text-light-black">Newsletter</h6>
						<form class="subscribe_form">
							<div class="input-group">
								<input type="text" class="form-control form-control-submit" name="email" placeholder="Enter your email">
								<span class="input-group-btn">
									<button class="btn btn-second btn-submit" type="button"><i class="fas fa-paper-plane"></i></button>
								</span>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-12">
					<div class="ft-social-media">
						<h6 class="text-center text-custom-white">Follow us</h6>
						<ul>
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
				</div>
			</div>
		</div>
	</footer>
-->
	<div class="copyright">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4">
					<div class="payment-logo mb-md-20"> <span class="text-light-white fs-14 mr-3">We are accept</span>
						<div class="payemt-icon">
							<img src="Add%20Recyclecenter_files/card-front.jpg" alt="#">
							<img src="Add%20Recyclecenter_files/visa.jpg" alt="#">
							<img src="Add%20Recyclecenter_files/amex-card-front.png" alt="#">
							<img src="Add%20Recyclecenter_files/mastercard.png" alt="#">
						</div>
					</div>
				</div>
<!--
				<div class="col-lg-4 text-center medewithlove align-self-center">
					<a href="http://www.slidesigma.com/" class="text-light-black">Made with Real <i class="fas fa-heart"></i> Slidesigma</a>
				</div>
-->
				<div class="col-lg-4">
					<div class="copyright-text"> <span class="text-light-black">© <a href="#" class="text-light-white">Rentodi</a> - 2019 | All Right Reserved</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
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
	<!-- Theme skins -->
<!--
	<div class="color-theme transition-4">
		<div class="theme-switch">
			<span class="switch">
				<i class="fa fa-eye"></i>
			</span>
		</div>
		<div class="theme-colors transition-4">
			<h4>Theme Skins:</h4>
			<ul class="theme-ul">
				<li>
					<span class="each-color co4" data-color="assets/css/color4.css">
						<img src="Add%20Recyclecenter_files/co-4.png" alt="">
					</span>
				</li>
				<li>
					<span class="each-color co2" data-color="assets/css/color2.css">
						<img src="Add%20Recyclecenter_files/co-2.png" alt="">
					</span>
				</li>
				<li>
					<span class="each-color co3" data-color="assets/css/color3.css">
						<img src="Add%20Recyclecenter_files/co-1.png" alt="">
					</span>
				</li>
				<li>
					<span class="each-color co5" data-color="assets/css/color5.css">
						<img src="Add%20Recyclecenter_files/co-5.png" alt="">
					</span>
				</li>
				<li>
					<span class="each-color co6" data-color="assets/css/color6.css">
						<img src="Add%20Recyclecenter_files/co-6.png" alt="">
					</span>
				</li>
				<li>
					<span class="each-color co7" data-color="assets/css/color7.css">
						<img src="Add%20Recyclecenter_files/co-7.png" alt="">
					</span>
				</li>
				<li>
					<span class="each-color co8" data-color="assets/css/color8.css">
						<img src="Add%20Recyclecenter_files/co-8.png" alt="">
					</span>
				</li>


			</ul>
			<p class="fs-13 "><b>Note: </b>This will not change any image colors.</p>
		</div>
	</div>
-->
	<!-- Theme skins -->
	<!-- Place all Scripts Here -->

	<!-- jQuery -->
	<script src="Add%20Recyclecenter_files/jquery_002.js"></script>
	<!-- Popper -->
	<script src="Add%20Recyclecenter_files/popper.js"></script>
	<!-- Bootstrap -->
	<script src="Add%20Recyclecenter_files/bootstrap.js"></script>
	<!-- Range Slider -->
	<script src="Add%20Recyclecenter_files/ion.js"></script>
	<!-- Swiper Slider -->
	<script src="Add%20Recyclecenter_files/swiper.js"></script>
	<!-- Nice Select -->
	<script src="Add%20Recyclecenter_files/jquery_003.js"></script>
	<!-- magnific popup -->
	<script src="Add%20Recyclecenter_files/jquery.js"></script>
	<!-- Maps -->
	<script src="Add%20Recyclecenter_files/js"></script>
	<!-- sticky sidebar -->
	<script src="Add%20Recyclecenter_files/sticksy.js"></script>
	<!-- Munch Box Js -->
	<script src="Add%20Recyclecenter_files/munchbox.js"></script>
	<!-- /Place all Scripts Here -->



</body>

</html>
