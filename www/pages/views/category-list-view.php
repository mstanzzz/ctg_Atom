<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo</title>
<meta name="description" content="category list view">
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>
<body>

<?php	
require_once($real_root."/includes/header.php"); 	
?>	
		
<main class="main clearfix">
	<section class="breadcrumb-block">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
							<div class="row">
								<div class="col-12">
									<div class="breadcrumb-block__links">
										<ul class="breadcrumb">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item"><a href="#">Drawers raised panel fronts</a></li>
											<li class="breadcrumb-item active" aria-current="page">Raised panel fronts door options (<span style="color: #FB561B;">5</span> Results)</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="simple-block">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="simple-block__border no-border">
							<div class="row">
								<div class="col-12">
									<div class="simple-block__heading">
										<h2 class="simple-block__heading--heading">Raised Panel Fronts/Door Options</h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="simple-block__text">
										<p class="text-center">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
													sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem 
													ipsum dolor sit amet
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</section>

	<section class="category-block">
		<div class="wrapper">
			<div class="category-block__filters">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12 col-sm-4">
							<div class="category-block__filters--left-wrapper">
								<div class="select-custom" data-select="select-option__filters">
									<div class="select-custom__box hover__rotate-angle">
										<div class="home-consult-form__select__selected ">
											<div data-select="select-option__filters" class="selected-option">
											</div>
											<div class="angle"></div>
										</div>
												
										<ul class="select-custom__list" data-select="selected-list">
													<li>
														<div data-select="select-option__filters" class="select-option select-custom__option selected default">
															<div class="select-custom__option__wrap">
																<p class="select-custom__option__text">Drawed Fronts</p>
															</div>
														</div>
													</li>
													<li>
														<div data-select="select-option__filters" class="select-option select-custom__option">
															<div class="select-custom__option__wrap">
																<p class="select-custom__option__text">Drawed Boxes</p>
															</div>
														</div>
													</li>
													<li>
														<div data-select="select-option__filters" class="select-option select-custom__option">
															<div class="select-custom__option__wrap">
																<p class="select-custom__option__text">Colors</p>
															</div>
														</div>
													</li>
													<li>
														<div data-select="select-option__filters" class="select-option select-custom__option">
															<div class="select-custom__option__wrap">
																<p class="select-custom__option__text">Finishes</p>
															</div>
														</div>
													</li>
													<li>
														<div data-select="select-option__filters" class="select-option select-custom__option">
															<div class="select-custom__option__wrap">
																<p class="select-custom__option__text">Edgebanding</p>
															</div>
														</div>
													</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-8">
							<div class="category-block__filters--right-wrapper">
								<div class="category-block__filters--right-content">
									<div class="select-custom" data-select="select-option__sort-by">
										<div class="select-custom__box hover__rotate-angle">
											<div class="home-consult-form__select__selected ">
												<div data-select="select-option__sort-by" class="selected-option">
												</div>
												<div class="angle"></div>
											</div>
													
											<ul class="select-custom__list" data-select="selected-list">
												<li>
													<div data-select="select-option__sort-by" class="select-option select-custom__option selected default">
														<div class="select-custom__option__wrap">
															<p class="select-custom__option__text">Sort by</p>
														</div>
													</div>
												</li>
												<li>
													<div data-select="select-option__sort-by" class="select-option select-custom__option">
														<div class="select-custom__option__wrap">
															<p class="select-custom__option__text">Sort by 1</p>
														</div>
													</div>
												</li>
												<li>
													<div data-select="select-option__sort-by" class="select-option select-custom__option">
														<div class="select-custom__option__wrap">
															<p class="select-custom__option__text">Sort by 2</p>
														</div>
													</div>
												</li>
												<li>
													<div data-select="select-option__sort-by" class="select-option select-custom__option">
														<div class="select-custom__option__wrap">
															<p class="select-custom__option__text">Sort by 3</p>
														</div>
													</div>
												</li>
												<li>
													<div data-select="select-option__sort-by" class="select-option select-custom__option">
														<div class="select-custom__option__wrap">
															<p class="select-custom__option__text">Sort by 4</p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>

									<span>View:</span>
									<button data-type="js-thumb" class="category-block__filters--button js-switch-list-view">
										<svg id="thumb-menu-gray" data-name="thumb-menu-gray" xmlns="http://www.w3.org/2000/svg" width="18.146" height="18.146" viewBox="0 0 18.146 18.146">
													<g id="Group_343" data-name="Group 343">
														<g id="Group_342" data-name="Group 342">
															<path id="Path_182" data-name="Path 182" d="M6.266,0H2.1A2.1,2.1,0,0,0,0,2.1V6.266a2.1,2.1,0,0,0,2.1,2.1H6.266a2.1,2.1,0,0,0,2.1-2.1V2.1A2.1,2.1,0,0,0,6.266,0Zm.681,6.266a.682.682,0,0,1-.681.681H2.1a.682.682,0,0,1-.681-.681V2.1A.682.682,0,0,1,2.1,1.418H6.266a.682.682,0,0,1,.681.681Z" fill="#949dae"/>
														</g>
													</g>
													<g id="Group_345" data-name="Group 345" transform="translate(9.782)">
														<g id="Group_344" data-name="Group 344">
															<path id="Path_183" data-name="Path 183" d="M282.238,0h-4.111A2.129,2.129,0,0,0,276,2.126V6.238a2.129,2.129,0,0,0,2.126,2.126h4.111a2.129,2.129,0,0,0,2.126-2.126V2.126A2.129,2.129,0,0,0,282.238,0Zm.709,6.238a.71.71,0,0,1-.709.709h-4.111a.71.71,0,0,1-.709-.709V2.126a.71.71,0,0,1,.709-.709h4.111a.71.71,0,0,1,.709.709Z" transform="translate(-276)" fill="#949dae"/>
														</g>
													</g>
													<g id="Group_347" data-name="Group 347" transform="translate(0 9.782)">
														<g id="Group_346" data-name="Group 346">
															<path id="Path_184" data-name="Path 184" d="M6.266,276H2.1A2.1,2.1,0,0,0,0,278.1v4.167a2.1,2.1,0,0,0,2.1,2.1H6.266a2.1,2.1,0,0,0,2.1-2.1V278.1A2.1,2.1,0,0,0,6.266,276Zm.681,6.266a.682.682,0,0,1-.681.681H2.1a.682.682,0,0,1-.681-.681V278.1a.682.682,0,0,1,.681-.681H6.266a.682.682,0,0,1,.681.681Z" transform="translate(0 -276)" fill="#949dae"/>
														</g>
													</g>
													<g id="Group_349" data-name="Group 349" transform="translate(9.782 9.782)">
														<g id="Group_348" data-name="Group 348">
															<path id="Path_185" data-name="Path 185" d="M282.238,276h-4.111A2.129,2.129,0,0,0,276,278.126v4.111a2.129,2.129,0,0,0,2.126,2.126h4.111a2.129,2.129,0,0,0,2.126-2.126v-4.111A2.129,2.129,0,0,0,282.238,276Zm.709,6.238a.71.71,0,0,1-.709.709h-4.111a.71.71,0,0,1-.709-.709v-4.111a.71.71,0,0,1,.709-.709h4.111a.71.71,0,0,1,.709.709Z" transform="translate(-276 -276)" fill="#949dae"/>
														</g>
													</g>
										</svg>
									</button>
									<button data-type="js-list" class="category-block__filters--button js-switch-list-view active">
												<svg id="hamburger-menu-gray" data-name="hamburger-menu-gray" xmlns="http://www.w3.org/2000/svg" width="17.941" height="18.146" viewBox="0 0 17.941 18.146">
													<path id="Path_186" data-name="Path 186" d="M17.194,124.608H.748a1,1,0,0,1,0-1.94H17.194a1,1,0,0,1,0,1.94Zm0,0" transform="translate(0 -114.565)" fill="#949dae"/>
													<path id="Path_187" data-name="Path 187" d="M17.194,1.94H.748A.881.881,0,0,1,0,.97.881.881,0,0,1,.748,0H17.194a.881.881,0,0,1,.748.97A.881.881,0,0,1,17.194,1.94Zm0,0" fill="#949dae"/>
													<path id="Path_188" data-name="Path 188" d="M17.194,247.272H.748a1,1,0,0,1,0-1.94H17.194a1,1,0,0,1,0,1.94Zm0,0" transform="translate(0 -229.126)" fill="#949dae"/>
												</svg>												
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="js-list" id="list-view">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<a href="#" title="" class="category-block__wrapper">
								<div class="category-block__wrapper--image">
									<img src="<?php echo SITEROOT; ?>images/category-big-1.png" alt="">
									<p class="category-name">Color</p>
								</div>
								<div class="category-block__wrapper--description">
									<p class="category-block__wrapper--description-heading">Filters</p>
											<ul class="category-block__wrapper--description-list">
												<li>- Drawed Fronts</li>
												<li>- Drawed Boxes</li>
												<li>- Colors</li>
												<li>- Finishes</li>
												<li>- Edgebanding</li>
												<li>- Drawed Fronts</li>
												<li>- Drawed Boxes</li>
												<li>- Colors</li>
												<li>- Finishes</li>
												<li>- Edgebanding</li>
											</ul>
								</div>
								<img src="<?php echo SITEROOT; ?>images/left-arrow-orange.svg" alt="" class="left-arrow">
							</a>
						</div>
						<div class="col-12">
							<a href="#" title="" class="category-block__wrapper">
								<div class="category-block__wrapper--image">
									<img src="<?php echo SITEROOT; ?>images/category-big-2.png" alt="">
									<p class="category-name">Doors</p>
								</div>
								<div class="category-block__wrapper--description">
									<p class="category-block__wrapper--description-heading">Filters</p>
											<ul class="category-block__wrapper--description-list">
												<li>- Drawed Fronts</li>
												<li>- Drawed Boxes</li>
												<li>- Colors</li>
												<li>- Finishes</li>
												<li>- Edgebanding</li>
											</ul>
								</div>
								<img src="<?php echo SITEROOT; ?>images/left-arrow-orange.svg" alt="" class="left-arrow">
							</a>
						</div>
						<div class="col-12">
							<a href="#" title="" class="category-block__wrapper">
								<div class="category-block__wrapper--image">
											<img src="<?php echo SITEROOT; ?>images/category-big-3.png" alt="">
											<p class="category-name">Decorative Hardware</p>
								</div>
								<div class="category-block__wrapper--description">
									<p class="category-block__wrapper--description-heading">Filters</p>
											<ul class="category-block__wrapper--description-list">
												<li>- Drawed Fronts</li>
												<li>- Drawed Boxes</li>
												<li>- Colors</li>
												<li>- Finishes</li>
												<li>- Edgebanding</li>
											</ul>
								</div>
								<img src="<?php echo SITEROOT; ?>images/left-arrow-orange.svg" alt="" class="left-arrow">
							</a>
						</div>
						<div class="col-12">
							<a href="#" title="" class="category-block__wrapper">
								<div class="category-block__wrapper--image">
											<img src="<?php echo SITEROOT; ?>images/category-big-4.png" alt="">
											<p class="category-name">Edge Banding</p>
								</div>
								<div class="category-block__wrapper--description">
									<p class="category-block__wrapper--description-heading">Filters</p>
											<ul class="category-block__wrapper--description-list">
												<li>- Drawed Fronts</li>
												<li>- Drawed Boxes</li>
												<li>- Colors</li>
												<li>- Finishes</li>
												<li>- Edgebanding</li>
											</ul>
								</div>
								<img src="<?php echo SITEROOT; ?>images/left-arrow-orange.svg" alt="" class="left-arrow">
							</a>
						</div>
						<div class="col-12">
							<a href="#" title="" class="category-block__wrapper">
								<div class="category-block__wrapper--image">
											<img src="<?php echo SITEROOT; ?>images/category-big-5.png" alt="">
											<p class="category-name">Wardrobe Tubes</p>
								</div>
								<div class="category-block__wrapper--description">
									<p class="category-block__wrapper--description-heading">Filters</p>
											<ul class="category-block__wrapper--description-list">
												<li>- Drawed Fronts</li>
												<li>- Drawed Boxes</li>
												<li>- Colors</li>
												<li>- Finishes</li>
												<li>- Edgebanding</li>
											</ul>
								</div>
								<img src="<?php echo SITEROOT; ?>images/left-arrow-orange.svg" alt="" class="left-arrow">
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="category-block__bottom-line">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="category-block__bottom-line--wrapper"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="two-elements-block category-view-page">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-xl-8">
						<div class="two-elements-block__wrapper mw-100">
							<div class="two-elements-block__wrapper--position-content">
								<img src="<?php echo SITEROOT; ?>images/category-list-view-img.png" alt="" class="img-fluid">
									<div class="two-elements-block__wrapper--position-right-text">
										<p>Custom Closets:</p>
										<p>Order Online Today</p>
										<a href="#" class="link-button">
											Watch video
											<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
												<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
											</svg>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-xl-4">
							<div class="two-elements-block__wrapper mw-100">
								<div class="two-elements-block__wrapper--content">
									<div class="two-elements-block__wrapper--video">
										<h2 class="heading">Watch Our Installation Video</h2>
										<div class="video-wrapper">
											<img src="<?php echo SITEROOT; ?>images/video.png" alt="">
										</div>
										<p class="flex-p">
											<img src="<?php echo SITEROOT; ?>images/passage-of-time.svg" alt="">
											Just 4-6 hours to install a 10 x 10 closet.
										</p>
										<p class="flex-p underlined-text">
											<img src="<?php echo SITEROOT; ?>images/security-yellow.svg" alt="">
											100% Perfect Fit Guarantee
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
								
								<div class="two-elements-block__wrapper--stars">
									<h2 class="heading">Read Our Reviews</h2>
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
									</div>
									
							<a href="#" class="link-button">
								buy now
								<svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="14.623" viewBox="0 0 20.8 14.623">
									<path id="left-arrow_3_" data-name="left-arrow(3)" d="M14.014,4.9a.737.737,0,1,0-1.048,1.038l5.314,5.314H.744A.738.738,0,0,0,0,11.982a.747.747,0,0,0,.744.744H18.281l-5.314,5.3a.752.752,0,0,0,0,1.048.734.734,0,0,0,1.048,0l6.573-6.573a.739.739,0,0,0,0-1.038Z" transform="translate(0.001 -4.676)"></path>
								</svg>
							</a>
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
	<a href="#" class="mobile-footer-buttons__first">you design</a>
	<a href="#" class="mobile-footer-buttons__second"><img src="<?php echo SITEROOT; ?>images/icon-save.svg" alt="" class="img-fluid"></a>
	<a href="#" class="mobile-footer-buttons__third">we design</a>
	</div>
</div>


<?php
require_once($real_root.'/includes/footer.php');
?>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>		
		
		