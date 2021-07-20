<?php
$con=new mysqli('localhost','root','','Productdb');
$id=$_GET['id'];
$sql="SELECT *FROM ProductTB where id='".$id."'";
$result=$con->query($sql);
if($result->num_rows>0)
{
    $row=$result->fetch_assoc();
    $productname=$row['product_name'];
    $productprice=$row['product_price'];
    $productimg=$row['product_img'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/project/css/addtocartpage.css">
    <link rel="stylesheet" href="/project/css/jquery.nice-number.css">
    <title>Order page</title>
</head>
<body>
    <div>
    <?php include 'header-footer/header.php';?>
   </div>


    <section id="contain">
        <div class="boxs">
            <div class="ads"><p>Nikunjo-2,road=18,Dhaka,Bangladesh  <i class="fa fa-pencil" aria-hidden="true"></i></p></div>
            <div class="order-now"><h4>Order Now</h4> </div>
            <div class="items">
                <div class="img"><img src="<?php echo $productimg ?>" alt=""></div>
                <div class="title"> 

                    <h1><?php echo $productname?></h1>
                    <p>Very tasty!!!</p>
                    <div class="price-number">
                    <div class="input"><input type="number" name="" id="value" value="1" min="1" ></div>
                    <p ><?php echo $productprice?></p>
                    </div> 
                    
                    <input type="submit" value="Add to cart " class="btn">

               
            </div>
           
            
            </div>

            <div class="detalis">
                <div class="details-box">
                    <input type="radio" name="detalis-item" id="check1" checked>
                    <input type="radio" name="detalis-item" id="check2">
                    <input type="radio" name="detalis-item" id="check3">
                   

                    <div class="top-content">
                        <label for="check1" class="r">Rating(10)</label>
                        <label for="check2" class="f">Feedbacks(10)</label>
                        <label for="check3" class="d">Detailed info</label>
                        </div>

                        <div class="title-Rating Rating titles">
                            <h3>Rating</h3>
                          
                        </div>
            
                        <div class="title-Feedbacks Feedbacks titles">
                            <h3>Feedbacks</h3>
                         
                        </div>
            
                        <div class="title-Detailed Detailed titles">
                            <h3>Detailed info</h3>
                         </div>
                         
                         <div class="Detail-list">

                        <div class="Detaild Rating">
                                <p><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                </p>
                                 <p><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                </p>
                                <p><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                    </p>
                                    <p><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
                                        </p>
                               
                            </div>
            
                            <div class="Detaild Feedbacks">
                                <p style="display: flex;"><input type="text" name="" id="" placeholder="Enater your own feedback"><input type="submit" value="send" style="width: 50px; background-color: black; color: rgb(255, 255, 255); cursor: pointer;"></p>
                                <p>item is very tasty</p>
                                <p>item is very tasty</p>
                                <p>item is very tasty</p>
                                <p>item is very tasty</p>
                                <p>item is very tasty</p>
                                <p>item is very tasty</p>

                            </div>
            
                            <div class="Detaild Detailed">
                                <h3>Nikunjo-2,road=18,Dhaka,Bangladesh<i class="fa fa-pencil" aria-hidden="true"></i></h3>
                                <h3>Delivery Charge:30/-</h3>
                                <h3>Delivery time :20-30 min</h3>
                                
                            </div>
                            </div>



                </div>
            </div>
        </div>


    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/project/js/jquery.nice-number.js"></script>

    <script>

        $(function(){

            $('input[type="number"]').niceNumber();

            });


            

    
    </script>
    <script>
        function Refresh(){
        window.parent.location=window.parent.location.href;
               }

           var randnum1 = parseInt(document.getElementById("value").value);
   
                var mul=10*randnum1;
                document.getElementById("num").innerHTML = parseInt(document.getElementById("value").value);
    </script>
</body>
</html>