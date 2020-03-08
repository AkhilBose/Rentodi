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

if (isset($_POST['addCart']))
{
      $cid = mysqli_real_escape_string($con,$_POST['cid']);
    $pid = mysqli_real_escape_string($con,$_POST['pid']);
      $quantity = mysqli_real_escape_string($con,$_POST['quantity']);
    $amount = mysqli_real_escape_string($con,$_POST['amount']);
    $amount = $amount * $quantity;
    
    
    
    
    $cart1 = mysqli_query($con,"select * from cart where uid like '$id' and pid like '$pid' and cid like '$cid'");
    if (mysqli_num_rows($cart1) == 0)
    {
        
    
$cart =    mysqli_query($con, "insert into cart(uid,cid,pid,quantity,price) values('$id','$cid','$pid','$quantity','$amount') ");
    if ($cart)
    {
        echo "<script>alert('Product added to Cart');window.location.assign('home.php'); </script>";
    }else
    {
        echo "<script>alert('Cannot add product to cart right now');window.location.assign('home.php'); </script>";
    }
    }else
    {
        $cart2 = mysqli_fetch_array($cart1);
        $cam = $cart2['price'] + $amount;
        $cq = $cart2['quantity'] + $quantity;
        
$cart =    mysqli_query($con, "update cart set quantity = '$cq', price = '$cam' where uid like '$id' and pid like '$pid' and cid like '$cid'");
    if ($cart)
    {
        echo "<script>alert('Product added to Cart');window.location.assign('home.php'); </script>";
    }else
    {
        echo "<script>alert('Cannot add prcct to cart right now');window.location.assign('home.php'); </script>";
    }
        
    }
   // echo $cid. "<br>".$pid."<br>".$quantity."  ".$amount; die();

}




if (isset($_GET['cid']) && isset($_GET['pid']) )
{
    $cid = mysqli_real_escape_string($con,$_GET['cid']);
    $pid = mysqli_real_escape_string($con,$_GET['pid']);
    
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
<script type="text/javascript" charset="UTF-8" src="Recycle%20centers_files/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="Recycle%20centers_files/util.js"></script>
    
   

    
    </head>

<body>
    	<!-- Navigation -->
    
    
    
    
    
    
    
	<div class="main-sec"></div>
	<!-- Navigation -->
   
                        <div class="col-lg-12 restaurent-meal-head mb-md-40">
                            <div class="card">
                             
                                
                                
                         
                                
                                <div id="collapseOne" class="collapse show">
                                    <div class="card-body no-padding">
                                        
                            
                        <?php
                            
                            $add = mysqli_fetch_array(mysqli_query($con, "select * from product where id like '$pid' and cid like '$cid'"));
                                       ?>
                
                                        
                                        
                                        
                                        
    
            <div class="modal-content">
<!--
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <img src="Recycle%20centers_files/800x200.png" class="img-fluid full-width" alt="#">
                </div>
-->
            <form method="post" action="">
                <div class="modal-body">
                    <div class="name padding-10">
                        <h3 class="text-light-black fw-700 mb-2"><?php echo $add['pname']; ?></h3>
                        <h5 class="text-light-black fw-600 no-margin">Rs.<?php echo $add['price']; ?></h5>
                    </div>
<!--
                    <div class="padding-10">
                        <p class="text-light-black no-margin">600-770 Cal.</p>
                    </div>
-->
                    
                    <div class="u-line">
                        <div class="product-quantity padding-10"> <span class="text-light-black fw-700 fs-16">Quantity</span>
                            <div class="input-group quantity">
                                <div class="input-group-append">
                                    <button class="minus-btn" type="button" name="button" id="decrease" onclick="decreaseValue()"> <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <input class="text-center" type="text" id="quantity" name="quantity" value="1" readonly>
                                <div class="input-group-prepend">
                                    <button class="plus-btn" type="button" name="button"  id="increase" onclick="increaseValue()"><i class="fas fa-plus"></i>
                  </button>
                                </div>
                            </div>
                        </div>
                    </div>
                        

                </div>
                <div class="modal-footer padding-10">
                    <input type="hidden" name="cid" value="<?php echo $cid; ?>">
                      <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                     <input type="hidden" name="amount" value="<?php echo  $add['price']; ; ?>">
                    <button type="submit" name="addCart" class="btn-second btn-submit">Add to Cart :<div id="product-price"> </div> </button>
                </div>
                    
                </form>
            </div>
      
    
                                        
                                        
                                        
                                         <script>
                                             
    function increaseValue() {
  var value = parseInt(document.getElementById('quantity').value, 10);
 
 // value = isNaN(value) ? 0 : value;
  //value++;
  //alert(value);
  document.getElementById('quantity').value = value++;
  price = 'Rs.'+`<span>${p * value}</span>`;
  document.getElementById('product-price').innerHTML=price;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('quantity').value, 10);
 //value = isNaN(value) ? 0 : value;
 // value < 1 ? value = 1 : value = value;
      
 // value--;
  document.getElementById('quantity').value = value--;
      if (value == 0)
        {
            value++;
        }
  // alert(typeof(value));
  price = 'Rs.'+`<span>${p * value}</span>`;
    price < 1? price = 10: price = price; 
     
  document.getElementById('product-price').innerHTML=price;
    
}

    var p=<?php echo $add['price']; ?>;
var price = 'Rs.'+`<span>${p}</span>`;
document.getElementById('product-price').innerHTML=price;
    
    
    </script>
    
                                        
                                        
    
                                        
                                        
                                    
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
                        
                        
                 
           
   
        <!-- footer -->
<!--
	<div class="footer-top section-padding bg-black">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 col-sm-4 col-6 mb-sm-20">
					<div class="icon-box"> <span class="text-light-green"><i class="flaticon-credit-card-1"></i></span>
						<span class="text-custom-white">100% Payment<br>Secured</span>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-6 mb-sm-20">
					<div class="icon-box"> <span class="text-light-green"><i class="flaticon-wallet-1"></i></span>
						<span class="text-custom-white">Support lots<br> of Payments</span>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-6 mb-sm-20">
					<div class="icon-box"> <span class="text-light-green"><i class="flaticon-help"></i></span>
						<span class="text-custom-white">24 hours / 7 days<br>Support</span>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-6">
					<div class="icon-box"> <span class="text-light-green"><i class="flaticon-truck"></i></span>
						<span class="text-custom-white">Free Delivery<br>with $50</span>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-6">
					<div class="icon-box"> <span class="text-light-green"><i class="flaticon-guarantee"></i></span>
						<span class="text-custom-white">Best Price<br>Guaranteed</span>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-6">
					<div class="icon-box"> <span class="text-light-green"><i class="flaticon-app-file-symbol"></i></span>
						<span class="text-custom-white">Mobile Apps<br>Ready</span>
					</div>
				</div>
			</div>
		</div>
	</div>
-->
	
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
                        <img src="Recycle%20centers_files/co-4.png" alt="">
                    </span>
                  </li>
                  <li>
                      <span class="each-color co2" data-color="assets/css/color2.css">
                          <img src="Recycle%20centers_files/co-2.png" alt="">
                      </span>
                  </li>
                  <li>
                      <span class="each-color co3" data-color="assets/css/color3.css">
                          <img src="Recycle%20centers_files/co-1.png" alt="">
                      </span>
                  </li>
                  <li>
                      <span class="each-color co5" data-color="assets/css/color5.css">
                          <img src="Recycle%20centers_files/co-5.png" alt="">
                      </span>
                  </li>
                  <li>
                      <span class="each-color co6" data-color="assets/css/color6.css">
                          <img src="Recycle%20centers_files/co-6.png" alt="">
                      </span>
                  </li>
                  <li>
                      <span class="each-color co7" data-color="assets/css/color7.css">
                          <img src="Recycle%20centers_files/co-7.png" alt="">
                      </span>
                  </li>
                  <li>
                      <span class="each-color co8" data-color="assets/css/color8.css">
                          <img src="Recycle%20centers_files/co-8.png" alt="">
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