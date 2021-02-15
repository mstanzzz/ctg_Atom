<?php
/*
	echo "<br />";
	echo "top_1: ".$top_1;
	echo "<br />";
	echo "top_2: ".$top_2;
	echo "<br />";
	echo "top_3: ".$top_3;
	echo "<br />";
	echo "p_1_head: ".$p_1_head;
	echo "<br />";
	echo "p_1_text: ".$p_1_text;
	echo "<br />";
	echo "p_2_head: ".$p_2_head;
	echo "<br />";
	echo "p_2_text: ".$p_2_text;
	echo "<br />";
	echo "p_3_head: ".$p_3_head;
	echo "<br />";
	echo "p_3_text: ".$p_3_text;
	echo "<br />";
	echo "p_4_head: ".$p_4_head;
	echo "<br />";
	echo "p_4_text: ".$p_4_text;
	echo "<br />";
	echo "p_5_head: ".$p_5_head;
	echo "<br />";
	echo "p_5_text: ".$p_5_text;
	echo "<br />";
	echo "p_6_head: ".$p_6_head;
	echo "<br />";
	echo "p_6_text: ".$p_6_text;
	echo "<br />";
	echo "p_7_head: ".$p_7_head;
	echo "<br />";
	echo "p_7_text: ".$p_7_text;
	echo "<br />";
	echo "p_8_head: ".$p_8_head;
	echo "<br />";
	echo "p_8_text: ".$p_8_text;
	echo "<br />";
	echo "p_9_head: ".$p_9_head;
	echo "<br />";
	echo "p_9_text: ".$p_9_text;
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo</title>
<meta name="description" content="about-us"><link href="../../app.css" rel="stylesheet"></head>
<body>
<?php	
require_once($_SERVER['DOCUMENT_ROOT']."/includes/header.php"); 	
?>	
<section class="home-mobile-buttons-block covid-block">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="home-mobile-buttons-block__wrapper links-wrapper">
					<a href="about-us.html" title="about-us.html" class="home-mobile-buttons-block__link active">About us</a>
					<a href="services.html" title="services.html" class="home-mobile-buttons-block__link">Services</a>
					<a href="support.html" title="support.html" class="home-mobile-buttons-block__link">Support</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
		
<main class="main clearfix">

	<section class="breadcrumb-block about-us desktop-show">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
							<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="#" title="">Home</a></li>
							<li class="breadcrumb-item"><a href="#" title="">Company</a></li>
							<li class="breadcrumb-item active" aria-current="page" title="">About us</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="two-elements-block about-us">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="two-elements-block__wrapper">
							<h2 class="two-elements-block__wrapper--heading">
							<!-- Top Quality Materials Closet Organizers manufactured in the USA -->
							<?php echo $top_1; ?>
							</h2>
							<h3 class="two-elements-block__wrapper--subheading">
							<!-- 30 years of Quality Service. -->
							<?php echo $top_2; ?>
							</h3>
							<div class="simple-block__text desktop-show">
								<p class="with-spaces">
								<span>Placing an order?</span>
								<span>Customizing closets system</span>
								<span>Questions</span>
								</p>
								<p class="bolded-text">
								<!-- Call today! (503) 639-7068 -->
								<?php 					
								echo "Call today! ".$company_display_info['company_phone']; 
								?>								</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="two-elements-block__wrapper">
							<img src="../../images/woman-working-office.jpg" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col1-12 mobile-show">
						<div class="simple-block__text">
							<p class="with-spaces">
								<span>Placing an order?</span>
								<span>Customizing closets system</span>
								<span>Questions</span>
							</p>
							<p class="bolded-text">
								<!-- Call today! (503) 639-7068 -->
								<?php 					
								echo "Call today! ".$company_display_info['company_phone']; 
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="company-block about-us">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6 col-lg-3 company-block__images">
						<img src="../../images/who-we-are-1.png" alt="" >
					</div>
					<div class="col-6 col-lg-3 company-block__images">
						<img src="../../images/who-we-are-2.png" class="img-fluid" alt="">
					</div>
					
					<div class="col-12 col-lg-6 company-block__text">
						<div class="company-block__text--wrapper">
							<h2 class="company-block__text--heading">
							<!--Who we are-->
							<?php 
							echo $p_1_head;
							?>
							</h2>
							<p class="company-block__text--text small-text js-show-text">
							<?php
							echo $p_1_text;
							?>
							<!--
							Closets To Go is the industry leader in custom closet design and customer satisfaction. January 2015, marks our 30th year serving 
							the greater Portland metropolitan area. We are also pleased to announce our 8th year serving customers in all 50 states and Canada 
							through our internet department.

							We at Closets To Go pride ourselves on providing quality products at a competitive price while demonstrating outstanding customer 
							service and attention to detail.  Please let us know how we can assist in making your space an oasis. 
							-->

							</p>
							
							<div class="button-holder desktop-show">
								<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text">
								<span>Full description</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
								<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
								</svg>
								</button>
							</div>
							
							<div class="button-holder mobile-show mt-3">
								<button class="link-button active modal-open"
								data-toggle="modal" 
								data-target="#mobile-company-full-description"
								data-img-path="images/who-we-are-1.png">
								<span>Full description</span>
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

			<section class="you-design-block we-desing-block about-us">
				<div class="wrapper">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 col-lg-5">
								<div class="you-design-block__wrapper">
									<h2 class="you-design-block__wrapper--heading">
									<!--Products-->
									<?php
									echo $p_2_head;
									?>
									</h2>
									<p class="you-design-block__wrapper--text small-text js-show-text">
									<?php
									echo $p_2_text;
									?>
									<!--									
									We design every organizer based on your exact measurements and specifications; nothing is pre-made. We use only the finest wood 
									panel products from Roseburg Forest Products, Panolam, Flakeboard and other high quality products made in America with the top 
									of the line American and European hardware.

									All systems have steel fasteners and are wall mounting to insure structural stability. Our systems are enginee to be wall-attached 
									(reach-in closets, walk-in closets, pantries) or free-standing (garage storage organizers and armoires, office systems and more).
									-->
									</p>				
									<div class="button-holder desktop-show">
										<button data-readAll="Full description" data-readLess="Less description" class="link-button js-btn-view-all-text">
											<span>Full description</span>
											<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
												<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
											</svg>
										</button>
									</div>

									<div class="button-holder mobile-show mt-3">
										<button class="link-button active modal-open"
												data-toggle="modal" 
												data-target="#mobile-products-full-description">
											<span>Full description</span>
											<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
												<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
											</svg>
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-7">
								<div class="you-design-block__image">
									<img src="../../images/about-us-prod.png" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="time-line-block">
				<div class="wrapper">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="time-line-block__heading">
									<h2>
									<?php
									echo $p_3_text;
									?>
									</h2>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="time-line-block__wrapper" id="js-show-mobile-time-line">
									<div class="time-line-block__wrapper--content mobile-content">
										<div class="time-line-block__wrapper--image timeline-stast" style="background-image: url('../../images/timeline-start.png');">
											<div class="first-image-text" style="border: 15px solid #FF8A65">
												<div class="inner-text">
													<span>2020</span>
												</div>
											</div>
											<div class="second-image-text" style="color: #FF8A65;">
												<span>05</span>
											</div>
										</div>

										<div class="time-line-block__wrapper--mobile-year" style="background: #FF8A65">
											<div class="inner-text">
												<span>2020</span>
											</div>
										</div>

										<div class="time-line-block__wrapper--text-content timeline-stast">
											<div class="time-line-block__wrapper--text">
												<h4 style="color: #FF8A65;">Lorem ipsum dolor sit amet</h4>
												<p class="mobile-small-text js-show-text">
													Nunc tempus odio quis magna vestibulum porta. Nullam sed dui commodo, malesuada ipsum eu, auctor nulla. Vivamus pretium sit amet 
													magna quis maximus. Integer id blandit urna. Donec vestibulum, magna nec pellentesque ultricies, tellus diam dignissim diam, sit 
													amet ultrices nisl nunc sed libero.
												</p>
												<div class="mobile-show js-remove-for-modal w-100 mb-4">
													<button data-readall="Read all" data-readless="Read less" class="mobile-timeline-read-more-button js-btn-view-all-text">
														<span>Read all</span>
													</button>
												</div>
											</div>
										</div>
									</div>

									<div class="time-line-block__wrapper--content mobile-content">
										<div class="time-line-block__wrapper--image timeline-right" style="background-image: url('../../images/timeline-right.png');">
											<div class="first-image-text" style="border: 15px solid #4DD0E1">
												<div class="inner-text">
													<span>2019</span>
												</div>
											</div>
											<div class="second-image-text" style="color: #4DD0E1;">
												<span>04</span>
											</div>
										</div>

										<div class="time-line-block__wrapper--mobile-year" style="background: #4DD0E1">
											<div class="inner-text">
												<span>2019</span>
											</div>
										</div>
										
										<div class="time-line-block__wrapper--text-content timeline-right">
											<div class="time-line-block__wrapper--text">
												<h4 style="color: #4DD0E1;">Lorem ipsum dolor sit amet</h4>
												<p class="mobile-small-text js-show-text">
													Nunc tempus odio quis magna vestibulum porta. Nullam sed dui commodo, malesuada ipsum eu, auctor nulla. Vivamus pretium sit amet 
													magna quis maximus. Integer id blandit urna. Donec vestibulum, magna nec pellentesque ultricies, tellus diam dignissim diam, sit 
													amet ultrices nisl nunc sed libero.
												</p>
												<div class="mobile-show js-remove-for-modal w-100 mb-4">
													<button data-readall="Read all" data-readless="Read less" class="mobile-timeline-read-more-button js-btn-view-all-text">
														<span>Read all</span>
													</button>
												</div>
											</div>
										</div>
									</div>

									<div class="time-line-block__wrapper--content mobile-content">
										<div class="time-line-block__wrapper--image timeline-left" style="background-image: url('../../images/timeline-left.png');">
											<div class="first-image-text" style="border: 15px solid #A3B11C">
												<div class="inner-text">
													<span>2018</span>
												</div>
											</div>
											<div class="second-image-text" style="color: #A3B11C;">
												<span>03</span>
											</div>
										</div>

										<div class="time-line-block__wrapper--mobile-year" style="background: #A3B11C">
											<div class="inner-text">
												<span>2018</span>
											</div>
										</div>
										
										<div class="time-line-block__wrapper--text-content timeline-left">
											<div class="time-line-block__wrapper--text">
												<h4 style="color: #A3B11C;">Lorem ipsum dolor sit amet</h4>
												<p class="mobile-small-text js-show-text">
													Nunc tempus odio quis magna vestibulum porta. Nullam sed dui commodo, malesuada ipsum eu, auctor nulla. Vivamus pretium sit amet 
													magna quis maximus. Integer id blandit urna. Donec vestibulum, magna nec pellentesque ultricies, tellus diam dignissim diam, sit 
													amet ultrices nisl nunc sed libero.
												</p>
												<div class="mobile-show js-remove-for-modal w-100">
													<button data-readall="Read all" data-readless="Read less" class="mobile-timeline-read-more-button js-btn-view-all-text">
														<span>Read all</span>
													</button>
												</div>
											</div>
										</div>
									</div>

									<div class="time-line-block__wrapper--content mobile-content">
										<div class="time-line-block__wrapper--image timeline-right" style="background-image: url('../../images/timeline-right.png');">
											<div class="first-image-text" style="border: 15px solid #78909C">
												<div class="inner-text">
													<span>2015</span>
												</div>
											</div>
											<div class="second-image-text" style="color: #78909C">
												<span>02</span>
											</div>
										</div>

										<div class="time-line-block__wrapper--mobile-year" style="background: #78909C">
											<div class="inner-text">
												<span>2015</span>
											</div>
										</div>
										
										<div class="time-line-block__wrapper--text-content timeline-right">
											<div class="time-line-block__wrapper--text">
												<h4 style="color: #78909C;">Lorem ipsum dolor sit amet</h4>
												<p class="mobile-small-text js-show-text">
													Nunc tempus odio quis magna vestibulum porta. Nullam sed dui commodo, malesuada ipsum eu, auctor nulla. Vivamus pretium sit amet 
													magna quis maximus. Integer id blandit urna. Donec vestibulum, magna nec pellentesque ultricies, tellus diam dignissim diam, sit 
													amet ultrices nisl nunc sed libero.
												</p>
												<div class="mobile-show js-remove-for-modal w-100 mb-4">
													<button data-readall="Read all" data-readless="Read less" class="mobile-timeline-read-more-button js-btn-view-all-text">
														<span>Read all</span>
													</button>
												</div>
											</div>
										</div>
									</div>									

									<div class="time-line-block__wrapper--content mobile-content">
										<div class="time-line-block__wrapper--image timeline-end" style="background-image: url('../../images/timeline-end.png');">
											<div class="first-image-text" style="border: 15px solid #FFCA28">
												<div class="inner-text">
													<span>2014</span>
												</div>
											</div>
											<div class="second-image-text" style="color: #FFCA28;">
												<span>03</span>
											</div>
										</div>

										<div class="time-line-block__wrapper--mobile-year" style="background: #FFCA28">
											<div class="inner-text">
												<span>2014</span>
											</div>
										</div>
										
										<div class="time-line-block__wrapper--text-content timeline-end">
											<div class="time-line-block__wrapper--text">
												<h4 style="color: #FFCA28">Lorem ipsum dolor sit amet</h4>
												<p class="mobile-small-text js-show-text">
													Nunc tempus odio quis magna vestibulum porta. Nullam sed dui commodo, malesuada ipsum eu, auctor nulla. Vivamus pretium sit amet 
													magna quis maximus. Integer id blandit urna. Donec vestibulum, magna nec pellentesque ultricies, tellus diam dignissim diam, sit 
													amet ultrices nisl nunc sed libero.
												</p>
												<div class="mobile-show js-remove-for-modal w-100">
													<button data-readall="Read all" data-readless="Read less" class="mobile-timeline-read-more-button js-btn-view-all-text">
														<span>Read all</span>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 text-center">
								<div class="mobile-show">
									<button class="link-button active"
												data-toggle="modal" 
												data-target="#mobile-time-line"
												id="js-mobile-time-line-btn">
											<span>Full history</span>
											<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
												<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
											</svg>
										</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<div class="scrollToTopBlock">
			<div class="people-working">
				<img src="../../images/people-working-call-center_@2x.png" alt="" class="people-working__image">

				<div class="people-working__wrapper">
					<div class="people-working__content">
						<p class="people-working__text">Hi! I'm the Virtual assistant, and I'm here to help you.</p>
					</div>
				</div>
			</div>

			<a href="#" title="" class="scrollToTop js-to-top">
				<img src="../../images/arrows.svg" alt="">
			</a>
		</div>

		<div class="mobile-show">
			<div class="mobile-footer-buttons">
				<a href="#" title="" class="mobile-footer-buttons__first">you design</a>
				<a href="#" title="" class="mobile-footer-buttons__second"><img src="../../images/icon-save.svg" alt="" class="img-fluid"></a>
				<a href="#" title="" class="mobile-footer-buttons__third">we design</a>
			</div>
		</div>






	<?php
	require_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');
	?>
		
		
		

		<!-- Modal mobile campany block -->
		<div class="modal about-us-modal fade" id="mobile-company-full-description" tabindex="-1" role="dialog" aria-labelledby="mobile-company-full-description-title" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="mobile-company-full-description-title">&nbsp;</h5>
						<button type="button" class="close about-us-modal-close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

					</div>
				</div>
			</div>
		</div>

		<!-- Modal mobile products block -->
		<div class="modal about-us-modal fade" id="mobile-products-full-description" tabindex="-1" role="dialog" aria-labelledby="mobile-products-full-description-title" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="mobile-products-full-description-title">&nbsp;</h5>
						<button type="button" class="close about-us-modal-close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

					</div>
				</div>
			</div>
		</div>

		<!-- Modal mobile time line -->
		<div class="modal about-us-modal fade" id="mobile-time-line" tabindex="-1" role="dialog" aria-labelledby="mobile-time-line-title" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="mobile-time-line-title">&nbsp;</h5>
						<button type="button" class="close about-us-modal-close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">

					</div>
				</div>
			</div>
		</div>
	<script src="../../app.js"></script></body>
</html>
						
						
						