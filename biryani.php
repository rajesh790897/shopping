<?php
session_start();
// if (!isset($_SESSION['zomato_user'])) {
//     header("location:/ap/zomato/user/login.php");



?>

<!DOCTYPE html>
<HTMl>

<head>
    <title>
        Order Online | Zomato
    </title>
    <link rel="stylesheet" href="/ap/zomato/user/css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/57095ab97a.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1>This is biryani page for test</h1>
    <?php

if(isset($_SESSION['zomato_user'])){
    include("../include/navbar.php");
}else{
    include("../include/nav.php");          
}


?>

    <div class="body">

        <p><a href="/ap/zomato" class="a"> Home </a>/<a href="#" class="a"> India </a>/<a href="#" class="a">
                Kolkata Resturest </a></p>

        <div class="section">
            <img src="https://b.zmtcdn.com/data/o2_assets/c0bb85d3a6347b2ec070a8db694588261616149578.png?output-format=webp"
                alt="Bike Photo">
            <p>Delivery</p>

            <img src="https://b.zmtcdn.com/data/o2_assets/78d25215ff4c1299578ed36eefd5f39d1616149985.png?output-format=webp"
                alt="">
            <p>Dining Out</p>

            <img src="https://b.zmtcdn.com/data/o2_assets/01040767e4943c398e38e3592bb1ba8a1616150142.png" alt="">
            <p>Night life</p>
        </div>

    </div>
    <br>
    <hr>

    <div class="body">

        <div class="filter">

            <div class="filter_box"><svg xmlns="http://www.w3.org/2000/svg" fill="#9C9C9C" width="18" height="18"
                    viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img"
                    class="sc-rbbb40-0 iwHbVQ">
                    <title>filter</title>
                    <path
                        d="M2.14 6.42h7.26c0.353 1.207 1.45 2.074 2.75 2.074s2.397-0.867 2.745-2.054l0.005-0.020h2.96c0.343-0.059 0.6-0.355 0.6-0.71s-0.258-0.651-0.596-0.709l-0.004-0.001h-2.94c-0.341-1.226-1.447-2.11-2.76-2.11s-2.419 0.885-2.755 2.090l-0.005 0.020h-7.26c-0.343 0.059-0.6 0.355-0.6 0.71s0.257 0.651 0.596 0.709l0.004 0.001zM12.16 4.28c0.776 0.011 1.4 0.643 1.4 1.42 0 0.784-0.636 1.42-1.42 1.42-0.777 0-1.409-0.624-1.42-1.399l-0-0.001c-0-0.006-0-0.013-0-0.020 0-0.784 0.636-1.42 1.42-1.42 0.007 0 0.014 0 0.021 0l-0.001-0zM17.86 13.58h-7.24c-0.328-1.245-1.443-2.148-2.77-2.148s-2.442 0.903-2.766 2.128l-0.004 0.020h-2.94c-0.036-0.006-0.077-0.010-0.12-0.010-0.398 0-0.72 0.322-0.72 0.72s0.322 0.72 0.72 0.72c0.042 0 0.084-0.004 0.124-0.011l-0.004 0.001h2.96c0.353 1.207 1.45 2.074 2.75 2.074s2.397-0.867 2.745-2.054l0.005-0.020h7.26c0.343-0.059 0.6-0.355 0.6-0.71s-0.258-0.651-0.596-0.709l-0.004-0.001zM7.84 15.72c-0.776-0.011-1.4-0.643-1.4-1.42 0-0.784 0.636-1.42 1.42-1.42 0.777 0 1.409 0.624 1.42 1.399l0 0.001c0 0.006 0 0.013 0 0.020 0 0.784-0.636 1.42-1.42 1.42-0.007 0-0.014-0-0.021-0l0.001 0z">
                    </path>
                </svg>
                <p>Filter</p>
            </div>
            <div class="filter_box"><svg xmlns="http://www.w3.org/2000/svg" fill="#9C9C9C" width="18" height="18"
                    viewBox="0 0 20 20" aria-labelledby="icon-svg-title- icon-svg-desc-" role="img"
                    class="sc-rbbb40-0 iwHbVQ">
                    <path
                        d="M9.9,14.8l-2.3,2.3V9c0-0.5-0.4-0.8-0.8-0.8S5.9,8.5,5.9,9v8.2l-2.3-2.3c0,0,0,0,0,0c-0.3-0.3-0.9-0.3-1.2,0 c-0.3,0.3-0.3,0.8,0,1.2l3.7,3.7c0.3,0.3,0.8,0.3,1.2,0l3.7-3.7c0.2-0.2,0.2-0.4,0.2-0.6c0-0.2-0.1-0.4-0.2-0.6 C10.8,14.5,10.3,14.5,9.9,14.8z">
                    </path>
                    <path
                        d="M17.6,4l-3.7-3.7c-0.3-0.3-0.8-0.3-1.2,0L8.9,4C8.7,4.1,8.6,4.4,8.7,4.6c0,0.2,0.1,0.4,0.2,0.6c0.3,0.3,0.8,0.3,1.2,0 l2.3-2.3V11c0,0.5,0.4,0.8,0.8,0.8c0.5,0,0.8-0.4,0.8-0.8V2.9l2.3,2.3c0,0,0,0,0,0c0.3,0.3,0.9,0.3,1.2,0C17.9,4.8,17.9,4.3,17.6,4 z">
                    </path>
                </svg>
                <p>Delivery Time</p>
            </div>
            <div class="filter_box">Rating: 4.0+</div>
            <div class="filter_box">Pure Veg</div>
            <div class="filter_box">Cuisines</div>
            <div class="filter_box">More filters
            </div>

        </div>
    </div>

    <div class="popular_food">

        <div class="body">
            <div class="flex">
                <div class="popular_food_card">
                <a href="/ap/zomato/user/online_order/page/biryani.php"><img src="https://b.zmtcdn.com/data/dish_images/d19a31d42d5913ff129cafd7cec772f81639737697.png"
                        alt=""></a>
                    <p>Biryani</p>
                </div>
                <div class="popular_food_card">
                    <a href="/ap/zomato/user/online_order/page/pizza.php"><a href="/ap/zomato/user/online_order/page/pizza.php"><img
                            src="https://b.zmtcdn.com/data/o2_assets/d0bd7c9405ac87f6aa65e31fe55800941632716575.png"
                            alt=""></a>
                    <p>Pizza</p>
                </div>
                <div class="popular_food_card">
                <a href="/ap/zomato/user/online_order/page/chicken.php"><img src="https://b.zmtcdn.com/data/dish_images/197987b7ebcd1ee08f8c25ea4e77e20f1634731334.png"
                        alt=""></a>
                    <p>Chicken</p>
                </div>
                <div class="popular_food_card">
                    <a href="/ap/zomato/user/online_order/page/roll.php"><img src="https://b.zmtcdn.com/data/dish_images/c2f22c42f7ba90d81440a88449f4e5891634806087.png"
                        alt=""></a>
                    <p>Rolls</p>
                </div>
                <div class="popular_food_card">
                    <a href="/ap/zomato/user/online_order/page/burger.php"><img src="https://b.zmtcdn.com/data/dish_images/ccb7dc2ba2b054419f805da7f05704471634886169.png"
                        alt=""></a>
                    <p>Burger</p>
                </div>


            </div>



        </div>

    </div>



    <div class="body">
        <div class="flex">
            <div class="popular_food_card">
                <img src="https://b.zmtcdn.com/data/brand_creatives/logos/3a58b67479fd290ff96996002438736e_1672389253.png?output-format=webp"
                    alt="">
                <p>WOW! Momo</p>
                <p>33 min</p>
            </div>
            <div class="popular_food_card">
                <img src="https://b.zmtcdn.com/data/brand_creatives/logos/560b209a689eefa9feb367b5d5604097_1611382952.png?output-format=webp"
                    alt="">
                <p>KFC</p>
                <p>28 min</p>
            </div>
            <div class="popular_food_card">
                <img src="https://b.zmtcdn.com/data/brand_creatives/logos/6a11fd0f30c9fd9ceaff2f5b21f61d23_1617188103.png?output-format=webp"
                    alt="">
                <p>Burger King</p>
                <p>31 min</p>
            </div>
            <div class="popular_food_card">
                <img src="https://b.zmtcdn.com/data/brand_creatives/logos/396a89cdb1f7a999717b01aa98da7017_1631990960.png?output-format=webp"
                    alt="">
                <p>Subway</p>
                <p>31 min</p>
            </div>
            <div class="popular_food_card">
                <img src="https://b.zmtcdn.com/data/brand_creatives/logos/a2531dc570196c0cd9322814eb010d94_1605102324.png?output-format=webp"
                    alt="">
                <p>Gupta Brothers</p>
                <p>17 min</p>
            </div>


        </div>


    </div>
    <br><br>

    <div class="body">

        <?php for ($i = 1; $i <= 12; $i++) { ?>
            <div class="flex">
                <div class="food_card ">
                    <img src="https://b.zmtcdn.com/data/pictures/chains/0/20033120/0f8df7602716a0682f96bc6ebf02c6d6.jpeg?output-format=webp&fit=around|771.75:416.25&crop=771.75:416.25;*,*"
                        alt="">
                    <p>50% OFF up to 100 41 min</p>
                    <p style="border-bottom: 1px solid grey;">Shree Balaji South Indian Food</p>
                    <p>South Indian</p>
                </div>
                <div class="food_card space">
                    <img src="https://b.zmtcdn.com/data/pictures/9/19594129/cc72210f97e05f4ae6a691d420c2f87b.jpg?fit=around|771.75:416.25&crop=771.75:416.25;*,*"
                        alt="">
                    <p>50% OFF up to 100 41 min</p>
                    <p style="border-bottom: 1px solid grey;">Shree Balaji South Indian Food</p>
                    <p>South Indian</p>
                </div>
                <div class="food_card space">
                    <img src="https://b.zmtcdn.com/data/reviews_photos/946/5e39ca1c0fb9645f6681067859769946_1625065482.jpg?fit=around|300:273&crop=300:273;*,*"
                        alt="">
                    <p>50% OFF up to 100 41 min</p>
                    <p style="border-bottom: 1px solid grey;">Shree Balaji South Indian Food</p>
                    <p>South Indian</p>
                </div>

            </div>
            <br><br>
            <?php
        }
        ?>

    </div>
    <?php include('../../../include/footer.php'); ?>

</body>

</HTMl>\chhindwara\the-fusion-lounge-chhindwara-locality\order