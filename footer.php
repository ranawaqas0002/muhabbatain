<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Muhabbatain
 */

?>
<style>
	footer#footer input.wpcf7-form-control.wpcf7-email.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-email::placeholder {
    color: #C5C5C5 !important;
}
	footer#footer input.wpcf7-form-control.wpcf7-email.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-email {
    width: 100%;
}
footer#footer input.wpcf7-form-control.wpcf7-email.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-email {
    height: 55px;
    background-color: #ffffff;
    border: 2px solid #82C1EF;
    border-radius: 10px;
    width: 100%;
	color: #949494;
    padding-left: 20px;
	padding-left: 20px;
    font-size: 16px;
}
footer#footer input.wpcf7-form-control.wpcf7-submit.has-spinner{
	width: 100%;
    height: 55px;
    border-radius: 10px;
    background-color: #9D101E;
    border: 2px solid #9D101E;
    color: white;
}
footer#footer .footer-arrow img {
    max-width: 230px;
    width: 100%;
    margin-top: -230px;
	
}
	footer#footer h2 {
    font-size: 32px;
    line-height: 44px;
    text-align: center;
}
footer#footer ul.menu {
    display: flex;
	list-style: none;
}
footer#footer ul.menu  li {
    margin-right: 50px;
	
}
footer#footer ul.menu  li a{
    text-decoration: none;
	
}

footer#footer {
    overflow: hidden !important;
}
footer#footer ul.menu a {
    font-size: 18px;
    color: #000000;
    font-weight: 500;
    line-height: 22px;
}
footer#footer ul.socials {
    list-style: none;
    display: flex;
	justify-content: end;
}
footer#footer .socials li{
	margin-right:30px;
}
footer#footer .container.menu-container {
    display: flex;
	max-width: 1300px;
	width: 100%;
}
ul.footer-bootom-line {
    display: flex;
    list-style: none;
	align-items: center;
}
footer#footer .footer-bootom-line li{
	margin-right:30px;
}
footer#footer ul.footer-bootom-line p, footer#footer ul.footer-bootom-line a {
    color: #000000;
    opacity: 35%;
    font-size: 14px;
    font-weight: 400;
    text-decoration: none;
	margin-bottom: 0px;
}
footer#footer .wpcf7 form .wpcf7-response-output{
	margin-top: 0px;
}
.desktop-menu a:hover {
    color: #9D101E !important;
}
@media screen and (max-width: 992px) {
	footer#footer .footer-arrow img{
		display: none;
	}
	ul.menu.desktop-menu{
		display: none !important;
	}
	footer#footer .container.menu-container {
    justify-content: center;
}
li.hide-on-mobile {
    display: none;
}
	
}

@media (min-width: 768px) and (max-width: 992px){
	footer#footer .row.form-row {
    max-width: 992px;
    width: 100%;
	padding-left: 150px;
    padding-right: 150px;
}
}
@media screen and (max-width:767px){
	footer#footer h2 {
    font-size: 24px;
    line-height: 28px;
    text-align: center;
}
	footer#footer .row.form-row {
		max-width: 310px;
		width: 100%;
		margin: auto;
		padding-left: 40px;
		padding-right: 40px;
	}
	footer#footer input.wpcf7-form-control.wpcf7-email.wpcf7-validates-as-required.wpcf7-text.wpcf7-validates-as-email{
		height: 44px;
		font-size: 12px;
	}
	footer#footer input.wpcf7-form-control.wpcf7-submit.has-spinner{
		width: 66%;
		height: 44px;
		font-size: 12px;
	}
	footer#footer .col-md-4.form-col-2{
		padding-right: 0px;
	}
	footer#footer ul.footer-bootom-line p{
		font-size: 12px;
		margin-top: 8px;
	}
	footer#footer .row.form-row p{
		text-align: center;

	}
	
	
}

</style>

<footer id="footer" class="en">
	<div class="row">
	<div class="col-lg-6 offset-lg-3 pt-150">
		<h2 class="pd-30">Find Your Forever. <br>Join Our Waitlist.</h2>
             <?php echo apply_shortcodes( '[contact-form-7 id="fe63086" title="Contact form 1"]' ); ?>
          </div> 
		  </div>
		  <div class="row">
			<div class="container">
				<div class="col-lg-3 footer-arrow">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-arrow.png" alt="">

				</div>

			</div>
		  </div>
		  <div class="row">
			<div class="container menu-container">
				<div class="col-lg-6">
				<ul class="menu desktop-menu">
					<li><a href="/waitlist">English</a></li>
					<li><a href="/waitlist/in">हिंदी</a></li>
				</ul>
				</div>

				<div class="col-lg-6">
				<ul class="socials">
                <li><a href="https://twitter.com/itsmohabbatein/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.svg" alt=""></a></li>
				<li><a href="https://www.instagram.com/itsmohabbatein/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.svg" alt=""></a></li>
				<li><a href="https://www.facebook.com/itsmohabbatein"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.svg" alt=""></a></li>  
            </ul>
				</div>
			</div>
		  </div>
		  <div class="row">
			<div class="container menu-container">
				<div class="col-lg-12">
				<ul class="footer-bootom-line">
					<li><p>© 2023 Mohabbatein | All Rights Reserved</p></li>
					<li class="hide-on-mobile"><a href="#">Created By ARENA</a></li>
					<li class="hide-on-mobile"><p>Made with ❤︎ in Dubai</p></li>
				</ul>

				</div>

			</div>
		  </div>
    </footer>
	<footer id="footer" class="in">
	<div class="row">
	<div class="col-lg-6 offset-lg-3 pt-150">
		<h2 class="pd-30">अपना सदैव खोजें। <br>हमारी प्रतीक्षा सूची में शामिल हों.</h2>
             <?php echo apply_shortcodes( '[contact-form-7 id="d6df403" title="Contact form 1 Hindi"]' ); ?>
          </div> 
		  </div>
		  <div class="row">
			<div class="container">
				<div class="col-lg-3 footer-arrow">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-arrow.png" alt="">

				</div>

			</div>
		  </div>
		  <div class="row">
			<div class="container menu-container">
				<div class="col-lg-6">
				<ul class="menu desktop-menu">
					<li><a href="/waitlist">English</a></li>
					<li><a href="/waitlist/in">हिंदी</a></li>
				</ul>
				</div>

				<div class="col-lg-6">
				<ul class="socials">
                <li><a href="https://twitter.com/itsmohabbatein/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.svg" alt=""></a></li>
				<li><a href="https://www.instagram.com/itsmohabbatein/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.svg" alt=""></a></li>
				<li><a href="https://www.facebook.com/itsmohabbatein"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.svg" alt=""></a></li>  
            </ul>
				</div>
			</div>
		  </div>
		  <div class="row">
			<div class="container menu-container">
				<div class="col-lg-12">
				<ul class="footer-bootom-line">
					<li><p>© 2023 मोहब्बतें | सर्वाधिकार सुरक्षित</p></li>
					<li class="hide-on-mobile"><a href="#">एरेना द्वारा बनाया गया</a></li>
					<li class="hide-on-mobile"><p>दुबई में ❤︎ के साथ बनाया गया</p></li>
				</ul>

				</div>

			</div>
		  </div>
    </footer>
</div><!-- #page -->


<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.com_jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.js"></script>


<!-- Parallax -->
<!-- <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

<script>
var image1 = document.getElementsByClassName('parllaximg1');
new simpleParallax(image1, {
    orientation: 'down',
    scale: 1.3,
    overflow: true
});
var image2 = document.getElementsByClassName('parllaximg2');
new simpleParallax(image2, {
    orientation: 'up',
    scale: 1.3,
    overflow: true
});


</script> -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const elements = document.querySelectorAll('[data-animate]');

    // Function to check if an element is at least 30% visible in the viewport
    function isElementVisible30Percent(el) {
        const rect = el.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        const thirtyPercentHeight = 0.8 * windowHeight;

        return (
            rect.top - thirtyPercentHeight <= 0 &&
            rect.bottom >= 0
        );
    }

    // Function to handle the animation when the section is in the viewport
    function handleAnimation() {
        elements.forEach(function (element) {
            if (isElementVisible30Percent(element)) {
                const animationClass = element.getAttribute('data-animate');
                element.classList.add('animated', animationClass);
            }
        });
    }

    // Attach an event listener to the scroll event
    window.addEventListener("scroll", handleAnimation);

    // Call the handleAnimation function once on page load in case the section is already in the viewport
    handleAnimation();
});


</script>
<script>
  var pageId = <?php echo get_the_ID(); ?>;
  

  if (pageId === 7) {

    document.querySelector('footer.en').style.display = 'block';
    document.querySelector('footer.in').style.display = 'none';
  } else if (pageId === 41) {

    document.querySelector('footer.en').style.display = 'none';
    document.querySelector('footer.in').style.display = 'block';
  } else {

    document.querySelector('footer.en').style.display = 'block';
    document.querySelector('footer.in').style.display = 'none';
  }
</script>



<script>
document.addEventListener('DOMContentLoaded', function () {
    // Capture the email from Form 1 when it is submitted
    document.querySelector('form.wpcf7-form').addEventListener('wpcf7mailsent', function (event) {
        var emailFromForm1 = document.querySelector('input[name="your-email"]').value;
        // Set the captured email in Form 2
        document.querySelector('#email-form2').value = emailFromForm1;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Capture the email from Form 1 when it is submitted
    document.querySelector('form.wpcf7-form').addEventListener('wpcf7mailsent', function (event) {
        var emailFromForm1 = document.querySelector('input[name="your-email"]').value;
        // Set the captured email in Form 2
        document.querySelector('#email-form3').value = emailFromForm1;
    });
});
</script>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.min.js"></script>
<?php wp_footer(); ?>


</body>
</html>
