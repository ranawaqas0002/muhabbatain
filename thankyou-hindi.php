<?php

/**

 * Template Name: Thank You

 * Description: This template is for diplaying the message after filling out the Form

 *

 */

 get_header(); ?> 
 <style>
    section.thankyou-sec {
    padding-top: 80px;
}
    .arrow-left img {
    position: absolute;
    left: 0px;
    margin-top: -40px;
    max-width: 470px;
    width: 100%;

}
.arrow-right img {
    position: absolute;
    right: 0px;
    margin-top: -75px;
    max-width: 475px;
    width: 100%;
}
.thankyou-sec h1 {
    font-size: 50px;
    line-height: 56px;
    text-align: center;
}
section.thankyou-sec p{
    font-size: 20px;
    text-align: center;
    margin-top: 40px;
    font-weight: 300;

}
section.thankyou-sec {
    /* height: 650px; */
    height: 85vh;
    display: flex;
    align-items: center;
}
.return-button{
    text-align: center;
}
.return-button a{
    color: #9D101E;
    text-underline-offset: 6px;
    text-decoration-thickness: 2px;
    font-weight: 400;
}
.return-button a:hover{
    color: #9D101E;
    text-underline-offset: 6px;
    text-decoration-thickness: 3px;
    font-weight: 400;
}
img.ty-arrow {
    margin-right: 10px;
}
.return-button {
    margin-top: 50px;
}
ul.socials {
    margin-top: 60px;
    display: flex;
    list-style: none;
    gap: 22px;
    justify-content: center;
}

/* Images */
.img1 img {
    max-width: 150px;
    width: 100%;
    right: 100px;
    position: absolute;
}
.img4 img {
    max-width: 120px;
    width: 100%;
}
.right-shape img {
    position: absolute;
    top: 0px;
    right: 0px;
    z-index: 999 !important;
    max-width:90px;
}
.img2 img {
    position: absolute;
    /* right: 200px; */
    right: 15%;
    top: 130px;
    z-index: 999;
    max-width: 100px;
    width: 100%;
}
.img3 img {
    position: absolute;
    /* left: 450px; */
    left: 4%;
    top: 150px;
    max-width: 170px;
    width: 100%;
}
.img5 img {
    max-width: 100px;
    width: 100%;
    position: absolute;
    bottom: 12%;
    left: 12%;
}
.img7 img {
    max-width: 60px;
    position: absolute;
    /* right: 80px;
    bottom: 40px; */
    right: 5%;
    bottom: 5%;
}
.img6 img {
    max-width: 40px;
    width: 100%;
    position: absolute;
    right: 6%;
    top: 65%;
}
.shape-down img {
    position: absolute;
    bottom: 0px;
    left: 30%;
    max-width: 560px;
    width: 100%;
}
.social-col{
    z-index: 10 !important;
}
.return-button {
    z-index: 10 !important;
}
@media (min-width: 2200px){
    .img5 img {
    top: 54%;
    left: 26%;
}
.img6 img {
    top: 52%;
}
.img7 img {
    right: 15%;
    top: 59%;
}
.shape-down img {
    bottom: 0px;
    /* top: 53%; */
    left: 40%;
    max-width: 560px;
    width: 100%;
}
}
@media (min-width: 1200px) and (max-width:1399px){
    .arrow-left img{
        margin-top: -3px;
    max-width: 370px;
    width: 100%;
    }
    .arrow-right img {
    margin-top: -35px;
    max-width: 355px;
    width: 100%;
    }

}
@media (min-width: 992px) and (max-width: 1199px) {
    .arrow-left img{
        margin-top: 94px;
    max-width: 274px;
    width: 100%;
    }
    .arrow-right img {
        margin-top: 20px;
    max-width: 290px;
    width: 100%;
    }
    
}
@media (min-width:768px) and (max-width:992px){
    section.thankyou-sec {
    /* height: 480px; */
    height: 85vh;
}
.thankyou-sec h1 {
    font-size: 40px;
    line-height: 46px;
    /* padding-left: 80px;
    padding-right: 80px; */
}
/* section.thankyou-sec p{
    padding-left: 180px;
    padding-right: 180px;
} */
.img3 img {
    position: absolute;
    /* left: 450px; */
    left: 10%;
    top: 140px;
    max-width: 150px;
    width: 100%;
}
.img1 img {
    max-width: 130px;
    width: 100%;
    right: 70px;e;
}
.img6 img {
    max-width: 40px;
    width: 100%;
    right: 10%;
    /* bottom: 22%; */
    top: 60%;
}
.return-button {
    margin-top: 0px;
}
section.thankyou-sec p{
    margin-top: 0px;
}
.arrow-left img {
    margin-top: 45px;
    max-width: 231px;
    width: 100%;
}
.arrow-right img {
    margin-top: 21px;
    max-width: 280px;
    width: 100%;
}
.right-shape img{
    display: none;
}
}

@media screen and (max-width: 767px){
    section.thankyou-sec {
    /* height: 450px; */
    height: 85vh
}
    .thankyou-sec h1 {
    font-size: 30px;
    line-height: 36px;
    }
    .arrow-left{
        display: none;
    }
    .arrow-right img {
    margin-top: -60px;
    max-width: 280px;
    width: 100%;
    }
    section.thankyou-sec p{
    font-size: 18px;
    line-height: 22px;
    margin-top: 20px;
    padding-left: 30px;
    padding-right: 30px;

}
.return-button {
    margin-top: 70px;
}
ul.socials {
    margin-top: 30px;
    padding-left: 0px;
}
section.thankyou-sec {
    padding-top: 80px;
}
.right-shape img {
    max-width: 80px;
    width: 100%;
}
.right-shape img {
    position: absolute;
    top: 0px;
    right: 0px;
    z-index: 999 !important;
    max-width: 80px;
    width: 100%;
}
.img2 img {
    right: 10%;
    top: 100px;
    z-index: 999;
    max-width: 80px;
    width: 100%;
}
.img3 img {
    left: 10%;
    top: 70px;
    max-width: 90px;
    width: 100%;
}
.img4 img {
    max-width: 70px;
    width: 100%;
}
.img1 img {
    display: none;
    /* max-width: 110px;
    width: 100%;
    right: 30px; */
}
.img5 img {
    max-width: 84px;
    width: 100%;
    bottom: 15%;
    left: 2%;
}
.img6 img {
    max-width: 40px;
    width: 100%;
    /* left: 10%; */
    right: 10%;
    bottom: 15%;
}
.img7 img {
    display: none;
    /* max-width: 40px;
    right: 40%;
    bottom: 3%; */
}
.shape-down img {
    display: none;
    /* bottom: 0px;
    max-width: 300px;
    width: 100%; */
}
.right-shape img{
    display: none;
}
section.thankyou-sec {
    padding-top: 0px;
}
}
 </style>

 <section class="thankyou-sec">
    <div class="container">
        <div class="row">
        <div class="col-md-3 img3">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/new-img-3.png" alt="" >
        </div>
        <div class="col-md-4 img2">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img2.svg" alt="" >
        </div>
        <div class="col-md-5 right-shape">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape-right.svg" alt="" >
        </div>

        </div>
        <div class="row">
            <div class="col-md-3 arrow-left">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ty-arrow-left.svg" alt="" >
            </div>
            <div class="col-md-6">
            <h1 class="black-text fade-in-bottom">आप विशिष्ट प्रतीक्षा सूची में शामिल हो गए हैं</h1>
            <p class="small-text fade-in extra-padding">नवीनतम अपडेट के लिए अपने इनबॉक्स पर नज़र रखें</p>
            </div>
            <div class="col-md-3 arrow-right">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ty-arrow-right.svg" alt="" >
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 return-button">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ty-arrow.svg" alt="" class="ty-arrow">
            <a href="/waitlist/in">घर पर वापस</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 social-col">
            <ul class="socials">
            <li><a href="https://twitter.com/itsmohabbatein/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.svg" alt=""></a></li>
				<li><a href="https://www.instagram.com/itsmohabbatein/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.svg" alt=""></a></li>
				<li><a href="https://www.facebook.com/itsmohabbatein"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.svg" alt=""></a></li>  
            
            </ul>
            </div>
        </div>
        <div class="row">
        <div class="col-md-2 img5">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img2.svg" alt="" >
        </div>
        <div class="col-md-4 shape-down">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape-down.svg" alt="" >
        </div>
        <div class="col-md-2 img6">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/star.svg" alt="" >
        </div>
        <div class="col-md-2 img7">
        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img7.png" alt="" > -->
        </div>
        

        </div>

    </div>
 </section>
