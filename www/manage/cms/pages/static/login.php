<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<title>ClosetsToGo</title>
	<meta name="description" content="login"><link href="./app.css" rel="stylesheet"></head>
	<body class="login-page">
		<header class="login-page__header">
			<div class="second-header">
				<div class="wrapper">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 col-lg-11 second-header__logo-nav">
								<div class="second-header__logo-nav--logo">
									<a href="">
										<img src="images/svgg.svg" alt=""/>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<main class="main">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="form-wrap">
							<div>
								<ul class="nav mb-4 nav__tabs-modal justify-content-center" role="tablist">
									<li class="nav-item">
										<button class="nav-link active hover__ltr"
												id="pills-register-tab"
												data-role="toggle-el"
												data-toggle="register"
												role="tab"
												aria-selected="true">
											register
										</button>
									</li>
									<li class="nav-item">
										<button class="nav-link hover__ltr"
												id="pills-signin-tab"
												data-role="toggle-el"
												data-toggle="sign-in"
												role="tab"
												aria-selected="false">
											sign in
										</button>
									</li>
								</ul>
							</div>
							<form>
								<fieldset class="register" data-role="toggle-el-target" id="register">
									<div class="form-group form-group__default">
										<div class="form-control form-group__default__form-control home-consult-form__input">
											<input class="input" required type="text" placeholder="Name">
										</div>
										<div class="form-control form-group__default__form-control home-consult-form__input">
											<input class="input" required type="email" placeholder="Email Address">
										</div>
										<div class="form-control form-group__default__form-control home-consult-form__input">
											<input class="input" required type="password" placeholder="Password">
										</div>
										<div class="form-control form-group__default__form-control home-consult-form__input ">
											<input class="input" required type="password"
												   placeholder="Confirm password">
										</div>

										<p class="form-group__default__label ml-3">Subscribe to our newsletter?</p>
										<div class="home-consult-form__radio-block">
											<label class="home-consult-form__radio">
												<input type="radio" name="r" value="1">
												<span class="form-group__default__label">Yes</span>
											</label>
											<label class="home-consult-form__radio">
												<input type="radio" name="r" value="2">
												<span class="form-group__default__label">No</span>
											</label>
										</div>
									</div>
									<button type="submit" class="btn btn-secondary btn-full btn-sign">Register</button>
								</fieldset>
								<fieldset class="sign-in cd-none" data-role="toggle-el-target" id="sign-in">
									<div class="form-group form-group__default">
										<div class="form-control form-group__default__form-control home-consult-form__input">
											<input class="input" required type="email" placeholder="Email Address">
										</div>
										<div class="form-control form-group__default__form-control home-consult-form__input">
											<input class="input" required type="password" placeholder="Password">
										</div>

										<p class="text-center">
											<a href="#" class="form-group__default__label hover__ltr">Forgot Password?</a>
										</p>
									</div>
									<button type="submit" class="btn btn-secondary btn-full btn-sign">Sign in</button>
								</fieldset>
							</form>
							<div class="quick-access">
								<div class="quick-access__title">
									Quick access with
								</div>
								<div class="quick-access__icons-wrap">
									<div class="quick-access__icon">
										<a class="d-block" href="">
											<img src="images/google-logo.svg" class="img-fluid" alt="">
										</a>
									</div>
									<div class="quick-access__icon">
										<a class="d-block" href="">
											<img src="images/facebook.svg" class="img-fluid" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	<script src="./app.js"></script></body>
</html>
