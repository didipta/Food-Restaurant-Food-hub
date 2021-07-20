<?php

$username = $email = $address = $phone = $password =$uerid=$cpassword=$cpass="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if (empty($_POST["username"])) {

      $nameErr = ".username{border:3px solid red;}";
    } 
    else {
     
      $username = validateInpute($_POST["username"]);
      $nameErr = ".username{border:3px solid green;}";
      
    }

    if (empty($_POST["add"])) {
        $addressErr = ".address{border:3px solid red;}";
        
        } else {
            $address = validateInpute($_POST["add"]);
        $addressErr = ".address{border:3px solid green;}";
        
        }

            if (empty($_POST["email"])) {
                $emailErr = ".email{border:3px solid red;}";
                
                } else {
                    $email = validateInpute($_POST["email"]);
                $emailErr = ".email{border:3px solid green;}";
                
                }

                if (empty($_POST["phn"])) {
                    $phoneErr = ".phn{border:3px solid red;}";
                    
                    } else {
                        $phone = validateInpute($_POST["phn"]);
                    $phoneErr = ".phn{border:3px solid green;}";
                    
                    }

                    if (empty($_POST["uid"])) {
                        $ueridErr = ".uid{border:3px solid red;}";
                        
                        } else {
                            $uerid= validateInpute($_POST["uid"]);
                            $ueridErr = ".uid{border:3px solid green;}";
                        
                        }
                        if (empty($_POST["password"])) {
                            $passwordErr = ".password{border:3px solid red;}";
                            
                            } else {
                                $password = validateInpute($_POST["password"]);
                            $passwordErr = ".password{border:3px solid green;}";
                            
                            }

                            if (empty($_POST["cpassword"])) {
                                $cpasswordErr = ".cpassword{border:3px solid red;}";
                                
                                } else {
                                    $cpassword = validateInpute($_POST["cpassword"]);
                                $cpasswordErr = ".cpassword{border:3px solid green;}";
                                
                                }
                        
                            
                               
                              
}
function validateInpute($data){
  $data = trim($data); 
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
  
  
}


if ($password== $cpassword) {
    $eErr = ".eyes i{color:green;}";
    $cpasswordErr = ".cpassword{border:3px solid green;}";
    $cpass=$cpassword;
    
   
    } else {
    $eErr = ".eyes i{color:red;}";
    $cpasswordErr = ".cpassword{border:3px solid red;}";
    
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food-Hub Sign-up</title>
    <link rel="icon" href="img/LOGO.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/project/css/log-in.css">
    <link rel="stylesheet" href="/project/css/signup.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
    <?php echo $nameErr;?>
    <?php echo $addressErr;?>
    <?php echo $passwordErr;?>
    <?php echo $phoneErr;?>
    <?php echo $emailErr;?>
    <?php echo $cpasswordErr;?>
    <?php echo $ueridErr;?>
    <?php echo $eErr;?>
    </style>
</head>
<body>

<?php
 $fa=filesize("Signup.txt");
?>

    <section name="login" id="Sign-up">
        
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="sign-up-form" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field username">
              <i class="fa fa-user"></i>
              <input type="text" name="username" id="username" placeholder="Username" pattern="[A-Za-z\s]+" title="Only letter support" />
            </div>

           <div class="input-field address">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
              <input type="text" name="add" id="add" placeholder="Address"  pattern="[A-Za-z\s]+">
            </div>

            <div class="input-field email">
              <i class="fa fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Wrong email format">
            </div>
            <div class="input-field phn">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="integer" name="phn" id="phn" placeholder="Phone number"  pattern="[0-9]{11}" title="Wrong phone number">
              </div>

              <div class="input-field uid">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <input type="text" value="<?php $f=(1*$fa); echo $userid="111-".(12345+$f);?>" name="uid" id="uid" placeholder="User id" >
              </div>
              
            <div class="input-field password">
              <i class="fa fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase 
              and lowercase letter, and at least 8 or more characters">
              <div class="eye" onclick=" myFunction() "><i class="fa fa-eye" aria-hidden="true" ></i></div> 
            </div>

            <div class="input-field cpassword">
                <i class="fa fa-lock"></i>
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
                <div class="eye eyes" onclick=" myFunction() "><i class="fa fa-eye" aria-hidden="true" ></i></div> 
              </div>
            <input type="submit" class="btn" value="Sign up" />
           
        </form>
    
    </section>
  
   
        <div class="circul-signup">
            <img src="img/LOGO.jpg" alt="">
          <div class="signin">
            
            <h3 style="color: rgb(236, 236, 236); text-align: center; font-weight: 900; font-style: italic;"> ONE OF US ?</h3>
            <p style="font-style: italic; text-align: center;">
                You Have an Account Yet? please Sing in your own account.......
            </p>
            <a href="login.php">
                <button class="btn"  style="margin-left: 150px;">
                    Sign In
                  </button>
            </a>
          </div>
          </div>

          <div class="social">
              <p class="social-text" style="margin-left:  25px; font-weight: 900;">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fa fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-linkedin" aria-hidden="true"></i>

              </a>
            </div>
          </div>
         
  
    <script>

        function myFunction(){
        var x= document.getElementById("password");
        var y= document.getElementById("cpassword");
        if(x.type==="password" || y.type==="password" )
        {
            x.type="text";
            y.type="text";
    
        }
        else{
            x.type="password";
            y.type="password";
        }
        }
    
        </script>



<?php
$messagebox2="<script>  swal('Good job!', 'Registration is Successful. User id is $uerid', 'success');</script>";
    $myfile=fopen("Signup.txt","a+")or die("unable to open file");
  if(!empty($username && $email && $address && $phone && $password && $uerid && $cpass))
  {
    fwrite($myfile,"<div style='width:30%;background-color: rgb(255, 255, 255);box-shadow: 1px 1px 1px 1px rgba(201, 201, 201, 0.548);text-align: center;padding: 4px;margin: 9px;'><h1>Registration</h1> \n\n");
    $uname="<p><b>Username:</b>". $username."</p>\n";
    $yemail ="<p><b>Email:</b>".$email."</p>\n";
    $yaddress="<p><b>Address:</b>".$address."</p>\n";
    $yphone="<p><b>Phone Number:</b>".$phone."</p>\n";
    $yid="<p><b>User Id:</b>".$uerid."</p>\n";
    $ypass="<p><b>password:</b>".$password."</p>\n";
    $ycpass="<p><b>Confirm Password:</b>".$cpassword."</p></div>\n\n\n";
    echo "<br>";
    
    echo $messagebox2;
    fwrite($myfile,$uname);
    fwrite($myfile,$yemail);
    fwrite($myfile,$yaddress);
    fwrite($myfile,$yphone);
    fwrite($myfile,$yid);
    fwrite($myfile,$ypass);
    fwrite($myfile,$ycpass); 
    fclose($myfile);
  }
  
 
    ?>
</body>
</html>