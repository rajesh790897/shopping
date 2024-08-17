<link rel="stylesheet" href="css/style.css">
<div class="main_home_cards">
    <div class="main_home_card">
        <a href="/ap/zomato/user/online_order/main_home.php">
            <img src="https://b.zmtcdn.com/data/pictures/7/20480177/5ae33431a5ee97c5c39a62a5ce33a720.jpg?output-format=webp&fit=around|771.75:416.25&crop=771.75:416.25;*,*"
                alt="Drining Photo">
        </a>
        <h4>Order Online </h4>
        <p>Stay home and order to your doorstep</p>

    </div>
    <div class="main_home_card">
        <a href="#">
            <img src="https://b.zmtcdn.com/data/pictures/7/20480177/5ae33431a5ee97c5c39a62a5ce33a720.jpg?output-format=webp&fit=around|771.75:416.25&crop=771.75:416.25;*,*"
                alt="Drining Photo">
        </a>
        <h4>Nightlife and Clubs</h4>
        <p>Explore the city’s top nightlife outlets</p>

    </div>

    <div class="main_home_card">
        <a href="#">
            <img src="https://b.zmtcdn.com/data/pictures/7/20480177/5ae33431a5ee97c5c39a62a5ce33a720.jpg?output-format=webp&fit=around|771.75:416.25&crop=771.75:416.25;*,*"
                alt="Drining Photo">
        </a>
        <h4>Dining</h4>
        <p>View the city's favourite dining venues</p>
    </div>

</div>

<div class="heading">
    Collections
</div>
<div class="sub_heading">Explore curated lists of top restaurants, cafes, pubs, and bars in Kolkata, based on
    trends
</div>


<div class="main_home_cards">

    <div class="Collections_card1">
        <a href="#">
            <p>15 Best Bars & Pubs<br>13 Places<i class="right_arrow"></i></p>
        </a>
    </div>
    <div class="Collections_card2">
        <a href="#">
            <p>9 Great Buffets in Town<br>15 Places</p>
        </a>
    </div>
    <div class="Collections_card3"><a href="#">
            <p>9 Best Insta-worthy Places<br>9 Places</p>
        </a></div>
    <div class="Collections_card4">
        <a href="#">
            <p>13 Newly Opened Resta..<br>13 Places</p>
        </a>
    </div>

</div>

<div class="heading">Popular localities in and around kolkata</div>

<div class="main_home_cards">
    <div class="localities_card">
        <a href="">
            <h5>Park Street Area</h5>
            <h3>152 Places</h3>

        </a>
    </div>
    <div class="localities_card">
        <a href="">
            <h5>Sector 5, Salt Lake</h5>
            <h3>197 Places</h3>
        </a>
    </div>
    <div class="localities_card">
        <a href="">
            <h5>Sector 1, Salt Lake</h5>
            <h3>209 Places</h3>

        </a>
    </div>

</div>

<div class="main_home_cards">
    <div class="localities_card">
        <a href="">
            <h5>Ballygunge</h5>
            <h3>173 Places</h3>

        </a>
    </div>
    <div class="localities_card">
        <a href="">
            <h5>Southern Avenue</h5>
            <h3>115 Places</h3>
        </a>
    </div>
    <div class="localities_card">
        <a href="">
            <h5>New Town</h5>
            <h3>657 Places</h3>

        </a>
    </div>

</div>

<div class="main_home_cards">
    <div class="localities_card">
        <a href="">
            <h5>Camac Street Area</h5>
            <h3>67 Places</h3>

        </a>
    </div>
    <div class="localities_card">
        <a href="">
            <h5>Chinar Park</h5>
            <h3>203 Places</h3>
        </a>
    </div>
    <div class="localities_card">
        <a href="">
            <h2 style="text-align:center;margin-top:17px;">See More</h2>
        </a>
    </div>

</div>

<div class="download_link">
    <div class="dowload_link_left">
        <img src="https://b.zmtcdn.com/data/o2_assets/a500ffc2ab483bc6a550aa635f4e55531648107832.png"
            alt="zomato application demo photo" width="350px" height="400px;">
    </div>
    <div class="download_link_right">
        <div class="d-heading">
            Get the Zomato app
        </div>
        <div class="d-sub_heading">
            We will send you a link, open it on your phone to download <br>the app
        </div>
        <div>
            <input type="radio" name="contact" id="" class="radio" onclick="email()" checked>Email
            <input type="radio" name="contact" id="" class="radio space" onclick="phone()">Phone
        </div>

        <div class="flex">
            <input type="email" placeholder="Email" name="" id="email" class="placeholder hide">
            <input type="text" maxlength="10" minlength="10" placeholder="Phone" name="" id="phone"
                class="placeholder hide">

            <button type="button" onclick="share_link()">Share App Link</button>
        </div>
        <div class="d-sub_heading">
            Download app from
        </div>
        <div class="d-sub_heading">
            <a href="https://zomato.onelink.me/xqzv/CTA"><img
                    src="https://b.zmtcdn.com/data/webuikit/23e930757c3df49840c482a8638bf5c31556001144.png" width="150"
                    alt=""></a>
        </div>


    </div>






</div>


<script>
    document.getElementById("email").classList.add("show");


    function email() {
        document.getElementById("email").classList.add("show");

        document.getElementById("phone").classList.remove("show");


        document.getElementById("phone").classList.add("hide");

    }
    function phone() {
        document.getElementById("phone").classList.add("show");

        document.getElementById("email").classList.remove("show");
        document.getElementById("email").classList.add("hide");

    }

</script>