<?php 

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		
		array(
			'name'     				=> 'Slowave Extras', // The plugin name
			'slug'     				=> 'slowave-extras', // The plugin slug (typically the folder name)
			'source'   				=> 'https://github.com/tommusrhodus/slowave-extras/archive/master.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> 'https://github.com/tommusrhodus/slowave-extras/archive/master.zip', // If set, overrides default API URL and points to an external URL
		),
		array(
			'name'     				=> 'Live Composer', // The plugin name
			'slug'     				=> 'ds-live-composer', // The plugin slug (typically the folder name)
			'source'   				=> get_stylesheet_directory() . '/ebor_framework/plugins/ds-live-composer.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '1.5.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),
		array(
			'name'     				=> 'Revolution Slider',
			'slug'     				=> 'revslider',
			'source'   				=> 'http://www.madeinebor.com/plugin-downloads/revslider.zip',
			'required' 				=> false,
			'external_url' 			=> 'http://www.madeinebor.com/plugin-downloads/revslider.zip',
			'version'               => '1.0.0'
		),
		array(
			'name'     				=> 'Likes', // The plugin name
			'slug'     				=> 'likes', // The plugin slug (typically the folder name)
			'source'   				=> get_stylesheet_directory() . '/ebor_framework/plugins/likes.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),
		array(
		    'name'      => 'Contact Form 7',
		    'slug'      => 'contact-form-7',
		    'required'  => false,
		    'version' 	=> '1.0.0'
		),
		array(
		    'name'      => 'Easy Google Fonts',
		    'slug'      => 'easy-google-fonts',
		    'required'  => false,
		    'version' 	=> '1.0.0'
		),
		array(
		    'name'      => 'Mailchimp Widget',
		    'slug'      => 'mailchimp-widget',
		    'required'  => false,
		    'version' 	=> '0.8'
		),

	);

	$config = array(
		'is_automatic' => true,
	);
	tgmpa( $plugins, $config );

}