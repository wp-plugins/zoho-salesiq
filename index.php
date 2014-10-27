<?php

ob_start();

/*
Plugin Name: Zoho SalesIQ
Plugin URI: http://wordpress.org/plugins/zoho-salesiq/
Description: Convert Website Visitors into Customers
Author: SalesIQ Team
Version: 1.0.1
Author URI: http://zoho.com/salesiq
*/



add_action('admin_menu', 'ld_menu');   


function ld_menu() {
  

   add_menu_page('Account Configuration', 'Zoho SalesIQ', 'administrator', 'LD_dashboard', 'LD_dashboard',plugins_url().'/zoho-salesiq/favicon.png', '79');
    

  }


function LD_dashboard() {
include ('salesiq.php');
}




function ld_embedchat()
{

	echo get_option('ldcode');	
}


add_action("wp_footer","ld_embedchat", 5);

?>
