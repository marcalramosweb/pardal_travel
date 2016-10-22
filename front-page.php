<?php
/*
Template Name: Front page
*/

get_header();
?>
<div id="banner-div" class="row">

	<div class="container-fluid inner-banner-div">

<?php layerslider(3) ?>



		<div class="container">
		<div class="search-form">
			<div class="flight-label">
				<ul>
					<li><span><i class="fa fa-plane" aria-hidden="true"> </i></span>flight</li>

				</ul>
			</div>

			<form action="">

			<div class="form-group">

			  <div class="input-group half-six half-six-right-margin">
			    <span class="input-group-addon">From</span>
			    <input type="text" class="form-control " placeholder="From">
			 </div>

			 <div class="input-group half-six">
			    <span class="input-group-addon">To</span>
			    <input type="text" class="form-control" placeholder="To">
			 </div>

			 <div class="row">
			 	<div class="col-sm-6">
			 		<div class="input-group half-six half-six-right-margin">
			    <span class="input-group-addon">Departure</span>
			    <input type="text" class="form-control" placeholder="Departure Date" >
			 </div>
			 	</div>

			 <div class="col-sm-6">
			 		<div class="input-group half-six">
			    <span class="input-group-addon">Return</span>
			    <input type="text" class="form-control" placeholder="Return Date" >
			 </div>
			 	</div>

			 </div>

			 <div class="row">
			 	<div class="col-sm-4 third-six">
			 		<div class="input-group input-group-ms">
				    <span class="input-group-addon">Adults</span>
				    <select class="form-control">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
						<option>6</option>
						<option>7</option>
					</select>
				    </div>
			 	</div>

			 	<div class="col-sm-4 third-six">
			 		<div class="input-group input-group-ms">
				    <span class="input-group-addon">Children</span>
				    <select class="form-control">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
				    </div>
				    <div class="labeles"><span>(2-11 years)</span></div>
			 	</div>

			 	<div class="col-sm-4 third-six">
			 		<div class="input-group input-group-ms">
				    <span class="input-group-addon">Infants</span>
				    <select class="form-control">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
					  <option>5</option>
					</select>
				    </div>
				    <div class="labeles"><span>(under 2 years)</span></div>
			 	</div>
			 </div>



			</form>


			<button class="btn btn-success btn-block">Search</button>
			<div class="clearfix"></div>
		</div>





		</div><!--container-->



	</div>
</div>
</div>

<div class="container">
	<div class="holder">
		<div class="col-sm-3">
			<p>Why Travel With</p>
			<div>PardalTravel</div>
		</div>

		<div class="col-sm-3">

			<p>Flexible Deposit</p>
			<p>Start From £55</p>

		</div>
		<div class="col-sm-3">

		<div><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/awarding-service-custumer.jpg"></div>

		</div>
		<div class="col-sm-3 border-none">

		<div><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/world-exp.jpg"></div>

		</div>

		<div class="clearfix"></div>
	</div>


	<div id="welcome-wrapper" class="welcome-div">

		<div class="col-md-9">

			<div class="col-md-9">
			<h3>Welcome To PardalTravel</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem harum accusantium, dolores quis atque repellendus quibusdam voluptas doloremque ex, ipsam, iure temporibus iusto voluptates consequatur dolore asperiores! Sit, tempora, iste.</br></br>

				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat fugit incidunt dolorum, explicabo vero iusto velit quia. Repellat possimus commodi tenetur laudantium modi, maxime veritatis est, numquam obcaecati in voluptatem.</p>
			</div>
			<div class="col-md-3">
				<div class="marker-div text-center">
				<i class="fa fa-map-marker" aria-hidden="true" ></i>
					<div class="clearfix"></div>
				</div>
				<div class="store-locator">
					<p>Find Our Nearest Store Or Call Our Expert On 000-000-000</p>
				</div>
			</div>
			<div class="clearfix"></div>

			<div class="col-sm-4 packages">
				<div class="inner-packages">

					<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/beach01.jpg">
						<div class="inner-packges-labels">
							<h4>Holidays</h4>
						</div>
					<div class="clearfix"></div>
				</div>
		    </div><!--end-of-pakages-->

		    <div class="col-sm-4 packages">
				<div class="inner-packages">

					<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/beach01.jpg">
						<div class="inner-packges-labels">
							<h4>Holidays</h4>
						</div>
					<div class="clearfix"></div>
				</div>
		    </div><!--end-of-pakages-->

		    <div class="col-sm-4 packages">
				<div class="inner-packages">

					<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/beach01.jpg">
						<div class="inner-packges-labels">
							<h4>Holidays</h4>
						</div>
					<div class="clearfix"></div>
				</div>
		    </div><!--end-of-pakages-->
		</div><!--end of col-md-9-->

		<div id="deal-bd-div" class="col-md-3">
			<div class="deals">
				<div class="deal-label">Deals</div>
				<ul>
					<li>
					<a href="#">
					<span class="deal-name">Algarve 3* Half Board</span>
					<div class="price-deal">
						<span class="price-prefix">from only</span>
						<span class="price-value">£300pp</span>
					</div>
					</a>
					</li>

					<li>
					<a href="#">
					<span class="deal-name">Algarve 3* Half Board</span>
					<div class="price-deal">
						<span class="price-prefix">from only</span>
						<span class="price-value">£300pp</span>
					</div>
					</a>
					</li>

						<li>
					<a href="#">
					<span class="deal-name">Algarve 3* Half Board</span>
					<div class="price-deal">
						<span class="price-prefix">from only</span>
						<span class="price-value">£300pp</span>
					</div>
					</a>
					</li>

						<li>
					<a href="#">
					<span class="deal-name">Algarve 3* Half Board</span>
					<div class="price-deal">
						<span class="price-prefix">from only</span>
						<span class="price-value">£300pp</span>
					</div>
					</a>
					</li>

						<li>
					<a href="#">
					<span class="deal-name">Algarve 3* Half Board</span>
					<div class="price-deal">
						<span class="price-prefix">from only</span>
						<span class="price-value">£300pp</span>
					</div>
					</a>
					</li>

						<li>
					<a href="#">
					<span class="deal-name">Algarve 3* Half Board</span>
					<div class="price-deal">
						<span class="price-prefix">from only</span>
						<span class="price-value">£300pp</span>
					</div>
					</a>
					</li>


				</ul>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="clearfix"></div>


		<div class="col-sm-3 packages">
			<div class="inner-packages">

				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/beach01.jpg">

				<div class="clearfix"></div>
			</div>
			<div class="inner-deals-wrapper">
				<div class="deal-name">
					<span>Deal Name</span>
				</div>
				<div class="deal-desc">Delas Description</div>
			</div>
		</div><!--end-of-pakages-->

		<div class="col-sm-3 packages">
			<div class="inner-packages">

				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/beach01.jpg">

				<div class="clearfix"></div>
			</div>
			<div class="inner-deals-wrapper">
				<div class="deal-name">
					<span>Deal Name</span>
				</div>
				<div class="deal-desc">Delas Description</div>
			</div>
		</div><!--end-of-pakages-->

		<div class="col-sm-3 packages">
			<div class="inner-packages">

				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/beach01.jpg">

				<div class="clearfix"></div>
			</div>
			<div class="inner-deals-wrapper">
				<div class="deal-name">
					<span>Deal Name</span>
				</div>
				<div class="deal-desc">Delas Description</div>
			</div>
		</div><!--end-of-pakages-->

		<div class="col-sm-3 packages">
			<div class="inner-packages inner-package-last_1">

				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/beach01.jpg">

				<div class="clearfix"></div>
			</div>
			<div class="inner-deals-wrapper">
				<div class="deal-name">
					<span>Deal Name</span>
				</div>
				<div class="deal-desc">Delas Description</div>
			</div>
		</div><!--end-of-pakages-->

		<div class="col-sm-3 packages">
			<div class="inner-packages">

				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/beach01.jpg">

				<div class="clearfix"></div>
			</div>
			<div class="inner-deals-wrapper">
				<div class="deal-name">
					<span>Deal Name</span>
				</div>
				<div class="deal-desc">Delas Description</div>
			</div>
		</div><!--end-of-pakages-->

		<div class="col-sm-3 packages">
			<div class="inner-packages">

				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/beach01.jpg">

				<div class="clearfix"></div>
			</div>
			<div class="inner-deals-wrapper">
				<div class="deal-name">
					<span>Deal Name</span>
				</div>
				<div class="deal-desc">Delas Description</div>
			</div>
		</div><!--end-of-pakages-->

		<div class="col-sm-3 packages">
			<div class="inner-packages">

				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/beach01.jpg">

				<div class="clearfix"></div>
			</div>
			<div class="inner-deals-wrapper">
				<div class="deal-name">
					<span>Deal Name</span>
				</div>
				<div class="deal-desc">Delas Description</div>
			</div>
		</div><!--end-of-pakages-->

		<div class="col-sm-3 packages">
			<div class="inner-packages inner-package-last_1">

				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/beach01.jpg">

				<div class="clearfix"></div>
			</div>
			<div class="inner-deals-wrapper">
				<div class="deal-name">
					<span>Deal Name</span>
				</div>
				<div class="deal-desc">Delas Description</div>
			</div>
		</div><!--end-of-pakages-->

	</div><!--welcome-div-->
</div>



<?php

get_footer();

?>
