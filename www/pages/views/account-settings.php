<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>ClosetsToGo</title>
<meta name="description" content="account settings">
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
							<a href="account-settings.html" title="" class="home-mobile-buttons-block__link account-big-link active">Account settings</a>
							<a href="#" title="" class="home-mobile-buttons-block__link account-big-link">Start a new design</a>
							<a href="account-orders.html" title="" class="home-mobile-buttons-block__link account-small-link">My orders</a>
							<a href="account-payments.html" title="" class="home-mobile-buttons-block__link account-big-link">Payment settings</a>
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
					<div class="col-lg-3">
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

								<div class="account-block__general-info">

									<div class="account-block__general-info--image">
										<p class="desktop-show">My Account</p>
										<svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96"><defs><style>.user{fill:#949dae;}</style></defs><g transform="translate(0)"><g transform="translate(0)"><path class="user" d="M81.941,62.059A47.816,47.816,0,0,0,63.7,50.618a27.75,27.75,0,1,0-31.4,0A48.076,48.076,0,0,0,0,96H7.5a40.5,40.5,0,1,1,81,0H96A47.687,47.687,0,0,0,81.941,62.059ZM48,48A20.25,20.25,0,1,1,68.25,27.75,20.273,20.273,0,0,1,48,48Z" transform="translate(0)"/></g></g></svg>

										<div class="account-block__general-info--details mobile-show">
											<div class="row">
												<div class="col-12"><p>My Account</p></div>
											</div>
											<div class="row mt-2">
												<div class="col-12"><p class="second-text">Super Administrator</p></div>
											</div>
											<div class="row">
												<div class="col-12"><p class="second-text">admin@admincloset.togo</p></div>
											</div>
										</div>

										<a href="#" title="" class="mobile-log-out">Log out</a>
									</div>

									<div class="account-block__general-info--details desktop-show">
										<div class="row">
											<div class="col-lg-3"><p class="first-text">Account Name:</p></div>
											<div class="col-12 col-lg-9"><p class="second-text">Super Administrator</p></div>
										</div>
										<div class="row">
											<div class="col-lg-3"><p class="first-text">Account Email:</p></div>
											<div class="col-12 col-lg-9"><p class="second-text">admin@admincloset.togo</p></div>
										</div>
									</div>
								</div>

								<div class="account-block__buttons-block">
									<button class="account-block__buttons-block--button change-password js-open-hidden-box" date-open-block="#change-password-box" data-open-mobile-block="#mobile-change-password-box">
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
											Change password<br />
											<span>click to change your password</span>
										</span>
									</button>

									<div class="mobile-show mt-3" id="mobile-change-password-box">

									</div>

									<button class="account-block__buttons-block--button shipping-info js-open-hidden-box" date-open-block="#shipping-info-box" data-open-mobile-block="#mobile-shipping-info-box">
										<span class="button-image">
											<svg id="Group_6z18" data-name="Group 6z18" xmlns="http://www.w3.org/2000/svg" width="61" height="61" viewBox="0 0 61 61">
												<g id="Ellipse_24" data-name="Ellipse 24" fill="none" stroke="#18c4c7" stroke-width="1">
													<circle cx="30.5" cy="30.5" r="30.5" stroke="none"/>
													<circle cx="30.5" cy="30.5" r="30" fill="none"/>
												</g>
												<path id="address" d="M7.032,12.012a4.986,4.986,0,0,0,4.98,4.98,1.172,1.172,0,1,1,0,2.344,7.324,7.324,0,1,1,7.324-7.324,1.172,1.172,0,0,1-2.344,0,4.98,4.98,0,1,0-9.961,0Zm.921,10.365C4.945,19.084,2.348,16.24,2.344,12A9.668,9.668,0,0,1,21.68,12a1.172,1.172,0,0,0,1.172,1.17h0A1.172,1.172,0,0,0,24.023,12a12.011,12.011,0,0,0-20.5-8.484A11.935,11.935,0,0,0,0,12a12.55,12.55,0,0,0,1.983,6.7,35.661,35.661,0,0,0,4.238,5.259,40.007,40.007,0,0,1,4.448,5.5A1.172,1.172,0,1,0,12.651,28.2a41.814,41.814,0,0,0-4.7-5.825Zm21.741.562a1.172,1.172,0,0,1-1.656.074l-.147-.134v3.878a3.3,3.3,0,0,1-3.3,3.3H18.006a3.3,3.3,0,0,1-3.3-3.3V22.933l-.088.08a1.172,1.172,0,1,1-1.581-1.73l6.048-5.53a3.306,3.306,0,0,1,4.484,0L27.445,19.3a1.172,1.172,0,0,1,.121.11l2.052,1.876a1.172,1.172,0,0,1,.074,1.656Zm-4.146-2.2-3.558-3.253a.974.974,0,0,0-1.321,0L17.051,20.79v5.967a.958.958,0,0,0,.956.958h6.585a.958.958,0,0,0,.955-.958Zm0,0" transform="translate(16 15)" fill="#18c4c7"/>
											</svg>
										</span>
										<span class="button-text">
											Shipping Contact Info<br />
											<span>change shipping address</span>
										</span>
									</button>

									<div class="mobile-show mt-3" id="mobile-shipping-info-box">

									</div>

									<!-- <button class="account-block__buttons-block--button billing-info js-open-hidden-box" date-open-block="#billing-info-box" data-open-mobile-block="#mobile-billing-info-box">
										<span class="button-image">
											<svg xmlns="http://www.w3.org/2000/svg" width="21.667" height="17.755" viewBox="0 0 21.667 17.755"><defs><style>.wallet{fill:#384765;}</style></defs><g transform="translate(0 -39)"><g transform="translate(0 39)"><g transform="translate(0 0)"><path class="wallet" d="M19.591,39H4.429a2.081,2.081,0,0,0-2.071,2.081v.025H2.076A2.075,2.075,0,0,0,0,43.173v11.5a2.088,2.088,0,0,0,2.076,2.081H17.238a2.081,2.081,0,0,0,2.071-2.081v-.025h.281a2.075,2.075,0,0,0,2.076-2.066v-11.5A2.085,2.085,0,0,0,19.591,39ZM17.238,55.752H2.076A1.085,1.085,0,0,1,1,54.673v-11.5A1.072,1.072,0,0,1,2.076,42.11H17.238a1.065,1.065,0,0,1,1.068,1.063v2.869a1.235,1.235,0,0,1-.266.03H15.147a2.856,2.856,0,0,0,0,5.713h2.889c.09-.005.181-.015.266-.025l.005,2.914A1.078,1.078,0,0,1,17.238,55.752Zm3.426-3.17a1.072,1.072,0,0,1-1.073,1.063H19.31V51.4a2.741,2.741,0,0,0,.577-.527l.777-1Zm-1.57-2.317a1.35,1.35,0,0,1-1.053.522H15.147a1.856,1.856,0,0,1,0-3.711h2.889a2.288,2.288,0,0,0,1-.226,2.332,2.332,0,0,0,.848-.682l.777-1,.005,3.064Zm1.57-6.741L19.31,45.269v-2.1a2.068,2.068,0,0,0-2.071-2.066H3.36v-.025A1.078,1.078,0,0,1,4.429,40H19.591a1.085,1.085,0,0,1,1.073,1.078v2.443Z" transform="translate(0 -39)"></path></g></g><g transform="translate(14.565 48.429)"><path class="wallet" d="M292.105,227h-1.2a.5.5,0,1,0,0,1h1.2a.5.5,0,0,0,0-1Z" transform="translate(-290.4 -227)"></path></g></g></svg>
										</span>
										<span class="button-text">
											Billing Contact Info<br />
											<span>change your billing address</span>
										</span>
									</button>

									<div class="mobile-show mt-3" id="mobile-billing-info-box">
										
									</div> -->

									<button class="account-block__buttons-block--button site-preferences js-open-hidden-box" date-open-block="#site-preferences-box" data-open-mobile-block="#mobile-site-preferences-box">
										<span class="button-image">
											<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><defs><style>.gear{fill:#5eae5e;}</style></defs><g transform="translate(8.203 8.203)"><path class="gear" d="M146.8,140a6.8,6.8,0,1,0,2.053,13.278,1.172,1.172,0,0,0-.707-2.235,4.447,4.447,0,1,1,2.929-2.993,1.172,1.172,0,0,0,2.25.658A6.8,6.8,0,0,0,146.8,140Z" transform="translate(-140 -140)"/></g><path class="gear" d="M26.484,10.9h-.59a.39.39,0,0,1-.357-.245l-.01-.025A.393.393,0,0,1,25.6,10.2l.417-.417a3.52,3.52,0,0,0,0-4.972l-.829-.829a3.516,3.516,0,0,0-4.972,0L19.8,4.4a.393.393,0,0,1-.43.077l-.022-.009a.392.392,0,0,1-.249-.358v-.59A3.52,3.52,0,0,0,15.586,0H14.414A3.52,3.52,0,0,0,10.9,3.516v.59a.391.391,0,0,1-.248.358l-.023.009A.393.393,0,0,1,10.2,4.4L9.78,3.979a3.516,3.516,0,0,0-4.972,0l-.829.829a3.52,3.52,0,0,0,0,4.972L4.4,10.2a.4.4,0,0,1,.075.435l-.007.017a.392.392,0,0,1-.358.249h-.59A3.52,3.52,0,0,0,0,14.414v1.172A3.52,3.52,0,0,0,3.516,19.1h.59a.39.39,0,0,1,.357.245l.01.025A.393.393,0,0,1,4.4,19.8l-.417.417a3.516,3.516,0,0,0,0,4.972l.829.829a3.516,3.516,0,0,0,4.972,0L10.2,25.6a.393.393,0,0,1,.43-.077l.022.009a.392.392,0,0,1,.249.358v.59A3.52,3.52,0,0,0,14.414,30h1.172A3.52,3.52,0,0,0,19.1,26.484v-.59a.391.391,0,0,1,.248-.358l.023-.009a.393.393,0,0,1,.431.077l.417.417a3.516,3.516,0,0,0,4.972,0l.829-.829a3.516,3.516,0,0,0,0-4.972L25.6,19.8a.393.393,0,0,1-.077-.431l.009-.021a.392.392,0,0,1,.358-.249h.59A3.52,3.52,0,0,0,30,15.586V14.414A3.52,3.52,0,0,0,26.484,10.9Zm1.172,4.687a1.173,1.173,0,0,1-1.172,1.172h-.59a2.728,2.728,0,0,0-2.525,1.7l-.008.018a2.729,2.729,0,0,0,.585,2.986l.417.417a1.172,1.172,0,0,1,0,1.657l-.829.829a1.172,1.172,0,0,1-1.657,0l-.417-.417a2.729,2.729,0,0,0-2.988-.584l-.017.007a2.728,2.728,0,0,0-1.7,2.525v.59a1.173,1.173,0,0,1-1.172,1.172H14.414a1.173,1.173,0,0,1-1.172-1.172v-.59a2.728,2.728,0,0,0-1.7-2.525l-.016-.007a2.767,2.767,0,0,0-1.063-.213,2.716,2.716,0,0,0-1.925.8l-.417.417a1.172,1.172,0,0,1-1.657,0l-.829-.829a1.172,1.172,0,0,1,0-1.657l.417-.417a2.729,2.729,0,0,0,.585-2.986l-.008-.018a2.728,2.728,0,0,0-2.525-1.7h-.59a1.173,1.173,0,0,1-1.172-1.172V14.414a1.173,1.173,0,0,1,1.172-1.172h.59a2.729,2.729,0,0,0,2.526-1.7l.005-.013A2.729,2.729,0,0,0,6.054,8.54l-.417-.417a1.173,1.173,0,0,1,0-1.657l.829-.829a1.172,1.172,0,0,1,1.657,0l.417.417a2.729,2.729,0,0,0,2.988.584l.017-.007a2.728,2.728,0,0,0,1.7-2.525v-.59a1.173,1.173,0,0,1,1.172-1.172h1.172a1.173,1.173,0,0,1,1.172,1.172v.59a2.728,2.728,0,0,0,1.7,2.525l.016.007a2.729,2.729,0,0,0,2.987-.584l.417-.417a1.172,1.172,0,0,1,1.657,0l.829.829a1.173,1.173,0,0,1,0,1.657l-.417.417a2.727,2.727,0,0,0-.586,2.983l.009.021a2.728,2.728,0,0,0,2.525,1.7h.59a1.173,1.173,0,0,1,1.172,1.172Z"/></svg>
										</span>
										<span class="button-text">
											Site Preferences<br />
											<span>Shopping list view</span>
										</span>
									</button>

									<div class="mobile-show mt-3" id="mobile-site-preferences-box">

									</div>
								</div>



<!-- Password block -->
<div class="account-block__details" id="change-password-box">
	<h3 class="account-block__heading desktop-show">Update Your Password</h3>
	<div class="account-block__form">
		
		<form id="set_pswd_form" name="set_pswd_form" action="<?php echo SITEROOT; ?>account-settings.html" method="POST">
		
		<div class="row align-items-end mobile-change-password-row">
			<div class="col">
				<div class="form-group">
					<label for="current_password">Current Password:</label>
					<input type="password" class="form-control readonly-pass" id="current_password" name="current_password" placeholder="Password" readonly value="********">
				</div>
			</div>
			<div class="col">
				<div class="form-group input-riqueired-group">
					<label for="new_password"></label>
					<input type="password" class="form-control input-riqueired" id="new_password" name="new_password" placeholder="New Password">
					<span class="span-riqueried">*</span>
				</div>
			</div>
			<div class="col">
				<div class="form-group input-riqueired-group">
					<label for="confirm-new_password"></label>
					<input type="password" class="form-control input-riqueired" id="confirm-new_password" placeholder="Confirm New Password">
					<span class="span-riqueried">*</span>
				</div>
			</div>
			<div class="col">
				<button type="submit" class="btn btn-primary mobile-save-account-password">save changes</button>
			</div>
		</div>
		
		</form>
		
	</div>
</div>

								<!-- Shipping info block -->
								<div class="account-block__details" id="shipping-info-box">
									<h3 class="account-block__heading desktop-show">Change Shipping Addresses</h3>

									<div id="accordion-shipping" class="account-block__collapse account-settings">	
										<div class="card mb-2">
											<button class="account-mobile-more-info-btn js-show-mobile-action-btn">
											</button>

											<div class="account-mobile-more-info-wrapper js-show-mobile-action-buttons">
												<div class="account-mobile-more-info-wrapper__mobile-more-info">
													<button class="account-mobile-more-info-btn-edit js-modal-type" data-address-type="Edit" data-toggle="modal" data-target="#newShippingAddress">Edit address</button>
													<button class="account-mobile-more-info-btn-delete">Delete</button>
												</div>
											</div>

											<div class="card-header" id="headingShippingOne">
												<div class="account-block__collapse--header collapsed" data-toggle="collapse" data-target="#collapseShippingOne" aria-expanded="true" aria-controls="collapseShippingOne">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12 pt-3">
																<p class="account-block__collapse--heading">Daniel Dimitrov, +359 83404243</p>
																<p class="account-block__collapse--text">239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309</p>

																<button class="account-block__details--edit-button">
																	<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.edit-a{fill:#384765;}.edit-b{fill:#fff;}</style></defs><g transform="translate(-5 -5.501)"><path class="edit-a" d="M18.594,0H2.406A2.408,2.408,0,0,0,0,2.406V18.594A2.408,2.408,0,0,0,2.406,21H18.594A2.408,2.408,0,0,0,21,18.594V2.406A2.408,2.408,0,0,0,18.594,0Zm0,0" transform="translate(5 5.501)"/><g transform="translate(-0.232 2)"><path class="edit-b" d="M182.366,73.425a.33.33,0,0,0-.089.166l-.461,2.308a.326.326,0,0,0,.32.39.31.31,0,0,0,.064-.006l2.307-.461a.325.325,0,0,0,.167-.089l5.163-5.163-2.307-2.307Zm0,0" transform="translate(-171.576 -57.688)"/><path class="edit-b" d="M394.656.978a1.633,1.633,0,0,0-2.307,0l-.9.9,2.307,2.307.9-.9a1.631,1.631,0,0,0,0-2.307Zm0,0" transform="translate(-374.801 8)"/></g></g></svg>
																</button>	
															</div>
														</div>
													</div>
												</div>
											</div>
									
											<div id="collapseShippingOne" class="collapse show" aria-labelledby="headingShippingOne" data-parent="#accordion-shipping">
												
												<div class="card-body">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12">
																<div class="account-block__form">
																	<form>
																		<div class="row align-items-end">
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="names" class="label-riquired">First name & Last name</label>
																					<input type="text" class="form-control mt-2" name="names" placeholder="First name & Last name" value="Daniel Dimitrov">
																				</div>
																			</div>
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="country" class="label-riquired">Country</label>
																					<input type="text" class="form-control mt-2" name="country" placeholder="Country" value="USA">
																				</div>
																			</div>
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="state" class="label-riquired">State/province</label>
																					<input type="text" class="form-control mt-2" name="state" placeholder="State/province" value="Alabama">
																				</div>
																			</div>
																				<div class="col-6 mb-3">
																				<div class="form-group">
																					<label for="email" class="label-riquired">E-mail</label>
																					<input type="email" class="form-control mt-2" name="email" placeholder="E-mail" value="email@email.email">
																				</div>
																			</div>
																			<div class="col-6 mb-3">
																				<div class="form-group">
																					<label for="phone" class="label-riquired">Phone</label>
																					<input type="tel" class="form-control mt-2" name="phone" placeholder="Phone" value="0123 45 67 89">
																				</div>
																			</div>
																			<div class="col-9 mb-3">
																				<div class="form-group input-riqueired-group">
																					<label for="address">Shipping address</label>
																					<input type="text" class="form-control input-riqueired mt-2" name="address" placeholder="Shipping address" value="239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309">
																					<span class="span-riqueried">*</span>
																				</div>
																			</div>
																			<div class="col-3 mb-3">
																				<div class="form-check">
																					<input class="custom-checkbox" id="checkbox-1" type="checkbox" value="value1">
																					<label for="checkbox-1">Set as default</label>
																				</div>
																			</div>
																			<div class="col-auto mb-3">
																				<button type="submit" class="btn btn-primary">save changes</button>
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
													<button class="account-mobile-more-info-btn-edit js-modal-type" data-address-type="Edit" data-toggle="modal" data-target="#newShippingAddress">Edit address</button>
													<button class="account-mobile-more-info-btn-delete">Delete</button>
												</div>
											</div>

											<div class="card-header" id="headingShippingTwo">
												<div class="account-block__collapse--header collapsed" data-toggle="collapse" data-target="#collapseShippingTwo" aria-expanded="false" aria-controls="collapseShippingTwo">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12 pt-3">
																<p class="account-block__collapse--heading">Daniel Dimitrov, +359 83404243</p>
																<p class="account-block__collapse--text">239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309</p>

																<button class="account-block__details--edit-button">
																	<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.edit-a{fill:#384765;}.edit-b{fill:#fff;}</style></defs><g transform="translate(-5 -5.501)"><path class="edit-a" d="M18.594,0H2.406A2.408,2.408,0,0,0,0,2.406V18.594A2.408,2.408,0,0,0,2.406,21H18.594A2.408,2.408,0,0,0,21,18.594V2.406A2.408,2.408,0,0,0,18.594,0Zm0,0" transform="translate(5 5.501)"/><g transform="translate(-0.232 2)"><path class="edit-b" d="M182.366,73.425a.33.33,0,0,0-.089.166l-.461,2.308a.326.326,0,0,0,.32.39.31.31,0,0,0,.064-.006l2.307-.461a.325.325,0,0,0,.167-.089l5.163-5.163-2.307-2.307Zm0,0" transform="translate(-171.576 -57.688)"/><path class="edit-b" d="M394.656.978a1.633,1.633,0,0,0-2.307,0l-.9.9,2.307,2.307.9-.9a1.631,1.631,0,0,0,0-2.307Zm0,0" transform="translate(-374.801 8)"/></g></g></svg>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="collapseShippingTwo" class="collapse" aria-labelledby="headingShippingTwo" data-parent="#accordion-shipping">
												<div class="card-body">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12">
																<div class="account-block__form">
																	<form>
																		<div class="row align-items-end">
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="names" class="label-riquired">First name & Last name</label>
																					<input type="text" class="form-control mt-2" name="names" placeholder="First name & Last name" value="Daniel Dimitrov">
																				</div>
																			</div>
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="country" class="label-riquired">Country</label>
																					<input type="text" class="form-control mt-2" name="country" placeholder="Country" value="USA">
																				</div>
																			</div>
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="state" class="label-riquired">State/province</label>
																					<input type="text" class="form-control mt-2" name="state" placeholder="State/province" value="Alabama">
																				</div>
																			</div>
																				<div class="col-6 mb-3">
																				<div class="form-group">
																					<label for="email" class="label-riquired">E-mail</label>
																					<input type="email" class="form-control mt-2" name="email" placeholder="E-mail" value="email@email.email">
																				</div>
																			</div>
																			<div class="col-6 mb-3">
																				<div class="form-group">
																					<label for="phone" class="label-riquired">Phone</label>
																					<input type="tel" class="form-control mt-2" name="phone" placeholder="Phone" value="0123 45 67 89">
																				</div>
																			</div>
																			<div class="col-9 mb-3">
																				<div class="form-group input-riqueired-group">
																					<label for="address">Shipping address</label>
																					<input type="text" class="form-control input-riqueired mt-2" name="address" placeholder="Shipping address" value="239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309">
																					<span class="span-riqueried">*</span>
																				</div>
																			</div>
																			<div class="col-3 mb-3">
																				<div class="form-check">
																					<input class="custom-checkbox" id="checkbox-2" type="checkbox" value="value2">
																					<label for="checkbox-2">Set as default</label>
																				</div>
																			</div>
																			<div class="col-auto mb-3">
																				<button type="submit" class="btn btn-primary">save changes</button>
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
													<button class="account-mobile-more-info-btn-edit js-modal-type" data-address-type="Edit" data-toggle="modal" data-target="#newShippingAddress">Edit address</button>
													<button class="account-mobile-more-info-btn-delete">Delete</button>
												</div>
											</div>

											<div class="card-header" id="headingShippingThree">
												<div class="account-block__collapse--header collapsed" data-toggle="collapse" data-target="#collapseShippingThree" aria-expanded="false" aria-controls="collapseShippingThree">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12 pt-3">
																<p class="account-block__collapse--heading">Daniel Dimitrov, +359 83404243</p>
																<p class="account-block__collapse--text">239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309</p>

																<button class="account-block__details--edit-button">
																	<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.edit-a{fill:#384765;}.edit-b{fill:#fff;}</style></defs><g transform="translate(-5 -5.501)"><path class="edit-a" d="M18.594,0H2.406A2.408,2.408,0,0,0,0,2.406V18.594A2.408,2.408,0,0,0,2.406,21H18.594A2.408,2.408,0,0,0,21,18.594V2.406A2.408,2.408,0,0,0,18.594,0Zm0,0" transform="translate(5 5.501)"/><g transform="translate(-0.232 2)"><path class="edit-b" d="M182.366,73.425a.33.33,0,0,0-.089.166l-.461,2.308a.326.326,0,0,0,.32.39.31.31,0,0,0,.064-.006l2.307-.461a.325.325,0,0,0,.167-.089l5.163-5.163-2.307-2.307Zm0,0" transform="translate(-171.576 -57.688)"/><path class="edit-b" d="M394.656.978a1.633,1.633,0,0,0-2.307,0l-.9.9,2.307,2.307.9-.9a1.631,1.631,0,0,0,0-2.307Zm0,0" transform="translate(-374.801 8)"/></g></g></svg>
																</button>

															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="collapseShippingThree" class="collapse" aria-labelledby="headingShippingThree" data-parent="#accordion-shipping">
												<div class="card-body">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12">
																<div class="account-block__form">
																	<form>
																		<div class="row align-items-end">
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="names" class="label-riquired">First name & Last name</label>
																					<input type="text" class="form-control mt-2" name="names" placeholder="First name & Last name" value="Daniel Dimitrov">
																				</div>
																			</div>
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="country" class="label-riquired">Country</label>
																					<input type="text" class="form-control mt-2" name="country" placeholder="Country" value="USA">
																				</div>
																			</div>
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="state" class="label-riquired">State/province</label>
																					<input type="text" class="form-control mt-2" name="state" placeholder="State/province" value="Alabama">
																				</div>
																			</div>
																				<div class="col-6 mb-3">
																				<div class="form-group">
																					<label for="email" class="label-riquired">E-mail</label>
																					<input type="email" class="form-control mt-2" name="email" placeholder="E-mail" value="email@email.email">
																				</div>
																			</div>
																			<div class="col-6 mb-3">
																				<div class="form-group">
																					<label for="phone" class="label-riquired">Phone</label>
																					<input type="tel" class="form-control mt-2" name="phone" placeholder="Phone" value="0123 45 67 89">
																				</div>
																			</div>
																			<div class="col-9 mb-3">
																				<div class="form-group input-riqueired-group">
																					<label for="address">Shipping address</label>
																					<input type="text" class="form-control input-riqueired mt-2" name="address" placeholder="Shipping address" value="239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309">
																					<span class="span-riqueried">*</span>
																				</div>
																			</div>
																			<div class="col-3 mb-3">
																				<div class="form-check">
																					<input class="custom-checkbox" id="checkbox-3" type="checkbox" value="value3">
																					<label for="checkbox-3">Set as default</label>
																				</div>
																			</div>
																			<div class="col-auto mb-3">
																				<button type="submit" class="btn btn-primary">save changes</button>
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

									<button type="submit" class="btn btn-primary add-new-address js-modal-type" data-address-type="Add new" data-toggle="modal" data-target="#newShippingAddress">
										<svg id="add" xmlns="http://www.w3.org/2000/svg" width="28.6" height="28.6" viewBox="0 0 28.6 28.6">
											<g id="Group_376" data-name="Group 376">
												<path fill="#384765" id="Path_195" data-name="Path 195" d="M14.3,0A14.3,14.3,0,1,0,28.6,14.3,14.316,14.316,0,0,0,14.3,0Zm8.342,14.9a.6.6,0,0,1-.6.6H15.491v6.554a.6.6,0,0,1-.6.6H13.7a.6.6,0,0,1-.6-.6V15.491H6.554a.6.6,0,0,1-.6-.6V13.7a.6.6,0,0,1,.6-.6h6.554V6.554a.6.6,0,0,1,.6-.6H14.9a.6.6,0,0,1,.6.6v6.554h6.554a.6.6,0,0,1,.6.6Z"/>
											</g>
										</svg>
										<span>add new address</span>
									</button>
								</div>

								<!-- Billing info block -->
								<!-- <div class="account-block__details" id="billing-info-box">
									<h3 class="account-block__heading desktop-show">Change Billing Addresses</h3>

									<div id="accordion" class="account-block__collapse account-settings">	
										<div class="card mb-2">
											<button class="account-mobile-more-info-btn js-show-mobile-action-btn">
											</button>

											<div class="account-mobile-more-info-wrapper js-show-mobile-action-buttons">
												<div class="account-mobile-more-info-wrapper__mobile-more-info">
													<button class="account-mobile-more-info-btn-edit js-modal-type" data-address-type="Edit" data-toggle="modal" data-target="#newBillingAddress">Edit address</button>
													<button class="account-mobile-more-info-btn-delete">Delete</button>
												</div>
											</div>

											<div class="card-header" id="headingOne">
												<div class="account-block__collapse--header collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12 pt-3">
																<p class="account-block__collapse--heading">Daniel Dimitrov, +359 83404243</p>
																<p class="account-block__collapse--text">239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309</p>

																<button class="account-block__details--edit-button">
																	<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.edit-a{fill:#384765;}.edit-b{fill:#fff;}</style></defs><g transform="translate(-5 -5.501)"><path class="edit-a" d="M18.594,0H2.406A2.408,2.408,0,0,0,0,2.406V18.594A2.408,2.408,0,0,0,2.406,21H18.594A2.408,2.408,0,0,0,21,18.594V2.406A2.408,2.408,0,0,0,18.594,0Zm0,0" transform="translate(5 5.501)"/><g transform="translate(-0.232 2)"><path class="edit-b" d="M182.366,73.425a.33.33,0,0,0-.089.166l-.461,2.308a.326.326,0,0,0,.32.39.31.31,0,0,0,.064-.006l2.307-.461a.325.325,0,0,0,.167-.089l5.163-5.163-2.307-2.307Zm0,0" transform="translate(-171.576 -57.688)"/><path class="edit-b" d="M394.656.978a1.633,1.633,0,0,0-2.307,0l-.9.9,2.307,2.307.9-.9a1.631,1.631,0,0,0,0-2.307Zm0,0" transform="translate(-374.801 8)"/></g></g></svg>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
									
											<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
												
												<div class="card-body">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12">
																<div class="account-block__form">
																	<form>
																		<div class="row align-items-end">
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="names" class="label-riquired">First name & Last name</label>
																					<input type="text" class="form-control mt-2" name="names" placeholder="First name & Last name" value="Daniel Dimitrov">
																				</div>
																			</div>
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="country" class="label-riquired">Country</label>
																					<input type="text" class="form-control mt-2" name="country" placeholder="Country" value="USA">
																				</div>
																			</div>
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="state" class="label-riquired">State/province</label>
																					<input type="text" class="form-control mt-2" name="state" placeholder="State/province" value="Alabama">
																				</div>
																			</div>
																				<div class="col-6 mb-3">
																				<div class="form-group">
																					<label for="email" class="label-riquired">E-mail</label>
																					<input type="email" class="form-control mt-2" name="email" placeholder="E-mail" value="email@email.email">
																				</div>
																			</div>
																			<div class="col-6 mb-3">
																				<div class="form-group">
																					<label for="phone" class="label-riquired">Phone</label>
																					<input type="tel" class="form-control mt-2" name="phone" placeholder="Phone" value="0123 45 67 89">
																				</div>
																			</div>
																			<div class="col-9 mb-3">
																				<div class="form-group input-riqueired-group">
																					<label for="address">Billing address</label>
																					<input type="text" class="form-control input-riqueired mt-2" name="address" placeholder="Billing address" value="239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309">
																					<span class="span-riqueried">*</span>
																				</div>
																			</div>
																			<div class="col-3 mb-3">
																				<div class="form-check">
																					<input class="custom-checkbox" id="checkbox-4" type="checkbox" value="value4">
																					<label for="checkbox-4">Set as default</label>
																				</div>
																			</div>
																			<div class="col-auto mb-3">
																				<button type="submit" class="btn btn-primary">save changes</button>
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
													<button class="account-mobile-more-info-btn-edit js-modal-type" data-address-type="Edit" data-toggle="modal" data-target="#newBillingAddress">Edit address</button>
													<button class="account-mobile-more-info-btn-delete">Delete</button>
												</div>
											</div>

											<div class="card-header" id="headingTwo">
												<div class="account-block__collapse--header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12 pt-3">
																<p class="account-block__collapse--heading">Daniel Dimitrov, +359 83404243</p>
																<p class="account-block__collapse--text">239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309</p>

																<button class="account-block__details--edit-button">
																	<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.edit-a{fill:#384765;}.edit-b{fill:#fff;}</style></defs><g transform="translate(-5 -5.501)"><path class="edit-a" d="M18.594,0H2.406A2.408,2.408,0,0,0,0,2.406V18.594A2.408,2.408,0,0,0,2.406,21H18.594A2.408,2.408,0,0,0,21,18.594V2.406A2.408,2.408,0,0,0,18.594,0Zm0,0" transform="translate(5 5.501)"/><g transform="translate(-0.232 2)"><path class="edit-b" d="M182.366,73.425a.33.33,0,0,0-.089.166l-.461,2.308a.326.326,0,0,0,.32.39.31.31,0,0,0,.064-.006l2.307-.461a.325.325,0,0,0,.167-.089l5.163-5.163-2.307-2.307Zm0,0" transform="translate(-171.576 -57.688)"/><path class="edit-b" d="M394.656.978a1.633,1.633,0,0,0-2.307,0l-.9.9,2.307,2.307.9-.9a1.631,1.631,0,0,0,0-2.307Zm0,0" transform="translate(-374.801 8)"/></g></g></svg>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
												<div class="card-body">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12">
																<div class="account-block__form">
																	<form>
																		<div class="row align-items-end">
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="names" class="label-riquired">First name & Last name</label>
																					<input type="text" class="form-control mt-2" name="names" placeholder="First name & Last name" value="Daniel Dimitrov">
																				</div>
																			</div>
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="country" class="label-riquired">Country</label>
																					<input type="text" class="form-control mt-2" name="country" placeholder="Country" value="USA">
																				</div>
																			</div>
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="state" class="label-riquired">State/province</label>
																					<input type="text" class="form-control mt-2" name="state" placeholder="State/province" value="Alabama">
																				</div>
																			</div>
																				<div class="col-6 mb-3">
																				<div class="form-group">
																					<label for="email" class="label-riquired">E-mail</label>
																					<input type="email" class="form-control mt-2" name="email" placeholder="E-mail" value="email@email.email">
																				</div>
																			</div>
																			<div class="col-6 mb-3">
																				<div class="form-group">
																					<label for="phone" class="label-riquired">Phone</label>
																					<input type="tel" class="form-control mt-2" name="phone" placeholder="Phone" value="0123 45 67 89">
																				</div>
																			</div>
																			<div class="col-9 mb-3">
																				<div class="form-group input-riqueired-group">
																					<label for="address">Billing address</label>
																					<input type="text" class="form-control input-riqueired mt-2" name="address" placeholder="Billing address" value="239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309">
																					<span class="span-riqueried">*</span>
																				</div>
																			</div>
																			<div class="col-3 mb-3">
																				<div class="form-check">
																					<input class="custom-checkbox" id="checkbox-5" type="checkbox" value="value5">
																					<label for="checkbox-5">Set as default</label>
																				</div>
																			</div>
																			<div class="col-auto mb-3">
																				<button type="submit" class="btn btn-primary">save changes</button>
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
													<button class="account-mobile-more-info-btn-edit js-modal-type" data-address-type="Edit" data-toggle="modal" data-target="#newBillingAddress">Edit address</button>
													<button class="account-mobile-more-info-btn-delete">Delete</button>
												</div>
											</div>

											<div class="card-header" id="headingThree">
												<div class="account-block__collapse--header collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12 pt-3">
																<p class="account-block__collapse--heading">Daniel Dimitrov, +359 83404243</p>
																<p class="account-block__collapse--text">239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309</p>

																<button class="account-block__details--edit-button">
																	<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><defs><style>.edit-a{fill:#384765;}.edit-b{fill:#fff;}</style></defs><g transform="translate(-5 -5.501)"><path class="edit-a" d="M18.594,0H2.406A2.408,2.408,0,0,0,0,2.406V18.594A2.408,2.408,0,0,0,2.406,21H18.594A2.408,2.408,0,0,0,21,18.594V2.406A2.408,2.408,0,0,0,18.594,0Zm0,0" transform="translate(5 5.501)"/><g transform="translate(-0.232 2)"><path class="edit-b" d="M182.366,73.425a.33.33,0,0,0-.089.166l-.461,2.308a.326.326,0,0,0,.32.39.31.31,0,0,0,.064-.006l2.307-.461a.325.325,0,0,0,.167-.089l5.163-5.163-2.307-2.307Zm0,0" transform="translate(-171.576 -57.688)"/><path class="edit-b" d="M394.656.978a1.633,1.633,0,0,0-2.307,0l-.9.9,2.307,2.307.9-.9a1.631,1.631,0,0,0,0-2.307Zm0,0" transform="translate(-374.801 8)"/></g></g></svg>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
												<div class="card-body">
													<div class="container-fluid">
														<div class="row">
															<div class="col-12">
																<div class="account-block__form">
																	<form>
																		<div class="row align-items-end">
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="names" class="label-riquired">First name & Last name</label>
																					<input type="text" class="form-control mt-2" name="names" placeholder="First name & Last name" value="Daniel Dimitrov">
																				</div>
																			</div>
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="country" class="label-riquired">Country</label>
																					<input type="text" class="form-control mt-2" name="country" placeholder="Country" value="USA">
																				</div>
																			</div>
																			<div class="col-4 mb-3">
																				<div class="form-group">
																					<label for="state" class="label-riquired">State/province</label>
																					<input type="text" class="form-control mt-2" name="state" placeholder="State/province" value="Alabama">
																				</div>
																			</div>
																				<div class="col-6 mb-3">
																				<div class="form-group">
																					<label for="email" class="label-riquired">E-mail</label>
																					<input type="email" class="form-control mt-2" name="email" placeholder="E-mail" value="email@email.email">
																				</div>
																			</div>
																			<div class="col-6 mb-3">
																				<div class="form-group">
																					<label for="phone" class="label-riquired">Phone</label>
																					<input type="tel" class="form-control mt-2" name="phone" placeholder="Phone" value="0123 45 67 89">
																				</div>
																			</div>
																			<div class="col-9 mb-3">
																				<div class="form-group input-riqueired-group">
																					<label for="address">Billing address</label>
																					<input type="text" class="form-control input-riqueired mt-2" name="address" placeholder="Billing address" value="239 Blvd.Alexander Stamboliiski Sofia, Razsadnika, Bulgaria, 1309">
																					<span class="span-riqueried">*</span>
																				</div>
																			</div>
																			<div class="col-3 mb-3">
																				<div class="form-check">
																					<input class="custom-checkbox" id="checkbox-6" type="checkbox" value="value6">
																					<label for="checkbox-6">Set as default</label>
																				</div>
																			</div>
																			<div class="col-auto mb-3">
																				<button type="submit" class="btn btn-primary">save changes</button>
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

									<button type="button" class="btn btn-primary add-new-address js-modal-type" data-address-type="Add new" data-toggle="modal" data-target="#newBillingAddress">
										<svg id="add" xmlns="http://www.w3.org/2000/svg" width="28.6" height="28.6" viewBox="0 0 28.6 28.6">
											<g id="Group_376" data-name="Group 376">
												<path fill="#384765" id="Path_195" data-name="Path 195" d="M14.3,0A14.3,14.3,0,1,0,28.6,14.3,14.316,14.316,0,0,0,14.3,0Zm8.342,14.9a.6.6,0,0,1-.6.6H15.491v6.554a.6.6,0,0,1-.6.6H13.7a.6.6,0,0,1-.6-.6V15.491H6.554a.6.6,0,0,1-.6-.6V13.7a.6.6,0,0,1,.6-.6h6.554V6.554a.6.6,0,0,1,.6-.6H14.9a.6.6,0,0,1,.6.6v6.554h6.554a.6.6,0,0,1,.6.6Z"/>
											</g>
										</svg>
										<span>add new address</span>
									</button>
								</div> -->

								<!-- Site preferences block -->
								<div class="account-block__details" id="site-preferences-box">
										
									<div class="account-block__form">
										<form>
											<div class="row align-items-start">
												<div class="col-12 col-lg-9">
													<h3 class="account-block__heading desktop-show">Update Your Preferences</h3>

													<div class="form-group">
														<div class="home-consult-form__radio-block">
															<span class="thumb-menu-wrap">
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
															</span>

															<label class="home-consult-form__radio">
																<input type="radio" name="r" value="1">
																<span>Grid view</span>
															</label>

															<span class="hamburger-menu-wrap">
																<svg id="hamburger-menu-gray" data-name="hamburger-menu-gray" xmlns="http://www.w3.org/2000/svg" width="17.941" height="18.146" viewBox="0 0 17.941 18.146">
																	<path id="Path_186" data-name="Path 186" d="M17.194,124.608H.748a1,1,0,0,1,0-1.94H17.194a1,1,0,0,1,0,1.94Zm0,0" transform="translate(0 -114.565)" fill="#949dae"/>
																	<path id="Path_187" data-name="Path 187" d="M17.194,1.94H.748A.881.881,0,0,1,0,.97.881.881,0,0,1,.748,0H17.194a.881.881,0,0,1,.748.97A.881.881,0,0,1,17.194,1.94Zm0,0" fill="#949dae"/>
																	<path id="Path_188" data-name="Path 188" d="M17.194,247.272H.748a1,1,0,0,1,0-1.94H17.194a1,1,0,0,1,0,1.94Zm0,0" transform="translate(0 -229.126)" fill="#949dae"/>
																</svg>
															</span>

															<label class="home-consult-form__radio">
																<input type="radio" name="r" value="2">
																<span>List view</span>
															</label>
														</div>
													</div>
												</div>
												<div class="col-lg-3 text-right">
													<div class="desktop-show">
														<button type="submit" class="btn btn-primary">save changes</button>
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
	<a href="#" class="scrollToTop js-to-top">
	<img src="<?php echo SITEROOT; ?>images/arrows.svg" alt="">
	</a>
</div>


<?php
require_once($real_root.'/includes/footer.php');
?>



		<!-- Modal New Shipping address-->
		<div class="modal mobile-account-full-screan-modal fade" id="newShippingAddress" tabindex="-1" role="dialog" aria-labelledby="newShippingAddressTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="newShippingAddressTitle"><span></span> shipping address</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="account-block__form">
							<form>
								<div class="row align-items-end">
									<div class="col-12 col-lg-4 mb-3">
										<div class="form-group">
											<label for="names" class="label-riquired">First name & Last name</label>
											<input type="text" class="form-control mt-2" name="names" placeholder="First name & Last name">
										</div>
									</div>
									<div class="col-12 col-lg-4 mb-3">
										<div class="form-group">
											<label for="country" class="label-riquired">Country</label>
											<input type="text" class="form-control mt-2" name="country" placeholder="Country">
										</div>
									</div>
									<div class="col-12 col-lg-4 mb-3">
										<div class="form-group">
											<label for="state" class="label-riquired">State/province</label>
											<input type="text" class="form-control mt-2" name="state" placeholder="State/province">
										</div>
									</div>
									<div class="col-12 col-lg-6 mb-3">
										<div class="form-group">
											<label for="email" class="label-riquired">E-mail</label>
											<input type="email" class="form-control mt-2" name="email" placeholder="E-mail">
										</div>
									</div>
									<div class="col-12 col-lg-6 mb-3">
										<div class="form-group">
											<label for="phone" class="label-riquired">Phone</label>
											<input type="tel" class="form-control mt-2" name="phone" placeholder="Phone">
										</div>
									</div>
									<div class="col-12 col-lg-9 mb-3">
										<div class="form-group input-riqueired-group">
											<label for="address">Shipping address</label>
											<input type="text" class="form-control input-riqueired mt-2" name="address" placeholder="Shipping address">
											<span class="span-riqueried">*</span>
										</div>
									</div>
									<div class="col-12 col-lg-3 mb-3">
										<div class="form-check custom-form-check">
											<input class="custom-checkbox" id="checkbox-7" type="checkbox" value="value7">
											<label for="checkbox-7">Set as default</label>
										</div>
									</div>
									<div class="col-12 text-center mb-3">
										<button type="submit" class="btn btn-primary">save changes</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal  New billing address-->
		<div class="modal mobile-account-full-screan-modal fade" id="newBillingAddress" tabindex="-1" role="dialog" aria-labelledby="newBillingAddressTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="newBillingAddressTitle"><span></span> billing address</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="account-block__form">
							<form>
								<div class="row align-items-end">
									<div class="col-12 col-lg-4 mb-3">
										<div class="form-group">
											<label for="names" class="label-riquired">First name & Last name</label>
											<input type="text" class="form-control mt-2" name="names" placeholder="First name & Last name">
										</div>
									</div>
									<div class="col-12 col-lg-4 mb-3">
										<div class="form-group">
											<label for="country" class="label-riquired">Country</label>
											<input type="text" class="form-control mt-2" name="country" placeholder="Country">
										</div>
									</div>
									<div class="col-12 col-lg-4 mb-3">
										<div class="form-group">
											<label for="state" class="label-riquired">State/province</label>
											<input type="text" class="form-control mt-2" name="state" placeholder="State/province">
										</div>
									</div>
									<div class="col-12 col-lg-6 mb-3">
										<div class="form-group">
											<label for="email" class="label-riquired">E-mail</label>
											<input type="email" class="form-control mt-2" name="email" placeholder="E-mail">
										</div>
									</div>
									<div class="col-12 col-lg-6 mb-3">
										<div class="form-group">
											<label for="phone" class="label-riquired">Phone</label>
											<input type="tel" class="form-control mt-2" name="phone" placeholder="Phone">
										</div>
									</div>
									<div class="col-12 col-lg-9 mb-3">
										<div class="form-group input-riqueired-group">
											<label for="address">Shipping address</label>
											<input type="text" class="form-control input-riqueired mt-2" name="address" placeholder="Shipping address">
											<span class="span-riqueried">*</span>
										</div>
									</div>
							
							<div class="col-12 col-lg-3 mb-3">
								<div class="form-check custom-form-check">
									<input class="custom-checkbox" id="checkbox-8" type="checkbox" value="value8">
									<label for="checkbox-8">Set as default</label>
								</div>
							</div>
							<div class="col-12 text-center mb-3">
								<button type="submit" class="btn btn-primary">save changes</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require_once($real_root.'/includes/footer.php');
?>

<script src="<?php echo SITEROOT; ?>app.js"></script>
</body>
</html>