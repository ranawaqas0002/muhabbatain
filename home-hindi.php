<?php

/**

 * Template Name: Home Page Hindi

 * Description: This template is for diplaying the homepage

 *

 */

 get_header(); ?> 
 <style>
    section.new input.wpcf7-form-control.wpcf7-email.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-email::placeholder {
    color: #C5C5C5 !important;
}
    .wpcf7-form{
        overflow: visible !important;
    }
.form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding-left: 80px;
            padding-right: 80px;
        }
        .form-group.button-group {
    flex-basis: calc(10% - 10px);
}

        .form-group {
            flex-basis: calc(22% - 10px);
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 40px;
            border: none;
            padding-left: 22px;
            font-size: 14px;
            color: #000000;
            outline: none;
        }

        .form-group input[type="submit"] {
            flex-basis: 8%;
            background-color: transparent;
            background-image: url('/waitlist/wp-content/uploads/2023/09/Subtract.svg');
            background-size: cover;
            background-repeat: no-repeat;
            border: none;
            cursor: pointer;
            width: 42px; /* Set a width for the button */
            height: 42px; /* Set a height for the button */
        }

        .waitlist-bg-img-desktop{
            background-image: url('/waitlist/wp-content/uploads/2023/09/waitlist-bg-imgg.png');
            background-repeat: no-repeat;
            background-size: cover;
            padding: 20px 30px;
            height: 280px;
            padding-top: 70px;
            border-radius: 30px;
            /* margin-left: 10px; */
            /* max-width: 1210px; */
            width: 100%;
            /* display: flex;
            align-items: center;
            justify-content: center; */
        }
        .form-group.phone-field-flex {
    display: flex;
}
        .radio-label{
    display: inline-block !important;
    margin-right: 20px;
}
.form-group.radio-btn-group {
    display: inline-flex;
    align-items: center;
}
       
.radio-buttons {
    margin-left: 25px;
}
.radio-btn-group label {
    font-weight: 500;
}


input#male:before {
    position: absolute;
    margin-top: -10px;
    margin-left: -18px;
    content: 'एम';
    background-color: white;
    padding: 4px 10px;
    border-radius: 20px;
    border: 1px solid #000000;
    cursor: pointer;
    justify-content: center;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
}
input#female:before {
    position: absolute;
    margin-top: -10px;
    margin-left: -10px;
    content: 'एफ';
    background-color: white;
    padding: 4px 13px;
    border-radius: 20px;
    border: 1px solid #000000;
    cursor: pointer;
    width: 35px;
    height: 35px;
    justify-content: center;
    display: flex;
    align-items: center;
    justify-content: center;
}
input#male:checked::before {
    border: 2px solid #9D101E !important;
    font-weight: 700;
}
input#female:checked::before {
    border: 2px solid #9D101E !important;
    font-weight: 700;
}
/* input#female:checked + input#female:before {
    border: 2px solid red !important;
} */
input#male:checked{
    color: #9D101E;
    font-weight: 600;
}
input#female:checked{
    color: #9D101E;
    font-weight: 600;
}
/* input[type="radio"]:checked + .radio-checkmark::before {
    background-color: red;
    color: red;

} */
/* input[type="radio"] {
    display: none;
} */
/* label.radio-label {
    font-weight: 500;
    border: 1px solid #000000;
    width: 30px;
    text-align: center;
    border-radius: 20px;
} */
/* .radio-label input[type="radio"]:checked + span {
    background-color: #000000 !important;
    color: #ffffff !important;
} */
.form-group input[type="tel"] {
    border-bottom-left-radius: 0px !important;
    border-top-left-radius: 0px !important;
    padding-left: 0px !important;
}
.phone-field-1 input.wpcf7-form-control.wpcf7-phonetext.wpcf7-text.wpcf7-validates-as-phonetext{
    border-bottom-right-radius: 0px !important;
    border-top-right-radius: 0px !important;
}
/* .flag-box {
    display: none !important;
}
.iti-flag {
    display: none;
}
.iti-flag.ae {
    display: none;
}
.intl-tel-input.allow-dropdown .selected-flag, .intl-tel-input.separate-dial-code .selected-flag {
    width: 1px;
} */
/* input.wpcf7-form-control.wpcf7-phonetext.wpcf7-text.wpcf7-validates-as-phonetext {
    padding-left: 15px;
} */
/* .intl-tel-input .selected-flag .iti-arrow{
right: -46px;
} */


    .rotate.animate {
    color: black !important;
    opacity: 1 !important;
    animation: rotate-animation 5s linear infinite;
}

.header-image img {
    position: absolute;
    right: 0px;
    top: 90px;
    z-index: 100;
}
.header-logo img {
    max-width: 243px;
    width: 100%;
}
.image-2 img {
    position: absolute;
    left: 0px;
    max-width: 420px;
    width: 100%;
}
.small-text{
    font-size: 14px;
    margin-bottom: 5px;
}
.black-text{
    color: #000000;
}
.gray-text{
    color: #313131;
}
.newsletter{
    text-align: center;
}
section.new input.wpcf7-form-control.wpcf7-email.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-email {
    height: 52px;
    background-color: #ffffff;
    border: 2px solid #82C1EF;
    border-radius: 10px;
    width: 100%;
    color: #949494;
    padding-left: 20px;
    padding-left: 20px;
    font-size: 16px;
}

/* section.new input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 2px solid #1D8DDE !important;
    border-radius: 12px;
    border: none;
    padding-left: 22px;
    font-size: 14px;
    color: #000000;
    height: 52px;
} */
input.wpcf7-form-control.wpcf7-submit.has-spinner {
    width: 100%;
    height: 52px;
    border-radius: 10px;
    background-color: #9D101E;
    border: 2px solid #9D101E;
    color: white;
    font-weight: 600;
    font-size: 11px;
}
section.new .row.form-row{
    max-width: 560px;
    width: 100%;
    margin: auto;
}
label{
    text-align: left;
    font-size: 15px;
    font-weight: 700;
}
.form-row p{
    text-align: left;
    font-size: 15px;
    font-weight: 700;
    margin-bottom:8px;

}
.form-col-2 {
    padding-left: 0px;
}
.form-col-1 {
    padding-right: 5px;
}
.row.pull-up {
    margin-top: -430px;
    padding-bottom: 50px;
}
.image-3{
    padding-right: 195px;
    padding-top: 185px;
}
.padding-para{
    padding-left: 27%;
    padding-right: 27%;
}
/* .sec2-col-1 {
    display: inline-grid;
    align-content: center;
} */
section.section-2 .row {

    align-items: center;
}
.sec2-col-2 img {
    width: 100%;
}
.custom-shape-divider-top {
    /* position: absolute; */
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-top svg {
    /* position: relative;
    display: block;
    width: calc(158% + 1.3px);
    height: 260px; */
    position: relative;
    display: block;
    width: calc(158% + 1.3px);
    height: 306px;
}

.custom-shape-divider-top .shape-fill {
    fill: #FFFFFF;
}

.browse-card{
    background-color: #ffffff;
    border-radius: 46px;
    height: 342px;
    text-align: center;
    display: flex !important;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 260px;
    margin-left: 20px;
    margin-right: 20px;
    padding-left: 40px;
    padding-right: 40px;
}
section.section-3 .row{
    justify-content: center;
}
.slick-dots li.slick-active button:before {
    opacity: .75;
    color: #9D101E !important;
    font-size: 22px;
}
.slick-dots button#slick-slide-control00:before, .slick-dots button#slick-slide-control01:before, .slick-dots button#slick-slide-control02:before, .slick-dots button#slick-slide-control03:before {
    font-size: 26px !important;
}
p.card-para{
    font-size: 16px;
    font-weight: 400;
    line-height: 24px;
    color: #000000;
}
section.section-4 .arrow-img {
    position: absolute;
    left: 0px;
    margin-top: -90px;
    padding-left: 0px;
}
section.section-4 .arrow-img img {
    max-width: 170px !important;
    width: 100%;
}

/* START MATCH CARD CSS */
.card-flex{
    display: flex;
}
.match-card img{
    max-width: 30px;
    width: 100%;
}
.match-card p{
    margin-bottom: 0px;
    font-weight: 700 !important;
}
.match-card-para{
    display: flex;
    align-items: center;
    padding-left: 10px;
}

.match-card-box {
    background-color: #ffffff;
    padding: 7px 17px;
    border-radius: 50px;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    max-width: 189px;
    width: 100%;
    flex: 0 0 20%;
    max-width: 17%;
    padding: 10px;
    box-sizing: border-box;
    text-align: center;
    margin-left: 5px;
    margin-right: 29px;
    margin-bottom: 30px;
    height: 52px;
}
.match-card-img{
    text-align: center;
}
.card-2 {
    margin-top: 40px !important;
}

.banner-bottom-img{
    padding: 0px;
}
.banner-bottom-img img{
    /* max-width: 1209px; */
    width: 100%;
    max-height: 570px;
    height: 100%;
}

section.section-3 p.padding-para {
    font-size: 20px;
    padding-left: 25% !important;
    padding-right: 25% !important;
}
.browse-card h3 {
    padding-bottom: 5px;
}
.image-2{
            z-index: 1;
        }

.sparkle-img {
    position: absolute;
    right: 47%;
    justify-content: center;
    display: flex;
    align-items: center;
    align-content: center;
    margin-top: 181px;
}
.sparkle-img img {
    width: 34px;
}

/* CONTACT FORM */
section.new .wpcf7 form .wpcf7-response-output {
    border: 2px solid #9D101E;
    max-width: 400px;
    width: 100%;
    margin: auto;
    margin-bottom: 40px;
}

input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active  {
  transition: background-color 5000s;
  -webkit-text-fill-color: #000 !important;
}
section.new p.extra-padding {
    padding-bottom: 12px;
}


 /* iphone section */

 .iphone-bg-img-desktop{
            background-image: url('/waitlist/wp-content/uploads/2023/09/iphone-bg-new.png');
            /* background-color: #9D101E; */
            background-repeat: no-repeat;
            background-size: cover;
            padding: 20px 30px;
            height: 590px;
            padding-top: 70px;
            border-radius: 30px;
            width: 100%;
            margin-top: 150px;
        }
        section.section-4.iphone-sec .container {
    padding-right: 0px;
}
        .iphone-sec-row{
            align-items: center;
        }
        .iphone-col1 {
    padding-left: 120px;
}
        .iphone-col1 .iphone-mob img {
    max-width: 389px;
    width: 100%;
}
.iphone-col1 h3 {
    font-size: 32px;
    line-height: 42px;
    font-weight: 600;
    padding-right: 50px;
}
.iphone-col1 p {
    font-size: 18px;
    line-height: 26px;
}
.iphone-mob.iphone-col2 {
    margin-top: -80px;
}
button.win-btn {
    max-width: 200px;
    width: 100%;
    height: 49px;
    border-radius: 50px;
    border: none;
    font-size: 20px;
    font-weight: 600;
    margin-top: 15px;
}
.iphone-col1 a {
    text-underline-offset: 6px;
}
.iphone-col1 a:hover {
    text-decoration-thickness: 2px;
    opacity: 70%;
}
.iphone-mob.iphone-col2 img {
    max-width: 400px;
    width: 100%;
}

        /* End iphone section */
@media screen and (min-width: 2200px) {
    .sparkle-img{
        right: 45% !important;
    }
    
}
@media screen and (min-width: 992px) {
    .form-group.radio-btn-group {
    justify-content: center;
}
    .custom-shape-divider-top{
            margin-top: 20px !important;
        }
    .sec2-col-1 {
        padding-right: 30px;
        padding-left: 70px;
    }
    section.bottom-waitlist.display-desktop {
    margin-bottom: 30px;
}
h2.waitlist-heading {
            font-size: 32px;
            text-align: center;
            font-weight: 600;
            margin-bottom: 20px;
        }
        

}
@media (min-width:1200px) and (max-width:1399px) {
    .header-image img {
    max-width: 290px;
    width: 100%;
}
     /* Start iphone section */
     .iphone-col1 {
    padding-left: 55px;
}
          /* End iphone section */
    .browse-card{
        margin-left: 10px;
        margin-right: 10px;
    }
    .sparkle-img {
    position: absolute;
    right: 43%;
    margin-top: 188px;
}
input#female:before{
        margin-left: -10px;
    }
}

@media (min-width:992px) and (max-width:1200px) {
    /* Start iphone section */
    .iphone-col1 {
    padding-left: 10px;
}
.iphone-col1 h1{
    font-size: 58px;
}
.iphone-col1 h3 {
    font-size: 28px;
    line-height: 36px;
}
.iphone-col1 .sm-pt {
    padding-top: 5px;
}
button.win-btn{
    margin-top: 5px;
}


          /* End iphone section */
    input#female:before{
        margin-left: -3px;
    }
    input#male:before{
        margin-left: -22px;
    }
    .radio-label {
    margin-right: 10px;
}
    .sec2-col-1 {
        padding-left: 20px;
    }
    .sparkle-img {
    right: 45%;
    margin-top: 200px;
}
    .match-card-box{
        margin-right: 23px
    }
    .header-image img {
    max-width: 210px;
    width: 100%;
    top: 104px !important;
}
.image-2 img{
    max-width: 270px;
    width: 100%;
}
.image-3{
    padding-right: 0px;
} 
.sec2-col-1 {
        padding-right: 10px;
    }   
    .browse-card {
    height: 330px;
    width: 220px;
    margin-left: 10px;
    margin-right: 10px;
    padding-left: 15px;
    padding-right: 15px;
}
.waitlist-bg-img{
    padding-left: 10px;
    padding-right: 10px;
}
.form-row{
    padding-left: 40px;
    padding-right: 40px;
}
.custom-shape-divider-top{
            margin-top: -50px !important;
        }
}
@media screen and (min-width: 768px) {
    .display-mobile{
    display: none;
}
    .match-card p{
    font-size: 14px;
}
    .arrow-mobile {
    display: none;
}
.heading-mobile{
    display: none;
}
    
}
@media (min-width:768px) and (max-width:992px) {
    /* Start iphone Section */

    /* Start iphone Section */
    .iphone-bg-img-desktop {
    height: 630px;
    padding-bottom: 0px;
    padding-top: 100px;
}
.iphone-bg-img-desktop {
    margin-top: 0px;
}
section.section-4.iphone-sec .container {
    padding-right: 0px;
    margin-left: 0px;
    margin-right: 0px;
    max-width: 992px;
    width: 102%;
}
section.section-4.iphone-sec {
    overflow: hidden !important;
}
.iphone-col1 h1 {
    font-size: 38px;
    line-height: 20px;
}
.iphone-col1 h3 {
    font-size: 26px;
    line-height: 32px;
}
.iphone-col1 p {
    font-size: 16px;
    line-height: 22px;
}
.iphone-col1 .sm-pt {
    padding-top: 10px;
}
.iphone-mob.iphone-col2 {
    margin-top: 0px;
    text-align: center;
}
    /* .iphone-bg-img-desktop{
        height: 900px;
    }*/
    .iphone-col1 {
    padding-left: 70px;
}
.iphone-mob.iphone-col2 {
    margin-top: 0px;
    text-align: center;
}
.iphone-mob.iphone-col2 img {
    max-width: 230px;
    width: 100%;
} 
    /* End iphone Section */
    /* input.wpcf7-form-control.wpcf7-phonetext.wpcf7-text.wpcf7-validates-as-phonetext {
    padding-left: 25px;
} */
/* .intl-tel-input .selected-flag .iti-arrow{
right: -65px;
} */
input#female:before{
    margin-left: -6px;
}
    .sparkle-img img {
    position: absolute;
    right: -44%;
    margin-top: -58px;
    width: 40px;
}
    section.section-3 p.padding-para{
        font-size: 16px;
        line-height: 22px;
        padding-left: 20% !important;
        padding-right: 20% !important;
    }
    section.section-2.couple-2.pd-150 {
    padding-bottom: 0px;
}
    .header-logo {
    text-align: center;
}
.image-2 img {
    max-width: 270px;
    width: 100%;
}
.row.pull-up {
    margin-top: -120px;
    padding-bottom: 340px;
}
.arrow-desktop{
    position: absolute;
    right: 0px;
    padding-right: 10px;
    margin-top:-250px;
}
.padding-para{
    margin-bottom: 10px;
}
.row.form-row {
    max-width: 460px;
    width: 100%;
}
input.wpcf7-form-control.wpcf7-email.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-email{
    width: 100%;
}
.custom-shape-divider-top svg {
    height: 140px;
}
.sec2-col-2{
    padding-top: 40px;
}
.slider-container {
    padding-top: 40px;
}
.slick-track {
    margin-bottom: 40px !important;
}
.desktop-section {
    display: none;
}
.card-2 {
    margin-top: 0px !important;
}


.match-card-box {
                flex: 0 0 25%;
                max-width: 23%;
                /* max-width: 170px !important; */
                width: 100%;
                margin-left: 5px;
                margin-right: 9px;
            }


            .form-group {
                flex-basis: 100%; /* Make fields 100% width on tablets and smaller screens */
            }
            .form-group.button-group p {
    text-align: center;
}

            .form-group.button-group {
    flex-basis: calc(100%) !important;
}
            .waitlist-bg-img-mobile{
            background-image: url('/waitlist/wp-content/uploads/2023/09/join-list-mobile.png');
            background-repeat: no-repeat;
            background-size: cover;
            max-height: 720px;
            height: 100%; 
            max-width: 868px;
            width: 100%;
            margin-left: 0px;
        }
        .center-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 750px;
            
}


}
@media (min-width:600px) and (max-width:767px) {
    
    section.section-4 .pd-right-30{
        padding-right: 30px !important;
    }
     
    .row.pull-up {
    margin-top: -85px;
    padding-bottom: 280px;

}
.custom-shape-divider-top svg {
    height: 70px;
    
}

.match-card-box {
                flex: 0 0 50%;
                max-width: 46%;
                height: 45px;
                padding: 5px 15px;
                margin-bottom: 28px;
                margin-left: 0px;
                
            }
            .match-card img{
                max-width: 20px;
                width: 100%;
            }
            .mobile-card-2{
                margin-right: 0px;
            }
            .match-card-para{
                padding-left: 0px !important;
            }

}
@media screen and (max-width: 768px) {
    .form-group input[type="submit"] {
    width: 37px;
    height: 37px;
}
    section.new .row.form-row{
    max-width: 400px !important;
    width: 100% !important;
    margin: auto;
}
     /* Start iphone Section */
     .iphone-bg-img-mobile{
        background-image: url('/waitlist/wp-content/uploads/2023/09/iphone-bg-mob.png');
            /* background-color: #9D101E; */
            background-repeat: no-repeat;
            background-size: cover;
            padding: 20px 30px;
            height: 590px;
            padding-top: 70px;
            border-radius: 30px;
            width: 100%;
            margin-top: 150px;
    }
    .iphone-bg-img-mobile h1{
    text-align: center;
    font-size: 36px;
    font-weight: 700;
}
.iphone-bg-img-mobile h3 {
    text-align: center;
    padding: 0px;
    font-weight: 500;
    line-height: 28px;
    font-size: 21px;
}
.iphone-bg-img-mobile p {
    font-size: 12px;
    text-align: center;
    line-height: 20px;
}
    section.section-4.iphone-sec{
        padding-left: 0px;
        padding-right: 0px;
        overflow: hidden !important;
    }
    section.section-4.iphone-sec .container {
    padding: 0px;
}
.iphone-col1{
    text-align: center !important;
}
.display-mobile a{
    font-size: 14px !important;
}
.display-desktop-iphone{
    display: none;
}

.iphone-bg-img-desktop {
    height: 630px;
    padding-top: 110px;
    /* padding-bottom: 50px !important; */
    border-radius: 0px;
    width: 104%;
    margin-top: 0px;
}
     section.section-4.iphone-sec{
        padding-left: 0px;
        padding-right: 0px;
        overflow: hidden !important;
    }
    section.section-4.iphone-sec .container {
    padding: 0px;
}

.iphone-col1 {
    padding-left: 10px;
}
.iphone-mob.iphone-col2 {
    margin-top: 0px;
    text-align: center;
    padding-left: 30px;
}
.iphone-mob.iphone-col2 img {
    max-width: 233px;
    width: 100%;
    margin-top: 20px;
}
.iphone-col1 h3 {
    font-size: 20px;
    line-height: 24px;
    padding-right: 10px;
}
.iphone-col1 p {
    font-size: 12px;
    line-height: 20px;
}
.iphone-col1 .sm-pt {
    padding-top: 5px;
}
button.win-btn {
    max-width: 135px;
    width: 100%;
    height: 41px;
    border-radius: 50px;
    font-size: 16px;
    margin-top: 5px;
    margin-bottom: 15px;
}
/* END iphone Section */
    .form-group.radio-btn-group {
    margin-top: 10px;
}
    input#male:before{
        padding: 5px 10px;
    }
    input#female:before{
        padding: 5px 12px;
    }
    label.radio-label{
        width: 22px;
    }
    /* input.wpcf7-form-control.wpcf7-phonetext.wpcf7-text.wpcf7-validates-as-phonetext {
    padding-left: 25px;
}
.intl-tel-input .selected-flag .iti-arrow{
right: -65px;
}
     */
    .match-card p {
    font-size: 12px;
}
   
section.section-4 .sparkle-img img {
    position: absolute;
    right: -39%;
    margin-top: -120px;
    width: 32px;
}
    .padding-para{
        padding-left: 19%;
    padding-right: 19%;
    margin-bottom: 10px;
    }
    
    .image-2 img {
    max-width: 220px;
    width: 100%;
    margin-top: 30px !important;
}

.image-3 {
    padding-right: 0px;
    padding-top: 0px;
    max-width: 100px;
    width: 100%;
}
.header-logo {
    text-align: center;
}
.header-logo img {
    max-width: 154px;
    width: 100%;
}
.row.form-row {
    max-width: 240px;
    width: 100%;
    margin: auto;
}
.row.form-row p{
    padding-left: 0px;
    text-align: center;
}
.row.form-row label{
    font-size: 10px;
}
.form-col-1{
    padding-left: 0px;
}    
input.wpcf7-form-control.wpcf7-email.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-email{
    border: 1px solid #1D8DDE;
    width: 100%;
}
input.wpcf7-form-control.wpcf7-submit.has-spinner{
    width: 70%;
    display: flex;
    margin: auto;
    justify-content: center;
    height: 39px !important;
}
.small-text{
    font-size: 12px;
    margin-bottom: 4px;
}
.arrow-desktop {
    display: none;
}
.arrow-mobile {
    position: absolute;
    /* right: 133px; */
    right: 34px;
    margin-top: -15px;
} 
.pd-none-mob{
    padding-bottom: 5px;
} 
.sec2-col-2{
    padding-top: 40px;
    margin-bottom: 40px;
}
.sec2-container {
    padding-left: 40px;
    padding-right: 40px;
}
.heading-desktop{
    display: none;
}
.section-3{
    padding-left: 40px;
    padding-right: 40px;
}
.section-3 h2{
    text-align: left;
}
p.padding-para.para-left{
    text-align: left;
    padding-left: 0px;
    font-size: 13px;
    padding-right: 10px;
    padding-top: 8px;
}
.section-3 p.padding-para {
    margin-bottom: 50px;
}
/* .slider-container {
    padding-top: 20px;
} */
.browse-card{
    margin-left: 0px;
    margin-right: 10px;
}
.section-3 .browse-card p{
    font-size: 16px;
    line-height: 22px;

}
section.section-3 h2 {
    font-size: 29px;
    line-height: 35px;
}
.slick-track {
    margin-bottom: 30px !important;
}
.desktop-section {
    display: none;
}
section.section-4 {
    padding-left: 40px;
    padding-right: 40px;
}
.custom-shape-divider-top {
   
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-top svg {
    position: relative;
    display: block;
    width: calc(266% + 1.3px);
    height: 118px;
    transform: rotateY(180deg);
    background-color: #ffffff;
}
.custom-shape-divider-top .shape-fill {
    fill: #F4F5FC;
}

section.new input.wpcf7-form-control.wpcf7-submit.has-spinner {
    font-size: 12px;
}
.mb-pd-o{
    padding-left: 0px;
}



.card-2 {
    margin-top: 0px !important;
}
section.section-2.couple-2.pd-150 {
    padding-bottom: 0px;
    margin-bottom: -40px;
}
.banner-bottom-img {
    padding: 0px;
}
.form-group {
    flex-basis: 100%;
}
h2.waitlist-heading {
    font-size: 28px;
    margin-bottom: 50px;
    text-align: center;
}
.bottom-waitlist .container{
    margin-left:0px;
    margin-right: 0px;
    padding-left: 0px;
    padding-right: 0px;

}
section.bottom-waitlist .form-row{
    padding-left: 30px;
    padding-right: 30px;
}
section.bottom-waitlist.display-desktop {
    overflow: hidden;
}
section.bottom-waitlist .container-sm, .container {
    max-width: 768px;
}
.form-group.button-group {
    flex-basis: calc(100%) !important;
}
.form-group.button-group p {
    position: absolute;
    right: 30px;
    margin-bottom: -55px;
    margin-top: -50px;
}
.waitlist-bg-img-mobile{
            background-image: url('/waitlist/wp-content/uploads/2023/09/join-list-mobile.png');
            background-repeat: no-repeat;
            background-size: cover;
            max-height: 740px;
            height: 100%; 
            max-width: 868px;
            width: 100%;
            margin-left: 0px;
        }
        .center-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 750px;
            
}
section.new input.wpcf7-form-control.wpcf7-email.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-email {
    font-size: 12px;
    height: 39px !important;
}
section.section-2.couple-2 .pt-60 {
    padding-top: 0px !important;
}

section.section-3 p.padding-para {
    font-size: 13px;
    padding-left: 0px !important;
    padding-right: 20px !important;
}

.form-group input[type="text"], .form-group input[type="email"], .form-group input[type="tel"]{
    height: 48px;
}
        
}
@media screen and (max-width:600px) {
    section.section-4 .pd-right-30{
        padding-right: 10px !important;
    }
    .row.pull-up {
    margin-top: -50px;
    padding-bottom: 370px;

}
.custom-shape-divider-top svg {
    height: 70px;
}


.match-card-box {
                flex: 0 0 50%;
                max-width: 44%;
                height: 33px;
                padding: 0px 15px;
                margin-bottom: 28px;
                margin-left: 0px;

            }
            .match-card img{
                max-width: 20px;
                width: 100%;
            }
            .mobile-card-2{
                margin-right: 0px;
            }
            .match-card-para{
                padding-left: 0px !important;
            }
section.new p.padding-para {
    padding-top: 5px;
}
section.new p.extra-padding {
    padding-bottom: 7px;
}
section.couple-2 p.sub-heading-16-14 {
    margin-bottom: 10px;
}
    
}

@media screen and (max-width: 414px) {
    section.new .form-row{
        padding-left: 45px;
        padding-right: 45px;
    }
    section.new .padding-para{
        padding-left: 12% !important;
        padding-right: 12% !important;
    }
    section.new .row.form-row {
    max-width: 330px !important;
    width: 100% !important;
    margin: auto;
}
    
}
@media screen and (max-width: 390px) {
    section.section-4 .sparkle-img img {
    right: -30%;
}
  
}
@media screen and (max-width: 374px) {
    .iphone-bg-img-mobile {
    padding: 20px 15px;
}
.iphone-bg-img-desktop {
    padding-top: 110px;
}
    
}
 </style>

<!-- Section 1 -->
<section class="new pull-section-1">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 sm-pt header-logo">
        <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mohabbatein.svg" alt=""> -->
        </div>
        <div class="col-lg-8 header-image align-right d-none d-lg-block ">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image111.png" alt="" >
        </div>
        </div>
    </div>
</section>



<!-- Section 2 -->
<section class="new">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 newsletter pt-150">
            <p class="small-text fade-in extra-padding animate" data-animate="fade-in-bottom">आत्मीय साथियों को एक साथ लाना</p>
            <h1 class="black-text fade-in-bottom">हमारे एक्सक्लूसिव से जुड़ें<br> प्रतीक्षा सूची</h1>
            <p class="sm-pt mb-60 padding-para fade-in-1s gray-text font-10">हमारा उद्देश्य उन लोगों के लिए एक सुरक्षित, सरल और कुशल मंच तैयार करना है जो विवाह में विश्वास करते हैं और अपने जीवन साथी की खोज करने के लिए तैयार हैं।</p>
            <?php echo apply_shortcodes( '[contact-form-7 id="d6df403" title="Contact form 1 Hindi"]' ); ?>
          </div>  
        </div>
        <div class="row pull-up">
        <div class="col-lg-3 sm-pt image-2 fade-in">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image-22.png" alt="" >
        </div>
        <div class="col-lg-9 sm-pt image-3 align-right arrow-desktop">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow.svg" alt="">
        </div>
        <div class="col-lg-9 sm-pt image-3 align-right arrow-mobile ">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-mobile.svg" alt="">
        </div>
        </div>
    </div>
</section>


<section class="section-2 blue-bg pd-150">
<div class="custom-shape-divider-top">
<svg data-name="Layer 1" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>
    <div class="container pt-60 sec2-container">
        <div class="row">
            <div class="col-lg-6 sec2-col-1 animate" data-animate="fade-in-left">
                <p class="sub-heading">हमारी प्रतीक्षा सूची में शामिल हों</p>
                <h2 class="pd-none-mob pd-30">अन्वेषण करने वाले पहले लोगों में से एक बनें <span class="red-text">मोहब्बतें</span> जब हम लॉन्च करेंगे.</h2>
                <p>हमारी प्रतीक्षा सूची में शामिल होकर, आप हमारे प्लेटफ़ॉर्म तक प्राथमिकता से पहुंच का आनंद लेंगे। यह महज़ एक वेबसाइट से कहीं अधिक है - यह एक ऐसी जगह है जहां नियति आपस में जुड़ती है। आपको रोमांचक अपडेट, विवाह संबंधी मार्गदर्शन, झलकियां और सीधे आपके इनबॉक्स तक विशेष पहुंच भी प्राप्त होगी।</p>
                <p>नियति को प्रतीक्षा न करने दें, आज ही साइन अप करें और उस विशेष व्यक्ति को खोजने के लिए अपनी यात्रा पर पहला कदम उठाएं। मोहब्बतें के साथ, आपकी हमेशा की ख़ुशी बस कुछ ही क्लिक दूर है।</p>
            </div>
            <div class="col-lg-6 sec2-col-2 animate" data-animate="fade-in-right">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/couple-1x.png" alt="">
            </div>
        </div>
    </div>  
</section>

<section class="section-3 blue-bg pd-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="align-center heading-desktop animate" data-animate="fade-in-bottom">ब्राउज़ करें. जोड़ना।<span class="red-text">चिंगारी जलाओ.</span> </h2>
                <h2 class="heading-mobile animate" data-animate="fade-in-bottom">ब्राउज़ करें. जोड़ना। <br><span class="red-text">चिंगारी जलाओ.</span> </h2>
                <p class="padding-para align-center mb-60 para-left animate" data-animate="fade-in-bottom">सहजता से अपनी प्रोफ़ाइल बनाएं, आकर्षक मेल खोजें और सार्थक संबंध स्थापित करें, यह सब बस कुछ ही सरल चरणों में...</p>
            </div>
            <div class="slider-container montserrat-font">
            <div class="col-lg-3 browse-card slide-1 animate" data-animate="fade-in">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/card-1.svg" alt="" class="sm-pd">
            <h3 class="sm-pd">साइन अप करें</h3>
            <p class="sm-pd card-para">अपने अद्वितीय व्यक्तित्व, रुचियों और लक्ष्यों को प्रदर्शित करते हुए अपनी वैयक्तिकृत प्रोफ़ाइल बनाएं।</p>
            </div>
            <div class="col-lg-3 browse-card card-2 slide-2 animate" data-animate="fade-in">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/card-2.svg" alt="" class="sm-pd">
            <h3 class="sm-pd">जोड़ना</h3>
            <p class="sm-pd">अपनी प्राथमिकताओं को परिष्कृत करने और सही साथी ढूंढने के लिए हमारे उन्नत खोज फ़िल्टर का उपयोग करें।</p>
            </div>
            <div class="col-lg-3 browse-card slide-3 animate" data-animate="fade-in">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/card-3.svg" alt="" class="sm-pd">
            <h3 class="sm-pd">मिलो</h3>
            <p class="sm-pd">जब आपको कोई विशेष व्यक्ति मिल जाए, तो अगला कदम उठाएं और हमारे सुझावों के अनुसार एक बैठक की व्यवस्था करें।</p>
            </div>
            <div class="col-lg-3 browse-card card-2 slide-4 animate" data-animate="fade-in">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/card-4.svg" alt="" class="sm-pd">
            <h3 class="sm-pd">जश्न मनाना</h3>
            <p class="sm-pd">अपनी प्रेम कहानी का जश्न मनाएं क्योंकि आप एक साथ एक खूबसूरत यात्रा पर निकल रहे हैं।</p>
            </div>
            </div>
        </div>
    </div>
</section>


<!-- iphone SECTION -->
<section class="section-4 iphone-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 arrow-img desktop-section">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/find-a-match-arrow.png" alt="">
            </div>
        </div>
        <div class="row mt-90 pt-150 iphone-sec-row iphone-bg-img-desktop iphone-bg-img-mobile">
            <div class="col-lg-7 iphone-col1">
                <h1 class="white-text animate" data-animate="fade-in">iPhone 15 जीतें! </h1>
                <h3 class="white-text sm-pt animate" data-animate="fade-in">प्रीमियम के लिए साइन अप करने पर आपके पास iPhone 15 जीतने का मौका है</h3>
                <p class="white-text sm-pt animate" data-animate="fade-in">लॉन्च होने पर हम एक iPhone 15 दे रहे हैं! <br>उपहार के बारे में अपडेट रहने के लिए प्रतीक्षा सूची में शामिल हों।</p>
                <p class="white-text open-terms-form-in display-desktop animate" data-animate="fade-in-bottom"><a href="#" class="white-text">नियम एवं शर्तें</a></p>
                <button class="win-btn red-text animate" data-animate="fade-in-bottom">अभी जीतो</button>
                <p class="white-text open-terms-form-in display-mobile animate" data-animate="fade-in-bottom"><a href="#" class="white-text">नियम एवं शर्तें</a></p>
            </div>
            <div class="col-lg-5 iphone-mob iphone-col2 animate" data-animate="fade-in">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mobile.svg" alt="">
            </div>

        </div>

    </div>
</section>

<section class="section-4 ">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-2 arrow-img desktop-section">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/find-a-match-arrow.png" alt="">
            </div> -->
            <div class="col-lg-6 pt-150 mb-pd-o">
                <h2 class="red-text pd-right-30 pt-30 animate" data-animate="fade-in-left">ऐसा मिलान ढूंढें जो आपकी प्राथमिकताओं से पूरी तरह मेल खाता हो</h2>
            </div>
            <div class="col-lg-2 sparkle-img animate" data-animate="fade-in">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sparkle.svg" alt="">
            </div>
        </div>

        <!-- Match Cards in a Single Row -->
        <div class="row mt-60 match-card animate" data-animate="fade-in-bottom">
            <div class="col-lg-2 card-flex match-card-box">
                <div class="col-4 match-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/match-card-1.svg" alt="">
                </div>
                <div class="col-8 match-card-para">
                    <p>धर्म</p>
                </div>
            </div>

            <div class="col-lg-2 card-flex match-card-box mobile-card-2">
                <div class="col-4 match-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/occupation.svg" alt="">
                </div>
                <div class="col-8 match-card-para">
                    <p>पेशा</p>
                </div>
            </div>

            <div class="col-lg-2 card-flex match-card-box">
                <div class="col-4 match-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/location.svg" alt="">
                </div>
                <div class="col-8 match-card-para">
                    <p>जगह</p>
                </div>
            </div>

            <div class="col-lg-2 card-flex match-card-box mobile-card-2">
                <div class="col-4 match-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/world.svg" alt="">
                </div>
                <div class="col-8 match-card-para">
                    <p>भाषा</p>
                </div>
            </div>

            <div class="col-lg-2 card-flex match-card-box">
                <div class="col-4 match-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/career.svg" alt="">
                </div>
                <div class="col-8 match-card-para">
                    <p>आजीविका</p>
                </div>
            </div>

            <div class="col-lg-2 card-flex match-card-box mobile-card-2">
                <div class="col-4 match-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hobbies.svg" alt="">
                </div>
                <div class="col-8 match-card-para">
                    <p>शौक</p>
                </div>
            </div>

            <div class="col-lg-2 card-flex match-card-box">
                <div class="col-4 match-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/numerology.svg" alt="">
                </div>
                <div class="col-8 match-card-para">
                    <p>अंक ज्योतिष</p>
                </div>
            </div>

            <div class="col-lg-2 card-flex match-card-box mobile-card-2">
                <div class="col-4 match-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/horoscopes.svg" alt="">
                </div>
                <div class="col-8 match-card-para">
                    <p>राशि भविष्य</p>
                </div>
            </div>

            <div class="col-lg-2 card-flex match-card-box">
                <div class="col-4 match-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/interests.svg" alt="">
                </div>
                <div class="col-8 match-card-para">
                    <p>रूचियाँ</p>
                </div>
            </div>

            <div class="col-lg-2 card-flex match-card-box mobile-card-2">
                <div class="col-4 match-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/education.svg" alt="">
                </div>
                <div class="col-8 match-card-para">
                    <p>शिक्षा</p>
                </div>
            </div>

        </div>
        <!-- End of Match Cards Row -->
    </div>
</section>


<!-- Section 5 -->
<section class="section-2 couple-2 mt-90 pd-150">
    <div class="container pt-60 sec2-container">
        <div class="row">
            <div class="col-lg-6 sec2-col-2 order-2 order-lg-1 animate" data-animate="fade-in-left">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/couple-2x.png" alt="">
            </div>
            <div class="col-lg-4 sec2-col-1 order-1 order-lg-2 animate" data-animate="fade-in-right">
                <p class="sub-heading-16-14 black-text-op">संस्थापकों से मिलें</p>
                <h2 class="pd-none-mob sm-pd">इसकी शुरुआत एक <br><span class="red-text">प्रेम कहानी से हुई... </span></h2>
                <p>अपनी खूबसूरत प्रेम कहानी से प्रेरित होकर, चंदन और हेनल ने एक ऐसा मंच बनाने की यात्रा शुरू की, जो प्यार और वास्तविक संबंधों की शक्ति में उनके अटूट विश्वास से प्रेरित होकर, दूसरों को हमेशा के लिए खुशी पाने में मदद करेगा। </p>
                <p>चंदन और हेनल मानते हैं कि एक स्थायी रिश्ता सम्मान, विश्वास और आपसी समझ के स्तंभों पर बना है। इन सिद्धांतों से प्रेरित होकर, उन्होंने एक ऐसा आश्रय स्थल बनाने का प्रयास किया जो दूसरों को हमेशा की ख़ुशी की अपनी कहानियाँ लिखने में मदद करेगा।</p>
            </div>
        </div>
    </div>  
</section>


<!-- SECTION Join our waitlist Form -->

<section class="bottom-waitlist display-desktop">
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 waitlist-bg-img-desktop waitlist-bg-img-mobile animate" data-animate="fade-in-bottom">
            <div class="center-content">
            <h2 class="waitlist-heading montserrat-font"><span class="red-text">हमारी प्रतीक्षा</span> सूची में शामिल हों</h2>
        <?php echo apply_shortcodes( '[contact-form-7 id="aca7c88" title="Join our Newsletter Hindi"]' ); ?>
</div>
        </div>
        </div>
    </div>
</section>


<!-- Section Banner off Connecting -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 banner-bottom-img animate" data-animate="fade-in">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-bottom-2x.jpg" alt="">
        </div>
        </div>
    </div>
</section>









<?php
get_footer();?>


<script>
    $(document).ready(function(){
        $('.slider-container').slick({
            infinite: false,
            slidesToShow: 4, // Number of slides to show at a time
            slidesToScroll: 1, // Number of slides to scroll
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            responsive: [
                {
                    breakpoint: 992, // Adjust the breakpoint as needed
                    settings: {
                        slidesToShow: 2,
                        dots: true,
                        autoplay: true,
                        autoplaySpeed: 5000,
                    }
                },
                {
                    breakpoint: 768, // Adjust the breakpoint as needed
                    settings: {
                        slidesToShow: 1,
                        dots: true,
                        autoplay: true,
                        autoplaySpeed: 5000,
                    }
                }
            ]
        });
    });
</script>