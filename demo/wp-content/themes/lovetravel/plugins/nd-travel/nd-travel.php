<?php
/*
Plugin Name:       Travel Management
Description:       The plugin is used to manage your booking. To get started: 1) Click the "Activate" link to the left of this description. 2) Follow the documentation for installation for use the plugin in the better way.
Version:           2.0
Plugin URI:        https://nicdark.com
Author:            Nicdark
Author URI:        https://nicdark.com
License:           GPLv2 or later
*/

///////////////////////////////////////////////////TRANSLATIONS///////////////////////////////////////////////////////////////

//translation
function nd_travel_load_textdomain()
{
  load_plugin_textdomain("nd-travel", false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'nd_travel_load_textdomain');


///////////////////////////////////////////////////DB///////////////////////////////////////////////////////////////
register_activation_hook( __FILE__, 'nd_travel_create_booking_db' );
function nd_travel_create_booking_db()
{
    global $wpdb;

    $nd_travel_table_name = $wpdb->prefix . 'nd_travel_booking';

    $nd_travel_sql = "CREATE TABLE $nd_travel_table_name (
      id int(11) NOT NULL AUTO_INCREMENT,
      id_post int(11) NOT NULL,
      title_post varchar(255) NOT NULL,
      date varchar(255) NOT NULL,
      date_from varchar(255) NOT NULL,
      date_to varchar(255) NOT NULL,
      guests int(11) NOT NULL,
      final_trip_price int(11) NOT NULL,
      extra_services varchar(255) NOT NULL,
      id_user int(11) NOT NULL,
      user_first_name varchar(255) NOT NULL,
      user_last_name varchar(255) NOT NULL,
      paypal_email varchar(255) NOT NULL,
      user_phone varchar(255) NOT NULL,
      user_address varchar(255) NOT NULL,
      user_city varchar(255) NOT NULL,
      user_country varchar(255) NOT NULL,
      user_message varchar(255) NOT NULL,
      user_arrival varchar(255) NOT NULL,
      user_coupon varchar(255) NOT NULL,
      paypal_payment_status varchar(255) NOT NULL,
      paypal_currency varchar(255) NOT NULL,
      paypal_tx varchar(255) NOT NULL,
      action_type varchar(255) NOT NULL,
      UNIQUE KEY id (id)
    );";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $nd_travel_sql );
}



///////////////////////////////////////////////////CSS STYLE///////////////////////////////////////////////////////////////

//add custom css
function nd_travel_scripts() {
  
  //basic css plugin
  wp_enqueue_style( 'nd_travel_style', esc_url( plugins_url( 'assets/css/style.css', __FILE__ ) ) );

  wp_enqueue_script('jquery');
  
}
add_action( 'wp_enqueue_scripts', 'nd_travel_scripts' );


//START add admin custom css
function nd_travel_admin_style() {
  
  wp_enqueue_style( 'nd_travel_admin_style', esc_url( plugins_url( 'assets/css/admin-style.css', __FILE__ ) ), array(), false, false );
  
}
add_action( 'admin_enqueue_scripts', 'nd_travel_admin_style' );
//END add custom css


///////////////////////////////////////////////////GET TEMPLATE ///////////////////////////////////////////////////////////////

//single Cpt 1
function nd_travel_get_cpt_1_template($nd_travel_single_cpt_1_template) {
     global $post;

     if ($post->post_type == 'nd_travel_cpt_1') {
          $nd_travel_single_cpt_1_template = dirname( __FILE__ ) . '/templates/single-cpt-1.php';
     }
     return $nd_travel_single_cpt_1_template;
}
add_filter( 'single_template', 'nd_travel_get_cpt_1_template' );

//single Cpt 2
function nd_travel_get_cpt_2_template($nd_travel_single_cpt_2_template) {
     global $post;

     if ($post->post_type == 'nd_travel_cpt_2') {
          $nd_travel_single_cpt_2_template = dirname( __FILE__ ) . '/templates/single-cpt-2.php';
     }
     return $nd_travel_single_cpt_2_template;
}
add_filter( 'single_template', 'nd_travel_get_cpt_2_template' );

//single Cpt 3
function nd_travel_get_cpt_3_template($nd_travel_single_cpt_3_template) {
     global $post;

     if ($post->post_type == 'nd_travel_cpt_3') {
          $nd_travel_single_cpt_3_template = dirname( __FILE__ ) . '/templates/single-cpt-3.php';
     }
     return $nd_travel_single_cpt_3_template;
}
add_filter( 'single_template', 'nd_travel_get_cpt_3_template' );

//update theme options
function nd_travel_theme_setup_update(){
    update_option( 'nicdark_theme_author', 0 );
}
add_action( 'after_switch_theme' , 'nd_travel_theme_setup_update');


///////////////////////////////////////////////////CPT///////////////////////////////////////////////////////////////
foreach ( glob ( plugin_dir_path( __FILE__ ) . "inc/cpt/*.php" ) as $file ){
  include_once $file;
}


///////////////////////////////////////////////////SHORTCODES ///////////////////////////////////////////////////////////////
foreach ( glob ( plugin_dir_path( __FILE__ ) . "inc/shortcodes/*.php" ) as $file ){
  include_once $file;
}


///////////////////////////////////////////////////ADDONS ///////////////////////////////////////////////////////////////
foreach ( glob ( plugin_dir_path( __FILE__ ) . "addons/*/index.php" ) as $file ){
  include_once $file;
}


///////////////////////////////////////////////////FUNCTIONS///////////////////////////////////////////////////////////////
require_once dirname( __FILE__ ) . '/inc/functions/functions.php';


///////////////////////////////////////////////////METABOX ///////////////////////////////////////////////////////////////
foreach ( glob ( plugin_dir_path( __FILE__ ) . "inc/metabox/*.php" ) as $file ){
  include_once $file;
}


///////////////////////////////////////////////////PLUGIN SETTINGS ///////////////////////////////////////////////////////////
require_once dirname( __FILE__ ) . '/inc/admin/plugin-settings.php';


//function for get plugin version
function nd_travel_get_plugin_version(){

    $nd_travel_plugin_data = get_plugin_data( __FILE__ );
    $nd_travel_plugin_version = $nd_travel_plugin_data['Version'];

    return $nd_travel_plugin_version;

}



