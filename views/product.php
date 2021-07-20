<?php
require_once('./database/createDb.php');

$database=new createDb("Productdb","ProductTB");

$productname =$productprice=$filename =$productimg=$productType="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="sign-up-form" method="POST" enctype="multipart/form-data">
<fieldset>
    <legend><h1>product</h1></legend> 
    <label for="Cp"> product Name:</label>
    <input type="text" id="" name="productname" required=""><br><br>
    <label for="np">product Price:</label>
    <input type="text" id="np" name="productprice" required=""><br><br>
    <label for="np">product img:</label>
    <input type="file" id="np" name="imgfile" required=""><br><br>
    <label for="np">product type:</label>
    <select name="productType">
        <option value="">--Select--</option>
        <option value="POPULAR">POPULAR</option>
        <option value="BREAKFAST">BREAKFAST</option>
        <option value="LUNCH">LUNCH</option>
        <option value="SNACK">SNACK</option>
        <option value="DINNER">DINNER</option>
        
    </select><br><br>
    
    <input type="submit">
    </fieldset>


</form>
<a href="Staffdashboard.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Home</a>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $productname = $_POST['productname'];
     $price = $_POST['productprice'];
     $productprice="Only ".$price."/-";
     $filename = $_FILES['imgfile']['name'];
     $productimg="img/$filename";
     $productType=$_POST['productType'];
    }
    if(!empty($productname && $productprice && $productimg && $productType))
  {
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Productdb');
 $sql="INSERT INTO `producttb` (`product_name`,`product_price`,`product_img`,`product_type`) VALUES ('$productname','$productprice','$productimg','$productType') ";
 $q=mysqli_query($con,$sql);
  }
?>
</body>
</html>