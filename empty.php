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


if (isset($_GET['pid']))
{
    
    $pid = mysqli_real_escape_string($con,$_GET['pid']);
    
$a = mysqli_query($con,"delete from cart where uid like '$id' and pid like '$pid'");
if ($a)
{
    header("location:home.php");
}

    
}

if (!isset($_GET['pid']))

{
$a = mysqli_query($con,"delete from cart where uid like '$id'");
if ($a)
{
    header("location:home.php");
}
}

?>