<?php

require_once("navbar.php");

?>

<div class="carousel-item active d-flex">
    <img class="d-block w-100 height_banner " src="images/banner.jpg" alt="First slide">
    <div class="carousel-caption carousel_custom d-flex ">
        <h1 id="headercontent">WELCOME TO MY PORTFOLIO</h1>
        <a href="#content"><button id="header_btn">👉 CLICK & KNOW ABOUT ME 👈</button></a>
    </div>
</div>

<div id="content"
    class="container my-5 d-flex flex-row justify-content-lg-between justify-content-center align-items-center flex-wrap flex-lg-nowrap">
    <div class="d-flex flex-column">
        <img src="images/mypic.jpg" id="mypic" class="rounded-5 w-100" alt="" srcset="">
        <a href="https://forms.gle/iaoZcVsQD2gmb8ur6" target="_blank">
            <center><button id="resume_btn" class="w-100 mt-3 py-1">MY RESUME/CV</button></center>
        </a>
    </div>
    <div id="shortintrobyme d-flex text-center">
        <div class="w-100 d-flex flex-column align-items-center mt-lg-0 mt-3  ">
            <div class="mb-2">
                <h1>Hi, I am</h1>
            </div>
            <div class="mb-2">
                <h2 style="color:blue">Abhishek Pandey</h2>
            </div>
            <div class="d-flex  align-items-center flex-column text-center ">

                <div class="mb-2">I have recently completed my <b>Bachelors of Technology in Computer Science &
                        Engineering</b>. </div>
                <div class="mb-2">Passionate about Technology and Development.</div>
                <div>I am <b>full stack web developer</b> & <b>freelancer</b>. </div>

            </div>
        </div>
    </div>
</div>


</body>

</html>
