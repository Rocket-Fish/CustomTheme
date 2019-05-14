<?php
/**
 * Header file for Custom Theme
 *
 * @package CustomTheme
 */

?>

<html>
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Custom Theme Title</title>

		<?php
		/**
		 * Enqueue our scripts and styles here.
		 *
		 * @return void
		 */
		function enqueue_scripts() {
			$bootstrap_css_src = 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css';
			$bootstrap_js_src  = 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js';
			$jquery_slim_src   = 'https://code.jquery.com/jquery-3.3.1.slim.min.js';
			$poppers_min_src   = 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js';
			$custom_style_src  = get_bloginfo( 'template_directory' ) . '/style.css';

			wp_enqueue_style( 'bootstrap4-style', $bootstrap_css_src, array(), '4.3.1' );
			wp_enqueue_style( 'custom-style', $custom_style_src, array( 'bootstrap4-style' ), null );
			wp_enqueue_script( 'jqueryslim', $jquery_slim_src, array( 'jquery' ), '3.3.1', true );
			wp_enqueue_script( 'poppers', $poppers_min_src, array( 'jquery' ), '3.3.1', true );
			wp_enqueue_script( 'bootstrap4-script', $bootstrap_js_src, array( 'jquery' ), '3.3.1', true );
		}

		add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

		wp_head();
		?>

	</head>
	<body>

		<nav class = 'navbar navbar-expand-lg navbar-light bg-light'> 
			<button class = 'navbar-toggler' type = 'button' data-toggle = 'collapse' data-target = '#navbarToggler' aria-controls = 'navbarToggler' aria-expanded = 'false' aria-label = 'Toggle Navibation'> 
				<span class = 'navbar-toggler-icon'></span> 
			</button> 
			<div class = 'container'>
				<div class = 'collapse navbar-collapse' id = 'navbarToggler'>
					<ul class = 'navbar-nav mr-auto mt-2 mt-lg-0'>
						<li class="nav-item active">
							<a class="nav-link" href="#"><?php bloginfo( 'name' ); ?> <span class="sr-only">(current)</span></a>
						</li>
					</ul> <!-- navbar-nav mr-auto mt-2 mt-lg-0 -->
					<ul class = 'navbar-nav my-2 my-lg-0'>
						<?php
						// get list of pages in the navbar.
						$pages_list = get_pages( array( 'sort_order' => 'desc' ) );
						// iterate through pages list for each navbar element.
						foreach ( $pages_list as $p ) {
							?>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<?php
										$post_title = '' . $p->post_title;
										// escape string for security.
										echo esc_textarea( $post_title );
									?>
								</a>
							</li>
						<?php } ?>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#">Contact</a>
						</li>
					</ul> <!-- navbar-nav my-2 my-lg-0 --> 
				</div> <!-- collapse navbar-collapse --> 
			</div> <!-- container --> 
		</nav> <!-- 'navbar navbar-expand-lg navbar-light bg-light'--> 

		<div class='container'> 
