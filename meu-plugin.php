<?php

/**
 * Trigger this file on Plugin uninstall
 *
 * @package  MeuPrimeiroPlugin
 */
/**
 * Plugin Name: Meu primeiro plugin
 * Plugin URI: http://www.nomedoseusite.com/meu-primeiro-plugin
 * Description: O meu primeiro plugin já esta criado.
 * Version: 1.0
 * Author: Ricardo Andrade
 * Author URI: http://www.nomedoseusite.com
 */

 defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );

if( file_exists( dirname(__FILE__) . '/vendor/autoload.php')){
	require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN', plugin_basename( __FILE__ ) );

use Inc\Base\Activate;
use Inc\Base\Deactivate;

function activate_meu_plugin(){
	Activate::activate();
}

function deactivate_meu_plugin(){
	Deactivate::deactivate();
}

register_activation_hook( __FILE__, 'activate_meu_pluggin' );
register_deactivation_hook( __FILE__, 'deactivate_meu_pluggin' );

if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::register_services();
}






























// use Inc\Activate;
// use Inc\Deactivate;

// if ( !class_exists( 'MeuPrimeiroPlugin' ) ) {
// 	class MeuPrimeiroPlugin
// 	{
// 		public $plugin;

// 		function __construct() {
// 			$this->plugin = plugin_basename( __FILE__ );
// 		}

// 		function register() {
// 			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
// 			add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
// 			add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
// 		}

// 		public function settings_link( $links ) {
// 			$settings_link = '<a href="admin.php?page=meu_primeiro_plugin">Settings</a>';
// 			array_push( $links, $settings_link );
// 			return $links;
// 		}

// 		protected function create_post_type() {
// 			add_action( 'init', array( $this, 'custom_post_type' ) );
// 		}

// 		public function add_admin_pages(){
// 			add_menu_page('Meu Primeiro Plugin', 'Meu primeiro Plugin', 'manage_options', 'meu_primeiro_plugin', array( $this, 'admin_index'), 'dashicons-store', 110);
// 		}

// 		public function admin_index(){
// 			//require template
// 			require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
// 		}

// 		function custom_post_type() {
// 			register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
// 		}

// 		function enqueue() {
// 			// enqueue all our scripts
// 			wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ) );
// 			wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/myscript.js', __FILE__ ) );
// 		}
    
//     	function activate() {
//   		Activate::activate();
//     }
//   }

// 	$MeuPrimeiroPlugin = new MeuPrimeiroPlugin();

// 	$MeuPrimeiroPlugin->register();

//   // activation
// 	register_activation_hook( __FILE__, array( $alecadddPlugin, 'activate' ) );

// 	// deactivation
// 	register_deactivation_hook( __FILE__, array( 'Deactivate', 'deactivate' ) );
// }
