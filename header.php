<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

	 <title><?php bloginfo( 'name' ); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory')?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory')?>/assets/css/custom.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory')?>/assets/css/font-awesome/font-awesome.min.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<div class="top-bar">
<div class="container">
	<div class="col-sm-4 logo-div">
		<div class="logo">
		
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

				<?php bloginfo( 'name' ); ?>

			</a>
			<div class="clearfix"></div>
		</div>
	
		<div class="discription">
			<?php $description = get_bloginfo( 'description', 'display' );
			 if ( $description || is_customize_preview() ) : ?>
				<p class="description-site"><?php echo $description; ?></p>
			<?php endif; ?>
		</div>
	</div><!--end logo div-->

	<div class="col-sm-4 message">
		
		<!-- <label for="s">Search:</label>    -->
	    <form id="searchform" method="get" action="/index.php">
	      <div class="input-text">
	         <input type="text" name="s" id="s" size="15" placeholder="Search" /><br />
	         <div class="clearfix"></div>
	      </div>
	      <div class="subm">
	      	<input type="submit" value="Search" />
	      	<div class="clearfix"></div>
	      </div>
	  
	     </form>

	  <div class="clearfix"></div>
	</div><!--end message div-->

	<div class="col-sm-4 phone text-center">
		<p>Call and speak to one of our experts</p>
		<h3>0800 484 0310</h3>

	</div><!--end phone div-->
	<div class="clearfix"></div>
</div>

</div>

    <nav class="navbar navbar-inverse main-nav-bar-menu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
       
        </div>
        <div id="navbar" class="collapse navbar-collapse">
         <!--  <?php
			wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_class'     => 'nav navbar-nav',
			 ) );
		  ?> -->

		   <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'Yamm_Nav_Walker_menu_fallback',
                'walker'            => new Yamm_Nav_Walker())
            );
        ?>


        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container-fluid">