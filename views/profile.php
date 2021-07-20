<?php
   $filename="pro.png";
    if(isset($_POST['submit'])){
        $filename = $_FILES['imgfile']['name'];
        $tmp_loc = $_FILES['imgfile']['tmp_name'];
        $uploadloc='upload_profile_img/';
        if(!empty($filename))
        {
            move_uploaded_file($tmp_loc,$uploadloc.$filename);
            
            
        }
         
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/project/css/Profile-user.css">
   
    <title>Profile</title>
    <link rel="icon" href="img/LOGO.jpg" type="image/x-icon" >
</head>
<body>
<div>
    <?php include 'header-footer/header.php';?>
</div>


    <section id="profile-info">

        <form action="" method="Post" class="profile-form" enctype="multipart/form-data">
              
          <div class="img">

            <img src="upload_profile_img/<?php echo $filename ?>" alt="">

            <label for="imgfile" class="Add-file"><i type="file" class="fa fa-plus" aria-hidden="true"></i></label>
            <div class="file-style"> <input type="file" name="imgfile" id="imgfile" ></div>
        </div>

            <fieldset>
                <legend><p>Username</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="Dipta Saha" name="username" placeholder="username"><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>Address</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="Chittagong" name="username" placeholder="Address"><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>Email</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="Sahadipta20@gmail.com" name="username" placeholder="Email"><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>User Id</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="111-2345" name="username" placeholder="User Id"><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>Phone Number</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="01919120343" name="username" placeholder="Phone Number"><br>
                </div>
               
            </fieldset>

            <input type="submit" name="submit" value="Save" class="btn" >
        
           
        </form>

    </section>

    
    <section id="Change-password">
        <div class="head">
            <h1>
                PASSWORD
            </h1>
        </div>
        <form action="" method="Post" class="Changepassword">

           
                <div class="input-file-cp">
                    <input type="text" id="username"  name="" placeholder="Current password"><br>
                </div>
               
          
                <div class="input-file-cp">
                    <input type="text" id="username" name="" placeholder="New password"><br>
                </div>

                <button class="btn">
                    Save
                    </button>
               
         

        </form>
    </section>
  <section id="myorder">
    <div class="order">
        <h1>
            MY PAYMENTS
        </h1>
    </div>
  </section>



  
</body>
</html>