<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title>
			<?php if ( !is_front_page() ) { echo wp_title( ' ', true, 'left' ); echo ' | '; }
			echo bloginfo( 'name' ); echo ' - '; bloginfo( 'description', 'display' );  ?> 
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="js/html5shim.js"></script>
    <![endif]-->

		<!-- icons & favicons -->
		<!-- For iPhone 4 -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">
		<!-- For iPad 1-->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">
		<!-- For iPhone 3G, iPod Touch and Android -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">
		<!-- For Nokia -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">
		<!-- For everything else -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  		<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/bootstrap.less">
  		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">
      <!--[if IE 7]>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-ie7.css">
      <![endif]-->
      <!-- Main style sheet -->
      <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
  		<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/less/responsive.less">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<?php 

			// check wp user level
			get_currentuserinfo(); 
			// store to use later
			global $user_level; 

			// get list of post names to use in 'typeahead' plugin for search bar
			if(of_get_option('search_bar', '1')) { // only do this if we're showing the search bar in the nav

				global $post;
				$tmp_post = $post;
				$get_num_posts = 40; // go back and get this many post titles
				$args = array( 'numberposts' => $get_num_posts );
				$myposts = get_posts( $args );
				$post_num = 0;

				global $typeahead_data;
				$typeahead_data = "[";

				foreach( $myposts as $post ) :	setup_postdata($post);
					$typeahead_data .= '"' . get_the_title() . '",';
				endforeach;

				$typeahead_data = substr($typeahead_data, 0, strlen($typeahead_data) - 1);

				$typeahead_data .= "]";

				$post = $tmp_post;

			} // end if search bar is used

		?>
				
	</head>
	
	<body <?php body_class(); ?>>
		<!-- Header -->
    <header>
       <div class="container">
          <div class="row">
             <div class="span6">
    			<!-- Logo section. Note down the markup. -->
                <div class="logo">
                   <div class="two">
                      <p>
                         <span class="two-f-big">
    						<!-- Company Name. Replace index.html with your site name -->
                            <a href="index.html">Carm<span class="grey">ella</span></a>
                         </span><br />
    					 <!-- Tag line -->
                         <span class="two-s-med grey">Praesent Sed diam</span>
                      </p>
                   </div>
                </div>
             </div>
    		 <!-- Social media icons -->
             <div class="span4 offset2">
                <div class="social">
    			<!-- Replace # with you profile links -->
                   <a href="https://www.facebook.com/firstbaptistprovo"><i class="icon-facebook"></i></a>
                   <!-- <a href="#"><i class="icon-twitter"></i></a> -->
                   <!-- <a href="#"><i class="icon-linkedin"></i></a> -->
                   <!-- <a href="#"><i class="icon-google-plus"></i></a> -->
                </div>
             </div>
          </div>
       </div>
    </header>
		
		<div class="container-fluid">
