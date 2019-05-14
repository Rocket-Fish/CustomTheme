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

			wp_enqueue_style( 'bootstrap4-style', $bootstrap_css_src, array(), '4.3.1' );
			wp_enqueue_script( 'jqueryslim', $jquery_slim_src, array( 'jquery' ), '3.3.1', true );
			wp_enqueue_script( 'poppers', $poppers_min_src, array( 'jquery' ), '3.3.1', true );
			wp_enqueue_script( 'bootstrap4-script', $bootstrap_js_src, array( 'jquery' ), '3.3.1', true );
		}

		add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

		wp_head();
		?>

	</head>
	<body>

	<div class = 'master-header-bar'> 
		<div class = 'container'>
			<nav class = 'navbar'> 
				<a class = "navbar-item active" href="#"> Home </a> 
				<a class = "navbar-item" href="#"> Other Stuff </a> 
				<a class = "navbar-item" href="#"> Some more Other stuff </a> 
			</nav> 
		</div>
	</div> <!-- master-header-bar --> 

	<div class='container'> 
