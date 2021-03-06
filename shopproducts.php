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
	<link rel="stylesheet" class="color-changing" href="Add%20Recyclecenter_files/color4.css">
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
								<div class="col-xl-4 col-lg-5 mb-md-40">
									<ul class="step-steps steps-1">
										<li class="stepbtn done active" id="step1">
											<a href="#"> <span class="number"></span>
												<span class="step-name">General Info</span>
											</a>
										</li>
<!--
										<li class="stepbtn" id="step2">
											<a href="#"> <span class="number"></span>
												<span class="step-name">Select Package</span>
											</a>
										</li>
-->
										<li class="stepbtn" id="step3">
											<a href="#"> <span class="number"></span>
												<span class="step-name">Payment</span>
											</a>
										</li>
										<li class="stepbtn " id="step4">
											<a href="#"> <span class="number"></span>
												<span class="step-name">Save</span>
											</a>
										</li>
									</ul>
									<ul class="step-steps steps-2">
										<li class="add-res-tab done active" id="stepbtn1"> <a href="#" class="add-res-tab">General Info</a>
										</li>
<!--
										<li class="add-res-tab " id="stepbtn2"> <a href="#" class="add-res-tab">Select Package</a>
										</li>
-->
										<li class="add-res-tab " id="stepbtn3"> <a href="#" class="add-res-tab">Payment</a>
										</li>
										<li class="add-res-tab " id="stepbtn4"> <a href="#" class="add-res-tab">Save </a>
										</li>
									</ul>
									<div class="step-footer">
										<button class="btn-first white-btn none" id="prev-1" style="display: none;">Previous</button>
										<button class="btn-first white-btn none" id="prev-2" style="display: none;">Previous</button>
										<button class="btn-first white-btn none" id="prev-3" style="display: inline-block;">Previous</button>
										<button class="btn-first white-btn" id="next-1" style="display: none;">Next</button>
										<button class="btn-first white-btn none" id="next-2" style="display: none;">Next</button>
										<button class="btn-first white-btn none" id="next-3" style="display: none;">Next</button>
										<button class="btn-first white-btn none" id="finish-1" style="display: inline-block;">Finish</button>
									</div>
								</div>
								<div class="col-xl-8 col-lg-7">
									<div class="step-content">
										<div class="step-tab-panel active" id="steppanel1">
											<div class="general-sec">
												<form>
													<div class="row">
														<div class="col-12">
															<h5 class="text-light-black fw-700">General Information</h5>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Shop Name <sup class="fs-16">*</sup>
																</label>
																<input type="text" name="#" class="form-control form-control-submit" placeholder="i.e Bose Studio">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="text-light-black fw-700">Shop phone</label>
																<input type="text" name="#" class="form-control form-control-submit" placeholder="i.e 91 8987456512">
															</div>
														</div>
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
														<div class="col-md-12">
															<div class="form-group">
																<label class="text-light-black fw-700">Contact Email</label>
																<input type="email" name="#" class="form-control form-control-submit" placeholder="i.e contact@shopname.com">
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
																	<option value="Delhi">Delhi</option>
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
																<label class="text-light-black fw-700">Enter your address</label>
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
												</form>
											</div>
										</div>
<!--
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
-->
										<div class="step-tab-panel" id="steppanel3">
											<div class="payment-sec">
												<div class="section-header-left">
													<h3 class="text-light-black header-title">Payment information</h3>
												</div>
												<div class="row">
													<div class="col-12">
														<div id="accordion">
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
															<div class="payment-option-tab">
																<ul class="nav nav-tabs">
																	<li class="nav-item"> <a class="nav-link fw-600 active" data-toggle="tab" href="#savecreditcard">Saved credit card</a>
																	</li>
																	<li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#newcreditcard">New credit card</a>
																	</li>
																	<li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#cash">Cash</a>
																	</li>
																	<li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#paypal">PayPal<sup>TM</sup></a>
																	</li>
																	<li class="nav-item"> <a class="nav-link fw-600" data-toggle="tab" href="#amexcheckout">Amex Express Checkout</a>
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
																		<p class="text-center text-light-black no-margin">By paying , you agree to Rentodi's<a href="#">terms of use</a> and <a href="#">privacy agreement</a>
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
																		<p class="text-center text-light-black no-margin">By paying , you agree to Rentodi's <a href="#">terms of use</a> and <a href="#">privacy agreement</a>
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
-->
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
														<h3 class="text-dark-white">You have successfully created your renting account, to add more details, go to your email inbox for login details</h3>
													</div>

													<div class="row text-left">
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
														<div class="col-lg-6">
															<div class="product-box mb-xl-20">
																<div class="product-img">
																	<a href="#">
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
																		<h6 class="product-title"><a href="#" class="text-light-black "> Flavor Town</a></h6>
																		<div class="tags"> <span class="text-custom-white rectangle-tag bg-red">
																				2.1
																			</span>
																		</div>
																	</div>
																	<p class="text-light-white"></p>
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

													<button class="btn-first white-btn">Add Your Products</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

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

				<div class="col-lg-4">
					<div class="copyright-text"> <span class="text-light-black">© <a href="#" class="text-light-white">Rentodi</a> - 2020 | All Right Reserved</span>
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
