<style>
a{
    text-decoration: none;
    color: black;
}
.logo
{
    width:100%;
    height: 48px;
    background-color: #ffffff;
    box-shadow: 1px 1px rgba(218, 218, 218, 0.548);
    position:fixed;
    z-index: 1;
    -webkit-box-flex:1;
    flex-wrap:wrap;
    display:flex;
    margin-left: -8px;

}
.logo-head a
{
    display:flex;
    margin-left:10px;
    padding-top: 5px;
}
.logo-head h1
{
    font-size: 20px;
    font-weight: 900;
    color: #000000;
    margin-left: 5px;
    
}
.logo-head img
{
    width: 25px;
    height: 25px;
}
.head-menu
{
   display: flex;
   text-align: center;
   font-size: 1.1rem;
   font-weight: 900;
   position: absolute;
   right: 0px;
   margin-top: 0px;
}
.head-menu a{
  color:#333232;
}
.head-menu a:hover{
    color:#4d4949;
  }
.head-menu li
{
    width: 120px;
   padding: 10px; 
   border: 1px solid #8d8686;
}

.sub-menu 
{
    width: 200px;
    display: none;
    position: absolute;
    right: 110px;
    top: 50px;
    background: #ffffff;
    padding: 5px;
    font-weight: 500;
}
.search
{
    width: 650px;
    background-color: rgb(255, 255, 255);
    box-shadow: 0px 1px 0px 0px rgba(29, 29, 29, 0.548);
    height: 40px;
    margin-left: 150px;
    

}
.search i
{
    cursor: pointer;
}
.search input
{
    display: inline;
    width: 600px;
    margin: 10px;
    font-size: 1rem;
    font-weight: 900;
    border: none;
    outline: none;
    
}
.sub-menu ul li
{
    width: 150px;
    padding: 12px;
    border: none;
    text-align: left;
}
.sub-menu a{
    color: #535151;
}

.profile:hover .sub-menu ,.sub-menu a:hover
{
    display: inline;
    color: rgb(36, 36, 36);
}

    </style>


<div class="logo">
        <div class="logo-head">
        <a href="http://localhost/project/views/homepage.php">
            <img src="img/LOGO.jpg" alt="">
            <h1>Foob-hub Restaurant</h1>
         </a>
        </div>
        <div class="search">
            <input type="search" name="" placeholder="Search........"><i class="fa fa-search" aria-hidden="true"></i>
        </div>
        <ul class="head-menu">
          <li class="profile"><a href="http://localhost/project/views/profile.php"><i class="fa fa-user icon" aria-hidden="true"></i>&nbsp;@dipta</a>
            <div class="sub-menu">
                <ul>
                    <li><a href="http://localhost/project/views/profile.php">Profile</a></li>
                    <li><a href="#">My order</a></li>
                    <li><a href="#">Vouchers </a></li>
                    <li><a href="#">Refund Account</a></li>
                </ul>
            </div>
        </li> 
        <li><a href="http://localhost/project/views/login.php" ><i class="fa fa-sign-out icon" aria-hidden="true"></i>&nbsp;Log-out</a></li>
        <li style="width: 70px;"> <a href="#" ><i class="fa fa-shopping-cart icon" aria-hidden="true"></i></a></li>

      </ul>

    </div>