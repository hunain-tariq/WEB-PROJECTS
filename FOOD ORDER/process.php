<?php
include("connection.php");
/////// Contact us///////////
$namee="";
$emaill = "";
$numberr="";
$messagee="";
if (isset($_POST['sent'])) {
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
mysqli_query($conn,"INSERT INTO personalinfo (username,emailll,password,confirmpassword) VALUES ('$username','$emailll','$password','$messagee')");
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
    header ('location:order.php');
}
?>


<?php

include("connection.php");
$messagee = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input
    if (empty($username) || empty($password)) {
        $messagee = "Username and password are required.";
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("SELECT username, password FROM personalinfo WHERE username = ?");
        $stmt->bind_param("s", $username);
        
        // Execute the statement
        $stmt->execute();
        $stmt->store_result();
        
        // Check if username exists
        if ($stmt->num_rows > 0) {
            // Bind result variables
            $stmt->bind_result( $username, $password);
            $stmt->fetch();

            // Verify password
            if (password_verify($password, $password)) {
                // Password is correct, start a session
                $_SESSION['username'] = $username;
                header('Location: home.php'); // Redirect to a welcome page or dashboard
                exit();
            } else {
                // Invalid password
                $messagee = "Invalid username or password!";
            }
        } else {
            // Username doesn't exist
            $messagee = "Invalid username or password!";
        }

        // Close statement
        $stmt->close();
    }
}