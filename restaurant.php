<?php
session_start();
if (!isset($_SESSION['zomato_user'])) {
    header("location:/ap/zomato/user/login.php");
}


include("../../connect.php");

$sql = "select * from seller,res_food";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);


if (isset($_GET['rid'])) {
    $sid = $_GET['rid'];
    $sql = "select * from res_food where seller_id=$sid";
    $result = mysqli_query($con, $sql);

}




?>

<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo $row['restaurant_name']; ?>
    </title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .back a {
            color: rgb(130, 130, 130);
            text-decoration: none;
        }
    </style>
    <script src="https://kit.fontawesome.com/57095ab97a.js" crossorigin="anonymous"></script>
    <script src="user/js/icon.js"></script>

</head>

<body>
    <?php include("include/navbar.php"); ?>
    <?php #include("include/restaurant_header.php"); ?>
    <div class="body">
        <div class="back">
            <a href="/ap/zomato/index.php">home </a>/<a href="#"> India </a>/<a href="#"> Kolkata </a>
        </div>
        <div class="images">

            <div class="image_card1">
                <img src="<?php echo $row['image1']; ?>" alt="food image">

            </div>

            <div class="image_card2">
                <img src="<?php echo $row['image2']; ?>" alt="food Image">
                <img src="<?php echo $row['image3']; ?>" alt="food image">
            </div>




        </div>
        <div class="heading_restaurant">
            <?php echo $row['restaurant_name']; ?>
        </div>
        <div class="sub_heading_restaurant">
            <?php echo $row['city']; ?>
        </div>
        <div class="sub_heading_restaurant">
            <?php echo $row['address']; ?>
        </div>
        <div class="sub_heading_restaurant" style="color:tomato;">Open now -
            <?php echo $row['opening-time']; ?> -
            <?php echo $row['closing-time']; ?>
        </div>

        <br>


        <hr>
        <div class="flex">
            <div class="menu">
                <p style="color:tomato;">Recommended (23)</p>
                <p>Combos (16)</p>
                <p>Dosa (14)</p>
                <p>Uttapam (9)</p>
                <p>Upma (4)</p>
                <p>South Indian (6)</p>
                <p>Rice (1)</p>
                <p>Vada (4)</p>
            </div>

            <div class="right_content">
                <div class="heading" style="margin-bottom:10px;">Online Order</div>


                <div class="discount">
                    <div class="discount_child" title="use code WELCOME">Welcone Offer</div>
                    <div class="discount_child" title="use code GET30">30% OFF up to 75</div>
                    <div class="discount_child" title="use code FLAT50">Flat 50 OFF</div>
                    <div class="discount_child" title="use code no code here">30% OFF up to 75</div>
                    <div class="discount_child" title="use code PAYTM">10-100 Cashback</div>
                </div>

                <h3 style="margin-top:20px;">Today's Exclusive Dishes</h3>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="items">
                        <div class="flex">
                            <div class="right_content_images">
                                <img src="<?php echo $row['image']; ?>" alt="" title="">
                            </div>
                            <div class="right_content">
                                <div class="flex">
                                    <h3>
                                        <?php echo $row['food_name']; ?>
                                    </h3>
                                    <h3 class="von">
                                        <?php echo $row['veg-or-nonveg']; ?>
                                    </h3>
                                    <h3 class="review" Name="review">
                                        <?php echo $row['review']; ?>
                                    </h3>
                                </div>
                                <sub>
                                    <?php echo $row['des']; ?>
                                </sub>
                                <p>₹<?php echo $row['price']; ?></p><br>
                                <div class="flex">
                                    <a href="#" class="bn">Buy Now</a>
                                    <a href="#" class="atc1" style="background-color: #ff9f00;
padding: 6px;
margin: 6px 0 0 15px;
border-radius: 6px;">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php } ?>

            </div>


        </div>

    </div>
    <br><br><br><br><br><br><br><br>




</body>

</html>