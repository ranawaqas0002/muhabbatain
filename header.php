
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<style>
	#header {
    position: sticky;
    top: 0;
    background-color: white; 
    z-index: 100;
	padding-top: 15px;
	padding-bottom: 15px;
}
.header-logo img {
    max-width: 230px;
    width: 100%;
}
.lang-select {
    vertical-align: middle;
    justify-content: end;
    align-items: end;
    align-content: center;
    display: flex;
	padding-right: 50px !important;
}
.lang-select p{
	margin-bottom: 0px;
}
.lang-select a {
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
}
.lang-select a:hover, .lang-select a:active, .lang-select a:focus {
    color: #9D101E;
}

@media screen and (max-width:992px) {
	.header-logo {
    text-align: center;
}
.header-logo img {
    max-width: 160px;
	width: 100%;
}
	
}
@media (min-width: 768px) and (max-width: 992px){
	.lang-select {
    padding-right: 0px !important;
}
}
@media screen and (max-width:767px){
	.lang-select {
    text-align: right !important;
    justify-content: end;
    padding-right: 30px !important;
}
.lang-select a{
    font-size: 16px
}
.header-logo {
    text-align: left;
    padding-left: 30px !important;
}
}

</style>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
	<link defer href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/stylesheet.css" rel="stylesheet" >
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick-theme.css"/>
	
	
<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
				

	
<!-- <base href="http://muhabbatain.local/"> -->
<base href="https://dev.mohabbatein.com/waitlist/">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'muhabbatain' ); ?></a>

	<header id="header" class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-6 header-logo">
				<a href="/waitlist/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mohabbatein.svg" alt="">
				</a>
            </div>
			<div class="col-6 lang-select">
				<p><a href="/waitlist/">English</a> &nbsp;&nbsp;/&nbsp;&nbsp; <a href="/waitlist/in"> हिंदी</a></p>

			</div>
        </div>
    </div>
    
    <!-- Rest of your header content here -->
</header>

