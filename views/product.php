<?php
require_once('./database/createDb.php');

$database=new createDb("Productdb","ProductTB");

$productname =$productprice=$filename =$productimg=$productType="";
$rows=0;
$rowstatus=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/project/css/allprodu.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <title>Document</title>

    <style>
       .navigation .Additeam{
            background-color: rgb(82, 82, 82);
            border-radius: 3px;
            color: rgb(255, 255, 255);
        }
        </style>
</head>
<body>
<div>
    <?php include 'header-footer/staffnavgation.php';?>
</div>


<section id="Add-product">


<form action="./formcontrol/productmenu.php"class="sign-up-form" method="POST" enctype="multipart/form-data">
<div class="header">
<h1>Product Add</h1>
        </div>
<div class="addproduct">
     
    <label for="Cp"> product Name:</label>
    <input type="text" id="" name="productname" required=""><br><br>
    <label for="np">product Price:</label>
    <input type="text" id="np" name="productprice" required=""><br><br>
    <label for="np">product img:</label>
    <input type="file" id="np" name="imgfile" required=""><br><br>
    <label for="np">product type:</label>
    <select name="productType" class="selecttype">
        <option value="">--Select--</option>
        <option value="POPULAR">POPULAR</option>
        <option value="BREAKFAST">BREAKFAST</option>
        <option value="LUNCH">LUNCH</option>
        <option value="SNACK">SNACK</option>
        <option value="DINNER">DINNER</option>
        
    </select><br><br>
  
    <button class="send btn" onclick="refresh()">Submit</button>
    

      </div>
</form>
      </section>


      <section id="show-table">
      <div style="text-align: center; font-size: 1.2rem; font-weight: 900; margin: 10px;">List All Products</div>
<table class="list-table">
  <tr class="list-td">
    <th>id</th>
    <th>name</th>
    <th>price</th>
    <th>type</th>
    <th>img</th>
    <th>status</th>
    <th>Action</th>
  </tr>
  <?php
               
               $result=$database->getData();
               while ($row=mysqli_fetch_assoc($result)){
               $a=$row['id'];
               $b=$row['product_name'];
               $c=$row['product_price'];
               $d=$row['product_img'];
               $f=$row['product_type'];
               $g=$row['product_status'];
               $ch="";
               if($g== "on"){$x="checked"; $rowstatus++;}
               else{$x="";}
               $rows=$rows+1;
                echo"
                <tr class='list-tr'>
                <td>$a</td>
                <td>$b</td>
                <td>$c</td>
                <td>$f</td>
                <td>$d</td>
              
                
                
                <td><label class='switch'>
              <input type='checkbox'  onclick='status($a)'onclick='status($a)' id='check' $x >
              <span class='slider round'></span>
            </label></td>

            <td class='setting'><i class='fa fa-cog' aria-hidden='true'></i>
            <div class='edit-delet'>
                <p>Edit</p>
                <p style='margin-top: -15px;'>Delete</p>
            </div>

              </tr> 
                
                ";
                
               }
                ?>
</table>


</section>
<section id="t-i">
<div class="total-iteam">
<h3><i class="fa fa-product-hunt" aria-hidden="true"></i>Total Items</h3>
  <p><?php echo $rows;?></p>
 </div>

 <div class="total-iteam">
<h3><i class="fa fa-product-hunt" aria-hidden="true"></i>Total Show Items</h3>
  <p><?php echo $rowstatus;?></p>
 </div>
 </section>

<script>

  function status(id){
   
    var id=id;
    swal('Done!', '', 'success');
    $.ajax({
      url:"./component/status.php",
      type:"post",
      data:{catId:id}
    });
  }

  function refresh()
  {
    swal('Done!', '', 'success');
  }

  </script>





</body>
</html>
