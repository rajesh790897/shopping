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
        Login | Zomato
    </title>
    <link rel="stylesheet" href="css/form.css">

</head>

<body>


    <form action="../action/user/login_process.php" method="post" class="form">
        <h2>Login</h2>
        <input type="email" placeholder="Email" id="email" name="email" required><br>
        <input type="password" placeholder="Password" name="psd" id="psd" required><br>
        <button type="submit" name="login" class="btn">Login</button>

        <p>or</p>
        <div class="msg" id="msg"></div>
        
        <div class="login_system">
            <a href="#" title="hello" onmouseover="lwe()">
                <img src="https://cdn4.iconfinder.com/data/icons/social-media-logos-6/512/112-gmail_email_mail-512.png"
                    alt="Email logo" width="28">
            </a>
            <a href="#" onmouseover="lwg()">
                <img src="https://static.vecteezy.com/system/resources/previews/010/353/285/original/colourful-google-logo-on-white-background-free-vector.jpg"
                    alt="Google logo" width="28">
            </a>

        </div>
        <p>New to Zomato? <a href="registar.php">Create Now</a></p>
    </form>
   <br><br><br><br><br>
    <script>
        function lwe() {
            msg.innerHTML = "Login With Email";
            

        }
        function lwg() {
            msg.innerHTML = "Login With Google";
          



        }
    </script>