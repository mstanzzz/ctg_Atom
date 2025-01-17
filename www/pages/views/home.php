<!--

Hi Alicia,

In order to make your part easy, keep in mind that I already have code that does all the sizing. 
So, there is no need for you to be concerned about "cell" images or any other specific sizing. 

This is how my software works: 
--  You upload an image file to the server.
	a) Prepare images 100% qualaty and resize if needed. 
	b) The best size and shape is square width: 1200px  height:1200px.
	c) There algorythms making coppies with various sizes to be used in the site. 	
	d) On upload, you will sent to the crop tool or back to page. 	

-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo</title>
<meta name="description" content="about-us">
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>
<body>
<?php	
require_once($real_root."/includes/header.php"); 
?>
<section class="home-mobile-buttons-block covid-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
	<div class="col-12">
		<div class="home-mobile-buttons-block__wrapper">
			<button data-value="why-closets-to-go" class="home-mobile-buttons-block__button js-home-top-button">
				<svg xmlns="http://www.w3.org/2000/svg" width="13.75" height="9.666" viewBox="0 0 13.75 9.666">
							<defs>
								<style>.white-arrow{fill:#fff;}</style>
							</defs>
							<path class="white-arrow" 
							d="M4.485,4.821a.487.487,0,1,1,.693.686L1.664,9.02H13.257a.488.488,0,0,1,.492.485.494.494,0,0,1-.492.492H1.664L5.177,13.5a.5.5,0,0,1,0,.693.485.485,0,0,1-.693,0L.14,9.852a.489.489,0,0,1,0-.686Z" 
							transform="translate(0.001 -4.676)"/>
				</svg>
				<span>Why Closets To Go</span>
				<span>Home</span>
			</button>
			<button data-value="is-diy-for-me" class="home-mobile-buttons-block__button js-home-top-button">
				<svg xmlns="http://www.w3.org/2000/svg" width="13.75" height="9.666" viewBox="0 0 13.75 9.666">
							<defs>
								<style>.white-arrow{fill:#fff;}</style>
							</defs>
							<path 
							class="white-arrow" 
							d="M4.485,4.821a.487.487,0,1,1,.693.686L1.664,9.02H13.257a.488.488,0,0,1,.492.485.494.494,0,0,1-.492.492H1.664L5.177,13.5a.5.5,0,0,1,0,.693.485.485,0,0,1-.693,0L.14,9.852a.489.489,0,0,1,0-.686Z" 
							transform="translate(0.001 -4.676)"/>
				</svg>
				<span>Is DIY for me?</span>
				<span>Home</span>
			</button>
			<button data-value="easy-process" class="home-mobile-buttons-block__button js-home-top-button">
				<svg xmlns="http://www.w3.org/2000/svg" width="13.75" height="9.666" viewBox="0 0 13.75 9.666">
							<defs>
							<style>.white-arrow{fill:#fff;}</style>
							</defs>
							<path 
							class="white-arrow" 
							d="M4.485,4.821a.487.487,0,1,1,.693.686L1.664,9.02H13.257a.488.488,0,0,1,.492.485.494.494,0,0,1-.492.492H1.664L5.177,13.5a.5.5,0,0,1,0,.693.485.485,0,0,1-.693,0L.14,9.852a.489.489,0,0,1,0-.686Z" 
							transform="translate(0.001 -4.676)"/>
				</svg>
				<span>Easy process</span>
				<span>Home</span>
			</button>
		</div>
	</div>
</div>
</div>
</div>
</section>

<section class="first-fixed-block covid-block home-page clearfix">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-lg-8">
	<figure alt="fff" class="first-fixed-block__img-group" style="background-image: url(images/9041-image-Mission-Home-Country-Commons-with-Alicia.JPG);">
		<figcaption class="first-fixed-block__img-group--text-block">
			<div class="wrapper">
				<h1 class="first-fixed-block__img-group--heading dark-color" style="color:#18C4C7">
				<?php
				//Designer closets up to 50% off
				echo $top_1;
				?>							
				</h1>
				<h3 class="first-fixed-block__img-group--subheading dark-color" style="color:#fff; text-shadow: 0 0 6px rgba(0,0,0,1);">
				<?php
				//Our Pre-Assembly service reduces installation time to ust 4-6 hours for a 10 x 10 closet
				echo $top_2;
				?>																
				</h3>
				<p class="first-fixed-block__img-group--text dark-color" style="color:#FFDF00; text-shadow: 0 0 6px rgba(0,0,0,1);">
				<?php
				//Perfect Fit Guarantee
				echo $top_3;
				?>																
				</p>		

				<a href="<?php echo SITEROOT; ?>showroom-detail-view-categories.html" title="" class="link-button">
				Explore More
				<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
									<path id="left-arrow_3_" data-name="left-arrow(3)"
									d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
									transform="translate(0.001 -4.676)"/>
				</svg>
				</a>
			</div>
		</figcaption>
	</figure>
</div>

<div class="col-12 col-lg-4">
<div class="first-fixed-block__text-group">
<div class="first-fixed-block__text-group--wrapper">
<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
<div class="first-fixed-block__text-group--text">
<p>2K 457</p>
<p>Successful DIY Installations</p>
</div>
</div>
<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/Group156.svg" alt="">
<div class="first-fixed-block__text-group--text">
<p>10k 214</p>
<p>Current users in <span class="first-text">design tool</span></p>
</div>
</div>
<div class="first-fixed-block__text-group--items">
<img src="<?php echo SITEROOT; ?>images/Group156.svg" alt="">
<div class="first-fixed-block__text-group--text">
<p>6k 873</p>
<p>Current users <span class="second-text">submitting designs</span></p>
</div>
</div>

<div class="first-fixed-block__text-group--items">
<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
</div>
<p class="first-text">Aubree W. Charlotte, North Carolina</p>
<p>Just had a successful installation!</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<main class="main clearfix">
<section class="second-block clearfix">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="second-block__border">
<div class="row">
<div class="col-12 col-lg-6" id="why-closets-to-go">
<div class="second-block__first">
<h2 class="second-block__first--heading">
<?php
echo $p_1_head;
?>
<!-- Why Closets To Go -->												
</h2>												
<p class="second-block__first--description">
<?php												
echo $p_1_text;
?>
<!--
We design every organizer based on your exact measurements and specifications; nothing is pre-made. We use only the
finest wood panel products from Roseburg Forest Products Panolam,Flakeboard...
-->

</p>
<a href="<?php echo SITEROOT; ?>comparison.html" title="" class="link-button">
discover more
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)"
d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
transform="translate(0.001 -4.676)"/>
</svg>
</a>
<div class="second-block__first--wrapper align-items-center align-items-md-start">
<div class="second-block__first--video">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="yvideo" width="100%" height="100%" src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&amp;enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
</div>
</div>
<div class="second-block__first--comments">
<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
</div>
<p class="first-text">Aubree W. Charlotte, North Carolina</p>
<p>Just had a successful installation!</p>
</div>
</div>
<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
</div>
<p class="first-text">Aubree W. Charlotte, North Carolina</p>
<p>Just had a successful installation!</p>
</div>
</div>
<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
</div>
<p class="first-text">Aubree W. Charlotte, North Carolina</p>
<p>Just had a successful installation!</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6">
<div class="second-block__second" id="is-diy-for-me">
<div class="second-block__second--wrapper">
<h3 class="second-block__second--subheading">Is <span>DIY</span> for me?</h3>
<h2 class="second-block__second--heading">Absolutely!</h2>
<img src="<?php echo SITEROOT; ?>images/Group265.svg" alt="" class="second-block__second--first-img">
<p class="second-block__second--first-text">
Since 1985 we’ve had
over 100,00 successful DIY installations
</p>
<p class="second-block__second--second-text">
<img src="<?php echo SITEROOT; ?>images/security-dark-gray.svg" alt="">
100% perfect fit guarantee
</p>
<a href="<?php echo SITEROOT; ?>diy-instructions.html" title="" class="second-block__second--button">
We can show you how
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)"
d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
transform="translate(0.001 -4.676)"/>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="block-with-background">
<div class="wrapper">
<div class="container-fluid">
<div class="block-with-background__wrapper" style="background-image: url('images/block-with-background.png');">
<div class="block-with-background__content">
<div class="row">
<div class="col-12 col-lg-8 align-self-center">
<h2 class="block-with-background__content--heading">
<?php
echo $p_2_head;
?>	
<!--
Virtual Google Hangouts consultation
-->
</h2>
<button class="block-with-background__content--button" id="js-btn-mobile-show-modal">
<img src="<?php echo SITEROOT; ?>images/Info2Btn.svg" alt="">
</button>

<div class="block-with-background__content--mobile-popup" id="js-mobile-show-modal">
<p class="block-with-background__content--text">

<?php
echo $p_2_text;
?>	
<!--									
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diamnonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
-->
</p>
</div>
<div class="desktop-show">
<a href="#" title="" class="link-button">
discover more
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)"
d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
transform="translate(0.001 -4.676)"/>
</svg>
</a>
</div>
</div>
<div class="col-12 col-lg-4 align-self-center">
<div class="block-with-background__content--images">
<div class="mobile-show">
<a href="#" title="" class="link-button">
discover more
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)"
d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
transform="translate(0.001 -4.676)"/>
</svg>
</a>
</div>
<a href="#" title="" class="images-link">
<img src="<?php echo SITEROOT; ?>images/Meet1@2x.png" alt="" class="img-fluid">
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="you-design-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-xl-8">
<div class="you-design-block__image">
<img src="<?php echo SITEROOT; ?>images/you-design.png" alt="" class="img-fluid">
</div>
</div>
<div class="col-12 col-xl-4">
<div class="you-design-block__wrapper">
<p class="you-design-block__wrapper--perfect-fit">
<img src="<?php echo SITEROOT; ?>images/security.svg" alt="">
100% Perfect fit guarantee
</p>
<h2 class="you-design-block__wrapper--heading">
<?php									
//You design
echo $p_3_head;
?>
</h2>
<p class="you-design-block__wrapper--text small-text">									
<?php									
echo $p_3_text;
?>
<!--
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eir...
-->
</p>		
<div class="you-design-block__wrapper--text-group">
<div>
<img src="<?php echo SITEROOT; ?>images/Group174.svg" alt="">
<p>10k 214</p>
</div>
<p>Current users in <span>design tool</span></p>
</div>
<a href="<?php echo SITEROOT; ?>we-design.html" title="" class="link-button">
Try now
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)"
d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
transform="translate(0.001 -4.676)"/>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="you-design-block we-desing-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-xl-4">
<div class="you-design-block__wrapper">
<p class="you-design-block__wrapper--perfect-fit">
<img src="<?php echo SITEROOT; ?>images/security.svg" alt="">
100% Perfect fit guarantee
</p>
<h2 class="you-design-block__wrapper--heading">
<?php
//We design
echo $p_4_head;
?>									
</h2>
<p class="you-design-block__wrapper--text small-text">
<?php					
echo $p_4_text;
?>							
<!--
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eir...
-->
</p>
<div class="you-design-block__wrapper--text-group">
<div>
<img src="<?php echo SITEROOT; ?>images/Group174.svg" alt="">
<p>6k 873</p>
</div>
<p>Current users <span>submitting designs</span></p>
</div>
<a href="#" title="" class="link-button">
Try now
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)"
d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
transform="translate(0.001 -4.676)"/>
</svg>
</a>
</div>
</div>
<div class="col-12 col-xl-8">
<div class="you-design-block__image">
<img src="<?php echo SITEROOT; ?>images/we-design.png" alt="">
</div>
</div>
</div>
</div>
</div>
</section>

<section class="easy-process-block" id="easy-process">
<div class="wrapper">	
<div class="container-fluid">
<div class="row">
<div class="col-12">

<div class="easy-process-block__wrapper">
<h2 class="easy-process-block__heading">
<?php
echo $p_5_head;
?>
<!-- Closets To Go - easy process -->

</h2>
<div class="easy-process-block__text">
<p>
<?php
echo $p_5_text;
?>
<!--
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
-->
</p>		
<a href="#" title="" class="link-button">
discover more
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"/>
</svg>
</a>
</div>
<div class="graphics-block">
<div class="graphics-block__wrapper first-wrapper">
<div class="graphics-block__content first-content">
<h2 class="first-heading">step 01</h2>
<p>Create design and purchase closet</p>
<a href="#" title="">Explore more</a>
</div>
</div>
<div class="graphics-block__wrapper second-wrapper">
<div class="graphics-block__content second-content">
<h2 class="second-heading">step 02</h2>
<p>Custom build to order and ship to your location for free</p>
<a href="#" title="">Explore more</a>
</div>
</div>
<div class="graphics-block__wrapper third-wrapper">
<div class="graphics-block__content third-content">
<h2 class="third-heading">step 03</h2>
<p>Easy DIY installation plus Perfect Fit Guarantee</p>
<a href="#" title="">Explore more</a>
</div>
</div>
</div>
<div class="stars-wrapper">
<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
</div>
<p class="first-text">Aubree W. Charlotte, North Carolina</p>
<p>Just had a successful installation!</p>
</div>
</div>
<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
</div>
<p class="first-text">Aubree W. Charlotte, North Carolina</p>
<p>Just had a successful installation!</p>
</div>
</div>
<div class="block-stars__wrapper">
<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" alt="" class="block-stars__wrapper--image">
<div class="block-stars__wrapper--text">
<div class="stars-container">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
<img src="<?php echo SITEROOT; ?>images/star.svg" alt="">
</div>
<p class="first-text">Aubree W. Charlotte, North Carolina</p>
<p>Just had a successful installation!</p>
</div>
</div>										
<!-- 
<div class="mobile-show w-100 text-center">
<button class="third-footer__mobile-button js-mobile-easy-process-to-top">Top</button>
</div> 
-->
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="showroom-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12 showroom-block__heading">
<h2>Closet Organizer Showroom</h2>
<div class="mobile-show">									
<a href="<? echo SITEROOT; ?>showroom-detail-view-category" title="" class="link-button">
explore now
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
</svg>
</a>									
</div>
</div>
</div>
<div class="row showroom-block__wrapper pb-4">

<?php
echo $shoroom_images;
?>			
</div>
<div class="row">
<div class="col-12 text-center">
<div class="desktop-show">
<a href="<?php echo SITEROOT; ?>showroom-detail-view-categories.html" title="" class="link-button">
Explore all
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)"
d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
transform="translate(0.001 -4.676)"/>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="video-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="video-block__shadow">
<div class="row">
<div class="col-12">
<h2 class="video-block__heading">
<?php
echo $p_6_head;											
echo "The Closets To Go Challenge";
?>
</h2>
<p class="video-block__text desktop-show">
<?php
echo $p_6_text;											
echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum etullamcorper nibh. Sed quis tempus nunc. Mauris ultricies venenatisgravida.Nulla faucibus posuere sem quis cursus. Pellentesque quis mi massa.Vestibulum neque turpis, tincidunt vel consequat non, lobortis sed erat. Donec dictum mattis eros, ac feugiat est gravida vel. Nunc dictum diam non mi vehicular. lobortis. Nullam ut aliquet enim. Donec feugiat fringilla massa ut semper.";
?>
</p>
</div>
</div>

<div class="row">
<div class="col-12">
<div class="video-block__videos carousel-har">

<div class="video-block__videos--video">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="yvideo" width="100%" height="100%" 
src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&enablejsapi=1" 
frameborder="0" 
allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen>
</iframe>
</div>
</div>

<div class="video-block__videos--video">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="yvideo" width="100%" height="100%" 
src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&enablejsapi=1" 
frameborder="0" 
allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen>
</iframe>
</div>
</div>

<div class="video-block__videos--video">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="yvideo" width="560" height="315" 
src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>

<div class="video-block__videos--video">
<div class="embed-responsive embed-responsive-16by9">
<iframe class="yvideo" width="560" height="315" 
src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&enablejsapi=1" frameborder="0" 
allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>
</div>
</div>

</div>
</div>
</div>
<div class="row">
<div class="col-12 text-center">
<a href="showroom-detail-view-categories.html" title="" class="link-button">

Explore all
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)"
d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z"
transform="translate(0.001 -4.676)"/>
</svg>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="catalog-block home-page">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12 catalog-block__heading">
<h2>Shopping Cart Catalog</h2>
<div class="mobile-show">
<a href="product-detail-view.html" title="" class="link-button">
Explore all
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
</svg>
</a>
</div>
</div>
</div>
<div class="row">
<?php
echo $item_images;
?>
</div>
</div>
</div>
</section>

<section class="two-elements-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12 col-lg-6">
<div class="two-elements-block__wrapper with-border">
<h2 class="two-elements-block__wrapper--heading">
<?php
echo $p_7_head;
?>
</h2>
<p class="two-elements-block__wrapper--text small-text js-show-text">
<?php
echo $p_7_text;
?>
</p>
<div class="button-holder">

<button onclick="location.href='<?php echo SITEROOT; ?>services.html'" data-readAll="Discover more" data-readLess="Discover less" class="link-button js-btn-view-all-text">
<span>Discover more</span>
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
</svg>
</button>

</div>
</div>
</div>
<div class="col-12 col-lg-6">
<div class="two-elements-block__wrapper with-border">
<h2 class="two-elements-block__wrapper--heading">
<?php
echo $p_8_head;
?>
</h2>
<p class="two-elements-block__wrapper--text small-text js-show-text">
<?php
echo $p_8_text;
?>
</p>
<div class="button-holder">
<button data-readAll="Discover more" data-readLess="Discover less" class="link-button js-btn-view-all-text">
<span>Discover more</span>
<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
</svg>
</button>
</div>
</div>
</div>

</div>
</div>
</div>
</section>
</main>


<div class="scrollToTopBlock">
<div class="people-working">
<img src="<?php echo SITEROOT; ?>images/people-working-call-center_@2x.png" alt="" class="people-working__image">
<div class="people-working__wrapper">
<div class="people-working__content">
<p class="people-working__text">Hi! I'm the Virtual assistant, and I'm here to help you.</p>
</div>
</div>
</div>
<a href="#" title="" class="scrollToTop js-to-top">
<img src="<?php echo SITEROOT; ?>images/arrows.svg" alt="">
</a>
</div>

<div class="mobile-show">
<div class="mobile-footer-buttons">
<a href="#" title="" class="mobile-footer-buttons__first">you design</a>
<a href="#" title="" class="mobile-footer-buttons__second"><img src="<?php echo SITEROOT; ?>images/icon-save.svg" alt="" class="img-fluid"></a>
<a href="#" title="" class="mobile-footer-buttons__third">we design</a>
</div>
</div>

<?php
require_once($real_root.'/includes/footer.php');
?>
<script src="<?php echo SITEROOT; ?>app.js"></script></body>


