<style>
.Res-name{
    position: absolute;
    top: 1.5%;
    left: 5%;
}
.Res-name h3
{
    color: rgb(202, 199, 29);
    font-size: 2.5rem;
    font-family: Mistral;
    margin: 20px;
}
.Res-name h2
{
    width: 150px;
    height: 40px;
    color: rgb(0, 0, 0);
    font-size: 1.6rem;
    background-color: rgb(255, 255, 255);
    text-align: center;
    margin-top: -20px;
    margin-left: 10px;
}
#Complaint
{
    width: 40%;
    height: 290px;
    border: 2px solid rgba(192, 192, 191, 0.822);
    position: absolute;
    top: 3%;
    left: 55%;
    font-weight:bold;
}
.com-box
{
    text-align: center;
    
}
.n-boxs
{
    border: none;
    width: 180px;
    height: 25px;
    margin: 5px;
    padding-left:5px;
    outline: none;
}
.sub-boxs
{
    border: none;
    width: 375px;
    height: 25px;
    margin: 5px;
    padding-left:5px;
    outline: none;
}
.mas-box textarea
{
    width: 375px;
    height: 100px;
    background-color: rgb(255, 255, 255);
    margin: 5px;
    color: rgb(0, 0, 0);
    padding-left:5px;
    outline: none;
    border: none;
    resize: none;
}
.btn-1 {
    width: 30%;
    border: none;
    outline: none;
    height: 35px;
    text-transform: uppercase;
    font-weight: 600;
    margin: 11px 0;
    margin-left: 2px;
    cursor: pointer;
    transition: 0.5s;
    font-weight: 900;
  }
  
  .btn-1:hover {
    background-color: #dffbfc;
    color: rgb(0, 0, 0);
  }
  .line-1
  {
      content:"";
      width: 400px;
      height: 2px;
      background-color: rgb(255, 255, 255);
      margin-left: 10px;
  }
  .res-icon
  {
    display:flex;
    position: absolute;
    left: 50%;
    bottom: 0%;;
  }
  .res-icon i{
      
      width: 50px;
      height: 50px;
     color: rgb(255, 255, 255);
      font-size: 1.5rem;
      text-align: center;
      
      
  }

  .res-icon i:hover{
      
   color: #000000;
    
    
}
  .address
  {
      position: absolute;
      top: 50%;
      left: 7% ;
  }
  .address p
  {
      font-size: 1.1rem;
      color: rgb(228, 228, 228);
  }
  .line-2
  {
      content:"";
      width: 400px;
      height: 1.5px;
      background-color: rgb(255, 255, 255);
      margin-left: -20px;
  }
  .nav-down
  {
    position: absolute;
    top: 15%;
    left: 37% ;
  }
  .line-3
  {
      content:"";
      width: 2.5px;
      height: 250px;
      background-color: rgb(255, 255, 255);
      margin-left: -20px;
  }
  .nav-down ul
  {
      width: 200px;
      display: block;
      position:absolute;
      top: 4%;
      font-size: 1.3rem;
      
  }
  .nav-down ul a{
    color: rgb(255, 255, 255);
  }
  .nav-down ul a:hover{
    color: rgb(180, 179, 179);
  }
  .line-4
  {
      content:"";
      width: 2.5px;
      height: 250px;
      background-color: rgb(255, 255, 255);
      position: absolute;
      left: 52%;
      top: 14.5%;
  }
    </style>




<div class="Res-name">
          <h3>Food-<span style="color: aliceblue; font-family: Mistral;">Hub</span></h3>
          <h2>Restaurant</h2>
          <div class="res-icon">
            <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="sdipta707@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
  
          </div>
        <div class="line-1"></div>
      </div>
      <div class="address">
          <p><i class="fa fa-map-marker" aria-hidden="true"></i>
            Road-18,Nikonjo-2,khilkhet,Dhaka,Bangladesh.<br>
            <i class="fa fa-phone" aria-hidden="true"></i>
            phone-01881401818<br>
            <i class="fa fa-clock-o" aria-hidden="true"></i> Anyday - 10AM To 10PM

        </p>
        <div class="line-2"></div>
      </div>
      <div class="nav-down">
        <div class="line-3"></div>
        <ul>
            <li><a href="#" >Home</a></li> 
            <li><a href="#">Special Menu</a></li>
            <li><a href="#">Foods</a></li>
            <li><a href="#">Drinks</a></li> 
            <li><a href="#">About</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Log-out</a></li>
        </ul>
        
      </div>
      
      <div class="line-4"></div>
      
      <!--complaint-->
      <section id="Complaint">
        <form>
        <div class="com-head">
            <h1 style="color: aliceblue ; margin: 5px;">Complaint Box</h1>
        </div>
         <div class="com-box">
            <label>
                <input type="text" class="n-boxs" placeholder="First Name" required> 
                <input type="text" class="n-boxs" placeholder="Last Name" required>
            </label><br>
            <label>
                <input type="subject" class="sub-boxs" placeholder="Enter your Subject......" required> 
            </label><br>
            <label>
                <div class="mas-box"><textarea name="message" placeholder="Describe the whole Complaint...…….." id=""  rows="10" required></textarea>  </div>
            </label>
           <button class="cancel btn-1">Cancel</button>
           <button class="send btn-1">Submite</button>
         </div>
        </form>