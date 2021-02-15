
<!--
billing_name_first
billing_name_last
billing_address_one
billing_address_two
billing_city
billing_state
billing_zip
billing_country                     
billing_email
billing_phone
CARDNUM
EXPMONTH
EXPYEAR
CVV2
-->
<main class="main clearfix main__payment-page main__checkout-page">
	<section class="section-checkout">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row flex-lg-nowrap">
					<div class="col col-auto__custom">
						<div class="card card-checkout card-checkout__info">
							<div class="card-body">
								<!--SHOW THIS ON DESKTOP SCREEN-->
								<div class="card-body__steps card-el__hide-on-md">
									Step 1 of 3
								</div>
								<!-- #SHOW THIS ON DESKTOP SCREEN-->

								<!--SHOW THIS ON MOBILE SCREEN-->
								<div class="card-el__show-on-md mb-3">
									<h5 class="card-checkout__header card-checkout__header__on-md ">
										<span class="card-body__steps card-el__show-on-md">
											Step 1 of 3
										</span>
										<span>Shipping Information</span>
									</h5>

								</div>
								<!-- #SHOW THIS ON MOBILE SCREEN-->
								<div class="row flex-column-reverse flex-lg-row">
									<div class="col-lg-7">
										<!-- SHOW THIS ON DESKTOP SCREEN-->
										<h5 class="card-checkout__header card-el__hide-on-md">
											<span>Shipping Information</span>
										</h5>
										<!-- #SHOW THIS ON DESKTOP SCREEN-->
										<div class="address-shipping mt-4">
											<div class="address-shipping__customer">
												<div class="form__chosen-address" data-role="toggle-el-target">
													<div class="form-group form-group__default">
														<div class="home-consult-form__radio-block">
															<label class="home-consult-form__radio">
																<input type="radio" name="r" value="1">
																<span class="form-group__default__label  address-shipping__info">
																<span class="name">Daniel Dimitrov</span>,<span
																				class="tel"> +359 83404243</span><br>
																<span class="d-block mt-2"></span>
																<span class="street">239 Blvd.Alexander Stamboliiski</span>
																<br>
																<span class="city">Sofia, Razsadnika, Bulgaria, 1309 </span>
																<span class="d-block mt-2 d-lg-inline mt-lg-0 is-default">Default</span>
																</span>
															</label>

															<!-- SHOW THIS ON DESKTOP SCREEN-->

															<div class="card-checkout__dropdown-wrap card-el__show-on-md">
																<div class="card-checkout__dropdown"
																			 data-toggle="dropdown" aria-haspopup="true"
																			 aria-expanded="false">
																			<img src="../../images/three-dots-vertical-icon_1.svg"
																				 alt="">
																</div>
																<div class="dropdown-menu dropdown-menu-right text-right">
																			<button class="dropdown-item text-left btn__add-address"
																					type="button" data-toggle="modal"
																					data-target="#modal__add-address">
																				Edit
																			</button>
																			<button class="dropdown-item text-left btn__add-address disabled"
																					type="button" data-toggle="modal"
																					data-target="#modal__add-address">
																				Default
																			</button>
																</div>
															</div>
																	<!-- #SHOW THIS ON DESKTOP SCREEN-->
														</div>
													</div>
													<div class="mt-2">
														<p class="cta cta__edit card-el__hide-on-md"
																   data-role="toggle-el">Edit</p>
														<p class="cta cta__add  card-el__hide-on-md"
																   data-role="toggle-el">+ Add new
																	address</p>
														<p class="cta cta__add  card-el__show-on-md"
																   type="button" data-toggle="modal"
																   data-target="#modal__add-address">+ Add new
																	address</p>
													</div>
												</div>
												<div class="form__add-new-address cd-none"
															 data-role="toggle-el-target">

<form action="">
<div class="home-consult-form__wrapper pb-2">
	<fieldset>
		<div class="form-row">
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__name_collapsed">First Name:</label>
<input id="customer-new__name_collapsed" type="text" name="name" placeholder="John" class="home-consult-form__input"/>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__name-last">Last Name:</label>
<input id="customer-new__name-last_collapsed" type="text" name="name" placeholder="Doe" class="home-consult-form__input"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__address_line-1">
					<span>Shipping Address Line One:</span>
					<span class="label-above__label">We cannot ship to a P.O. box</span>
					</label>
					<input id="customer-new__address_line-1_collapsed"	
					type="text" name="name"	
					placeholder=""	
					class="home-consult-form__input"/>
				</div>
				<div class="form-group">
					<label class="label-above"
					for="customer-new__address_line-2">
					<span>Shipping Address Line Two:</span>
					<span class="label-above__label">We cannot ship to a P.O. box</span>
					</label>
					<input id="customer-new__address_line-2_collapsed"
					type="text" name="name"
					placeholder=""
					class="home-consult-form__input"/>
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<div class="form-group">
				<label class="label-above" for="customer-new__city_collapsed">City:</label>
				<input id="customer-new__city_collapsed"
				type="text" name="email"
				placeholder=""
				class="home-consult-form__input"/>
				</div>
			</div>
			<div class="col">
				<div class="form-group">
					<label class="label-above" for="customer-new__state_collapsed">State:</label>
					<div class="home-consult-form__select ">
						<select name="states"
						id="customer-new__state_collapsed">
						<option value="State 1">
						State 1
						</option>
						<option value="State 2">
						State 2
						</option>
						<option value="State 3">
						State 3
						</option>
						</select>
					</div>
				</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label class="label-above" for="customer-new__zip_collapsed">Zip:</label>
				<input id="customer-new__zip_collapsed"
				type="number" name="zip"
				placeholder=""
				class="home-consult-form__input"/>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label class="label-above" for="customer-new__state_collapsed">Country:</label>
				<div class="home-consult-form__select ">
				<select name="country"
				id="customer-new__country_collapsed">
				<option value="country 1">
				Country 1
				</option>
				<option value="Country 2">
				Country 2
				</option>
				<option value="Country 3">
				Country 3
				</option>
				</select>
			</div>
		</div>
	</div>
</div>
<div class="form-row">
	<div class="col">
		<div class="form-group">
			<label class="label-above"
			for="customer-new__email_collapsed">Email
			Address:</label>
			<input id="customer-new__email_collapsed"
			type="email" name="email"
			placeholder=""
			class="home-consult-form__input"/>
		</div>
	</div>
	<div class="col">
		<div class="form-group">
			<label class="label-above" for="customer-new__phone">Phone Number:</label>
			<input id="customer-new__phone_collapsed"
			type="number"
			name="phone number"
			placeholder=""
			class="home-consult-form__input"/>
		</div>
	</div>
</div>
<div class="mb-3">
<input class="checkbox__ch-card__checkbox selectable" 
id="checkbox-product-1_collapsed"
type="checkbox" value="value2">
<label class="label-above full"
for="checkbox-product-1_collapsed">Set as default</label>
</div>
<div>
<button class="btn btn-secondary form__add-new-address__btn-form">
confirm
</button>
<div class="btn btn-light form__add-new-address__btn-form"
data-role="toggle-el">cancel
</div>
</div>
</fieldset>
</div>
</form>
</div>
</div>
<div class="address-edit">

</div>
</div>
</div>

<div class="col-lg-5">
	<h5 class="card-checkout__header">My addresses</h5>
	<div class="address-shipping form__add-new-address">
		<div class="address-shipping__customer">
			<div class="row">
				<div class="col">
					<div class="form-group">
						<p class="label-above">Choose one:</p>
						<div class="select-custom" data-select="select-option__customer-address">
							<div class="select-custom__box hover__rotate-angle">
								<div class="home-consult-form__select__selected ">
									<div data-select="select-option__customer-address" class="selected-option"></div>
									<div class="angle"></div>
								</div>
<ul class="select-custom__list" data-select="selected-list">
	<li>
		<div data-select="select-option__customer-address" class="select-option select-custom__option selected default">
			<div class="select-custom__option__wrap">
				<p class="select-custom__option__text">
				239 Blvd.Alexander
				Stamboliiski Sofia,
				Razsadnika,
				Bulgaria, 1309
				</p>
				<p data-check="set-default" class="select-custom__option__set-default set-default"> Default </p>
			</div>
		</div>
	</li>
	<li>
		<div data-select="select-option__customer-address" class="select-option select-custom__option">
			<div class="select-custom__option__wrap">
				<p class="select-custom__option__text">
				stra6na gupost to4ka tsom
				</p>
				<p data-check="set-default" class="select-custom__option__set-default set-default">Default</p>
			</div>
		</div>
	</li>
</ul>

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
</div>

<div class="card card-checkout card-checkout__info">
	<div class="card-body">
		<div class="card-body__steps card-el__hide-on-md">Step 2 of 3</div>
			<div class="row">
				<div class="col-lg-5">
					<h5 class="card-checkout__header card-el__hide-on-md">Payment Methods</h5>
					<!--SHOW THIS ON MOBILE SCREEN-->
					<div class="card-el__show-on-md mb-4">
						<h5 class="card-checkout__header card-checkout__header__on-md ">
						<span class="card-body__steps card-el__show-on-md">
						Step 2 of 3
						</span>
						<span>Payment methods</span>
						</h5>
					</div>
					<!-- #SHOW THIS ON MOBILE SCREEN-->

					<div class="radio-image">
						<ul class="d-flex align-items-center justify-content-start">
						<li>
						<label class="pay__method-wrap">
						<input type="radio" name="pay__method" value="visa" checked>
						<img src="../../images/footer-visa.png"
						class="img img-fluid" alt=""/>
						</label>
						</li>
						<li>
						<label class="pay__method-wrap">
						<input type="radio" name="pay__method" value="masterCard">
						<img src="../../images/footer-masterCard.png" class="img img-fluid" alt=""/>
						</label>
						</li>
						<li>
						<label class="pay__method-wrap">
						<input type="radio" name="pay__method" value="paypal">
						<img src="../../images/footer-paypal.png"
						class="img img-fluid" alt=""/>
						</label>
						</li>
						<li>
						<label class="pay__method-wrap">
						<input type="radio" name="pay__method"
						value="american-express">
						<img src="../../images/footer-american-express.png"
						class="img img-fluid" alt=""/>
						</label>
						</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3">
					<!--SHOW THIS ON DESKTOP SCREEN-->
					<h5 class="card-el__hide-on-md card-checkout__header text-center btn-load-page" data-target="#modal__title">or use</h5>
					<!-- #SHOW THIS ON DESKTOP SCREEN-->

					<div class="form__add-new-address">
						<div class="">
							<div class="row">
								<div class="col">
									<div class="iframe-wrap btn-load-page"
									data-toggle="modal" data-target="#modal__Iframe"
									data-src="https://enerbank.com/">
									<img src="../../images/enterbank.png" class="img-fluid"
									alt="" title="Open Ener Bank USA">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 border-top__md border__gray mt-4 mt-lg-0">
				<h5 class="card-checkout__header card-checkout__header__border-top">Saved cards (4)</h5>
				<div class="address-shipping form__add-new-address">
					<div class="">
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<p class="label-above">Choose one:</p>
									<div class="select-custom" data-select="select-option__customer-address_2">
										<div class="select-custom__box hover__rotate-angle">
											<div class="home-consult-form__select__selected ">
												<div data-select="select-option__customer-address_2" class="selected-option"></div>
												<div class="angle"></div>
											</div>
<ul class="select-custom__list" data-select="selected-list">
<li>
<div data-select="select-option__customer-address_2" class="select-option select-custom__option  selected default">
	<div class="select-custom__option__wrap">
		<div class="select-custom__img-wrap">
			<img src="../../images/visa.svg" class="img-fluid" alt="">
		</div>
		<p class="select-custom__option__text">
		XXXX XXXX XXXX 1234
		</p>
		<p data-check="set-default" class="select-custom__option__set-default set-default"> Default</p>
	</div>
</div>
</li>
<li>
<div data-select="select-option__customer-address_2" class="select-option select-custom__option ">
	<div class="select-custom__option__wrap">
		<div class="select-custom__img-wrap">
			<img src="../../images/master.svg" class="img-fluid" alt="">
		</div>
		<p class="select-custom__option__text">
		XXXX XXXX XXXX 1234
		</p>
		<p data-check="set-default" class="select-custom__option__set-default set-default"> Default</p>
	</div>
</div>
</li>
</ul>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
	<div class="col-lg-4 col-md__max-366">
		<div class="pay-card__wrap">
			<div class="pay-card">
				<label for="js-pay-card-number" class="pay-card__title"> Card number </label>
				<div class="pay-card__card-number">
					<input id="js-pay-card-number"
					class="pay-card__card-number__input js-pay-card-number"
					placeholder="0000 0000 0000 0000" type="text"
					maxlength="19" name="pay-card-number"/>
				</div>
				<div class="row mt-4">
					<div class="col-6">
						<label for="pay-card-name" class="pay-card__title">Card holder</label>
						<div class="pay-card__card-number">
							<input class="pay-card__card-number__input input-name"
							id="pay-card-name" placeholder="Name here"
							type="text" minlength="2"/>
						</div>
					</div>
					<div class="col-6">
						<label for="js-pay-card-date-1" class="pay-card__title">Expires</label>
						<div class="pay-card__card-number input-dates">
							<input id="js-pay-card-date-1"
							class="pay-card__card-number__input input-dates__item js-pay-card-date"
							placeholder="MM/YY"
							pattern="^\d+(\/\d+)*$" type="text"
							maxlength="5"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md__max-366">
		<div class="pay-card__wrap pay-card__wrap__cv">
			<div class="pay-card">
				<div class="pay-card__card-number__background">
				</div>
				<div class="row mt-4">
					<div class="col-9">

					</div>
					<div class="col-3">
						<label for="js-pay-card-cv" class="pay-card__title">CV</label>
						<div class="pay-card__card-number input-dates">
							<input id="js-pay-card-cv"
							class="pay-card__card-number__input input-dates__item js-pay-card-cv"
							placeholder="000" pattern="\d*" type="text"
							maxlength="3"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row checkout-billign-form-row">
	<div class="col-12 col-lg-10">
		<div class="row row-mobile-padding-05">
			<div class="col-12">
				<h3 class="card-checkout__header card-checkout__header__border-top mt-4 mb-3">Billing Information</h3>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="label-above required" for="name">First & Last Name: <span>*</span></label>
					<input type="text" name="name" placeholder="First & Last Name" class="home-consult-form__input">
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="label-above required required-address" for="address">Street Address <span>*</span></label>
					<input type="text" name="address" placeholder="Street Address" class="home-consult-form__input">
				</div>
			</div>
			<div class="col-12">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="form-group">
							<label class="label-above required" for="customer-new__state_collapsed">City <span>*</span></label>
							<div class="home-consult-form__select ">
								<select name="states">
									<option value="City">
									City 1
									</option>
								</select>
							</div>

						</div>
					</div>

					<div class="col-12 col-lg-6">
						<div class="form-group">
							<label class="label-above required" for="customer-new__state_collapsed">State/province <span>*</span></label>
							<div class="home-consult-form__select ">
								<select name="states">
									<option value="State 1">
									State 1
									</option>
									<option value="State 2">
									State 2
									</option>
								</select>
							</div>
						</div>
					</div>

					<div class="col-12 col-lg-6">
						<div class="form-group">
							<label class="label-above required" for="customer-new__state_collapsed">Country: <span>*</span></label>
							<div class="home-consult-form__select ">
								<select name="Country">
								<option value="country 1">
								Country 1
								</option>
								<option value="Country 2">
								Country 2
								</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="form-group">
							<label class="label-above required" for="customer-new__zip_collapsed">Zip: <span>*</span></label>
							<input id="customer-new__zip_collapsed" type="number" name="zip" placeholder="" class="home-consult-form__input">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row align-items-center border-top__md border__gray mt-2 pt-20 pt-md-0">
<div class="col-auto mx-auto pt-mb-2 mx-md-0">
<div class=" checkbox">
<input class="checkbox__ch-card__checkbox selectable"
id="checkbox__save-card"
type="checkbox"
value="value2">
<label class="label-above full fs-md-16px mb-3 mb-md-down-0"
for="checkbox__save-card">
Save this card
</label>
</div>
</div>
<div class="col-12 col-md-4">
<button class="btn btn-primary btn-full">
confirm
</button>
</div>
</div>
</div>
</div>

<div class="card card-checkout card-checkout__info">

<div class="card-body pb-0">
<!--SHOW THIS ON DESKTOP SCREEN-->
<div class="card-body__steps  card-el__hide-on-md">Step 3 of 3</div>
<h5 class="card-checkout__header mb-0  card-el__hide-on-md">Order Review</h5>
<!--#SHOW THIS ON DESKTOP SCREEN-->

<!--SHOW THIS ON MOBILE SCREEN-->
<div class="card-el__show-on-md mb-4">
<h5 class="card-checkout__header card-checkout__header__on-md ">
<span class="card-body__steps card-el__show-on-md">
Step 3 of 3
</span>
<span>Order Review</span>
</h5>
</div>
<!-- #SHOW THIS ON MOBILE SCREEN-->
</div>


<!--PRODUCT ITEM-->
<div class="card card-checkout">
<div class="card-checkout__remove-item">
<button class="p-0">
<img class="img-fluid" src="../../images/icon-close.svg" alt="">
</button>
</div>
<div class="card-body d-flex align-items-center">
<div class="card-checkout__product__image mr-3">
<div class="img-wrap">
<img src="../../images/hardware-resources-knob-oil-rubbed-bronze.png"
class="img-fluid" alt="">
</div>
</div>
<div class="card-checkout__product">
<div class="row align-items-end align-items-lg-center">
<div class="col card-checkout__product__title-wrap">
<h5 class="card-checkout__product__title">Special title treatment</h5>
<p class="card-checkout__product__number">Product Id: 000168</p>
</div>
<!--SHOW THIS ON MOBILE SCREEN-->
<div class="col-auto card-el__show-on-md ">
<p class="card-checkout__product__label">
<span class="card-el__hide-on-md">Price:</span>
<span class="card-checkout__product__label-value mark-color">$44.44</span>
</p>
</div>
<!--#SHOW THIS ON MOBILE SCREEN-->
</div>
<!--SHOW THIS ON DESKTOP SCREEN-->
<p class="card-checkout__product__description card-el__hide-on-md">
Packaged with 1 x #8 32 x 1'' screw, Easy to install. The classic knob.
Works well in offices and any closet alike. Available colors:
Brushed
Chrome, Oil Rubbed Bronze and Polished Chrome.
</p>
<!--#SHOW THIS ON DESKTOP SCREEN-->
<div class="d-flex align-items-center justify-content-end justify-content-lg-between mt-2 mt-md-0">
<!--SHOW THIS ON DESKTOP SCREEN-->
<div class="card-el__hide-on-md">
<p class="card-checkout__product__label">
<span>Unit Price:</span> <span
class="card-checkout__product__label-value">$22.22</span>
</p>
</div>
<!--#SHOW THIS ON DESKTOP SCREEN-->
<div class="card-checkout__product__label__buttons__wrap">

<!--SHOW THIS ON DESKTOP SCREEN-->
<p class="card-checkout__product__label card-el__hide-on-md">
<label for="checkbox-quantity-10">Quantity: </label>
<span class="input-wrap">
<span class="input-wrap__quantity-mark">x</span>
<input id="checkbox-quantity-10" type="number" min="0"
class="card-checkout__product__label-value input"
value="2"/>
</span>
</p>
<!-- #SHOW THIS ON DESKTOP SCREEN-->
<div class="card-checkout__product__label__buttons card-el__show-on-md">
<span class="butones minus">-</span>
<input class="text" type="text" value="1" id="prod-1"/>
<span class="butones plus">+</span>
</div>
</div>

<!--SHOW THIS ON DESKTOP SCREEN-->
<div class="card-el__hide-on-md">
<p class="card-checkout__product__label">
Price:
<span class="card-checkout__product__label-value mark-color">$44.44</span>
</p>
</div>
<!--#SHOW THIS ON DESKTOP SCREEN-->

<div>
<div class="idea-folder-on-md">
<p class="card-checkout__product__label card-checkout__product__label__sm justify-content-end">
<a href="" title="" class="link hover__ltr">
<span class="icon-wrap">
<svg id="Save" xmlns="http://www.w3.org/2000/svg" width="25.6" height="23.023" viewBox="0 0 25.6 23.023">
					<path id="Path_205" data-name="Path 205"
					d="M25.6,4.963v7.6a1,1,0,0,1-1,1h-.55a1,1,0,0,1-.724-.31L18.974,8.69l-7.748,9.89a1,1,0,0,1-.787.383h0a1,1,0,0,1-.787-.384L7.006,15.195,5.592,17.034a1,1,0,0,1-1.585-1.22l2.2-2.861A1,1,0,0,1,7,12.563H7a1,1,0,0,1,.788.384L10.44,16.34l7.672-9.794a1,1,0,0,1,1.511-.073L23.6,10.642V4.963a2,2,0,0,0-2-2H4a2,2,0,0,0-2,2v14a2,2,0,0,0,2,2h6.55a1,1,0,0,1,0,2H4a4,4,0,0,1-4-4v-14a4,4,0,0,1,4-4H21.6A4,4,0,0,1,25.6,4.963ZM4,7.563a3,3,0,1,1,3,3A3,3,0,0,1,4,7.563Zm2,0a1,1,0,1,0,1-1A1,1,0,0,0,6,7.563Z"
					transform="translate(0 -0.963)"/>
					<path id="Path_207" data-name="Path 207"
					d="M11.836-4.736H8.076v3.76H6.1v-3.76H2.324V-6.719H6.1V-10.5H8.076v3.779h3.76Z"
					transform="translate(13.1 24)" />
</svg>
</span>
<!--SHOW THIS ON DESKTOP SCREEN-->
<span class="card-el__hide-on-md">
Save to idea folder
</span>
<!--#SHOW THIS ON DESKTOP SCREEN-->
</a>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!--#PRODUCT ITEM-->

<!--PRODUCT ITEM-->
<div class="card card-checkout you-design__mark">
<div class="card-checkout__remove-item">
<button class="p-0">
<img class="img-fluid" src="../../images/icon-close.svg" alt="">
</button>
</div>
<div class="card-body d-flex align-items-center">
<div class="card-checkout__product__image mr-3">

<!--SHOW YOU DESIGN ON TOP OF THE IMAGE ON MOBILE-->
<span class="card-checkout__product__badge badge__u-design card-el__show-on-md">you design</span>

<div class="img-wrap">
<img src="../../images/hardware-resources-knob-oil-rubbed-bronze.png"
class="img-fluid" alt="">
</div>
</div>
<div class="card-checkout__product">
<div class="card-checkout__product__badges ">
<!--HIDE YOU DESIGN ON MOBILE-->
<span class="card-checkout__product__badge badge__u-design card-el__hide-on-md">you design</span>
<!-- #HIDE YOU DESIGN ON MOBILE-->
<span class="card-checkout__product__badge badge__required">(E-sign required !)*</span>
</div>
<div class="row align-items-end align-items-lg-center ">
<div class="col card-checkout__product__title-wrap">
<h5 class="card-checkout__product__title">Special title treatment</h5>
<p class="card-checkout__product__number">Product Id: 000168</p>
</div>
<!--SHOW THIS ON MOBILE SCREEN-->
<div class="col-auto card-el__show-on-md">
<p class="card-checkout__product__label">
<span class="card-el__hide-on-md">Price:</span>
<span class="card-checkout__product__label-value mark-color">$44.44</span>
</p>
</div>
<!--#SHOW THIS ON MOBILE SCREEN-->
</div>

<!--SHOW THIS ON DESKTOP SCREEN-->
<p class="card-checkout__product__description card-el__hide-on-md">
Packaged with 1 x #8 32 x 1'' screw, Easy to install. The classic knob.
Works well in offices and any closet alike. Available colors:
Brushed
Chrome, Oil Rubbed Bronze and Polished Chrome.
</p>
<!--#SHOW THIS ON DESKTOP SCREEN-->

<div class="d-flex align-items-center justify-content-end justify-content-lg-between mt-2 mt-md-0">
<!--SHOW THIS ON DESKTOP SCREEN-->
<div class="card-el__hide-on-md">
<p class="card-checkout__product__label">
<span>Unit Price:</span> <span
class="card-checkout__product__label-value">$22.22</span>
</p>
</div>
<!--#SHOW THIS ON DESKTOP SCREEN-->

<div class="card-checkout__product__label__buttons__wrap">
<!--SHOW THIS ON DESKTOP SCREEN-->
<p class="card-checkout__product__label card-el__hide-on-md">
<label for="checkbox-quantity-2">Quantity: </label>
<span class="input-wrap">
<span class="input-wrap__quantity-mark">x</span>
<input id="checkbox-quantity-2" type="number" min="0"
class="card-checkout__product__label-value input"
value="2"/>
</span>
</p>
<!--#SHOW THIS ON DESKTOP SCREEN-->

<div class="card-checkout__product__label__buttons card-el__show-on-md">
<span class="butones minus">-</span>
<input class="text" type="text" value="1" id="prod-2"/>
<span class="butones plus">+</span>
</div>
</div>
<div class="card-el__hide-on-md">
<p class="card-checkout__product__label">
Price:
<span class="card-checkout__product__label-value mark-color">$44.44</span>
</p>
</div>
<div class="">
<p class="card-checkout__product__label">
<button type="button"
class="link-button link-button__no-arrow link-button__reversed-colors"
data-toggle="modal" data-target="#modal__e-sign">
<span class="card-el__show-on-md icon-signature">
<svg xmlns="http://www.w3.org/2000/svg" width="24.144" height="16.825" viewBox="0 0 24.144 16.825">
				<g transform="translate(0 0)"><path class="a"
				d="M91.659,41.116l1.825,1.559,1.96,4.856a.71.71,0,0,0,.444.411l9.473,2.992a.71.71,0,0,0,.891-.891l-2.992-9.473a.71.71,0,0,0-.412-.445l-4.841-1.948-1.572-1.839a.71.71,0,0,0-1.042-.041l-3.776,3.777a.71.71,0,0,0,.041,1.042ZM104.024,47.7l-4.77-4.771a.71.71,0,0,0-1,1l4.77,4.77L96.636,46.69,94.92,42.438l2.833-2.833,4.256,1.713Zm-8.168-9.858.76.889L94.055,41.3l-.889-.76Z"
				transform="translate(-82.141 -36.09)"/><path
				class="a"
				d="M23.434,188.008H.71a.71.71,0,1,0,0,1.42H23.434a.71.71,0,1,0,0-1.42Z"
				transform="translate(0 -172.603)"/></g>
</svg>
</span>
<!--SHOW THIS ON DESKTOP SCREEN-->
<span class="card-el__hide-on-md">
e-sign document
</span>
<!--#SHOW THIS ON DESKTOP SCREEN-->

</button>
</p>
</div>
<div>
<div class="idea-folder-on-md">
<p class="card-checkout__product__label card-checkout__product__label__sm justify-content-end">
<a href="" title="" class="link hover__ltr">
<span class="icon-wrap">
<svg id="Save" xmlns="http://www.w3.org/2000/svg"
width="25.6" height="23.023" viewBox="0 0 25.6 23.023">
			<path id="Path_205" data-name="Path 205"
			d="M25.6,4.963v7.6a1,1,0,0,1-1,1h-.55a1,1,0,0,1-.724-.31L18.974,8.69l-7.748,9.89a1,1,0,0,1-.787.383h0a1,1,0,0,1-.787-.384L7.006,15.195,5.592,17.034a1,1,0,0,1-1.585-1.22l2.2-2.861A1,1,0,0,1,7,12.563H7a1,1,0,0,1,.788.384L10.44,16.34l7.672-9.794a1,1,0,0,1,1.511-.073L23.6,10.642V4.963a2,2,0,0,0-2-2H4a2,2,0,0,0-2,2v14a2,2,0,0,0,2,2h6.55a1,1,0,0,1,0,2H4a4,4,0,0,1-4-4v-14a4,4,0,0,1,4-4H21.6A4,4,0,0,1,25.6,4.963ZM4,7.563a3,3,0,1,1,3,3A3,3,0,0,1,4,7.563Zm2,0a1,1,0,1,0,1-1A1,1,0,0,0,6,7.563Z"
			transform="translate(0 -0.963)"/>
			<path id="Path_207" data-name="Path 207"
			d="M11.836-4.736H8.076v3.76H6.1v-3.76H2.324V-6.719H6.1V-10.5H8.076v3.779h3.76Z"
			transform="translate(13.1 24)" />
</svg>
</span>
<!--SHOW THIS ON DESKTOP SCREEN-->
<span class="card-el__hide-on-md">
Save to idea folder
</span>
<!--#SHOW THIS ON DESKTOP SCREEN-->
</a>
</p>
</div>
</div>
</div>
</div>
</div>
<!--E-SIGN COMPLETE BARGE-->
<div class="eSignComplete">
<div class="d-flex align-items-center justify-content-center">
<div>
<img src="../../images/shield.svg" alt="">
</div>
<div>
<p class="eSignComplete-text">
e-sign complete
</p>
</div>
</div>
</div>
<!--E-SIGN COMPLETE BARGE-->
</div>
<!--#PRODUCT ITEM-->
</div>
</div>

<div class="col col__card-checkout">
<div class="card-fixed width-inherit z-depth-3">
<div class="card card-checkout card-fixed__inner card-shadow no-border">
<div class="card-body card-order">
<h5 class="card-checkout__header fs-md-18px">Order Summary</h5>
<div class="form-group form-promo">
<label class="label-above form-promo__label" for="input__promo-code">Promo
code:
</label>
<div class="form-row">
<div class="col-8">
<input id="input__promo-code" type="text" name="name"
placeholder="" class="input__promo-code">
</div>
<div class="col-4">
<button class="btn btn-primary btn-md">apply</button>
</div>
</div>
</div>
<div class="order">
<div class="table-responsive">
<table class="table table__order mt-3">
<tbody>
<tr>
	<td scope="row" class="text">Sub Total:</td>
	<td class="text-right text">$52.44</td>
	<td class="text-right text"></td>
</tr>
<tr>
	<td scope="row" class="text">Discount:</td>
	<td class="text-right text">$0.00</td>
	<td class="text-right text"></td>
</tr>
<tr>
	<td scope="row" class="text">Tax:</td>
	<td class="text-right text">$0.00</td>
	<td class="text-right text"></td>
</tr>
</tbody>
<tfoot>
<tr>
	<td>Price:</td>
	<td class="text-right">$52.44</td>
	<td class="text-right text"></td>
</tr>
</tfoot>
</table>
</div>
</div>
<div class="">
<button class="btn btn-secondary btn-checkout btn-full btn-full">
submit order
</button>


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
require_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');
?>
	




		<!-- Modal Add New Address or edit an old address-->
		<div class="modal fade modal__add-address" id="modal__add-address" tabindex="-1" role="dialog"
			 aria-labelledby="modalAddAddress" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal__add-address__header__fixed">
						<h3 class="title">
							add new address
						</h3>
						<div class="f-1 modal-sign__close-icon-wrap text-right close close-modal" type="buttons"
							 data-dismiss="modal" aria-label="modalAddAddress">
							<img src="../../images/close.svg" class="img-fluid" alt="">
						</div>
					</div>
					<form action="">
						<div class="modal__add-address-form__wrapper pb-2">
							<fieldset>
								<div class="form-row">
									<div class="col">
										<div class="form-group">
											<label class="label-above"
												   for="customer-new__name">First
												Name:</label>
											<input id="customer-new__name"
												   type="text" name="name"
												   placeholder="John"
												   class="form-input"/>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label class="label-above"
												   for="customer-new__name-last">Last
												Name:</label>
											<input id="customer-new__name-last"
												   type="text" name="name"
												   placeholder="Doe"
												   class="form-input"
											/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label class="label-above"
												   for="customer-new__address_line-1">
												<span>Shipping Address Line One:</span>
												<span class="label-above__label">We cannot ship to a P.O. box</span>
											</label>
											<input id="customer-new__address_line-1"
												   type="text" name="name"
												   placeholder="Los Angeles..."
												   class="form-input"/>
										</div>
										<div class="form-group">
											<label class="label-above"
												   for="customer-new__address_line-2">
												<span>Shipping Address Line Two:</span>
												<span class="label-above__label">We cannot ship to a P.O. box</span>
											</label>
											<input id="customer-new__address_line-2"
												   type="text" name="name"
												   placeholder="1909  Nickel Road..."
												   class="form-input"/>
										</div>
									</div>
								</div>

								<div class="form-row">
									<div class="col">
										<div class="form-group">
											<label class="label-above"
												   for="customer-new__city">City:</label>
											<input id="customer-new__city"
												   type="text" name="email"
												   placeholder="Los Angeles..."
												   class="form-input"/>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label class="label-above"
												   for="customer-new__state">State:</label>
											<div class="form-input form-input__select-wrap">
												<select name="states"
														id="customer-new__state">
													<option value="State">
														State:
													</option>
													<option value="State 1">
														State 1
													</option>
													<option value="State 2">
														State 2
													</option>
													<option value="State 3">
														State 3
													</option>
													<option value="State 4">
														State 4
													</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label class="label-above"
												   for="customer-new__zip">Zip:</label>
											<input id="customer-new__zip"
												   type="number" name="zip"
												   placeholder="90017"
												   class="form-input"/>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label class="label-above"
												   for="customer-new__state">Country:</label>
											<div class="form-input form-input__select-wrap">
												<select name="country"
														id="customer-new__country">
													<option value="country">
														country:
													</option>
													<option value="country 1">
														Country 1
													</option>
													<option value="Country 2">
														Country 2
													</option>
													<option value="Country 3">
														Country 3
													</option>
													<option value="Country 4">
														Country 4
													</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col">
										<div class="form-group">
											<label class="label-above"
												   for="customer-new__email">Email
												Address:</label>
											<input id="customer-new__email"
												   type="email" name="email"
												   placeholder="johndoe@mail.com"
												   class="form-input"/>
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label class="label-above"
												   for="customer-new__phone">Phone
												Number:</label>
											<input id="customer-new__phone"
												   type="number"
												   name="phone number"
												   placeholder="1234567890"
												   class="form-input"/>
										</div>
									</div>
								</div>
								<div class="mb-5">
									<input class="checkbox__ch-card__checkbox selectable"
										   id="checkbox-product-1"
										   type="checkbox" value="value2">
									<label class="label-above full fs-md-18px"
										   for="checkbox-product-1">Set as
										default</label>
								</div>
								<div class="d-flex justify-content-around flex-row-reverse flex-md-row">
									<button class="btn btn-secondary form__add-new-address__btn-form">
										confirm
									</button>
									<div class="btn btn-light form__add-new-address__btn-form"
										 data-dismiss="modal" aria-label="modalAddAddress">
										cancel
									</div>
								</div>
							</fieldset>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Modal Add New Address or edit an old address-->




		<!-- Modal e-sign -->
		<div class="modal modal-sign fade" id="modal__e-sign" tabindex="-1" role="dialog"
			 aria-labelledby="exampleModalLabel" aria-hidden="true">

			<div class="modal-dialog " role="document">

				<div class="modal-content">
					<!--SHOW THIS ON DESKTOP SCREEN-->
					<div class="d-flex align-items-center justify-content-between modal-content__header card-el__hide-on-md">
						<div class="f-1">
							<div class="modal-sign__brand-wrap ">
								<img src="../../images/svgg.svg" class="img-fluid" alt="">
							</div>
						</div>
						<div class="f-1">
							<h2 class="modal-sign__header text-center">
								E-sign
							</h2>
						</div>
						<div class="f-1 modal-sign__close-icon-wrap text-right close close-modal" type=""
							 data-dismiss="modal" aria-label="Close">
							<img src="../../images/close.svg" class="img-fluid" alt="">
						</div>
					</div>
					<!--#SHOW THIS ON DESKTOP SCREEN-->

					<!--SHOW THIS ON MOBILE SCREEN-->
					<div class="modal__add-address__header__fixed card-el__show-on-md">
						<button type="button"
								class="modal-sign__back btn-back d-none"
								data-role="signBack"
						>
							<img src="../../images/back-icon.svg" alt="">
						</button>
						<h3 class="title">
							E-sign
						</h3>
						<div class="f-1 modal-sign__close-icon-wrap text-right close-modal" type="buttons"
							 data-dismiss="modal" aria-label="modalAddAddress">
							<img src="../../images/close.svg" class="img-fluid" alt="">
						</div>
					</div>
					<!--#SHOW THIS ON MOBILE SCREEN-->
					<div class="alert alert-primary cd-none" data-alert="alert-primary-initialize" role="alert">
						<span class="alert-icon"><img src="../../images/shield.svg" class="img-fluid" alt=""></span>You have
						completed all required fields. Please click "Continue"
					</div>
					<div class="alert alert-agree cd-none" data-alert="alert-agree-initialize" role="alert">
						<div class="flex-column flex-md-row row align-items-md-center">
							<div class="col">
								<h4 class="alert-title">
									Almost done
								</h4>
								<p class="alert-text">
									I agree to be legally bound by this document and the Hellosign terms of services
								</p>
							</div>
							<div class="col-auto mk-btn-stls">
								<button class="btn btn-transparent btn-rounded">
									Edit
								</button>
								<button class="btn btn-info btn-rounded" data-role="agree-with-tac">
									Agree
								</button>
							</div>
						</div>
					</div>

					<div class="modal-body card-shadow w-100">
						<form id="modalForm" class="needs-validation">
							<fieldset>
								<div class="form-group form-group__default pt-4 pt-lg-0" data-inputforms="input-forms">
									<div class="form-control form-group__default__form-control home-consult-form__input">
										<label class="label-above card-el__show-on-md"
											   for="input-name">Name:</label>
										<input class="input" id="input-name" required type="text" placeholder="Name">
										<span class="required__star"><abbr title="required">*</abbr></span>
									</div>
									<div class="form-control form-group__default__form-control home-consult-form__input">
										<label class="label-above card-el__show-on-md"
											   for="input-email">E-mail:</label>
										<input class="input" id="input-email" required type="email"
											   placeholder="Email Address">
										<span class="required__star"><abbr title="required">*</abbr></span>
									</div>
								</div>
								<div class="mt-3 mb-4 px-30 px-md-0">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit?
									</p>
									<div class="form-group form-group__default">
										<div class="form-check form-group__default__form-check form-check-inline">
											<input class="checkbox__ch-card__checkbox" id="checkbox__select-nam"
												   type="checkbox"
												   value="value1">
											<label for="checkbox__select-nam">Nam dignissim</label>
										</div>
										<div class="form-check form-check form-group__default__form-check form-check-inline">
											<input class="checkbox__ch-card__checkbox" id="checkbox__select-ipsum"
												   type="checkbox"
												   value="value1">
											<label for="checkbox__select-ipsum">Ipsum eget rhoncus</label>
										</div>
									</div>
								</div>
								<div class="px-30 px-md-0" data-role="info-text-custom-collapse">
									<p class="text-small info-text-custom-collapse">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dignissim, ipsum
										eget
										rhoncus
										fermentum, tortor augue dictum risus, non sagittis ex quam vestibulum ipsum. Ut
										posuere
										quam
										sed arcu convallis ultrices. Pellentesque vehicula condimentum porttitor. Donec
										dignissim
										dui lobortis, sagittis turpis ac, facilisis tortor. In hac habitasse platea
										dictumst.
										Nullam
										pharetra ullamcorper neque in aliquam. Suspendisse lacus nibh, elementum et
										cursus
										vitae,
										accumsan ac metus.
									</p>
									<button class="card-el__show-on-md btn-link"
											data-role="btn-info-text-custom-collapse" type="button">
										Read all
									</button>
								</div>

								<div id="cta-footer-nav"
									 class="justify-content-between align-items-center align-items-md-stretch modal-sign__md-footer-fixed">


									<div class=" mt-0 mt-md-4 w-100" data-role="choose-e-type">
										<!--SHOW THIS ON DESKTOP SCREEN-->
										<div class="d-flex align-items-center justify-content-between ">
											<button class="btn btn-primary choose__e-type card-el__hide-on-md"
													data-toggle="modal"
													data-target="#modal__e-sign__type">
												Choose e-sign type
											</button>

											<button class="btn btn-secondary btn-secondary__outline card-el__hide-on-md"
													data-role="sign"
													disabled>click to sign</span>
											</button>
										</div>
										<!--#SHOW THIS ON DESKTOP SCREEN-->

										<!--MOBILE FIXED FOOTER FOR SWITCHING BETWEEN MODALS AND TABS -->
										<!--SHOW THIS ON MOBILE SCREEN-->
										<!-- Default dropup button -->
										<div class="btn-group dropup card-el__show-on-md btn-dropup__modals">
											<button type="button" class="btn btn-primary  dropdown-toggle"
													data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Choose e-sign type
											</button>
											<div class="dropdown-menu">
												<!-- Dropdown menu links -->
												<ul class="nav nav__tabs-modal" id="pills-tab" role="tablist">
													<li class="nav-item choose__e-type"
														data-toggle="modal"
														data-target="#modal__e-sign__type"
													>
														<a class="nav-link" id="pills-draw-tab" data-toggle="pill"
														   href="#pills-home" role="tab" aria-controls="pills-home"
														   aria-selected="true">Draw it in</a>
													</li>
													<li class="nav-item choose__e-type"
														data-toggle="modal"
														data-target="#modal__e-sign__type"
													>
														<a class="nav-link hover__ltr" id="pills-type-tab"
														   data-toggle="pill"
														   href="#pills-type" role="tab" aria-controls="pills-profile"
														   aria-selected="false">Type it in</a>
													</li>
													<li class="nav-item choose__e-type"
														data-toggle="modal"
														data-target="#modal__e-sign__type"
													>
														<a class="nav-link hover__ltr" id="pills-upload-tab"
														   data-toggle="pill"
														   href="#pills-upload" role="tab" aria-controls="pills-contact"
														   aria-selected="false">Upload image</a>
													</li>
													<li class="nav-item choose__e-type"
														data-toggle="modal"
														data-target="#modal__e-sign__type"
													>
														<a class="nav-link hover__ltr"
														   id="pills-smartphone-tab"
														   data-toggle="pill"
														   href="#pills-smartphone"
														   role="tab"
														   aria-controls="pills-contact"
														   aria-selected="false"
														   data-tab="continue">Use smartphone</a>
													</li>
													<li class="nav-item choose__e-type"
														data-toggle="modal"
														data-target="#modal__e-sign__type"
													>
														<button class="nav-link hover__ltr"
																role="button"
																aria-selected="false">Saved initials
														</button>
													</li>
												</ul>
											</div>
										</div>
										<!--#SHOW THIS ON MOBILE SCREEN-->

									</div>
									<div class="card-el__hide-on-md">
										<div class="init-wrap d-none mt-0 mt-md-3" data-signature="signature-check">
											<img src="../../images/signature.png" class="img-fluid" alt="">
										</div>
									</div>
									<div class=" sign-placeholder mt-0 mt-md-3 card-el__show-on-md">
										<button class="btn btn-secondary btn-secondary__outline"
												disabled>click to sign</span>
										</button>
									</div>
									<div class="init-wrap init-wrap__lg  d-none mt-0 mt-md-3"
										 data-signature="signature-confirmed">
										<img src="../../images/signature.png" class="img-fluid" alt="">
										<span class="required__star " data-role="required-star"><abbr
												title="required">*</abbr></span>
									</div>
								</div>

								<div id="cta-footer-continue" class="modal-sign__md-footer-fixed d-none">
									<div class="d-flex justify-content-center mx-auto">
										<div class="d-none mt-md-5" data-role="continue-confirm">
											<button class="btn btn-secondary"
													type="submit">
												continue
											</button>
										</div>
									</div>
								</div>

								<div class="d-flex justify-content-between card-el__hide-on-md">
									<a href="" class="btn btn-primary btn-auto choose__e-type mt-100 d-none"
									   data-toggle="modal"
									   data-role="back"
									   data-target="#modal__e-sign__type">
										back
									</a>
									<div class="card-el__hide-on-md">
										<div class="sign-placeholder sign-placeholder__md p-0 text-center"
											 data-role="sign-placeholder">
											<button class="btn btn-secondary d-none mt-100" data-role="sign"
													disabled>
												click to sign <span class="required__star d-none"
																	data-role="required-star"><abbr
													title="required">*</abbr></span>
											</button>
										</div>
									</div>
								</div>

								<!--ON MOBILE SHOW SIGNATURE INSIDE MODAL BODY -->
								<div class="card-el__show-on-md">
									<div class="init-wrap d-none init-wrap__md mx-auto mx-md-0 mt-5 mb-3 mb-md-down-0 mt-0 mt-md-3 "
										 data-signature="signature-check">
										<img src="../../images/signature.png" class="img-fluid" alt="">
									</div>
								</div>

								<div class="card-el__show-on-md">
									<div class="init-wrap init-wrap__lg  d-none mt-3 mx-auto"
										 data-signature="signature-confirmed">
										<img src="../../images/signature.png" class="img-fluid" alt="">
										<span class="required__star " data-role="required-star"><abbr
												title="required">*</abbr></span>
									</div>
								</div>


								<!--ON MOBILE SHOW "CLICK TO SIGN SIGNATURE" BUTTON INSIDE MODAL BODY -->
								<div class="sign-placeholder sign-placeholder__md mt-3 text-center card-el__show-on-md"
									 data-role="sign-placeholder">
									<button class="btn btn-secondary d-none" data-role="sign"
											disabled>
										click to sign <span class="required__star d-none"
															data-role="required-star"><abbr
											title="required">*</abbr></span>
									</button>
								</div>

								<div class="d-flex justify-content-center card-el__hide-on-md">
									<div class=" d-none mt-3 mt-md-5" data-role="continue-confirm">
										<button class="btn btn-secondary"
												type="submit">
											continue
										</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>





		<!-- Modal E-Sign Type-->
		<div class="modal modal-sign modal-sign__type fade" id="modal__e-sign__type" tabindex="-1" role="dialog"
			 aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog " role="document">
				<div class="modal-content">
					<!--SHOW THIS ON MOBILE SCREEN-->
					<div class="modal__add-address__header__fixed card-el__show-on-md">
						<h3 class="title">
							E-sign
						</h3>
						<div class="f-1 modal-sign__close-icon-wrap text-right close close-modal" type="buttons"
							 data-dismiss="modal" aria-label="modalAddAddress">
							<img src="../../images/close.svg" class="img-fluid" alt="">
						</div>
					</div>
					<!--#SHOW THIS ON MOBILE SCREEN-->

					<!--SHOW THIS ON DESKTOP SCREEN-->
					<div class="modal-content__header card-el__hide-on-md-el">
						<h2 class="modal-sign__header text-center">
							<button type="button"
									class="choose__e-type w-100 back btn-back"
									data-toggle="modal"
									data-role="back"
									data-target="#modal__e-sign">
								<img class="btn-back__icon" src="../../images/back-icon.svg" alt="">
								<img class="btn-back__icon" src="../../images/back-icon.svg" alt="">
								Back
							</button>
						</h2>
					</div>
					<!--#SHOW THIS ON DESKTOP SCREEN-->

					<div class="modal-body card-shadow w-100">

						<form class="modal-sign__type__form">
							<fieldset class="modal-sign__type__fieldset">
								<!--SHOW THIS ON DESKTOP SCREEN-->
								<ul class="nav mb-3 nav__tabs-modal card-el__hide-on-md" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active hover__ltr" id="pills-draw-tab" data-toggle="pill"
										   href="#pills-home" role="tab" aria-controls="pills-home"
										   aria-selected="true">Draw it in</a>
									</li>
									<li class="nav-item">
										<a class="nav-link hover__ltr" id="pills-type-tab" data-toggle="pill"
										   href="#pills-type" role="tab" aria-controls="pills-profile"
										   aria-selected="false">Type it in</a>
									</li>
									<li class="nav-item">
										<a class="nav-link hover__ltr" id="pills-upload-tab" data-toggle="pill"
										   href="#pills-upload" role="tab" aria-controls="pills-contact"
										   aria-selected="false">Upload image</a>
									</li>
									<li class="nav-item">
										<a class="nav-link hover__ltr"
										   id="pills-smartphone-tab"
										   data-toggle="pill"
										   href="#pills-smartphone"
										   role="tab"
										   aria-controls="pills-contact"
										   aria-selected="false"
										   data-tab="continue">Use smartphone</a>
									</li>
									<li class="nav-item ml-auto">
										<button class="nav-link hover__ltr"
												role="button"
												aria-selected="false">Saved initials
										</button>
									</li>
								</ul>
								<!--#SHOW THIS ON DESKTOP SCREEN-->
								<!--TABS in modal-->
								<div class="tab-content" id="pills-tabContent">
									<!-- Draw tab -->
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel"
										 aria-labelledby="pills-draw-tab">
										<!--SHOW THIS ON MOBILE SCREEN-->
										<div class=" card-el__show-on-md">
											<h5 class="card-checkout__header">
												<div class="card-checkout__header__main__back-icon">
													<button type="button"
															class="choose__e-type w-100 back btn-back text-left"
															data-toggle="modal"
															data-role="back"
															data-target="#modal__e-sign"
													>
														<img src="../../images/back-icon.svg" alt="">
													</button>
												</div>
												<span>Draw it in</span>
											</h5>
										</div>
										<!--#SHOW THIS ON MOBILE SCREEN-->


										<div class="tab-content__wrap">
											<h3 class="tab-content__title">
												create initials
											</h3>
											<div class="tab-content__initial-wrap initial__draw ">
												<div class="initial">
													<div class="initial__main-line">
														<div class="initial-clear__wrap">
															<img src="../../images/close.svg" class="initial-clear" alt="">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- /Draw tab -->
									<!-- Type tab -->
									<div class="tab-pane fade" id="pills-type" role="tabpanel"
										 aria-labelledby="pills-type-tab">
										<!--SHOW THIS ON MOBILE SCREEN-->
										<div class=" card-el__show-on-md">
											<h5 class="card-checkout__header">
												<div class="card-checkout__header__main__back-icon">
													<button type="button"
															class="choose__e-type w-100 back btn-back text-left"
															data-toggle="modal"
															data-role="back"
															data-target="#modal__e-sign"
													>
														<img src="../../images/back-icon.svg" alt="">
													</button>
												</div>
												<span>Type it in</span>
											</h5>
										</div>
										<!--#SHOW THIS ON MOBILE SCREEN-->
										<div class="tab-content__wrap">
											<h3 class="tab-content__title">
												create initials
											</h3>
											<div class="mb-150 mb-md-down-0">
												<div class="tab-content__initial-wrap">
													<div class="initial">
														<input type="text" max="15" class="init-title input"/>
													</div>
												</div>
												<div class="text-center mt-4">
													<button class="btn btn-primary">
														change font
													</button>
												</div>
											</div>
										</div>
									</div>
									<!-- /Type tab -->
									<!-- Upload tab -->
									<div class="tab-pane fade" id="pills-upload" role="tabpanel"
										 aria-labelledby="pills-contact-tab">
										<!--SHOW THIS ON MOBILE SCREEN-->
										<div class=" card-el__show-on-md">
											<h5 class="card-checkout__header">
												<div class="card-checkout__header__main__back-icon">
													<button type="button"
															class="choose__e-type w-100 back btn-back text-left"
															data-toggle="modal"
															data-role="back"
															data-target="#modal__e-sign"
													>
														<img src="../../images/back-icon.svg" alt="">
													</button>
												</div>
												<span>Upload image</span>
											</h5>
										</div>
										<!--#SHOW THIS ON MOBILE SCREEN-->
										<div class="tab-content__wrap">
											<h3 class="tab-content__title card-el__hide-on-md">
												create initials
											</h3>
											<div class="mb-150 mb-md-down-0">
												<p class="text text-center tab-content__title__on-md">
													Upload a picture of your initials
												</p>
												<div class="custom-file__wrap">
													<div class="custom-file custom-file__upload">
														<input type="file" class="custom-file-input" id="customFile">
														<label class="custom-file-label btn btn-primary"
															   for="customFile">
															upload
														</label>
													</div>
													<p class="custom-file-label__text"></p>
												</div>
												<p class="text-center text-small">
													Maximum file size: 40 MB <br/> Acceptable file formats: png, jpg,
													jpeg, bmp, gif
												</p>
											</div>
										</div>

									</div>
									<!-- /Upload tab -->
									<!-- Use smartphone tab -->
									<div class="tab-pane fade" id="pills-smartphone" role="tabpanel"
										 aria-labelledby="pills-contact-tab">
										<!--SHOW THIS ON MOBILE SCREEN-->
										<div class=" card-el__show-on-md">
											<h5 class="card-checkout__header">
												<div class="card-checkout__header__main__back-icon">
													<button type="button"
															class="choose__e-type w-100 back btn-back text-left"
															data-toggle="modal"
															data-role="back"
															data-target="#modal__e-sign"
													>
														<img src="../../images/back-icon.svg" alt="">
													</button>
												</div>
												<span>Use smartphone</span>
											</h5>
										</div>
										<!--#SHOW THIS ON MOBILE SCREEN-->
										<div class="tab-content__wrap">
											<h3 class="tab-content__title card-el__hide-on-md">
												create initials
											</h3>
											<div class="mb-150 mb-md-down-0">
												<p class="text text-center tab-content__title__on-md">
													Please follow the instructions below:
												</p>
												<div class="px-4 px-md-0">
													<ul class="upload-instructions">
														<li class="text">
															1. Take photo of your initials
														</li>
														<li class="text">
															2. Email the photo to: closetstogo@email.address; Subject:
															156rt68yu
														</li>
														<li class="text">
															3. Click "Continue"
														</li>
													</ul>
												</div>

											</div>
										</div>

									</div>
									<!-- /Use smartphone tab -->
								</div>
								<!--#TABS in modal-->
								<div class="mb-md-30 mb-0 px-30">
									<p class="text-center text-small">I understand this is a legal representation of my
										initials</p>
									<div class="text-center">
										<a href="" class="btn btn-secondary tab-content__btn choose__e-type"
										   data-toggle="modal"
										   data-confirm="toggle-initialize-confirm"
										   data-target="#modal__e-sign">
											<span class="" data-btn="insert">insert</span>
											<span class="d-none" data-btn="continue">continue</span>
										</a>
									</div>
								</div>
							</fieldset>
						</form>



						<!--SHOW THIS ON MOBILE SCREEN-->
						<div class="card-el__show-on-md d-flex justify-content-between align-items-center align-items-md-stretch modal-sign__md-footer-fixed">
							<!-- Default dropup button -->
							<div class="btn-group dropup card-el__show-on-md btn-dropup__modals">
								<button type="button" class="btn btn-primary  dropdown-toggle" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">
									Choose e-sign type
								</button>
								<div class="dropdown-menu">
									<!-- Dropdown menu links -->
									<ul class="nav nav__tabs-modal" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link" id="pills-draw-tab" data-toggle="pill"
											   href="#pills-home" role="tab" aria-controls="pills-home"
											   aria-selected="true">Draw it in</a>
										</li>
										<li class="nav-item">
											<a class="nav-link hover__ltr" id="pills-type-tab" data-toggle="pill"
											   href="#pills-type" role="tab" aria-controls="pills-profile"
											   aria-selected="false">Type it in</a>
										</li>
										<li class="nav-item">
											<a class="nav-link hover__ltr" id="pills-upload-tab" data-toggle="pill"
											   href="#pills-upload" role="tab" aria-controls="pills-contact"
											   aria-selected="false">Upload image</a>
										</li>
										<li class="nav-item">
											<a class="nav-link hover__ltr"
											   id="pills-smartphone-tab"
											   data-toggle="pill"
											   href="#pills-smartphone"
											   role="tab"
											   aria-controls="pills-contact"
											   aria-selected="false"
											   data-tab="continue">Use smartphone</a>
										</li>
										<li class="nav-item">
											<button class="nav-link hover__ltr"
													role="button"
													aria-selected="false">Saved initials
											</button>
										</li>
									</ul>
								</div>
							</div>
							<div class=" sign-placeholder mt-0 mt-md-3" data-role="sign-placeholder">
								<button class="btn btn-secondary btn-secondary__outline"
										disabled>click to sign</span>
								</button>
							</div>
						</div>

						<!--#SHOW THIS ON MOBILE SCREEN-->
					</div>

				</div>
			</div>
		</div>



		<!-- Modal e-sign  - "hanks for submitting" modal -->
		<div class="modal modal-sign fade" id="modal__e-sign__success" tabindex="-1" role="dialog"
			 aria-labelledby="exampleModalLabel" aria-hidden="true">

			<div class="modal-dialog " role="document">
				<!--SHOW THIS ON DESKTOP SCREEN-->
				<div class="modal-content card-el__hide-on-md">
					<div class="d-flex align-items-center justify-content-between modal-content__header">
						<div class="f-1">
							<div class="modal-sign__brand-wrap ">
								<img src="../../images/svgg.svg" class="img-fluid" alt="">
							</div>
						</div>
						<div class="f-1">
							<h2 class="modal-sign__header text-center">
								E-sign
							</h2>
						</div>
						<div class="f-1 modal-sign__close-icon-wrap text-right close close-modal" type=""
							 data-dismiss="modal" aria-label="Close">
							<img src="../../images/close.svg" class="img-fluid" alt="">
						</div>
					</div>
					<div class="alert alert-success mt-4">
						<div>
							<span class="alert-icon"><img src="../../images/shield.svg" class="img-fluid" alt=""></span>
						</div>
						<h3 class="alert-title">
							thanks for submitting your document
						</h3>
						<p class="alert-text">
							you`ll receive a copy in your inbox shortly
						</p>
					</div>
				</div>
				<!--#SHOW THIS ON DESKTOP SCREEN-->



				<!--SHOW THIS ON MOBILE SCREEN-->
				<div class="modal-content card-el__show-on-md">
					<div class="modal__add-address__header__fixed">
						<h3 class="title">
							E-sign
						</h3>
						<div class="f-1 modal-sign__close-icon-wrap text-right close close-modal" type="buttons"
							 data-dismiss="modal" aria-label="modalAddAddress">
							<img src="../../images/close.svg" class="img-fluid" alt="">
						</div>
					</div>

					<div class="alert-success">
						<div class="row">
							<div class="col-9 m-auto">
								<div class="">
									<span class="alert-icon"><img src="../../images/shield.svg" class="img-fluid"
																  alt=""></span>
								</div>
								<h3 class="alert-title mt-2">
									thanks for submitting your document
								</h3>
								<p class="alert-text mt-3">
									you`ll receive a copy in your inbox shortly
								</p>
							</div>
						</div>
					</div>

					<div class="row  flex-column">
						<div class="col-9 mx-auto mt-5 text-center">
							<img src="../../images/svgg.svg" class="img-fluid" alt="">
						</div>
						<div class="col-7 mx-auto mt-5 btn-alert-scs">
							<button class="btn btn-secondary w-100 close-modal " type="button"
									data-dismiss="modal" aria-label="backToCard" data-role="backToCard">
								back to cart
							</button>
						</div>
					</div>
				</div>
				<!--#SHOW THIS ON MOBILE SCREEN-->
			</div>
		</div>

		<!-- Modal Iframe -->
		<div class="modal modal-iframe fade" id="modal__Iframe" tabindex="-1" role="dialog"
			 aria-labelledby="iframeModalLabel" aria-hidden="true">

			<div class="modal-dialog " role="document">

				<div class="modal-content">
					<iframe width="100%" height="100%" class="load-page"></iframe>
				</div>
			</div>
		</div>




