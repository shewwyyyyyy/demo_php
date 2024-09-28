<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if(trim($username) == "" || empty($username) ){
        echo "Username is empty";
    } else{
        echo "Username is ".$_POST["username"]."<br>";
    }

    if(trim($password) == trim($confirm_password)){
        header("location:demo.php?tama=tama ka minsan");
    } else{
        header("location:demo.php?mali=mali ka palagi");
    }



    /* echo "username : ".$_POST["username"]."<br>" ;
    echo "email : ".$_POST["email"]."<br>" ;
    echo "password : ".$_POST["password"]."<br>";
    echo "Confirm password : ".$_POST["confirm_password"]."<br>"; */

} else{
    echo "invalid method type";
}
    



?>