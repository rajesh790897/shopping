<?php
session_start();
if(isset($_SESSION['zomato_user'])){
    header("location:online_order/main_home.php");
}

?>

<!DOCTYPE html>
<HTML>
    <head>
        <title>
            Sign up | Zomato
        </title>
        <link rel="stylesheet" href="css/form.css">
    </head>
    <body>
        <form action="" method="post" class="form">
         <h2>Sign up</h2>
        <input type="text" placeholder="Full Name" id="name" name="name" required><br>
        <input type="text" placeholder="Email" id="email" name="email" required ><br>
        <input type="text" placeholder="Password" id="psd" name="psd" required><br>
        <input type="password" placeholder="Confiram Password" id="cpsd" name="cpsd"><br>
        <div class="flex">
            <input type="checkbox" name="registar_checkbox" id="registar_checkbox" required style="width: 20px;">
            <p>
I agree to Zomato's <a href="#">Terms of Service, Privacy Policy</a> and <a href="#">Content Policies</a></p>
        </div>
        <button type="submit" class="btn" name="registar">Sign up</button>
        <p>or</p>
<div class="msg" id="msg1"></div>
<div class="msg" id="msg2"></div>
<div class="login_system">
    <a href="#" onmouseover="lwe()">
        <img src="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/112-gmail_email_mail-512.png" alt="Email logo" width="28">
    </a>
    <a href="#" onmouseover="lwg()">
        <img src="https://static.vecteezy.com/system/resources/previews/010/353/285/original/colourful-google-logo-on-white-background-free-vector.jpg" alt="Google logo" width="28">
    </a>

</div>
<p>Already have an account?  <a href="login.php">Log in</a></p>
<br>
</form>
<script>
function lwe(){
    msg1.innerHTML="Login With Email";
    document.getElementById("msg2").classList.remove("hide");
}
function lwg(){
    msg2.innerHTML="Login With Google";
    document.getElementById("msg1").classList.remove("hide");


}
</script>

<!-- <script>
    let name=document.getElementById("name")value;
    let email=document.getElementById("email")value;
    let psd=document.getElementById("psd")value;
    let cpsd=document.getElementById("cpsd")value;

    if(name===""){
        alert("Enter Name");
    }else if(email===""){
        alert("Enter Email");
    }else if(psd){
        alert("Enter password");
    }else if("cpsd"){
        alert("Enter Confiram Password");

    }

    if(psd===cpsd);

</script> -->
        <?php

        include('../connect.php');
        if(isset($_POST['registar'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $psd = $_POST['psd'];
            // $cpsd = $_POST['cpsd'];
        
            $sql = "insert into login(fullname,email,password)values('$name','$email','$psd')";
            if (mysqli_query($con, $sql)){
                echo "<h1>Sign up Successful</h1>";
            }

        }


        ?>


    
    </body>
</HTML>