<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<title>ClosetsToGo</title>
	<meta name="description" content="Comparison page"><link href="./app.css" rel="stylesheet"></head>
	<body class="comparison comparison-page">

		
<?php	
require_once("includes/header.php"); 
?>
		
		
		

		<section class="home-mobile-buttons-block covid-block">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="home-mobile-buttons-block__wrapper">
								<a href="#" title="" class="back-link d-none" data-btn="back-link">
									<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
										<path d="M0 0h24v24H0V0z" fill="none"/>
										<path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
									</svg>
								</a>
								<h2>Compare competitors</h2>
								<button style="margin: 5px 0 0" class="clear-selected__mobile d-none" data-btn="clear">
									<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
										<g transform="translate(0 -0.001)">
											<g transform="translate(0 0.001)">
												<path d="M13.326,12l10.4-10.4A.938.938,0,0,0,22.4.275L12,10.675,1.6.275A.938.938,0,0,0,.274,1.6L10.674,12,.274,22.4A.938.938,0,0,0,1.6,23.726L12,13.327l10.4,10.4A.938.938,0,0,0,23.725,22.4Z"
													  transform="translate(0 -0.001)"/>
											</g>
										</g>
									</svg>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<main class="main wrapper">
			<div class="container-fluid">
				<h1 class="title__compare title__compare__desktop">Compare competitors</h1>
				<div class="filter__compare__desktop">
					<div class="ml-auto w-auto d-inline-flex align-items-center">
					<span>
						<span class="number-of-checked-brands">0</span> selected
					</span>
						<button class="btn btn-primary btn-compare link-button ml-3  pl-3 pr-3">compare</button>
					</div>
				</div>
				<div class="filter__compare__mobile row">
					<div class="w-100 d-flex align-items-center">
						<button class="btn btn-primary btn-primary__trans link-button pl-3 pr-3 flex-grow-1 justify-content-center clear-selected__mobile">
							clear selected
						</button>
						<button class="btn btn-primary btn-compare__mobile link-button pl-3 pr-3 flex-grow-1 justify-content-center">
							compare now
						</button>
					</div>
				</div>
			</div>

			<!--			THIS CARDS ARE SHOWING ONLY ON MOBILE
			THEY REPRESENT BRANDS WITH IMAGES AND CHECKBOXES AND
			 DUPLICATE THE BEHAVIOUR OF THE TABLE HEADER WITH BRAND
			  IMAGES AND CHECKBOXES
			-->
			<div class="container-fluid">
				<ul class="list__card-brand-comparison">
					<!--
					here in list__card-brand-comparison we have inputs with attr data-brand-checked
					these attributes are connected with attributes in inputs of table#main-table, bellow this container.
					-->

					<li class="card__brand-comparison">
						<div class="card__brand-comparison__wrap">
							<div class="card__brand-comparison__img-wrap">
								<img src="images/svgg.svg" class="img-fluid"
									 alt=""/>
							</div>
							<div class=" brand-compare__header__checkbox">
								<input class="checkbox__ch-card__checkbox selectable checkbox-brand"
									   id="brand-ctg"
									   type="checkbox"
									   value="brand-ctg"
									   data-brand-checked="brand-ctg">
								<label for="brand-ctg"> </label>
							</div>
						</div>
					</li>
					<li class="card__brand-comparison">
						<div class="card__brand-comparison__wrap">
							<div class="card__brand-comparison__img-wrap">
								<img src="images/california_closets.png"
									 class="img-fluid" alt=""/>
							</div>
							<div class=" brand-compare__header__checkbox">
								<!--  data-brand-checked= have to has

								-->
								<input class="checkbox__ch-card__checkbox selectable checkbox-brand"
									   id="checkbox-brand-11" type="checkbox" value="brand-11"
									   data-brand-checked="brand-11">
								<label for="checkbox-brand-11"> </label>
							</div>
						</div>
					</li>
					<li class="card__brand-comparison">
						<div class="card__brand-comparison__wrap">
							<div class="card__brand-comparison__img-wrap">
								<img src="images/the_container_store.png"
									 class="img-fluid" alt=""/>
							</div>
							<div class=" brand-compare__header__checkbox">
								<input class="checkbox__ch-card__checkbox selectable checkbox-brand"
									   id="checkbox-brand-22" type="checkbox" value="brand-22"
									   data-brand-checked="brand-22">
								<label for="checkbox-brand-22"> </label>
							</div>
						</div>
					</li>
					<li class="card__brand-comparison">
						<div class="card__brand-comparison__wrap">
							<div class="card__brand-comparison__img-wrap">
								<img src="images/plus_closets.png" class="img-fluid"
									 alt=""/>
							</div>
							<div class=" brand-compare__header__checkbox">
								<input class="checkbox__ch-card__checkbox selectable checkbox-brand"
									   id="checkbox-brand-33" type="checkbox" value="brand-33"
									   data-brand-checked="brand-33">
								<label for="checkbox-brand-33"> </label>
							</div>
						</div>
					</li>
					<li class="card__brand-comparison">
						<div class="card__brand-comparison__wrap">
							<div class="card__brand-comparison__img-wrap">
								<img src="images/modular_closets.png" class="img-fluid"
									 alt=""/>
							</div>
							<div class=" brand-compare__header__checkbox">
								<input class="checkbox__ch-card__checkbox selectable checkbox-brand"
									   id="checkbox-brand-44" type="checkbox" value="brand-44"
									   data-brand-checked="brand-44">
								<label for="checkbox-brand-44"> </label>
							</div>
						</div>
					</li>
					<li class="card__brand-comparison">
						<div class="card__brand-comparison__wrap">
							<div class="card__brand-comparison__img-wrap">
								<img src="images/closets_by_design.png"
									 class="img-fluid" alt=""/>
							</div>
							<div class=" brand-compare__header__checkbox">
								<input class="checkbox__ch-card__checkbox selectable checkbox-brand"
									   id="checkbox-brand-55" type="checkbox" value="brand-55"
									   data-brand-checked="brand-55">
								<label for="checkbox-brand-55"> </label>
							</div>
						</div>
					</li>
				</ul>
			</div>

			<div class="container-fluid">
				<div class="table-wrap table-fixed table__brands-comparison">
					<div id="table-scroll" class="table-scroll">
						<table id="main-table" class="main-table">
							<thead>
								<tr>
									<th scope="col" class="main-cell table-cell__sticky table-cell__sticky__box-shadow">
										<div class="table-cell__sticky__header wrap-sticky-row">
											<p class="table-scroll__title">compare competitors</p>
											<div class="table__img-wrap second-sticky-column">
												<img src="images/svgg.svg" class="img-fluid" style="width: 100px"
													 alt=""/>
											</div>
										</div>
									</th>
									<th scope="col" data-brand-checked="brand-1"
										class="table-cell__sticky brand-compare brand-compare__header">
										<div class=" brand-compare__header__checkbox">
											<input class="checkbox__ch-card__checkbox selectable checkbox-brand"
												   id="checkbox-brand-1" type="checkbox" value="brand-1"
												   data-brand-checked="brand-1">
											<label for="checkbox-brand-1"> </label>
										</div>
										<div class="table-cell__sticky__header wrap-sticky-row">
											<div class="table__img-wrap second-sticky-column">
												<img src="images/california_closets.png"
													 class="img-fluid" alt=""/>
											</div>
										</div>
									</th>
									<th scope="col" data-brand-checked="brand-2"
										class="table-cell__sticky brand-compare brand-compare__header">
										<div class=" brand-compare__header__checkbox">
											<input class="checkbox__ch-card__checkbox selectable checkbox-brand"
												   id="checkbox-brand-2" type="checkbox" value="brand-2"
												   data-brand-checked="brand-2">
											<label for="checkbox-brand-2"> </label>
										</div>
										<div class="table-cell__sticky__header wrap-sticky-row">
											<div class="table__img-wrap second-sticky-column">
												<img src="images/the_container_store.png"
													 class="img-fluid" alt=""/>
											</div>
										</div>
									</th>
									<th scope="col" data-brand-checked="brand-3"
										class="table-cell__sticky brand-compare brand-compare__header">
										<div class=" brand-compare__header__checkbox">
											<input class="checkbox__ch-card__checkbox selectable checkbox-brand"
												   id="checkbox-brand-3" type="checkbox" value="brand-3"
												   data-brand-checked="brand-3">
											<label for="checkbox-brand-3"> </label>
										</div>
										<div class="table-cell__sticky__header wrap-sticky-row">
											<div class="table__img-wrap second-sticky-column">
												<img src="images/plus_closets.png" class="img-fluid"
													 alt=""/>
											</div>
										</div>
									</th>
									<th scope="col" data-brand-checked="brand-4"
										class="table-cell__sticky brand-compare brand-compare__header">
										<div class=" brand-compare__header__checkbox">
											<input class="checkbox__ch-card__checkbox selectable checkbox-brand"
												   id="checkbox-brand-4" type="checkbox" value="brand-4"
												   data-brand-checked="brand-4">
											<label for="checkbox-brand-4"> </label>
										</div>
										<div class="table-cell__sticky__header wrap-sticky-row">
											<div class="table__img-wrap second-sticky-column">
												<img src="images/modular_closets.png" class="img-fluid"
													 alt=""/>
											</div>
										</div>
									</th>
									<th scope="col" data-brand-checked="brand-5"
										class="table-cell__sticky brand-compare brand-compare__header">
										<div class=" brand-compare__header__checkbox">
											<input class="checkbox__ch-card__checkbox selectable checkbox-brand"
												   id="checkbox-brand-5" type="checkbox" value="brand-5"
												   data-brand-checked="brand-5">
											<label for="checkbox-brand-5"> </label>
										</div>
										<div class="table-cell__sticky__header wrap-sticky-row">
											<div class="table__img-wrap second-sticky-column">
												<img src="images/closets_by_design.png"
													 class="img-fluid" alt=""/>
											</div>
										</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">
												<p class=" table-column-text">
													Lorem ipsum dolor sit amet, consetetur.
												</p>
											</div>
											<div class="second-sticky-column colorized ">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>

												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>

												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit ame
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
													nonumy.
												</p>
											</div>
											<div class="second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column ">

												<p class=" table-column-text">
													Lorem ipsum dolor sit amet, consetetur.
												</p>
											</div>
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet.
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Lorem ipsum dolor sit amet, consetetur.
												</p>
											</div>
											<div class="second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Lorem ipsum dolor sit amet, consetetur.
												</p>
											</div>
											<div class="second-sticky-column colorized ">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Lorem ipsum dolor sit amet, consetetur.
												</p>
											</div>
											<div class="second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet.
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Lorem ipsum dolor sit amet, consetetur.
												</p>
											</div>
											<div class="second-sticky-column colorized ">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit ame
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
													nonumy.
												</p>
											</div>
											<div class="second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column ">

												<p class=" table-column-text">
													Lorem ipsum dolor sit amet, consetetur.
												</p>
											</div>
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet.
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Lorem ipsum dolor sit amet, consetetur.
												</p>
											</div>
											<div class="second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Lorem ipsum dolor sit amet, consetetur.
												</p>
											</div>
											<div class="second-sticky-column colorized ">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class="second-sticky-column colorized">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<th class="table-cell__sticky table-cell__sticky__box-shadow main-cell">
										<div class="wrap-sticky-row">
											<div class="first-sticky-column">

												<p class=" table-column-text">
													Lorem ipsum dolor sit amet, consetetur.
												</p>
											</div>
											<div class="second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text text-center">
													<img src="images/checked.svg" class="img-fluid" alt=""/>
												</p>
											</div>
										</div>
									</th>

									<td class="brand-compare" data-brand-checked="brand-1">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-2">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-3">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-4">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
												</p>
											</div>
										</div>
									</td>
									<td class="brand-compare" data-brand-checked="brand-5">
										<div class="wrap-sticky-row">
											<div class=" second-sticky-column">

												<p class="table-column-text table-column-title table-column-title__md">
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr
												</p>
												<p class="table-column-text">
													Lorem ipsum dolor sit amet.
												</p>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</main>

		<div class="scrollToTopBlock">
			<div class="people-working">
				<img src="images/people-working-call-center_@2x.png" alt="" class="people-working__image">

				<div class="people-working__wrapper">
					<div class="people-working__content">
						<p class="people-working__text">Hi! I'm the Virtual assistant, and I'm here to help you.</p>
					</div>
				</div>
			</div>

			<a href="#" class="scrollToTop js-to-top">
				<img src="images/arrows.svg" alt="">
			</a>
		</div>




<?php
require_once('includes/footer.php');
?>
		
		
		
		
		
		
	<script src="./app.js"></script></body>
</html>
