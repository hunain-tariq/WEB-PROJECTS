<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>COFFEE HOUSE </title>
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
                <h2 class="main-title">Menu<br>Caategory</h2>
                <div class="main-arrow">
                    <ion-icon class="back-menu" name="chevron-back-circle-outline"></ion-icon>
                     <ion-icon class="forword-menu" name="chevron-forward-circle-outline"></ion-icon>
                </div>
                <div class="filter-wraper">
                    <div class="filter-card">
                        <div class="filter-icon">
                            <ion-icon  name="restaurant-outline"></ion-icon>
                        </div>
                        <p>All menu</p>
                    </div>
                    <div class="filter-card">
                        <div class="filter-icon">
                         <a href="fastfood.html"><ion-icon  name="fast-food-outline"></ion-icon></a> 
                        </div>
                        <p>Fast food</p>
                    </div>
                    <div class="filter-card">
                        <div class="filter-icon">
                            <a href="shakes.html"> <ion-icon  name="wine-outline"></ion-icon></a>
                        </div>
                        <p>Shakes</p>
                    </div>
                    <div class="filter-card">
                        <div class="filter-icon">
                          <a href="home.html"> <ion-icon  name="cafe-outline"></ion-icon></a> 
                        </div>
                        <p>Coffee</p>
                    </div>
                    <div class="filter-card">
                        <div class="filter-icon">
                           <a href="icecream.html"><ion-icon  name="ice-cream-outline"></ion-icon></a> 
                        </div>
                        <p>Ice cream</p>
                    </div>
                    <div class="filter-card">
                        <div class="filter-icon">
                            <a href="healthy.html"><ion-icon  name="nutrition-outline"></ion-icon></a>  
                        </div>
                        <p>Healthy</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="divider">
        <!----------------------------------- food list ------------------------------->
        <div class="main-detail">
            <h2 class="main-title">Choose Order</h2>
            <div class="detail-wraper">
                <div class="detail-card">
                    <img class="detail-img" src="cappicheno.jpeg" alt="">
                    <div class="detail-desk">
                        <div class="detail-name">
                            <h4>Cappuccino</h4>
                            <p class="detail-sub">Cappuccino is an espresso-based coffee drink that is traditionally prepared with steamed milk including a layer of milk foam.</p>
                            <p class="price">RS:500</p>
                        </div>
                        <a href="order.php"><ion-icon class="order-now" name="bag-handle"></ion-icon></a>   
                    </div>
                </div>

                <div class="detail-card"> 
                    <img class="detail-img" src="latte.jpeg" alt="">
                    <div class="detail-desk">
                        <div class="detail-name">
                            <h4>Latte</h4>
                            <p class="detail-sub">Caffè latte, often shortened to just latte in English, is a coffee drink of Italian origin made with espresso and steamed milk, traditionally served in a glass.</p>
                            <p class="price">RS:700</p>
                        </div>
                        <a href="order.php"><ion-icon class="order-now" name="bag-handle"></ion-icon></a>   
                    </div>
                </div>

                <div class="detail-card">
                    <img class="detail-img" src="espresso.jpeg" alt="">
                    <div class="detail-desk">
                        <div class="detail-name">
                            <h4>Espresso</h4>
                            <p class="detail-sub">Espresso is a coffee-brewing method in which a small amount of nearly boiling water is forced under pressure through finely ground coffee beans.</p>
                            <p class="price">RS:300</p>
                        </div>
                        <a href="order.php"><ion-icon class="order-now" name="bag-handle"></ion-icon></a>   
                    </div>
                </div>
           
            </div>
            <!-- ----------------------------------------------------------------------------- -->
            <div class="detail-wraper">
                <div class="detail-card">
                    <img class="detail-img" src="mocha.jpeg" alt="">
                    <div class="detail-desk">
                        <div class="detail-name">
                            <h4>Mocha</h4>
                            <p class="detail-sub">A coffee drink made with espresso, steamed milk, and chocolate syrup.</p>
                            <p class="price">RS:200</p>
                        </div>
                        <a href="order.php"><ion-icon class="order-now" name="bag-handle"></ion-icon></a>   
                    </div>
                </div>
                <div class="detail-card">
                    <img class="detail-img" src="americano.jpeg" alt="">
                    <div class="detail-desk">
                        <div class="detail-name">
                            <h4>Americano</h4>
                            <p class="detail-sub">A type of coffee drink prepared by diluting an espresso shot with hot water at a 1:3 to 1:4 ratio</p>
                            <p class="price">RS:350</p>
                        </div>
                        <a href="order.php"><ion-icon class="order-now" name="bag-handle"></ion-icon></a>   
                    </div>
                </div>
                <div class="detail-card">
                    <img class="detail-img" src="redeye.jpg" alt="">
                    <div class="detail-desk">
                        <div class="detail-name">
                            <h4>Red Eye</h4>
                            <p class="detail-sub">A Red Eye coffee is when drip coffee and espresso are added together.</p>
                            <p class="price">RS:900</p>
                        </div>
                        <a href="order.php"><ion-icon class="order-now" name="bag-handle"></ion-icon></a>   
                    </div>
                </div>    
                </div>
                <!-- ------------------------------------------------------------------------ -->
            <div class="detail-wraper">
                <div class="detail-card">
                    <img class="detail-img" src="irish.jpeg" alt="">
                    <div class="detail-desk">
                        <div class="detail-name">
                            <h4>Irish</h4>
                            <p class="detail-sub">A caffeinated alcoholic drink consisting of Irish whiskey, hot coffee and sugar, topped with cream.</p>
                            <p class="price">RS:1500</p>
                        </div>
                        <a href="order.php"><ion-icon class="order-now" name="bag-handle"></ion-icon></a>   
                    </div>
                    
                </div>
                <div class="detail-card">
                    <img class="detail-img" src="ice.jpeg" alt="">
                    <div class="detail-desk">
                        <div class="detail-name">
                            <h4>Iced coffee</h4>
                            <p class="detail-sub">A coffee beverage served cold. It may be prepared either by brewing coffee normally and then serving it in cold milk</p>
                            <p class="price">RS:250</p>
                        </div>
                        <a href="order.php"><ion-icon class="order-now" name="bag-handle"></ion-icon></a>   
                    </div>
                    
                </div>

                <div class="detail-card">
                    <img class="detail-img" src="luak.jpeg" alt="">
                    <div class="detail-desk">
                        <div class="detail-name">
                            <h4>Kopi luwak</h4>
                            <p class="detail-sub">A coffee that consists of partially digested coffee cherries, which have been eaten and defecated by the Asian palm civet</p>
                            <p class="price">RS:6000</p>
                        </div>
                        <a href="order.php"><ion-icon class="order-now" name="bag-handle"></ion-icon></a>   

                    </div>
                    
                </div>
            </div> 
       
                <!---------------------------------------------------------------------------------  -->
           
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
<!--------------------------------------- php code for connection----------------------------------------------->
<?php
include("connection.php");
/////// Contact us///////////
$namee="";
$emaill = "";
$numberr="";
$messagee="";
if (isset($_POST['save'])) {
$namee = $_POST['namee'];
$emaill = $_POST['emaill'];
$numberr = $_POST['numberr'];
$messagee = $_POST['messagee'];
mysqli_query($conn,"INSERT INTO contact (namee,emaill,numberr,messagee) VALUES ('$namee','$emaill','$numberr','$messagee')");
header ('location: contact.php');

}
?>


<?php
include("connection.php");
/////// sign up///////////
$username="";
$emailll = "";
$pasword="";
$messagee="";
if (isset($_POST['save'])) {
$username = $_POST['username'];
$emailll = $_POST['emailll'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
mysqli_query($conn,"INSERT INTO personalinfo (username,emailll,password,confirmpassword) VALUES ('$username','$emailll','$password','$confirmpassword')");
header ('location: signup.php');

}
?>





<?php
include("connection.php");
$nname="";
$eemail="";
$nnumber="";
$aaddress= "";
$item="";
$choice="";
$specialinstruction="";
if (isset($_POST['save'])) {
    $nname = $_POST['name'];
    $eemail = $_POST['email'];
    $nnumber = $_POST['number'];
    $aaddress = $_POST['address'];
    $item = $_POST['item'];
    $choice = $_POST['choice'];
    $specialinstruction = $_POST['specialinstruction'];

    mysqli_query($conn,"INSERT INTO orderr (name,email,number,address,item,choice,specialinstruction) VALUES ('$nname','$eemail','$nnumber','$aaddress','$item','$choice','$specialinstruction')");
    header ('location:orderr.php');
}
?>
