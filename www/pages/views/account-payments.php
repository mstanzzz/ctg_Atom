<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo</title>
<meta name="description" content="Account payment settings">
<link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">
</head>
<body>
<?php	
require_once($real_root."/includes/header.php"); 	
?>	


<section class="home-mobile-buttons-block account-nav covid-block">
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="home-mobile-buttons-block__wrapper">
<button class="account-nav__prev" style="display: none;">
<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/></svg>
</button>
<div class="account-nav__content">
<a href="account.html" title="" class="home-mobile-buttons-block__link account-small-link">Dashboard</a>
<a href="account-settings.html" title="" class="home-mobile-buttons-block__link account-big-link">Account settings</a>
<a href="#" title="" class="home-mobile-buttons-block__link account-big-link">Start a new design</a>
<a href="account-orders.html" title="" class="home-mobile-buttons-block__link account-small-link">My orders</a>
<a href="account-payments.html" title="" class="home-mobile-buttons-block__link account-big-link active">Payment settings</a>
</div>
<button class="account-nav__next">
<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/></svg>
</button>
</div>
</div>
</div>
</div>
</div>
</section>

		
<main class="main clearfix">
	<section class="account-block">
				<div class="wrapper">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 col-lg-3">
								<div class="account-block__navigation--wrapper">

									<div class="account-block__navigation--user js-login-txt">
										<a href="#" title="" class="account-block__navigation--user-link">

											<span class="account-block__navigation--user-image">
												<span class="flip-front">
													<img src="<?php echo SITEROOT; ?>images/team-3.png" alt="" class="img-fluid">
												</span>
												<span class="flip-back">Edit/add<br>photo</span>
											</span>

											<span class="account-block__navigation--user-plus">
												<svg xmlns="http://www.w3.org/2000/svg" width="42.5" height="42.5" viewBox="0 0 42.5 42.5"><defs><style>.add-showroom{fill:#02adb0;}</style></defs><path class="add-showroom" d="M21.25,0A21.25,21.25,0,1,0,42.5,21.25,21.274,21.274,0,0,0,21.25,0Zm9.3,23.021H23.021v7.526a1.771,1.771,0,1,1-3.541,0V23.021H11.953a1.771,1.771,0,0,1,0-3.541h7.526V11.953a1.771,1.771,0,0,1,3.541,0v7.526h7.526a1.771,1.771,0,1,1,0,3.541Zm0,0"/></svg>
											</span>
										</a>

										<h4 class="account-block__navigation--user-heading">Hi, Joro</h4>
									</div>

									<div class="mobile-show">
										<div class="account-block__navigation--user active js-not-login-txt">
	
											<h4 class="account-block__navigation--user-heading">Login</h4>
										</div>
									</div>
			<?php	
			require_once($real_root."/includes/account_side_nav.php"); 	
			?>	


								</div>
							</div>
							<div class="col-12 col-lg-9">
								<div class="account-block__wellcome">
									<p class="account-block__wellcome--heading"><span class="wellome-txt">Welcome,</span> Super Administrator! <span>How are you today?</span></p>
									<p class="account-block__wellcome--text">
<?php 
$ts = time();
echo date("d D Y, l", $ts);
?>
									</p>
								</div>

								<div class="account-block__general-info account-payment">

									<div class="account-block__general-info--image">
										<p class="desktop-show">payment settings</p>
										<svg xmlns="http://www.w3.org/2000/svg" width="21.667" height="17.755" viewBox="0 0 21.667 17.755"><defs><style>.wallet{fill:#384765;}</style></defs><g transform="translate(0 -39)"><g transform="translate(0 39)"><g transform="translate(0 0)"><path class="wallet" d="M19.591,39H4.429a2.081,2.081,0,0,0-2.071,2.081v.025H2.076A2.075,2.075,0,0,0,0,43.173v11.5a2.088,2.088,0,0,0,2.076,2.081H17.238a2.081,2.081,0,0,0,2.071-2.081v-.025h.281a2.075,2.075,0,0,0,2.076-2.066v-11.5A2.085,2.085,0,0,0,19.591,39ZM17.238,55.752H2.076A1.085,1.085,0,0,1,1,54.673v-11.5A1.072,1.072,0,0,1,2.076,42.11H17.238a1.065,1.065,0,0,1,1.068,1.063v2.869a1.235,1.235,0,0,1-.266.03H15.147a2.856,2.856,0,0,0,0,5.713h2.889c.09-.005.181-.015.266-.025l.005,2.914A1.078,1.078,0,0,1,17.238,55.752Zm3.426-3.17a1.072,1.072,0,0,1-1.073,1.063H19.31V51.4a2.741,2.741,0,0,0,.577-.527l.777-1Zm-1.57-2.317a1.35,1.35,0,0,1-1.053.522H15.147a1.856,1.856,0,0,1,0-3.711h2.889a2.288,2.288,0,0,0,1-.226,2.332,2.332,0,0,0,.848-.682l.777-1,.005,3.064Zm1.57-6.741L19.31,45.269v-2.1a2.068,2.068,0,0,0-2.071-2.066H3.36v-.025A1.078,1.078,0,0,1,4.429,40H19.591a1.085,1.085,0,0,1,1.073,1.078v2.443Z" transform="translate(0 -39)"/></g></g><g transform="translate(14.565 48.429)"><path class="wallet" d="M292.105,227h-1.2a.5.5,0,1,0,0,1h1.2a.5.5,0,0,0,0-1Z" transform="translate(-290.4 -227)"/></g></g></svg>

										<div class="account-block__general-info--details mobile-show">
											<div class="row">
												<div class="col-12"><p>payment settings</p></div>
											</div>
											<div class="row">
												<div class="col-6"><p class="second-text">Last payment:</p></div>
												<div class="col-6"><p class="second-text">15 Jul 2020, Friday</p></div>
											</div>
											<div class="row">
												<div class="col-6"><p class="second-text">Order number:</p></div>
												<div class="col-6"><p class="second-text">98751110</p></div>
											</div>
										</div>

										<a href="#" title="" class="mobile-log-out">Log out</a>
									</div>

									<div class="account-block__general-info--details desktop-show">
										<div class="row mb-3">
											<div class="col-5"><p class="first-text">Last payment:</p></div>
											<div class="col-7"><p class="second-text">15 Jul 2020, Friday</p></div>
										</div>
										<div class="row mb-3">
											<div class="col-4 desktop-show">
												<img src="<?php echo SITEROOT; ?>images/footer-masterCard.png" alt="" class="img-fluid">
											</div>
											<div class="col-8 desktop-show">
												<div class="row">
													<div class="col-12"><p class="first-text first-text--black">Card holder</p></div>
													<div class="col-12"><p class="second-text second-text--gray">Daniel Dimitrov</p></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-5"><p class="first-text">Order number:</p></div>
											<div class="col-7"><p class="second-text">98751110</p></div>
										</div>
									</div>

									<div class="account-block__general-info--cart-payment desktop-show mt-5">
										<div class="row">
											<div class="col-8"><p class="first-text first-text--black">Card number</p></div>
											<div class="col-4"><p class="first-text first-text--black">Expires</p></div>
										</div>
										<div class="row">
											<div class="col-8"><p class="second-text second-text--gray">XXXX XXXX XXXX 5748</p></div>
											<div class="col-4"><p class="second-text second-text--gray">02/22</p></div>
										</div>
										<div class="row cart-total">
											<div class="col-8"><p class="first-text">was paid:</p></div>
											<div class="col-4"><p class="second-text">$52.44</p></div>
										</div>
									</div>
								</div>

								<div class="account-block__buttons-block account-payment">
									<button class="account-block__buttons-block--button change-password js-open-hidden-box" date-open-block="#my-cards">
										<span class="button-image">
											<svg id="Group_618" data-name="Group 618" xmlns="http://www.w3.org/2000/svg" width="61" height="61" viewBox="0 0 61 61">
												<g id="Ellipse_24" data-name="Ellipse 24" fill="none" stroke="#384765" stroke-width="1">
													<circle cx="30.5" cy="30.5" r="30.5" stroke="none"/>
													<circle cx="30.5" cy="30.5" r="30" fill="none"/>
												</g>
												<g id="Group_454" data-name="Group 454" transform="translate(16 16)">
													<path id="Path_358" data-name="Path 358" d="M7.705,27.656H3.556a1.191,1.191,0,0,1-.937-.446,1.225,1.225,0,0,1-.248-1.027A12.948,12.948,0,0,1,14.7,15.931c.1,0,.2.006.3.006s.2,0,.3-.006a12.835,12.835,0,0,1,4.233.815,1.172,1.172,0,0,0,.824-2.194q-.291-.109-.586-.206a7.969,7.969,0,1,0-9.539,0A15.239,15.239,0,0,0,.076,25.706,3.56,3.56,0,0,0,3.556,30H7.705a1.172,1.172,0,1,0,0-2.344ZM9.375,7.969a5.625,5.625,0,1,1,5.9,5.618c-.091,0-.182,0-.274,0l-.275,0A5.632,5.632,0,0,1,9.375,7.969Z" fill="#384765"/>
													<path id="Path_359" data-name="Path 359" d="M166.548,314.852A3.158,3.158,0,0,0,163.666,313H160a3.1,3.1,0,0,0-2.931,1.981c-.062.16-.137.362-.215.6h-7.673a1.172,1.172,0,0,0-.841.356l-2.013,2.074a1.172,1.172,0,0,0,0,1.638l2.051,2.087a1.172,1.172,0,0,0,.836.35h3.809a1.172,1.172,0,0,0,0-2.344h-3.317l-.9-.92.871-.9h8.056a1.172,1.172,0,0,0,1.138-.893,9.684,9.684,0,0,1,.386-1.207.768.768,0,0,1,.747-.478h3.657a.8.8,0,0,1,.744.465,7.568,7.568,0,0,1,.693,2.987,7.792,7.792,0,0,1-.688,3.041.8.8,0,0,1-.736.48h-3.7a.834.834,0,0,1-.756-.519,7.789,7.789,0,0,1-.363-1.16,1.172,1.172,0,1,0-2.279.546,10.088,10.088,0,0,0,.476,1.508,3.161,3.161,0,0,0,2.92,1.969h3.706a3.142,3.142,0,0,0,2.882-1.887,10.144,10.144,0,0,0,.883-3.983A9.922,9.922,0,0,0,166.548,314.852Z" transform="translate(-137.445 -294.66)" fill="#384765"/>
													<circle id="Ellipse_23" data-name="Ellipse 23" cx="1.188" cy="1.188" r="1.188" transform="translate(24.06 22.871)" fill="#384765"/>
												</g>
											</svg>
										</span>
										<span class="button-text">
											My cards<br>
											<span>Add/View/Edit your payment cards</span>
										</span>
									</button>
								</div>

								<!-- my-cards block -->
								<div class="account-block__details account-payment" id="my-cards">
									<h3 class="account-block__heading desktop-show">My saved card/s</h3>

									<div id="accordion" class="account-block__collapse account-payment">	
										<div class="card mb-2">
											<button class="account-mobile-more-info-btn js-show-mobile-action-btn">
											</button>
	
											<div class="account-mobile-more-info-wrapper js-show-mobile-action-buttons">
												<div class="account-mobile-more-info-wrapper__mobile-more-info">
													<button class="">Delete from list</button>
												</div>
											</div>

											<div class="card-header" id="headingOne">
												<div class="account-block__collapse--header collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													<div class="container-fluid">
														<div class="row pt-3">
															<div class="col-5 col-lg-2">
																<img src="<?php echo SITEROOT; ?>images/footer-masterCard.png" alt="" class="img-fluid">
															</div>
															<div class="col-7 col-lg-10">
																<div class="row mt-lg-2">
																	<div class="col-12 col-lg-4">
																		<p class="account-block__collapse--heading mb-0">Card holder</p>
																		<p class="account-block__collapse--text">Daniel Dimitrov</p>
																	</div>
																	<div class="col-12 col-lg-4">
																		<p class="account-block__collapse--heading desktop-show mb-0">Card number</p>
																		<p class="account-block__collapse--text">XXXX XXXX XXXX 5748</p>
																	</div>
																	<div class="col-12 col-lg-4">
																		<div class="mobile-expire-card">
																			<p class="account-block__collapse--heading  mb-0">Expires</p>
																			<p class="account-block__collapse--text">02/22</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<button class="account-block__details--edit-button">
															<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.edit-a{fill:#384765;}.edit-b{fill:#fff;}</style></defs><g transform="translate(-5 -5.501)"><path class="edit-a" d="M18.594,0H2.406A2.408,2.408,0,0,0,0,2.406V18.594A2.408,2.408,0,0,0,2.406,21H18.594A2.408,2.408,0,0,0,21,18.594V2.406A2.408,2.408,0,0,0,18.594,0Zm0,0" transform="translate(5 5.501)"/><g transform="translate(-0.232 2)"><path class="edit-b" d="M182.366,73.425a.33.33,0,0,0-.089.166l-.461,2.308a.326.326,0,0,0,.32.39.31.31,0,0,0,.064-.006l2.307-.461a.325.325,0,0,0,.167-.089l5.163-5.163-2.307-2.307Zm0,0" transform="translate(-171.576 -57.688)"/><path class="edit-b" d="M394.656.978a1.633,1.633,0,0,0-2.307,0l-.9.9,2.307,2.307.9-.9a1.631,1.631,0,0,0,0-2.307Zm0,0" transform="translate(-374.801 8)"/></g></g></svg>
														</button>	
													</div>
												</div>
											</div>
									
											<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
												
												<div class="card-body">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12">
																<div class="row-with-border-top"></div>
															</div>
															<div class="col-12">
																<div class="account-block__form account-payment">
																	<form>
																		<div class="row align-items-center">
																			<div class="col-12 col-lg-5">
																				<div class="pay-card__wrap m-0">
																					<div class="pay-card">
																						<label for="js-pay-card-number" class="pay-card__title">Card number</label>
																						<div class="pay-card__card-number">
																							<input class="pay-card__card-number__input js-pay-card-number" placeholder="0000 0000 0000 0000" type="text" maxlength="19" name="pay-card-number">
																						</div>
																						<div class="row mt-4">
																							<div class="col-6">
																								<label for="pay-card-name" class="pay-card__title">
																									Card holder
																								</label>
																								<div class="pay-card__card-number">
																									<input class="pay-card__card-number__input input-name" name="pay-card-name" placeholder="Name here" type="text" minlength="2">
																								</div>
																							</div>
																							<div class="col-6">
																								<label for="js-pay-card-date" class="pay-card__title">
																									Expires
																								</label>
																								<div class="pay-card__card-number input-dates">
																									<input class="pay-card__card-number__input input-dates__item js-pay-card-date" placeholder="MM/YY" pattern="^\d+(\/\d+)*$" type="text" maxlength="5">
																								</div>
																							</div>
																						</div>
																						<div class="row">
																							
																							<div class="col-6 mt-4 mobile-show">
																								<div class="d-flex">
																									<label for="js-pay-card-cv" class="pay-card__title" style="border-bottom: 1px solid #707070;">
																										CVV
																									</label>
																									<div class="pay-card__card-number input-dates">
																										<input class="pay-card__card-number__input input-dates__item js-pay-card-cv" placeholder="000" pattern="\d*" type="text" maxlength="3">
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-12 col-lg-5 desktop-show">
																				<div class="pay-card__wrap pay-card__wrap__cv m-0">
																					<div class="pay-card">
																						<div class="pay-card__card-number__background">
																						</div>
																						<div class="row mt-4">
																							<div class="col-9">
								
																							</div>
																							<div class="col-3">
																								<label for="js-pay-card-cv" class="pay-card__title">
																									CVV
																								</label>
																								<div class="pay-card__card-number input-dates">
																									<input class="pay-card__card-number__input input-dates__item js-pay-card-cv" placeholder="000" pattern="\d*" type="text" maxlength="3">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-12 col-lg-10">
																				<div class="row row-mobile-padding-05">
																					<div class="col-12">
																						<h3 class="account-block__heading mt-4 mb-3">billing Information</h3>
																					</div>
																					<div class="col-12 col-lg-6">
																						<div class="form-group">
																							<label for="first-name" class="label-riquired">First name</label>
																							<input type="text" class="form-control mt-2 mb-2" name="first-name" placeholder="First name" value="Daniel">
																						</div>
																					</div>
																					<div class="col-12 col-lg-6">
																						<div class="form-group">
																							<label for="last-name" class="label-riquired">Last name</label>
																							<input type="text" class="form-control mt-2 mb-2" name="last-name" placeholder="Last name" value="Dimitrov">
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="form-group">
																							<label for="address" class="label-riquired with-span">Street Address <span>We cannot ship to a P.O. box</span></label>
																							<input type="text" class="form-control mt-2 mb-2" name="address" placeholder="Street Address" value="239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309">
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="row">
																							<div class="col-6 col-lg-3-277">
																								<div class="form-group">
																									<label for="country" class="label-riquired">Country:</label>
																									<div class="my-custom-select-wrapper mt-2 mb-2" data-name="country">
																										<div class="my-custom-select">
																											<div class="my-custom-select__trigger"><span>Country</span>
																												<div class="arrow"></div>
																											</div>
																											<div class="my-custom-options">
																												<span class="my-custom-option selected" data-value="Country">Country</span>
																												<span class="my-custom-option" data-value="Name">Name</span>
																												<span class="my-custom-option" data-value="Lastest">Lastest</span>
																												<span class="my-custom-option" data-value="Older">Older</span>
																												<span class="my-custom-option" data-value="Number of rooms">Number of rooms</span>
																												<span class="my-custom-option" data-value="Most visited">Most visited</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="col-6 col-lg-3-277">
																								<div class="form-group">
																									<label for="city" class="label-riquired">City:</label>
																									<input type="text" class="form-control mt-2 mb-2" name="city" placeholder="City" value="Sofia">
																								</div>
																							</div>
																							<div class="col-6 col-lg-3-277">
																								<div class="form-group">
																									<label for="state" class="label-riquired">State:</label>
																									
																									<div class="my-custom-select-wrapper mt-2 mb-2" data-name="state">
																										<div class="my-custom-select">
																											<div class="my-custom-select__trigger"><span>State</span>
																												<div class="arrow"></div>
																											</div>
																											<div class="my-custom-options">
																												<span class="my-custom-option selected" data-value="State">State</span>
																												<span class="my-custom-option" data-value="Name">Name</span>
																												<span class="my-custom-option" data-value="Lastest">Lastest</span>
																												<span class="my-custom-option" data-value="Older">Older</span>
																												<span class="my-custom-option" data-value="Number of rooms">Number of rooms</span>
																												<span class="my-custom-option" data-value="Most visited">Most visited</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="col-6 col-lg-2">
																								<div class="form-group">
																									<label for="zip" class="label-riquired">Zip:</label>
																									<input type="text" class="form-control mt-2 mb-2" name="zip" placeholder="Zip" value="">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-12 col-lg-10">
																				<div class="row row-mobile-padding-05">
																					<div class="col-auto">
																						<div class="form-check mb-3 pl-0">
																							<input class="custom-checkbox" id="checkbox-1" type="checkbox" value="value1">
																							<label for="checkbox-1">Set as default</label>
																						</div>
																					</div>
																					<div class="col-auto">
																						<button type="submit" class="btn btn-primary">save changes</button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<button class="account-block__details--delete-button">
												<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.ddeell-a{fill:#f44336;}.ddeell-b{fill:#fafafa;}</style></defs><path class="ddeell-a" d="M18.594,0H2.406A2.408,2.408,0,0,0,0,2.406V18.594A2.408,2.408,0,0,0,2.406,21H18.594A2.408,2.408,0,0,0,21,18.594V2.406A2.408,2.408,0,0,0,18.594,0Zm0,0"/><path class="ddeell-b" d="M163.461,162.224a.875.875,0,1,1-1.237,1.237l-2.629-2.629-2.629,2.629a.875.875,0,0,1-1.237-1.237l2.629-2.629-2.629-2.629a.875.875,0,0,1,1.237-1.237l2.629,2.63,2.629-2.63a.875.875,0,0,1,1.237,1.237l-2.63,2.629Zm0,0" transform="translate(-149.095 -149.094)"/></svg>
											</button>
										</div>
	
										<div class="card mb-2">
											<button class="account-mobile-more-info-btn js-show-mobile-action-btn">
											</button>
	
											<div class="account-mobile-more-info-wrapper js-show-mobile-action-buttons">
												<div class="account-mobile-more-info-wrapper__mobile-more-info">
													<button class="">Delete from list</button>
												</div>
											</div>

											<div class="card-header" id="headingTwo">
												<div class="account-block__collapse--header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													<div class="container-fluid">
														<div class="row pt-3">
															<div class="col-5 col-lg-2">
																<img src="<?php echo SITEROOT; ?>images/footer-masterCard.png" alt="" class="img-fluid">
															</div>
															<div class="col-7 col-lg-10">
																<div class="row mt-lg-2">
																	<div class="col-12 col-lg-4">
																		<p class="account-block__collapse--heading mb-0">Card holder</p>
																		<p class="account-block__collapse--text">Daniel Dimitrov</p>
																	</div>
																	<div class="col-12 col-lg-4">
																		<p class="account-block__collapse--heading desktop-show mb-0">Card number</p>
																		<p class="account-block__collapse--text">XXXX XXXX XXXX 5748</p>
																	</div>
																	<div class="col-12 col-lg-4">
																		<div class="mobile-expire-card">
																			<p class="account-block__collapse--heading  mb-0">Expires</p>
																			<p class="account-block__collapse--text">02/22</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<button class="account-block__details--edit-button">
															<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.edit-a{fill:#384765;}.edit-b{fill:#fff;}</style></defs><g transform="translate(-5 -5.501)"><path class="edit-a" d="M18.594,0H2.406A2.408,2.408,0,0,0,0,2.406V18.594A2.408,2.408,0,0,0,2.406,21H18.594A2.408,2.408,0,0,0,21,18.594V2.406A2.408,2.408,0,0,0,18.594,0Zm0,0" transform="translate(5 5.501)"/><g transform="translate(-0.232 2)"><path class="edit-b" d="M182.366,73.425a.33.33,0,0,0-.089.166l-.461,2.308a.326.326,0,0,0,.32.39.31.31,0,0,0,.064-.006l2.307-.461a.325.325,0,0,0,.167-.089l5.163-5.163-2.307-2.307Zm0,0" transform="translate(-171.576 -57.688)"/><path class="edit-b" d="M394.656.978a1.633,1.633,0,0,0-2.307,0l-.9.9,2.307,2.307.9-.9a1.631,1.631,0,0,0,0-2.307Zm0,0" transform="translate(-374.801 8)"/></g></g></svg>
														</button>	
													</div>
												</div>
											</div>
											<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
												<div class="card-body">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12">
																<div class="row-with-border-top"></div>
															</div>
															<div class="col-12">
																<div class="account-block__form account-payment">
																	<form>
																		<div class="row align-items-center">
																			<div class="col-12 col-lg-5">
																				<div class="pay-card__wrap m-0">
																					<div class="pay-card">
																						<label for="js-pay-card-number" class="pay-card__title">Card number</label>
																						<div class="pay-card__card-number">
																							<input class="pay-card__card-number__input js-pay-card-number" placeholder="0000 0000 0000 0000" type="text" maxlength="19" name="pay-card-number">
																						</div>
																						<div class="row mt-4">
																							<div class="col-6">
																								<label for="pay-card-name" class="pay-card__title">
																									Card holder
																								</label>
																								<div class="pay-card__card-number">
																									<input class="pay-card__card-number__input input-name" name="pay-card-name" placeholder="Name here" type="text" minlength="2">
																								</div>
																							</div>
																							<div class="col-6">
																								<label for="js-pay-card-date" class="pay-card__title">
																									Expires
																								</label>
																								<div class="pay-card__card-number input-dates">
																									<input class="pay-card__card-number__input input-dates__item js-pay-card-date" placeholder="MM/YY" pattern="^\d+(\/\d+)*$" type="text" maxlength="5">
																								</div>
																							</div>
																						</div>
																						<div class="row">
																							
																							<div class="col-6 mt-4 mobile-show">
																								<div class="d-flex">
																									<label for="js-pay-card-cv" class="pay-card__title" style="border-bottom: 1px solid #707070;">
																										CVV
																									</label>
																									<div class="pay-card__card-number input-dates">
																										<input class="pay-card__card-number__input input-dates__item js-pay-card-cv" placeholder="000" pattern="\d*" type="text" maxlength="3">
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-12 col-lg-5 desktop-show">
																				<div class="pay-card__wrap pay-card__wrap__cv m-0">
																					<div class="pay-card">
																						<div class="pay-card__card-number__background">
																						</div>
																						<div class="row mt-4">
																							<div class="col-9">
								
																							</div>
																							<div class="col-3">
																								<label for="js-pay-card-cv" class="pay-card__title">
																									CVV
																								</label>
																								<div class="pay-card__card-number input-dates">
																									<input class="pay-card__card-number__input input-dates__item js-pay-card-cv" placeholder="000" pattern="\d*" type="text" maxlength="3">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-12 col-lg-10">
																				<div class="row row-mobile-padding-05">
																					<div class="col-12">
																						<h3 class="account-block__heading mt-4 mb-3">billing Information</h3>
																					</div>
																					<div class="col-12 col-lg-6">
																						<div class="form-group">
																							<label for="first-name" class="label-riquired">First name</label>
																							<input type="text" class="form-control mt-2 mb-2" name="first-name" placeholder="First name" value="Daniel">
																						</div>
																					</div>
																					<div class="col-12 col-lg-6">
																						<div class="form-group">
																							<label for="last-name" class="label-riquired">Last name</label>
																							<input type="text" class="form-control mt-2 mb-2" name="last-name" placeholder="Last name" value="Dimitrov">
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="form-group">
																							<label for="address" class="label-riquired with-span">Street Address <span>We cannot ship to a P.O. box</span></label>
																							<input type="text" class="form-control mt-2 mb-2" name="address" placeholder="Street Address" value="239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309">
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="row">
																							<div class="col-6 col-lg-3-277">
																								<div class="form-group">
																									<label for="country" class="label-riquired">Country:</label>
																									<div class="my-custom-select-wrapper mt-2 mb-2" data-name="country">
																										<div class="my-custom-select">
																											<div class="my-custom-select__trigger"><span>Country</span>
																												<div class="arrow"></div>
																											</div>
																											<div class="my-custom-options">
																												<span class="my-custom-option selected" data-value="Country">Country</span>
																												<span class="my-custom-option" data-value="Name">Name</span>
																												<span class="my-custom-option" data-value="Lastest">Lastest</span>
																												<span class="my-custom-option" data-value="Older">Older</span>
																												<span class="my-custom-option" data-value="Number of rooms">Number of rooms</span>
																												<span class="my-custom-option" data-value="Most visited">Most visited</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="col-6 col-lg-3-277">
																								<div class="form-group">
																									<label for="city" class="label-riquired">City:</label>
																									<input type="text" class="form-control mt-2 mb-2" name="city" placeholder="City" value="Sofia">
																								</div>
																							</div>
																							<div class="col-6 col-lg-3-277">
																								<div class="form-group">
																									<label for="state" class="label-riquired">State:</label>
																									
																									<div class="my-custom-select-wrapper mt-2 mb-2" data-name="state">
																										<div class="my-custom-select">
																											<div class="my-custom-select__trigger"><span>State</span>
																												<div class="arrow"></div>
																											</div>
																											<div class="my-custom-options">
																												<span class="my-custom-option selected" data-value="State">State</span>
																												<span class="my-custom-option" data-value="Name">Name</span>
																												<span class="my-custom-option" data-value="Lastest">Lastest</span>
																												<span class="my-custom-option" data-value="Older">Older</span>
																												<span class="my-custom-option" data-value="Number of rooms">Number of rooms</span>
																												<span class="my-custom-option" data-value="Most visited">Most visited</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="col-6 col-lg-2">
																								<div class="form-group">
																									<label for="zip" class="label-riquired">Zip:</label>
																									<input type="text" class="form-control mt-2 mb-2" name="zip" placeholder="Zip" value="">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-12 col-lg-10">
																				<div class="row row-mobile-padding-05">
																					<div class="col-auto">
																						<div class="form-check mb-3 pl-0">
																							<input class="custom-checkbox" id="checkbox-2" type="checkbox" value="value2">
																							<label for="checkbox-2">Set as default</label>
																						</div>
																					</div>
																					<div class="col-auto">
																						<button type="submit" class="btn btn-primary">save changes</button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<button class="account-block__details--delete-button">
												<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.ddeell-a{fill:#f44336;}.ddeell-b{fill:#fafafa;}</style></defs><path class="ddeell-a" d="M18.594,0H2.406A2.408,2.408,0,0,0,0,2.406V18.594A2.408,2.408,0,0,0,2.406,21H18.594A2.408,2.408,0,0,0,21,18.594V2.406A2.408,2.408,0,0,0,18.594,0Zm0,0"/><path class="ddeell-b" d="M163.461,162.224a.875.875,0,1,1-1.237,1.237l-2.629-2.629-2.629,2.629a.875.875,0,0,1-1.237-1.237l2.629-2.629-2.629-2.629a.875.875,0,0,1,1.237-1.237l2.629,2.63,2.629-2.63a.875.875,0,0,1,1.237,1.237l-2.63,2.629Zm0,0" transform="translate(-149.095 -149.094)"/></svg>
											</button>
										</div>
										
										<div class="card mb-2">
											<button class="account-mobile-more-info-btn js-show-mobile-action-btn">
											</button>
	
											<div class="account-mobile-more-info-wrapper js-show-mobile-action-buttons">
												<div class="account-mobile-more-info-wrapper__mobile-more-info">
													<button class="">Delete from list</button>
												</div>
											</div>

											<div class="card-header" id="headingThree">
												<div class="account-block__collapse--header collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													<div class="container-fluid">
														<div class="row pt-3">
															<div class="col-5 col-lg-2">
																<img src="<?php echo SITEROOT; ?>images/footer-masterCard.png" alt="" class="img-fluid">
															</div>
															<div class="col-7 col-lg-10">
																<div class="row mt-lg-2">
																	<div class="col-12 col-lg-4">
																		<p class="account-block__collapse--heading mb-0">Card holder</p>
																		<p class="account-block__collapse--text">Daniel Dimitrov</p>
																	</div>
																	<div class="col-12 col-lg-4">
																		<p class="account-block__collapse--heading desktop-show mb-0">Card number</p>
																		<p class="account-block__collapse--text">XXXX XXXX XXXX 5748</p>
																	</div>
																	<div class="col-12 col-lg-4">
																		<div class="mobile-expire-card">
																			<p class="account-block__collapse--heading  mb-0">Expires</p>
																			<p class="account-block__collapse--text">02/22</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<button class="account-block__details--edit-button">
															<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.edit-a{fill:#384765;}.edit-b{fill:#fff;}</style></defs><g transform="translate(-5 -5.501)"><path class="edit-a" d="M18.594,0H2.406A2.408,2.408,0,0,0,0,2.406V18.594A2.408,2.408,0,0,0,2.406,21H18.594A2.408,2.408,0,0,0,21,18.594V2.406A2.408,2.408,0,0,0,18.594,0Zm0,0" transform="translate(5 5.501)"/><g transform="translate(-0.232 2)"><path class="edit-b" d="M182.366,73.425a.33.33,0,0,0-.089.166l-.461,2.308a.326.326,0,0,0,.32.39.31.31,0,0,0,.064-.006l2.307-.461a.325.325,0,0,0,.167-.089l5.163-5.163-2.307-2.307Zm0,0" transform="translate(-171.576 -57.688)"/><path class="edit-b" d="M394.656.978a1.633,1.633,0,0,0-2.307,0l-.9.9,2.307,2.307.9-.9a1.631,1.631,0,0,0,0-2.307Zm0,0" transform="translate(-374.801 8)"/></g></g></svg>
														</button>	
													</div>
												</div>
											</div>
											<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
												<div class="card-body">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12">
																<div class="row-with-border-top"></div>
															</div>
															<div class="col-12">
																<div class="account-block__form account-payment">
																	<form>
																		<div class="row align-items-center">
																			<div class="col-12 col-lg-5">
																				<div class="pay-card__wrap m-0">
																					<div class="pay-card">
																						<label for="js-pay-card-number" class="pay-card__title">Card number</label>
																						<div class="pay-card__card-number">
																							<input class="pay-card__card-number__input js-pay-card-number" placeholder="0000 0000 0000 0000" type="text" maxlength="19" name="pay-card-number">
																						</div>
																						<div class="row mt-4">
																							<div class="col-6">
																								<label for="pay-card-name" class="pay-card__title">
																									Card holder
																								</label>
																								<div class="pay-card__card-number">
																									<input class="pay-card__card-number__input input-name" name="pay-card-name" placeholder="Name here" type="text" minlength="2">
																								</div>
																							</div>
																							<div class="col-6">
																								<label for="js-pay-card-date" class="pay-card__title">
																									Expires
																								</label>
																								<div class="pay-card__card-number input-dates">
																									<input class="pay-card__card-number__input input-dates__item js-pay-card-date" placeholder="MM/YY" pattern="^\d+(\/\d+)*$" type="text" maxlength="5">
																								</div>
																							</div>
																						</div>
																						<div class="row">
																							
																							<div class="col-6 mt-4 mobile-show">
																								<div class="d-flex">
																									<label for="js-pay-card-cv" class="pay-card__title" style="border-bottom: 1px solid #707070;">
																										CVV
																									</label>
																									<div class="pay-card__card-number input-dates">
																										<input class="pay-card__card-number__input input-dates__item js-pay-card-cv" placeholder="000" pattern="\d*" type="text" maxlength="3">
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-12 col-lg-5 desktop-show">
																				<div class="pay-card__wrap pay-card__wrap__cv m-0">
																					<div class="pay-card">
																						<div class="pay-card__card-number__background">
																						</div>
																						<div class="row mt-4">
																							<div class="col-9">
								
																							</div>
																							<div class="col-3">
																								<label for="js-pay-card-cv" class="pay-card__title">
																									CVV
																								</label>
																								<div class="pay-card__card-number input-dates">
																									<input class="pay-card__card-number__input input-dates__item js-pay-card-cv" placeholder="000" pattern="\d*" type="text" maxlength="3">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-12 col-lg-10">
																				<div class="row row-mobile-padding-05">
																					<div class="col-12">
																						<h3 class="account-block__heading mt-4 mb-3">billing Information</h3>
																					</div>
																					<div class="col-12 col-lg-6">
																						<div class="form-group">
																							<label for="first-name" class="label-riquired">First name</label>
																							<input type="text" class="form-control mt-2 mb-2" name="first-name" placeholder="First name" value="Daniel">
																						</div>
																					</div>
																					<div class="col-12 col-lg-6">
																						<div class="form-group">
																							<label for="last-name" class="label-riquired">Last name</label>
																							<input type="text" class="form-control mt-2 mb-2" name="last-name" placeholder="Last name" value="Dimitrov">
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="form-group">
																							<label for="address" class="label-riquired with-span">Street Address <span>We cannot ship to a P.O. box</span></label>
																							<input type="text" class="form-control mt-2 mb-2" name="address" placeholder="Street Address" value="239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309">
																						</div>
																					</div>
																					<div class="col-12">
																						<div class="row">
																							<div class="col-6 col-lg-3-277">
																								<div class="form-group">
																									<label for="country" class="label-riquired">Country:</label>
																									<div class="my-custom-select-wrapper mt-2 mb-2" data-name="country">
																										<div class="my-custom-select">
																											<div class="my-custom-select__trigger"><span>Country</span>
																												<div class="arrow"></div>
																											</div>
																											<div class="my-custom-options">
																												<span class="my-custom-option selected" data-value="Country">Country</span>
																												<span class="my-custom-option" data-value="Name">Name</span>
																												<span class="my-custom-option" data-value="Lastest">Lastest</span>
																												<span class="my-custom-option" data-value="Older">Older</span>
																												<span class="my-custom-option" data-value="Number of rooms">Number of rooms</span>
																												<span class="my-custom-option" data-value="Most visited">Most visited</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="col-6 col-lg-3-277">
																								<div class="form-group">
																									<label for="city" class="label-riquired">City:</label>
																									<input type="text" class="form-control mt-2 mb-2" name="city" placeholder="City" value="Sofia">
																								</div>
																							</div>
																							<div class="col-6 col-lg-3-277">
																								<div class="form-group">
																									<label for="state" class="label-riquired">State:</label>
																									
																									<div class="my-custom-select-wrapper mt-2 mb-2" data-name="state">
																										<div class="my-custom-select">
																											<div class="my-custom-select__trigger"><span>State</span>
																												<div class="arrow"></div>
																											</div>
																											<div class="my-custom-options">
																												<span class="my-custom-option selected" data-value="State">State</span>
																												<span class="my-custom-option" data-value="Name">Name</span>
																												<span class="my-custom-option" data-value="Lastest">Lastest</span>
																												<span class="my-custom-option" data-value="Older">Older</span>
																												<span class="my-custom-option" data-value="Number of rooms">Number of rooms</span>
																												<span class="my-custom-option" data-value="Most visited">Most visited</span>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="col-6 col-lg-2">
																								<div class="form-group">
																									<label for="zip" class="label-riquired">Zip:</label>
																									<input type="text" class="form-control mt-2 mb-2" name="zip" placeholder="Zip" value="">
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-12 col-lg-10">
																				<div class="row row-mobile-padding-05">
																					<div class="col-auto">
																						<div class="form-check mb-3 pl-0">
																							<input class="custom-checkbox" id="checkbox-3" type="checkbox" value="value3">
																							<label for="checkbox-3">Set as default</label>
																						</div>
																					</div>
																					<div class="col-auto">
																						<button type="submit" class="btn btn-primary">save changes</button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<button class="account-block__details--delete-button">
												<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.ddeell-a{fill:#f44336;}.ddeell-b{fill:#fafafa;}</style></defs><path class="ddeell-a" d="M18.594,0H2.406A2.408,2.408,0,0,0,0,2.406V18.594A2.408,2.408,0,0,0,2.406,21H18.594A2.408,2.408,0,0,0,21,18.594V2.406A2.408,2.408,0,0,0,18.594,0Zm0,0"/><path class="ddeell-b" d="M163.461,162.224a.875.875,0,1,1-1.237,1.237l-2.629-2.629-2.629,2.629a.875.875,0,0,1-1.237-1.237l2.629-2.629-2.629-2.629a.875.875,0,0,1,1.237-1.237l2.629,2.63,2.629-2.63a.875.875,0,0,1,1.237,1.237l-2.63,2.629Zm0,0" transform="translate(-149.095 -149.094)"/></svg>
											</button>
										</div>
									</div>

									<button type="button" class="btn btn-primary add-new-address account-payment" data-toggle="modal" data-target="#newPaymentCard">add new card</button>
								</div>

								<!-- payment-history block -->
								<!-- <div class="account-block__details" id="payment-history">
									<h3 class="account-block__heading">Payment history</h3>


								</div> -->
							</div>
						</div>
					</div>
				</div>
	</section>
</main>

<div class="mobile-show">
<button type="button" class="btn btn-primary account-payment-mobile" data-toggle="modal" data-target="#newPaymentCard">add new card</button>
</div>

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




<?php
require_once($real_root.'/includes/footer.php');
?>
	

		<!-- Modal New Payment card-->
		<div class="modal mobile-account-full-screan-modal account-payment fade" id="newPaymentCard" tabindex="-1" role="dialog" aria-labelledby="newPaymentCardTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="newPaymentCardTitle">Add new payment card</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="account-block__form account-payment">
							<form>
								<div class="row align-items-center">
									<div class="col-12 col-lg-6">
										<div class="pay-card__wrap m-0">
											<div class="pay-card">
												<label for="js-pay-card-number" class="pay-card__title">Card number</label>
												<div class="pay-card__card-number">
													<input class="pay-card__card-number__input js-pay-card-number" placeholder="0000 0000 0000 0000" type="text" maxlength="19" name="pay-card-number">
												</div>
												<div class="row mt-4">
													<div class="col-6">
														<label for="pay-card-name" class="pay-card__title">
															Card holder
														</label>
														<div class="pay-card__card-number">
															<input class="pay-card__card-number__input input-name" name="pay-card-name" placeholder="Name here" type="text" minlength="2">
														</div>
													</div>
													<div class="col-6">
														<label for="js-pay-card-date" class="pay-card__title">
															Expires
														</label>
														<div class="pay-card__card-number input-dates">
															<input class="pay-card__card-number__input input-dates__item js-pay-card-date" placeholder="MM/YY" pattern="^\d+(\/\d+)*$" type="text" maxlength="5">
														</div>
													</div>
												</div>
												<div class="row">
													
													<div class="col-6 mt-4 mobile-show">
														<div class="d-flex">
															<label for="js-pay-card-cv" class="pay-card__title" style="border-bottom: 1px solid #707070;">
																CVV
															</label>
															<div class="pay-card__card-number input-dates">
																<input class="pay-card__card-number__input input-dates__item js-pay-card-cv" placeholder="000" pattern="\d*" type="text" maxlength="3">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6 desktop-show">
										<div class="pay-card__wrap pay-card__wrap__cv m-0">
											<div class="pay-card">
												<div class="pay-card__card-number__background">
												</div>
												<div class="row mt-4">
													<div class="col-9">

													</div>
													<div class="col-3">
														<label for="js-pay-card-cv" class="pay-card__title">
															CVV
														</label>
														<div class="pay-card__card-number input-dates">
															<input class="pay-card__card-number__input input-dates__item js-pay-card-cv" placeholder="000" pattern="\d*" type="text" maxlength="3">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="row row-mobile-padding-05">
											<div class="col-12">
												<h3 class="account-block__heading mt-4 mb-3">billing Information</h3>
											</div>
											<div class="col-12 col-lg-6">
												<div class="form-group">
													<label for="first-name" class="label-riquired">First name</label>
													<input type="text" class="form-control mt-2 mb-2" name="first-name" placeholder="First name" value="">
												</div>
											</div>
											<div class="col-12 col-lg-6">
												<div class="form-group">
													<label for="last-name" class="label-riquired">Last name</label>
													<input type="text" class="form-control mt-2 mb-2" name="last-name" placeholder="Last name" value="">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="address" class="label-riquired with-span">Street Address <span>We cannot ship to a P.O. box</span></label>
													<input type="text" class="form-control mt-2 mb-2" name="address" placeholder="Street Address" value="">
												</div>
											</div>
											<div class="col-12">
												<div class="row">
													<div class="col-6 col-lg-3-277">
														<div class="form-group">
															<label for="country" class="label-riquired">Country:</label>
															<div class="my-custom-select-wrapper mt-2 mb-2" data-name="country">
																<div class="my-custom-select">
																	<div class="my-custom-select__trigger"><span>Country</span>
																		<div class="arrow"></div>
																	</div>
																	<div class="my-custom-options">
																		<span class="my-custom-option selected" data-value="Country">Country</span>
																		<span class="my-custom-option" data-value="Name">Name</span>
																		<span class="my-custom-option" data-value="Lastest">Lastest</span>
																		<span class="my-custom-option" data-value="Older">Older</span>
																		<span class="my-custom-option" data-value="Number of rooms">Number of rooms</span>
																		<span class="my-custom-option" data-value="Most visited">Most visited</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-6 col-lg-3-277">
														<div class="form-group">
															<label for="city" class="label-riquired">City:</label>
															<input type="text" class="form-control mt-2 mb-2" name="city" placeholder="City" value="">
														</div>
													</div>
													<div class="col-6 col-lg-3-277">
														<div class="form-group">
															<label for="state" class="label-riquired">State:</label>
															
															<div class="my-custom-select-wrapper mt-2 mb-2" data-name="state">
																<div class="my-custom-select">
																	<div class="my-custom-select__trigger"><span>State</span>
																		<div class="arrow"></div>
																	</div>
																	<div class="my-custom-options">
																		<span class="my-custom-option selected" data-value="State">State</span>
																		<span class="my-custom-option" data-value="Name">Name</span>
																		<span class="my-custom-option" data-value="Lastest">Lastest</span>
																		<span class="my-custom-option" data-value="Older">Older</span>
																		<span class="my-custom-option" data-value="Number of rooms">Number of rooms</span>
																		<span class="my-custom-option" data-value="Most visited">Most visited</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-6 col-lg-2">
														<div class="form-group">
															<label for="zip" class="label-riquired">Zip:</label>
															<input type="text" class="form-control mt-2 mb-2" name="zip" placeholder="Zip" value="">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<div class="row row-mobile-padding-05">
											<div class="col-auto">
												<div class="form-check mb-3 pl-0">
													<input class="custom-checkbox" id="checkbox-4" type="checkbox" value="value4">
													<label for="checkbox-4">Set as default</label>
												</div>
											</div>
											<div class="col-auto">
												<button type="submit" class="btn btn-primary">save changes</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>
