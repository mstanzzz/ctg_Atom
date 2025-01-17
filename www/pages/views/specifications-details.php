<?php	
if(!isset($hero_file_name)) $hero_file_name = '';
if($hero_file_name == ''){
	$hero = SITEROOT.'/images/organizer-landing-pahe-header.png';
}else{
	$hero = '';
	$hero .= "<?php echo SITEROOT; ?>saascustuploads/";
	$hero .= $_SESSION['profile_account_id'];
	$hero .= "/cms/";
	$hero .= $hero_file_name;
}

$hero = SITEROOT.'/images/organizer-landing-pahe-header.png';

if(!isset($id))$id = 777;
if(!isset($name))$name = 'none';
if(!isset($description))$description = 'none';
require_once($real_root."/includes/header.php"); 	
?>	

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<title>ClosetsToGo</title>
	<meta name="description" content="specifications details">
	<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
	</head>
	<body class="product-detail specification-page">



		<section class="home-mobile-buttons-block covid-block">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="home-mobile-buttons-block__wrapper">
								<a href="specifications.html" title="" class="back-link">
									<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
										<path d="M0 0h24v24H0V0z" fill="none"/>
										<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
									</svg>
								</a>
								<h2>
									<span>
										<svg xmlns="http://www.w3.org/2000/svg" width="48.679" height="43"
											 viewBox="0 0 48.679 43">
											<g id="drawers" transform="translate(0 -29.867)">
												<g id="Group_416" data-name="Group 416" transform="translate(0 29.867)">
													<g id="Group_415" data-name="Group 415" transform="translate(0 0)">
														<path id="Path_222" data-name="Path 222"
															  d="M44.623,29.867H4.057A4.061,4.061,0,0,0,0,33.924V65.565A4.063,4.063,0,0,0,3.245,69.54v.893a2.437,2.437,0,0,0,2.434,2.434h4.868a2.437,2.437,0,0,0,2.434-2.434v-.811H35.7v.811a2.437,2.437,0,0,0,2.434,2.434H43a2.437,2.437,0,0,0,2.434-2.434V69.54a4.063,4.063,0,0,0,3.245-3.975V33.924A4.061,4.061,0,0,0,44.623,29.867ZM11.359,70.433a.812.812,0,0,1-.811.811H5.679a.812.812,0,0,1-.811-.811v-.811h6.491v.811Zm32.453,0a.812.812,0,0,1-.811.811H38.132a.812.812,0,0,1-.811-.811v-.811h6.491Zm3.245-4.868A2.437,2.437,0,0,1,44.623,68H4.057a2.437,2.437,0,0,1-2.434-2.434V33.924A2.437,2.437,0,0,1,4.057,31.49H44.623a2.437,2.437,0,0,1,2.434,2.434V65.565Z"
															  transform="translate(0 -29.867)"></path>
														<path id="Path_223" data-name="Path 223"
															  d="M75.511,64H34.945a.811.811,0,0,0-.811.811V96.453a.811.811,0,0,0,.811.811H75.511a.811.811,0,0,0,.811-.811V64.811A.811.811,0,0,0,75.511,64ZM74.7,95.642H35.757V86.717H74.7Zm0-10.547H35.757V76.17H74.7Zm0-10.547H35.757V65.623H74.7Z"
															  transform="translate(-30.889 -60.755)"></path>
														<path id="Path_224" data-name="Path 224"
															  d="M232.834,103a2.434,2.434,0,1,0-2.434-2.434A2.434,2.434,0,0,0,232.834,103Zm0-3.245a.811.811,0,1,1-.811.811A.811.811,0,0,1,232.834,99.756Z"
															  transform="translate(-208.494 -91.642)"></path>
														<path id="Path_225" data-name="Path 225"
															  d="M232.834,213.935A2.434,2.434,0,1,0,230.4,211.5,2.434,2.434,0,0,0,232.834,213.935Zm0-3.245a.811.811,0,1,1-.811.811A.811.811,0,0,1,232.834,210.69Z"
															  transform="translate(-208.494 -192.029)"></path>
														<path id="Path_226" data-name="Path 226"
															  d="M232.834,324.868a2.434,2.434,0,1,0-2.434-2.434A2.434,2.434,0,0,0,232.834,324.868Zm0-3.245a.811.811,0,1,1-.811.811A.811.811,0,0,1,232.834,321.623Z"
															  transform="translate(-208.494 -292.415)"></path>
													</g>
												</g>
											</g>
										</svg>
									</span>
									Wardrobe Tubes Specification
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<main class="main hero-block clearfix accessories">

			<section class="specification-detial-header desktop-show">
				<div class="wrapper">
				   <div class="container-fluid">
					  <div class="row">
						 <div class="col-12 col-lg-9">
							<div class="specification-detial-header__wrap">
							   <span class="specification-detial-header__img">
								  <svg xmlns="http://www.w3.org/2000/svg" width="48.679" height="43"
									 viewBox="0 0 48.679 43">
									 <g id="drawers" transform="translate(0 -29.867)">
										<g id="Group_416" data-name="Group 416" transform="translate(0 29.867)">
										   <g id="Group_415" data-name="Group 415" transform="translate(0 0)">
											  <path id="Path_222" data-name="Path 222"
												 d="M44.623,29.867H4.057A4.061,4.061,0,0,0,0,33.924V65.565A4.063,4.063,0,0,0,3.245,69.54v.893a2.437,2.437,0,0,0,2.434,2.434h4.868a2.437,2.437,0,0,0,2.434-2.434v-.811H35.7v.811a2.437,2.437,0,0,0,2.434,2.434H43a2.437,2.437,0,0,0,2.434-2.434V69.54a4.063,4.063,0,0,0,3.245-3.975V33.924A4.061,4.061,0,0,0,44.623,29.867ZM11.359,70.433a.812.812,0,0,1-.811.811H5.679a.812.812,0,0,1-.811-.811v-.811h6.491v.811Zm32.453,0a.812.812,0,0,1-.811.811H38.132a.812.812,0,0,1-.811-.811v-.811h6.491Zm3.245-4.868A2.437,2.437,0,0,1,44.623,68H4.057a2.437,2.437,0,0,1-2.434-2.434V33.924A2.437,2.437,0,0,1,4.057,31.49H44.623a2.437,2.437,0,0,1,2.434,2.434V65.565Z"
												 transform="translate(0 -29.867)"></path>
											  <path id="Path_223" data-name="Path 223"
												 d="M75.511,64H34.945a.811.811,0,0,0-.811.811V96.453a.811.811,0,0,0,.811.811H75.511a.811.811,0,0,0,.811-.811V64.811A.811.811,0,0,0,75.511,64ZM74.7,95.642H35.757V86.717H74.7Zm0-10.547H35.757V76.17H74.7Zm0-10.547H35.757V65.623H74.7Z"
												 transform="translate(-30.889 -60.755)"></path>
											  <path id="Path_224" data-name="Path 224"
												 d="M232.834,103a2.434,2.434,0,1,0-2.434-2.434A2.434,2.434,0,0,0,232.834,103Zm0-3.245a.811.811,0,1,1-.811.811A.811.811,0,0,1,232.834,99.756Z"
												 transform="translate(-208.494 -91.642)"></path>
											  <path id="Path_225" data-name="Path 225"
												 d="M232.834,213.935A2.434,2.434,0,1,0,230.4,211.5,2.434,2.434,0,0,0,232.834,213.935Zm0-3.245a.811.811,0,1,1-.811.811A.811.811,0,0,1,232.834,210.69Z"
												 transform="translate(-208.494 -192.029)"></path>
											  <path id="Path_226" data-name="Path 226"
												 d="M232.834,324.868a2.434,2.434,0,1,0-2.434-2.434A2.434,2.434,0,0,0,232.834,324.868Zm0-3.245a.811.811,0,1,1-.811.811A.811.811,0,0,1,232.834,321.623Z"
												 transform="translate(-208.494 -292.415)"></path>
										   </g>
										</g>
									 </g>
								  </svg>
							   </span>
							   <div class="specification-detial-header__content">
								  <h2 class="specification-detial-header__heading">Wardrobe Tubes</h2>
								  <p class="specification-detial-header__text">Lorem ipsum dolor sit amet,
									 consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
									 labore
								  </p>
							   </div>
							</div>
						 </div>
						 <div class="col-12 col-lg-3">
							<div class="specification-detial-header__link-wrap">
							   <a href="<?php echo SITEROOT; ?>specifications.html" title="" class="specification-detial-header__link">
							   back to categories
							   </a>
							</div>
						 </div>
					  </div>
				   </div>
				</div>
			 </section>

			<section class="two-elements-block clearfix">
				<div class="wrapper">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 mobile-show">
								<h2 class="specification-detial-mobile-heading">Wardrobe Tubes Specifications</h2>
							</div>
							<div class="col-12 col-lg-6">
								<div class="caro-wrap position-sticky__a">
									<div class="row">
										<div class="col-12">
											<div class="product-detail__carousel image-gallery js-add-to-card-image-holder">
												<a href="https://www.youtube.com/embed/Wb0JINqX71w" data-poster="<?php echo SITEROOT; ?>images/yt-placeholder.png" >
													<img src="<?php echo SITEROOT; ?>images/yt-placeholder.png"  alt="" class="img-fluid"/>
												</a>
												<a href="<?php echo SITEROOT; ?>images/showroom-1.png" title="Lorem ipsum">
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt="" class="img-fluid">
												</a>
												<a href="<?php echo SITEROOT; ?>images/showroom-1.png" title="Lorem ipsum">
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt="" class="img-fluid">
												</a>
												<a href="<?php echo SITEROOT; ?>images/showroom-1.png" title="Lorem ipsum">
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt="" class="img-fluid">
												</a>
												<a href="<?php echo SITEROOT; ?>images/showroom-1.png" title="Lorem ipsum">
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt="" class="img-fluid">
												</a>
												<a href="<?php echo SITEROOT; ?>images/showroom-1.png" title="Lorem ipsum">
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt="" class="img-fluid">
												</a>
												<a href="<?php echo SITEROOT; ?>images/showroom-1.png" title="Lorem ipsum">
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt="" class="img-fluid">
												</a>
												<a href="<?php echo SITEROOT; ?>images/showroom-1.png" title="Lorem ipsum">
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt="" class="img-fluid">
												</a>
												<a href="<?php echo SITEROOT; ?>images/showroom-1.png" title="Lorem ipsum">
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt="" class="img-fluid">
												</a>
												<a href="<?php echo SITEROOT; ?>images/showroom-1.png" title="Lorem ipsum">
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt="" class="img-fluid">
												</a>
												<a href="<?php echo SITEROOT; ?>images/showroom-1.png" title="Lorem ipsum">
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt="" class="img-fluid">
												</a>
												<a href="<?php echo SITEROOT; ?>images/showroom-1.png" title="Lorem ipsum">
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt="" class="img-fluid">
												</a>
												<a href="<?php echo SITEROOT; ?>images/showroom-1.png" title="Lorem ipsum">
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt="" class="img-fluid">
												</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<div class="product-detail__carousel-nav">
												<div>
													<img src="<?php echo SITEROOT; ?>images/yt-placeholder.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
												<div>
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
												<div>
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
												<div>
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
												<div>
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
												<div>
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
												<div>
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
												<div>
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
												<div>
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
												<div>
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
												<div>
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
												<div>
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
												<div>
													<img src="<?php echo SITEROOT; ?>images/showroom-1.png" alt=""
														 class="img-fluid prod-detail__nav-img">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-6">
								<div class="specification-detial-wrap">
									<h2 class="specification-detial-wrap__general-heading">
										<span>Wardrobe Tubes Specifications</span>

										<div class="product-purchase__buttons">
											<button class="product-purchase__buttons--share">
												<svg xmlns="http://www.w3.org/2000/svg" width="23.547" height="25.688"
													 viewBox="0 0 23.547 25.688">
													<defs>
														<style>.share-no-background {
                                                            fill: #384765;
                                                        }</style>
													</defs>
													<g transform="translate(0)">
														<path class="share-no-background"
															  d="M321.625,19.479A3.478,3.478,0,1,1,318.147,16a3.479,3.479,0,0,1,3.478,3.478Zm0,0"
															  transform="translate(-298.881 -15.197)"></path>
														<path class="share-no-background"
															  d="M302.949,8.563a4.281,4.281,0,1,1,4.281-4.281A4.286,4.286,0,0,1,302.949,8.563Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676,2.679,2.679,0,0,0-2.676-2.676Zm0,0"
															  transform="translate(-283.683 0)"></path>
														<path class="share-no-background"
															  d="M321.625,360.811a3.478,3.478,0,1,1-3.478-3.479A3.478,3.478,0,0,1,321.625,360.811Zm0,0"
															  transform="translate(-298.881 -339.404)"></path>
														<path class="share-no-background"
															  d="M302.949,349.895a4.281,4.281,0,1,1,4.281-4.281A4.286,4.286,0,0,1,302.949,349.895Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676A2.679,2.679,0,0,0,302.949,342.938Zm0,0"
															  transform="translate(-283.683 -324.207)"></path>
														<path class="share-no-background"
															  d="M22.957,190.146a3.479,3.479,0,1,1-3.479-3.479A3.479,3.479,0,0,1,22.957,190.146Zm0,0"
															  transform="translate(-15.197 -177.303)"></path>
														<path class="share-no-background"
															  d="M4.281,179.23a4.281,4.281,0,1,1,4.281-4.281,4.286,4.286,0,0,1-4.281,4.281Zm0-6.957a2.676,2.676,0,1,0,2.676,2.676,2.679,2.679,0,0,0-2.676-2.676Zm0,0"
															  transform="translate(0 -162.105)"></path>
														<path class="share-no-background"
															  d="M115.42,98.019a1.07,1.07,0,0,1-.531-2l9.931-5.662a1.07,1.07,0,1,1,1.06,1.86l-9.932,5.662a1.063,1.063,0,0,1-.529.14Zm0,0"
															  transform="translate(-108.611 -85.688)"></path>
														<path class="share-no-background"
															  d="M125.372,274.022a1.064,1.064,0,0,1-.529-.14l-9.932-5.662a1.07,1.07,0,0,1,1.06-1.86l9.932,5.662a1.07,1.07,0,0,1-.531,2Zm0,0"
															  transform="translate(-108.633 -252.862)"></path>
													</g>
												</svg>
											</button>
											<button class="product-purchase__buttons--idea-folder">
												<svg id="Save" xmlns="http://www.w3.org/2000/svg" width="25.6"
													 height="23.023" viewBox="0 0 25.6 23.023">
													<path id="Path_205" data-name="Path 205"
														  d="M25.6,4.963v7.6a1,1,0,0,1-1,1h-.55a1,1,0,0,1-.724-.31L18.974,8.69l-7.748,9.89a1,1,0,0,1-.787.383h0a1,1,0,0,1-.787-.384L7.006,15.195,5.592,17.034a1,1,0,0,1-1.585-1.22l2.2-2.861A1,1,0,0,1,7,12.563H7a1,1,0,0,1,.788.384L10.44,16.34l7.672-9.794a1,1,0,0,1,1.511-.073L23.6,10.642V4.963a2,2,0,0,0-2-2H4a2,2,0,0,0-2,2v14a2,2,0,0,0,2,2h6.55a1,1,0,0,1,0,2H4a4,4,0,0,1-4-4v-14a4,4,0,0,1,4-4H21.6A4,4,0,0,1,25.6,4.963ZM4,7.563a3,3,0,1,1,3,3A3,3,0,0,1,4,7.563Zm2,0a1,1,0,1,0,1-1A1,1,0,0,0,6,7.563Z"
														  transform="translate(0 -0.963)" fill="#00fbff"></path>
													<path id="Path_207" data-name="Path 207"
														  d="M11.836-4.736H8.076v3.76H6.1v-3.76H2.324V-6.719H6.1V-10.5H8.076v3.779h3.76Z"
														  transform="translate(13.1 24)" fill="#00fbff"></path>
												</svg>
											</button>
											<button class="product-purchase__buttons--pdf">
												PDF
											</button>
										</div>
									</h2>

									<div id="accordion">
										<div class="card-collapse margin_bottom-twenty__a">
											<div class="card-collapse__header new-padding_a" id="heading-one"
												 data-toggle="collapse" data-target="#collapse-one"
												 aria-expanded="false" aria-controls="collapse-one">
												<h5 class="card-collapse__title">
													<span>Description</span>
													<img class="collapse-icon collapse-icon__plus"
														 src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
													<img class="collapse-icon collapse-icon__minus"
														 src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
												</h5>
											</div>

											<div id="collapse-one" class="collapse spec show" aria-labelledby="heading-one"
												 >
												<div class="card-collapse__body">
													<div class="specification-detial-wrap__text-wrap">
														<p class="specification-detial-wrap__text-wrap--heading">Lorem
															ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
															blandit nisl sit amet posuere scelerisque.</p>
														<p class="specification-detial-wrap__text-wrap--text">Morbi eu
															velit facilisis, sodales sapien non, sagittis diam.
															Pellentesque habitant morbi tristique senectus et netus et
															malesuada fames ac turpis egestas. Suspendisse vel enim sit
															amet sem pretium sollicitudin sed vel lorem.Praesent aliquam
															euismod leo. Aenean aliquet nunc arcu, at dapibus justo
															congue vitae. Interdum et malesuada fames ac ante ipsum
															primis in faucibus.</p>
													</div>
												</div>
											</div>
										</div>
 
										<div class="card-collapse margin_bottom-twenty__a">
											<div class="card-collapse__header new-padding_a collapsed" id="heading-two"
												 data-toggle="collapse" data-target="#collapse-two"
												 aria-expanded="false" aria-controls="collapse-two">
												<h5 class="card-collapse__title">
													<span>Specification Details</span>
													<img class="collapse-icon collapse-icon__plus"
														 src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
													<img class="collapse-icon collapse-icon__minus"
														 src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
												</h5>
											</div>

											<div id="collapse-two" class="collapse spec" aria-labelledby="heading-two"
												 >
												<div class="card-collapse__body">
													<div class="specification-detial-wrap__specification-details">
														<div class="row">
															<div class="col-12">
																<div class="specification-detial-wrap__specification-details--images-block">
																	<div class="image-group js-open-specifications-tab-btn active"
																		 data-open-description="#sizes">
																		<svg id="size"
																			 xmlns="http://www.w3.org/2000/svg"
																			 width="41" height="41" viewBox="0 0 41 41">
																			<g id="Group_394" data-name="Group 394">
																				<g id="Group_393" data-name="Group 393">
																					<path id="Path_182"
																						  data-name="Path 182"
																						  d="M3.417,256H0v13.667H13.667V266.25H3.417Z"
																						  transform="translate(0 -228.667)"></path>
																					<path id="Path_183"
																						  data-name="Path 183"
																						  d="M256,0V3.417h10.25v10.25h3.417V0Z"
																						  transform="translate(-228.667)"></path>
																					<rect id="Rectangle_58"
																						  data-name="Rectangle 58"
																						  width="3.417" height="37.24"
																						  transform="translate(8.541 34.874) rotate(-135)"></rect>
																				</g>
																			</g>
																		</svg>
																		<p>Sizes</p>
																	</div>
																	<div class="image-group js-open-specifications-tab-btn"
																		 data-open-description="#colors">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			 width="38.5" height="38.5"
																			 viewBox="0 0 38.5 38.5">
																			<g id="XMLID_476_"
																			   transform="translate(0 0)">
																				<path id="XMLID_503_"
																					  d="M177.632,14.98a1.3,1.3,0,0,0,0-1.836L175.684,11.2a1.3,1.3,0,0,0-1.648-.156l-4.1,2.784L172.708,9.7a1.3,1.3,0,0,0-.16-1.641l-4.226-4.226a1.3,1.3,0,0,0-1.481-.252l-.731.352.35-.776a1.3,1.3,0,0,0-.266-1.451L164.868.38a1.3,1.3,0,0,0-1.836,0l-10.3,10.3,14.6,14.6Z"
																					  transform="translate(-139.512)"></path>
																				<path id="XMLID_1199_"
																					  d="M11.3,145.622,8.316,148.6a1.3,1.3,0,0,0,0,1.836l2.829,2.829a2.529,2.529,0,0,1-.431,3.922c-8.314,5.3-9.089,6.074-9.343,6.329A4.687,4.687,0,0,0,8,170.15c.255-.255,1.03-1.03,6.329-9.343a2.533,2.533,0,0,1,3.922-.431L21.08,163.2a1.3,1.3,0,0,0,1.836,0l2.983-2.983ZM6.062,168.053a1.835,1.835,0,1,1,0-2.595A1.835,1.835,0,0,1,6.062,168.053Z"
																					  transform="translate(0 -133.02)"></path>
																			</g>
																		</svg>
																		<p>Colors</p>
																	</div>
																	<div class="image-group js-open-specifications-tab-btn"
																		 data-open-description="#materials">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			 width="43.667" height="43"
																			 viewBox="0 0 43.667 43">
																			<g id="fabric"
																			   transform="translate(0 -3.896)">
																				<g id="Group_396" data-name="Group 396"
																				   transform="translate(0 3.896)">
																					<g id="Group_395"
																					   data-name="Group 395"
																					   transform="translate(0 0)">
																						<path id="Path_184"
																							  data-name="Path 184"
																							  d="M39.231,25.615a37.768,37.768,0,0,0,3.161-5.065l1.275-2.478-2.738.5a14.411,14.411,0,0,1-1.7.2A37.768,37.768,0,0,0,42.392,13.7l1.273-2.475-2.738.5a14.551,14.551,0,0,1-10.8-2.245L21.816,3.9,0,18.551l5.1,3.422L0,25.4l5.1,3.422L0,32.241,21.816,46.9,29.83,41.51a37.986,37.986,0,0,0,12.565-14.12l1.272-2.474-2.738.5A14.446,14.446,0,0,1,39.231,25.615ZM4.909,18.551,21.816,7.2l6.789,4.56A17.238,17.238,0,0,0,38.692,14.7,35.249,35.249,0,0,1,28.3,25.548l-6.486,4.359ZM28.3,39.238,21.816,43.6,4.909,32.241l2.641-1.78,14.266,9.583,8.014-5.386a37.826,37.826,0,0,0,7.226-6.327c.548.04,1.1.062,1.643.051A35.232,35.232,0,0,1,28.3,39.238Zm0-6.845-6.486,4.359L4.909,25.4l2.641-1.78L21.816,33.2l8.014-5.386a37.826,37.826,0,0,0,7.226-6.327c.548.04,1.1.062,1.643.051A35.232,35.232,0,0,1,28.3,32.393Z"
																							  transform="translate(0 -3.896)"></path>
																						<rect id="Rectangle_59"
																							  data-name="Rectangle 59"
																							  width="2.738"
																							  height="2.738"
																							  transform="translate(10.864 13.09)"></rect>
																						<rect id="Rectangle_60"
																							  data-name="Rectangle 60"
																							  width="2.738"
																							  height="2.738"
																							  transform="translate(16.34 10.352)"></rect>
																						<rect id="Rectangle_61"
																							  data-name="Rectangle 61"
																							  width="2.738"
																							  height="2.738"
																							  transform="translate(20.447 7.614)"></rect>
																						<rect id="Rectangle_62"
																							  data-name="Rectangle 62"
																							  width="2.738"
																							  height="2.738"
																							  transform="translate(16.34 15.828)"></rect>
																						<rect id="Rectangle_63"
																							  data-name="Rectangle 63"
																							  width="2.738"
																							  height="2.738"
																							  transform="translate(20.447 19.935)"></rect>
																						<rect id="Rectangle_64"
																							  data-name="Rectangle 64"
																							  width="2.738"
																							  height="2.738"
																							  transform="translate(21.816 13.09)"></rect>
																						<rect id="Rectangle_65"
																							  data-name="Rectangle 65"
																							  width="2.738"
																							  height="2.738"
																							  transform="translate(25.923 10.352)"></rect>
																						<rect id="Rectangle_66"
																							  data-name="Rectangle 66"
																							  width="2.738"
																							  height="2.738"
																							  transform="translate(25.923 15.828)"></rect>
																					</g>
																				</g>
																			</g>
																		</svg>
																		<p>Materials</p>
																	</div>
																	<div class="image-group js-open-specifications-tab-btn"
																		 data-open-description="#useful-tips">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			 width="36.099" height="38.5"
																			 viewBox="0 0 36.099 38.5">
																			<g id="light-bulb"
																			   transform="translate(-19.087 0.001)">
																				<g id="Group_398" data-name="Group 398"
																				   transform="translate(19.087 -0.001)">
																					<g id="Group_397"
																					   data-name="Group 397"
																					   transform="translate(0 0)">
																						<path id="Path_185"
																							  data-name="Path 185"
																							  d="M105.446,23.6a13.462,13.462,0,0,0-6.059,25.485V57.1a3.515,3.515,0,0,0,3.511,3.511h5.1A3.515,3.515,0,0,0,111.5,57.1v-8.02A13.462,13.462,0,0,0,105.446,23.6Zm1.047,24.6c-.345.032-.694.049-1.047.049s-.7-.017-1.047-.049a17.16,17.16,0,0,0-1.067-7.17h4.229A17.165,17.165,0,0,0,106.493,48.192Zm2.729,6.579h-7.552V49.984a13.476,13.476,0,0,0,7.552,0Zm0,2.33a1.23,1.23,0,0,1-1.229,1.229h-5.1a1.23,1.23,0,0,1-1.229-1.229v-.048h7.552Zm-.46-9.362c-.053-1.759.094-5.012,1.652-7.2a1.141,1.141,0,0,0-.929-1.8h-8.079a1.141,1.141,0,0,0-.929,1.8c1.559,2.184,1.7,5.437,1.652,7.2a11.182,11.182,0,1,1,6.633,0Z"
																							  transform="translate(-87.396 -22.112)"></path>
																						<path id="Path_186"
																							  data-name="Path 186"
																							  d="M22.389,4.917A1.141,1.141,0,0,0,24,3.3L21.035.335a1.141,1.141,0,0,0-1.614,1.614Z"
																							  transform="translate(-19.087 0)"></path>
																						<path id="Path_187"
																							  data-name="Path 187"
																							  d="M510.583,5.25a1.138,1.138,0,0,0,.807-.334l2.969-2.969A1.141,1.141,0,0,0,512.745.334L509.776,3.3a1.141,1.141,0,0,0,.807,1.948Z"
																							  transform="translate(-478.594 0.001)"></path>
																						<path id="Path_188"
																							  data-name="Path 188"
																							  d="M511.391,392.1a1.141,1.141,0,1,0-1.614,1.614l2.968,2.969a1.141,1.141,0,0,0,1.614-1.614Z"
																							  transform="translate(-478.595 -367.118)"></path>
																						<path id="Path_189"
																							  data-name="Path 189"
																							  d="M22.389,392.1l-2.969,2.969a1.141,1.141,0,1,0,1.614,1.614L24,393.71a1.141,1.141,0,1,0-1.614-1.614Z"
																							  transform="translate(-19.087 -367.117)"></path>
																					</g>
																				</g>
																			</g>
																		</svg>
																		<p>Useful tips</p>
																	</div>
																	<div class="image-group js-open-specifications-tab-btn"
																		 data-open-description="#useful-links">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			 width="46.821" height="38.5"
																			 viewBox="0 0 46.821 38.5">
																			<g id="link"
																			   transform="translate(0.001 -42.421)">
																				<g id="Group_400" data-name="Group 400"
																				   transform="translate(17.933 42.421)">
																					<g id="Group_399"
																					   data-name="Group 399"
																					   transform="translate(0 0)">
																						<path id="Path_190"
																							  data-name="Path 190"
																							  d="M209.175,44.993a8.774,8.774,0,0,0-6.21-2.572h0a8.728,8.728,0,0,0-6.2,2.569L185.425,56.326a8.789,8.789,0,0,0-2.243,8.584A1.674,1.674,0,0,0,186.4,64a5.441,5.441,0,0,1,1.388-5.308l11.335-11.334a5.427,5.427,0,0,1,7.676,7.675L195.468,66.369a5.41,5.41,0,0,1-2.715,1.471,1.674,1.674,0,0,0,.346,3.313,1.655,1.655,0,0,0,.348-.037,8.749,8.749,0,0,0,4.387-2.38L209.171,57.4A8.775,8.775,0,0,0,209.175,44.993Z"
																							  transform="translate(-182.855 -42.421)"></path>
																					</g>
																				</g>
																				<g id="Group_402" data-name="Group 402"
																				   transform="translate(-0.001 52.232)">
																					<g id="Group_401"
																					   data-name="Group 401"
																					   transform="translate(0 0)">
																						<path id="Path_191"
																							  data-name="Path 191"
																							  d="M28.511,148.7a1.674,1.674,0,0,0-3.222.909,5.442,5.442,0,0,1-1.388,5.308L12.566,166.251a5.427,5.427,0,0,1-7.676-7.675l11.335-11.337a5.4,5.4,0,0,1,2.712-1.471,1.674,1.674,0,1,0-.657-3.283l-.033.007a8.762,8.762,0,0,0-4.389,2.38L2.522,156.208a8.776,8.776,0,0,0,12.41,12.412l11.335-11.337A8.789,8.789,0,0,0,28.511,148.7Z"
																							  transform="translate(0.001 -142.452)"></path>
																					</g>
																				</g>
																			</g>
																		</svg>
																		<p>Useful links</p>
																	</div>
																</div>
															</div>
															<div class="col-12">
																<div class="specification-detial-wrap__specification-details--description-wrap active"
																	 id="sizes">

																	<p class=" first-footer__heading mb-3">Sizes</p>

																	<div class="wrap-content d-flex flex-wrap">
																		<div class="specification-detial-wrap__specification-details--description-content">
																			<img src="<?php echo SITEROOT; ?>images/specification-description-1.png"
																				 alt="" class="img-fluid">
																			<div class="specification-detial-wrap__specification-details--description-text">
																				<p class="heading">Drawer Openings</p>
																				<p>
																					<span>30" w/ full ext. slides</span>
																					<span>39" on hutches</span>
																				</p>
																			</div>
																		</div>
																		<div class="specification-detial-wrap__specification-details--description-content">
																			<img src="<?php echo SITEROOT; ?>images/specification-description-2.png"
																				 alt="" class="img-fluid">
																			<div class="specification-detial-wrap__specification-details--description-text">
																				<p class="heading">Drawer Widths</p>
																				<p>
																					<span>21" - 24" - 27"</span>
																					<span>30" - 32" - 36"</span>
																				</p>
																			</div>
																		</div>
																		<div class="specification-detial-wrap__specification-details--description-content">
																			<img src="<?php echo SITEROOT; ?>images/specification-description-3.png"
																				 alt="" class="img-fluid">
																			<div class="specification-detial-wrap__specification-details--description-text">
																				<p class="heading">Drawer Face Heights</p>
																				<p>
																					<span>5" - 7.5" - 6.25"</span>
																					<span>10" - 12.5"</span>
																				</p>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="specification-detial-wrap__specification-details--description-wrap"
																	 id="colors">
																	<p class=" first-footer__heading mb-3">Colors</p>

																</div>
																<div class="specification-detial-wrap__specification-details--description-wrap"
																	 id="materials">
																	<p class=" first-footer__heading mb-3">Materials</p>

																</div>
																<div class="specification-detial-wrap__specification-details--description-wrap"
																	 id="useful-tips">
																	<p class=" first-footer__heading mb-3">usefull tips</p>

																</div>
																<div class="specification-detial-wrap__specification-details--description-wrap"
																	 id="useful-links">
																	<p class=" first-footer__heading mb-3">useful links</p>

																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-12 col-lg-6">
																<a href="#" title=""
																   class="specification-detial-wrap__download-link">
																	<span class="specification-detial-wrap__download-link--img">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			 width="26" height="33.724"
																			 viewBox="0 0 26 33.724"><defs><style>.files {
                                                                            fill: #DB440D;
                                                                        }</style></defs><g transform="translate(0 0)"><path
																				class="files"
																				d="M293.269,256h-4.215A1.054,1.054,0,0,0,288,257.054v8.431a1.054,1.054,0,0,0,1.054,1.054h4.215a2.108,2.108,0,0,0,2.108-2.108v-6.323A2.108,2.108,0,0,0,293.269,256Zm0,8.431h-3.162v-6.323h3.162Z"
																				transform="translate(-274.592 -239.138)"></path><path
																				class="files"
																				d="M422.323,258.108V256h-5.269A1.054,1.054,0,0,0,416,257.054v9.485h2.108v-4.215h4.215v-2.108h-4.215v-2.108Z"
																				transform="translate(-396.323 -239.138)"></path><path
																				class="files"
																				d="M1.514,30.562V3.161c0-.582.339-1.054.757-1.054H13.622V6.323c0,1.164.678,2.108,1.514,2.108h3.027v3.162h1.514V7.377a1.3,1.3,0,0,0-.219-.748L14.916.305A.667.667,0,0,0,14.379,0H2.27C1.016,0,0,1.415,0,3.161v27.4c0,1.746,1.016,3.162,2.27,3.162h5.3V31.616H2.27C1.852,31.616,1.514,31.144,1.514,30.562Z"
																				transform="translate(0 0)"></path><path
																				class="files"
																				d="M165.269,256h-4.215A1.054,1.054,0,0,0,160,257.054v9.485h2.108v-3.162h3.162a2.108,2.108,0,0,0,2.108-2.108v-3.162A2.108,2.108,0,0,0,165.269,256Zm0,5.269h-3.162v-3.162h3.162Z"
																				transform="translate(-152.551 -239.138)"></path></g></svg>
																	</span>
																	Download instructions
																</a>
															</div>
															<div class="col-12 col-lg-6">
																<a href="#" title=""
																   class="specification-detial-wrap__download-link">
																	<span class="specification-detial-wrap__download-link--img">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			 width="26" height="33.724"
																			 viewBox="0 0 26 33.724"><defs><style>.files {
                                                                            fill: #DB440D;
                                                                        }</style></defs><g transform="translate(0 0)"><path
																				class="files"
																				d="M293.269,256h-4.215A1.054,1.054,0,0,0,288,257.054v8.431a1.054,1.054,0,0,0,1.054,1.054h4.215a2.108,2.108,0,0,0,2.108-2.108v-6.323A2.108,2.108,0,0,0,293.269,256Zm0,8.431h-3.162v-6.323h3.162Z"
																				transform="translate(-274.592 -239.138)"></path><path
																				class="files"
																				d="M422.323,258.108V256h-5.269A1.054,1.054,0,0,0,416,257.054v9.485h2.108v-4.215h4.215v-2.108h-4.215v-2.108Z"
																				transform="translate(-396.323 -239.138)"></path><path
																				class="files"
																				d="M1.514,30.562V3.161c0-.582.339-1.054.757-1.054H13.622V6.323c0,1.164.678,2.108,1.514,2.108h3.027v3.162h1.514V7.377a1.3,1.3,0,0,0-.219-.748L14.916.305A.667.667,0,0,0,14.379,0H2.27C1.016,0,0,1.415,0,3.161v27.4c0,1.746,1.016,3.162,2.27,3.162h5.3V31.616H2.27C1.852,31.616,1.514,31.144,1.514,30.562Z"
																				transform="translate(0 0)"></path><path
																				class="files"
																				d="M165.269,256h-4.215A1.054,1.054,0,0,0,160,257.054v9.485h2.108v-3.162h3.162a2.108,2.108,0,0,0,2.108-2.108v-3.162A2.108,2.108,0,0,0,165.269,256Zm0,5.269h-3.162v-3.162h3.162Z"
																				transform="translate(-152.551 -239.138)"></path></g></svg>
																	</span>
																	Download instructions 2
																</a>
															</div>
															<div class="col-12 col-lg-6">
																<a href="#" title=""
																   class="specification-detial-wrap__download-link">
																	<span class="specification-detial-wrap__download-link--img">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			 width="26" height="33.724"
																			 viewBox="0 0 26 33.724"><defs><style>.files {
                                                                            fill: #DB440D;
                                                                        }</style></defs><g transform="translate(0 0)"><path
																				class="files"
																				d="M293.269,256h-4.215A1.054,1.054,0,0,0,288,257.054v8.431a1.054,1.054,0,0,0,1.054,1.054h4.215a2.108,2.108,0,0,0,2.108-2.108v-6.323A2.108,2.108,0,0,0,293.269,256Zm0,8.431h-3.162v-6.323h3.162Z"
																				transform="translate(-274.592 -239.138)"></path><path
																				class="files"
																				d="M422.323,258.108V256h-5.269A1.054,1.054,0,0,0,416,257.054v9.485h2.108v-4.215h4.215v-2.108h-4.215v-2.108Z"
																				transform="translate(-396.323 -239.138)"></path><path
																				class="files"
																				d="M1.514,30.562V3.161c0-.582.339-1.054.757-1.054H13.622V6.323c0,1.164.678,2.108,1.514,2.108h3.027v3.162h1.514V7.377a1.3,1.3,0,0,0-.219-.748L14.916.305A.667.667,0,0,0,14.379,0H2.27C1.016,0,0,1.415,0,3.161v27.4c0,1.746,1.016,3.162,2.27,3.162h5.3V31.616H2.27C1.852,31.616,1.514,31.144,1.514,30.562Z"
																				transform="translate(0 0)"></path><path
																				class="files"
																				d="M165.269,256h-4.215A1.054,1.054,0,0,0,160,257.054v9.485h2.108v-3.162h3.162a2.108,2.108,0,0,0,2.108-2.108v-3.162A2.108,2.108,0,0,0,165.269,256Zm0,5.269h-3.162v-3.162h3.162Z"
																				transform="translate(-152.551 -239.138)"></path></g></svg>
																	</span>
																	Download instructions 3
																</a>
															</div>
															<div class="col-12 col-lg-6">
																<a href="#" title=""
																   class="specification-detial-wrap__download-link">
																	<span class="specification-detial-wrap__download-link--img">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			 width="26" height="33.724"
																			 viewBox="0 0 26 33.724"><defs><style>.files {
                                                                            fill: #DB440D;
                                                                        }</style></defs><g transform="translate(0 0)"><path
																				class="files"
																				d="M293.269,256h-4.215A1.054,1.054,0,0,0,288,257.054v8.431a1.054,1.054,0,0,0,1.054,1.054h4.215a2.108,2.108,0,0,0,2.108-2.108v-6.323A2.108,2.108,0,0,0,293.269,256Zm0,8.431h-3.162v-6.323h3.162Z"
																				transform="translate(-274.592 -239.138)"></path><path
																				class="files"
																				d="M422.323,258.108V256h-5.269A1.054,1.054,0,0,0,416,257.054v9.485h2.108v-4.215h4.215v-2.108h-4.215v-2.108Z"
																				transform="translate(-396.323 -239.138)"></path><path
																				class="files"
																				d="M1.514,30.562V3.161c0-.582.339-1.054.757-1.054H13.622V6.323c0,1.164.678,2.108,1.514,2.108h3.027v3.162h1.514V7.377a1.3,1.3,0,0,0-.219-.748L14.916.305A.667.667,0,0,0,14.379,0H2.27C1.016,0,0,1.415,0,3.161v27.4c0,1.746,1.016,3.162,2.27,3.162h5.3V31.616H2.27C1.852,31.616,1.514,31.144,1.514,30.562Z"
																				transform="translate(0 0)"></path><path
																				class="files"
																				d="M165.269,256h-4.215A1.054,1.054,0,0,0,160,257.054v9.485h2.108v-3.162h3.162a2.108,2.108,0,0,0,2.108-2.108v-3.162A2.108,2.108,0,0,0,165.269,256Zm0,5.269h-3.162v-3.162h3.162Z"
																				transform="translate(-152.551 -239.138)"></path></g></svg>
																	</span>
																	Download instructions 4
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card-collapse margin_bottom-twenty__a">
											<div class="card-collapse__header new-padding_a collapsed" id="heading-three"
												 data-toggle="collapse" data-target="#collapse-three"
												 aria-expanded="false" aria-controls="collapse-three">
												<h5 class="card-collapse__title">
													<span>Videos</span>
													<img class="collapse-icon collapse-icon__plus"
														 src="<?php echo SITEROOT; ?>images/minus-button-1.svg" alt="">
													<img class="collapse-icon collapse-icon__minus"
														 src="<?php echo SITEROOT; ?>images/minus-button.svg" alt="">
												</h5>
											</div>

											<div id="collapse-three" class="collapse spec" aria-labelledby="heading-three"
												 >
												<div class="card-collapse__body">
													<div class="specification-detial-wrap__video-wrap">
														<div class="specification-detial-wrap__video-wrap--video">
															<div class="embed-responsive embed-responsive-4by3">
																<iframe class="yvideo" width="100%" height="100%"
																		src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&amp;enablejsapi=1"
																		frameborder="0"
																		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
																		allowfullscreen=""></iframe>
															</div>
															<p class="specification-detial-wrap__video-wrap--video__title">
																Product description
															</p>
														</div>
														<div class="specification-detial-wrap__video-wrap--video">
															<div class="embed-responsive embed-responsive-4by3">
																<iframe class="yvideo" width="100%" height="100%"
																		src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&amp;enablejsapi=1"
																		frameborder="0"
																		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
																		allowfullscreen=""></iframe>
															</div>
															<p class="specification-detial-wrap__video-wrap--video__title">
																Product description
															</p>
														</div>
														<div class="specification-detial-wrap__video-wrap--video">
															<div class="embed-responsive embed-responsive-4by3">
																<iframe class="yvideo" width="100%" height="100%"
																		src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&amp;enablejsapi=1"
																		frameborder="0"
																		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
																		allowfullscreen=""></iframe>
															</div>
															<p class="specification-detial-wrap__video-wrap--video__title">
																Product description
															</p>
														</div>
														<div class="specification-detial-wrap__video-wrap--video">
															<div class="embed-responsive embed-responsive-4by3">
																<iframe class="yvideo" width="100%" height="100%"
																		src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&amp;enablejsapi=1"
																		frameborder="0"
																		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
																		allowfullscreen=""></iframe>
															</div>
															<p class="specification-detial-wrap__video-wrap--video__title">
																Product description
															</p>
														</div>
														<div class="specification-detial-wrap__video-wrap--video">
															<div class="embed-responsive embed-responsive-4by3">
																<iframe class="yvideo" width="100%" height="100%"
																		src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&amp;enablejsapi=1"
																		frameborder="0"
																		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
																		allowfullscreen=""></iframe>
															</div>
															<p class="specification-detial-wrap__video-wrap--video__title">
																Product description
															</p>
														</div>
														<div class="specification-detial-wrap__video-wrap--video">
															<div class="embed-responsive embed-responsive-4by3">
																<iframe class="yvideo" width="100%" height="100%"
																		src="https://www.youtube.com/embed/Wb0JINqX71w?autoplay=0&amp;enablejsapi=1"
																		frameborder="0"
																		allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
																		allowfullscreen=""></iframe>
															</div>
															<p class="specification-detial-wrap__video-wrap--video__title">
																Product description
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="specification-detial-wrap__design-tool">
										<div class="row">
											<div class="col-12 col-lg-6">
												<div class="first-fixed-block__text-group--items">
													<img src="<?php echo SITEROOT; ?>images/package.svg" alt="">
													<div class="first-fixed-block__text-group--text">
														<p>2K 457</p>
														<p>Successful DIY Installations</p>
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-6">
												<div class="block-stars__wrapper">
													<img src="<?php echo SITEROOT; ?>images/Rectangle12.png" alt=""
														 class="block-stars__wrapper--image">
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
					</div>
				</div>
			</section>
		</main>
		

<?php
require_once($real_root.'/includes/footer.php');
?>
		

		<div class="scrollToTopBlock">
			<div class="people-working">
				<img src="<?php echo SITEROOT; ?>images/people-working-call-center_@2x.png" alt="" class="people-working__image">

				<div class="people-working__wrapper">
					<div class="people-working__content">
						<p class="people-working__text">Hi! I'm the Virtual assistant, and I'm here to help you.</p>
					</div>
				</div>
			</div>

			<a href="#" class="scrollToTop js-to-top">
				<img src="<?php echo SITEROOT; ?>images/arrows.svg" alt="">
			</a>
		</div>

		<div class="mobile-show">
			<div class="mobile-footer-buttons">
				<a href="#" class="mobile-footer-buttons__first">you design</a>
				<a href="#" class="mobile-footer-buttons__second"><img src="<?php echo SITEROOT; ?>images/icon-save.svg" alt=""
																	   class="img-fluid"></a>
				<a href="#" class="mobile-footer-buttons__third">we design</a>
			</div>
		</div>
	
		
		
		
		
	<script src="<?php echo SITEROOT; ?>app.js"></script>
	</body>
</html>
