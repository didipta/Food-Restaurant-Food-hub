<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $userid = $_POST['uname'];
      $Password = $_POST['password'];

      if(substr($userid,0,4)=="111-" && $Password=="1234")
      {
        header('Location: http://localhost/project/homepage.php');
      }

      elseif(substr($userid,0,3)=="200-")
      {
        header('Location: http://localhost/project/index.php');
      }
      else
      {
          echo"please right user-id or password provide<br>";
          echo"<a href='/project/login.php'>Back page</a>";
      }
       
    }
    
    ?>