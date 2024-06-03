<?php include('process.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>COFFEE HOUSE </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .order-form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .order-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .order-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .order-form input[type="text"],
        .order-form input[type="email"],
        .order-form input[type="number"],
        .order-form select,
        .order-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .order-form input[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color:#ffc107;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .order-form input[type="submit"]:hover {
            background-color: #0e6253;
        }
    </style>
</head>
<body>
    <!--sidebar-->
    <div class="sidebar">
        <h1 class="logo"><img class="logo" src="logo.jpeg" alt="" >COFFEE HOUSE</h1>
            <!--sidebar menues  ICONS LINKS FROM IONICONS-->

         <div class="sidebar-menu">
            <a href="home.php"><ion-icon name="storefront-outline"></ion-icon>Home</a>
            <a href="home.php"><ion-icon name="book-outline"></ion-icon>Menu</a>
            <a href="order.php"><ion-icon name="receipt-outline"></ion-icon>Order</a>
            <a href="contact.php"><ion-icon name="chatbubbles-outline"></ion-icon>Contact Us</a>
            <a href="about.html"><ion-icon name="information-circle-outline"></ion-icon>About Us</a>
            <a href="signup.php"><ion-icon name="id-card-outline"></ion-icon>Register</a>
        </div>
<!--LOGOUT-->
<div class="sidebar-logout">
<a href="login.php"><ion-icon name="log-out-outline"></ion-icon>Logout</a>

</div>
    </div>
    <!--main-->
    <div class="main">
    <div class="main-navbar">
        <ion-icon class="menu-toggle" name="menu-outline"></ion-icon>
        <div class="search">
            <input type="text" placeholder="WHAT do you want?">
            <button class="search-btn">Search</button>
        </div>
        <div class="profile">
            <a class="cart"href="#"><ion-icon name="cart-outline"></ion-icon></a>
            <a class="user"href="#"><ion-icon name="person-outline"></ion-icon></a>

        </div>
    </div>
    <div class="main-highlight">
         <!--title section and arrow-->
         <div class="main-header">
       <h2 class="main-title">Recomendation</h2>
       <div class="main-arrow">
        <ion-icon class="back" name="chevron-back-circle-outline"></ion-icon>
        <ion-icon class="forword" name="chevron-forward-circle-outline"></ion-icon>

       </div>

</div>
         <!-- highlight menu -->
         <div class="highlight-wraper">
            <div class="highlight-card">
                <img class="highlight-image" src="beverages.jpg" alt="">
                <div class="highlight-desc">
                    <h4>Beverages</h4>
                    <p>RS:250</p>
                </div>
            </div>
         
            <div class="highlight-card">
                <img class="highlight-image" src="coffee.jpg" alt="">
                <div class="highlight-desc">
                    <h4>Coffee</h4>
                    <p>RS:500</p>
                </div>
            </div>
        
            <div class="highlight-card">
                <img class="highlight-image" src="breakfast.png" alt="">
                <div class="highlight-desc">
                    <h4>Breakfast</h4>
                    <p>RS:200</p>
                </div>
            </div>
        
            <div class="highlight-card">
                <img class="highlight-image" src="shakes.jpeg" alt="">
                <div class="highlight-desc">
                    <h4>Shakes</h4>
                    <p>RS:300</p>
                </div>
            </div>
         </div>
    </div>
    <!-- main menu -->
    <div class="main-menu">
        <!------------------------------------------ filter -->
        <div class="main-filter">
            <div>
              
              
        <hr class="divider">
       <h2 class="about">Contact Us</h2>
       <hr class="divider">
       <div class="about-wraper">
        <p>We'd love to hear from you! Whether you have questions, feedback, or just want to chat about coffee, feel free to get in touch with us.</p>
       </div>
                    <br>
                    <section class="order-form">
                        <h2 style="color: #0e6253;">Feel free to contact</h2>
                        <form action="contact.php" method="post">
                            <label for="namee">Name:</label>
                            <input type="text" id="namee" name="namee" required>
                            
                            <label for="emaill">Email:</label>
                            <input type="email" id="emaill" name="emaill" required>
                            
                            <label for="numberr">Number:</label>
                            <input type="number" id="numberr" name="numberr" required>
                           
                            
                            
                            <label for="messagee">Message:</label>
                            <textarea id="messagee" name="messagee" rows="5"></textarea>
                            
                            <input type="submit" value="Submit" name="sent">
                        </form>
                    </section>
                    
                      <div class="about-wraper">
                        
                  <br>
                  <h4 class="welcome">Get in Touch</h4>
                       <br>
                       <ul>
                        <li><b>Email:</b>coffeehouse@gmail.com</li>
                        <li><b>Phone:</b>+92 300 1115559
                        </li>
                        <li><b>Address:</b>123 street, A plaza, B secter Islamabad</li>
                       </ul>
                       <br>
                       <h4 class="welcome">Visit Our Cafe</h4>
                            <br>
                            <p>Stop by our café to enjoy a freshly brewed cup of coffee, chat with our baristas, and experience the Coffee House community in person. <br><b>Cafe Hours</b></p>

                 <li>Monday - Sunday:  7:00 AM - 7:00 PM</li>
                
                   
               
                
               
               
                    </div>
           
        </div>
    </div>
</div>
</body>

<!--ICONS LIBRARIES-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- JAVA SCRIPT -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="app.js"></script>
</html>