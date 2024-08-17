<?php 

$con=mysqli_connect("localhost","root","","zomato");
if(!$con){
    echo "Connection Failed";
}

$sql = "select * from seller_del";
$res = mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($res);




?>
<?php include("include/navbar.php"); ?>

<div class="body">
        <div class="back">
            <a href="/ap/zomato/index.php">home </a>/<a href="#"> India </a>/<a href="#"> Kolkata </a>
        </div>
        <div class="images">

            <div class="image_card1">
                <img src="<?php echo $row['image1'];?>" alt="food image">

            </div>

            <div class="image_card2">
                <img src="<?php echo $row['image2'];?>"
                    alt="">
                <img src="<?php echo $row['image3'];?>"
                    alt="">
            </div>




        </div>
        <div class="heading_restaurant"><?php echo $row['restaurant-name'];?></div>
        <div class="sub_heading_restaurant"><?php echo $row['city'];?></div>
        <div class="sub_heading_restaurant"><?php echo $row['address'];?></div>
        <div class="sub_heading_restaurant" style="color:tomato;">open now</div>

        <br>