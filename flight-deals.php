<?php
/*
Template Name: Flight Deals Page
*/
get_header();?>

<div class="container wrapper-deal-container">

	<div class="col-md-6 col-md-first">
		<div class="inner-col-md-6">
			<div class="col-sm-12">
				<p><span class="">Biggest Holiday Deals</span>
				</p>
			</div>
			<div class="intro-welcome">
				<p class="lead-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem fugiat magni explicabo iure voluptate eius quas deleniti! Omnis asperiores et eveniet enim,
					obcaecati nihil mollitia necessitatibus odio nemo minus! Ut.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus porta, sem id pellentesque iaculis, metus elit venenatis risus, sed auctor lectus felis at ante. Donec at tortor rutrum, feugiat velit eget, consectetur nunc.
					Curabitur eu tempus tortor. Maecenas iaculis sit amet ipsum et porta.
				</p>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
 </div>

	<div class="col-md-6 col-md-secund">
		<div class="inner-col-md-6">

				<div class="col-sm-6">
					<div class="col-sm-wrapper-l">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/15.jpg" alt="<?php bloginfo('name');?>">
					<div class="clearfix"></div>
					<div class="col-sm-12 special-deals-tag">
						<p><span class="">Hot Deals</span></p>
					</div>
					</div>
			  </div>

				<div class="col-sm-6">
					<div class="col-sm-wrapper-r">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/15.jpg" alt="<?php bloginfo('name');?>">
						<div class="clearfix"></div>
						<div class="col-sm-12 special-deals-tag">
							<p><span class="">Hot Deals</span></p>
						</div>
					</div>
			 </div>
     <div class="clearfix"></div>
		</div>
	</div>

	<!--secund section-->
	<section class="col-md-12">

			<div class="col-md-6">
				<div class="section-6-first">
					<!--<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/1.jpg" alt="<?php bloginfo('name');?>">
					 <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/banner_pat_1.jpg" alt="models"> -->


			<?php $args = array( 'post_type' => 'flight_deals', 'posts_per_page' => 1 );
			$loop = new WP_Query( $args );?>



		<?php	while ( $loop->have_posts() ) : $loop->the_post();?>
			<a href="<?php the_permalink();?>">
			  <?php  the_post_thumbnail();?>
			</a>
				<?php $price = get_field('price_');?>

					<div class="col-sm-12 deals-tag">
						<p><span class=""><?php the_title();?></span> From £<?php echo $price;?></p>

					</div>
	    <?php endwhile;?>

			 </div>
			<div class="clearfix"></div>
		</div>


			<div class="col-md-6">
				<div class="section-6-secund">
					<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/2.jpg" alt="<?php bloginfo('name');?>">
					<div class="col-sm-12 deals-tag">
						<p><span class="">Hot Deals</span></p>
					</div>
			 </div>
			<div class="clearfix"></div>
		</div>

		<div class="col-md-6">
			<div class="section-6-first">
				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/3.jpg" alt="<?php bloginfo('name');?>">
				<!-- <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/banner_pat_1.jpg" alt="models"> -->
		 </div>
		<div class="clearfix"></div>
	</div>


		<div class="col-md-6">
			<div class="section-6-secund">
				<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/4.jpg" alt="<?php bloginfo('name');?>">
		 </div>
		<div class="clearfix"></div>
	</div>



<div class="clearfix"></div>
	</section>

</div>


<?php get_footer();?>
