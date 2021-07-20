<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/project/css/staff-dashboa.css">
    <link rel="stylesheet" href="http://localhost/project/css/calendar.css">
    <title>Dashboard</title>
</head>
<body>
 
    <section id="nav">
        <div class="res-logo">
            <img src="./img/LOGO.jpg" alt="">
        </div>
        <div class="navigation">
         
        <ul>
            <li style="padding-left: 15px; font-weight: 900;">Menu</li>
             <li><a href="#" style="background-color: rgb(82, 82, 82); border-radius: 3px; color: rgb(255, 255, 255);"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;Dashboard</a></li> 
            <li><a href="product.php"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></i></i>&nbsp;Add iteam</a></li>
            <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;Customers</a></li>
            <li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></i>&nbsp;Orders</a></li> 
            <li><a href="Aboutus.php"><i class="fa fa-truck" aria-hidden="true"></i>&nbsp;Shipping</a></li>
            <li><a href="#"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;Delivery info</a></li>
            <li><a href="Aboutus.php"><i class="fa fa-hdd-o" aria-hidden="true"></i>&nbsp;Stock</a></li>
            <li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> &nbsp;offer</a></li>
            <li><a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Log-out</a></li>
        </ul>
        </div>

    </section>

    <section id="view">
        <h2>Order Details</h2>
        <div class="contain">

            <div class="order-head">
                <div class="icon Total">
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Total Order</h4>
                    <p>1150</p>
                </div>
    
            </div>

            <div class="order-head">
                <div class="icon pending">
                <i class="fa fa-tasks" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Total pending Order</h4>
                    <p>150</p>
                </div>
    
            </div>


            <div class="order-head">
                <div class="icon Dispatched">
                <i class="fa fa-th-list" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Total Dispatched</h4>
                    <p>1000</p>
                </div>
    
            </div>

            <div class="order-head">
                <div class="icon Man">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                </div>
                <div class="title">
                    <h4>Delivery Man</h4>
                    <p>210</p>
                </div>
    
            </div>


            <div class="order-head">
                <div class="icon profile">
                <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="title ptitle">
                    <h3>Dipta Saha</h3>
                    <h4>@diptasaha</h4>
                </div>
    
            </div>
        </div>
       
    </section>
    <section id="order-list">
    <div style="text-align: center; font-size: 1.2rem; font-weight: 900; margin: 10px;">Pending Orders</div>
        <div class="list-heading">
            <table  class="list-table">
                <tr  class="list-td">
                    <th>Order-id </th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th>
            </tr>
           <?php
            for($x=0;$x<=10;$x++)
            {
                echo "<tr  class='list-tr'>
                <td>#ORFH123423</td>
                <td>Dipta saha</td>
                <td>road-18,nikunjo,dhaka</td>
                <td>11/03/2021</td>
                <td>1,200</td>
                <td style='color:red;'>pending</td>
                <td class='setting'><i class='fa fa-cog' aria-hidden='true'></i>
                <div class='edit-delet'>
                    <p>Edit</p>
                    <p style='margin-top: -15px;'>Delete</p>
                </div>
            </tr>";
            }
           ?>

            
        </table>
        </div>
        <div class="list-footer">
            <a href="#">Sce More</a>
        </div>
    </section>

    <section id="calender" class="light " >
        
        <div class="calendar cal">
        <div style="text-align: center; font-size: 1.2rem; font-weight: 900;">Calendar</div>
            <div class="calendar-header">
                <span class="month-picker" id="month-picker">February</span>
                <div class="year-picker">
                    <span class="year-change" id="prev-year">
                        <pre><</pre>
                    </span>
                    <span id="year">2021</span>
                    <span class="year-change" id="next-year">
                        <pre>></pre>
                    </span>
                </div>
            </div>
            <div class="calendar-body">
                <div class="calendar-week-day">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="calendar-days"></div>
            </div>
            <div class="month-list"></div>
        </div>
        </section>

        <section id="emp-list">
            <div style="text-align: center; font-size: 1.2rem; font-weight: 900; margin: 10px;">Most Order Person</div>
            <table  class="eml-list-table">
                <tr  class="eml-list-td">
                    <th>id </th>
                    <th>Name</th>
                    <th>Total Order</th>
                    <th>Status</th>
            </tr>
            <?php
            for($x=0;$x<=10;$x++)
            {
                echo " <tr  class='eml-list-tr'>
                <td>111-1234</td>
                <td>Dipta saha</td>
                <td>40</td>
                <td class='setting'><i class='fa fa-cog' aria-hidden='true'></i>
                <div class='edit-delet'>
                    <p>Edit</p>
                    <p style='margin-top: -15px;''>Delete</p>
                </div>
                </td>
            </tr>";
            }
           ?>
           
            
        </table>
        </section>
        <section id="Product-Details">
            <div style="text-align: center; font-size: 1.2rem; font-weight: 900; margin: 10px;">Stock Details</div>
            <table  class="Product-list-table">
                <tr  class="Product-list-td">
                    <th>id </th>
                    <th>Product Name</th>
                    <th>Status</th>
                    <th>Action</th>
            </tr>
            <tr class="Product-list-tr">
                <td>#FHNJD1098</td>
                <td>Chicken Burger</td>
                <td style="color: green;">Available</td>
                <td class="setting"><i class="fa fa-cog" aria-hidden="true"></i>
                <div class="edit-delet">
                    <p>Edit</p>
                    <p style="margin-top: -15px;">Delete</p>
                </div>
                </td>
            </tr>
            <tr  class="Product-list-tr">
                <td>#FHNJD6798</td>
                <td>Chicken Pizza</td>
                <td style="color: red;">Processing</td>
                <td class="setting"><i class="fa fa-cog" aria-hidden="true"></i>
                <div class="edit-delet">
                    <p>Edit</p>
                    <p style="margin-top: -15px;">Delete</p>
                </div>
                </td>
            </tr>

            <tr  class="Product-list-tr">
                <td>#FHNJD890098</td>
                <td>Chicken Sandwich</td>
                <td style="color: green;">Available</td>
                <td class="setting"><i class="fa fa-cog" aria-hidden="true"></i>
                <div class="edit-delet">
                    <p>Edit</p>
                    <p style="margin-top: -15px;">Delete</p>
                </div>
                </td>
            </tr>
            <tr  class="Product-list-tr">
                <td>#FHNJD1077</td>
                <td>Chicken Dum Biryani</td>
                <td style="color: red;">Processing</td>
                <td class="setting"><i class="fa fa-cog" aria-hidden="true"></i>
                <div class="edit-delet">
                    <p>Edit</p>
                    <p style="margin-top: -15px;">Delete</p>
                </div>
                </td>
            </tr>

            <tr  class="Product-list-tr">
                <td>#FHNJD1077</td>
                <td>Chicken Sandwich</td>
                <td style="color: green;">Available</td>
                <td class="setting"><i class="fa fa-cog" aria-hidden="true"></i>
                <div class="edit-delet">
                    <p>Edit</p>
                    <p style="margin-top: -15px;">Delete</p>
                </div>
                </td>
            </tr>

            <tr  class="Product-list-tr">
                <td>#FHNJD1077</td>
                <td>Mutton Biryani</td>
                <td style="color: red;">Processing</td>
                <td class="setting"><i class="fa fa-cog" aria-hidden="true"></i>
                <div class="edit-delet">
                    <p>Edit</p>
                    <p style="margin-top: -15px;">Delete</p>
                </div>
                </td>
            </tr>
            
        </table>
        <div class="list-footer">
            <a href="#">Sce More</a>
        </div>
        </section>
        <script src="http://localhost/project/js/calendar.js"></script>
</body>
</html>