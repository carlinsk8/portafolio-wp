<?php 


	register_nav_menus(array(
			'principal'=> 'Menú Footer',

		));
    /**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */
	function misRecursos() {
		wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/vendor/jquery/jQuery.min.js', array( 'jquery' ), '1.12.4', true);
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true);
		wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array( 'jquery' ), '1.0.0', true);
		wp_enqueue_script( 'contact_me', get_template_directory_uri() . '/js/contact_me.js', array( 'jquery' ), '1.0.0', true);
		wp_enqueue_script( 'agency', get_template_directory_uri() . '/js/agency.min.js', array( 'jquery' ), '1.0.0', true);

		wp_enqueue_style("style",get_stylesheet_uri());
	}

	add_action( 'wp_enqueue_scripts', 'misRecursos' );


 ?>
