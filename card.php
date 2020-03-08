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
    <title>Munchbox | Restaurant</title>
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
    
    
    


<div class="card">
                                <div class="card-header">
                                    <div class="section-header-left">
                                        <h3 class="text-light-black header-title">
                                            <a class="card-link text-light-black no-margin" data-toggle="collapse" href="#collapseOne">
                                            Most Popular
                                          </a>
                                        </h3>
                                    </div>
                                </div>
                             
                                
                                
                         
                                
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
                        <h5 class="text-light-black fw-600 no-margin"><?php echo $add['price']; ?></h5>
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
  price = '$'+`<span>${p * value}</span>`;
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
  price = '$'+`<span>${p * value}</span>`;
    price < 1? price = 10: price = price; 
     
  document.getElementById('product-price').innerHTML=price;
    
}

    var p=<?php echo $add['price']; ?>;
var price = '$'+`<span>${p}</span>`;
document.getElementById('product-price').innerHTML=price;
    
    
    </script>
    
                                        
                                        
    
                                        
                                        
                                    
                                    </div>
                                </div>
                            </div>
                            
                           
                          
                         
                        
                       
                      
                     
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