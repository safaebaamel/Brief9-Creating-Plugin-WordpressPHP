<?php

/**
 * Plugin Name: footer
 * Description: footer brings a whole new design experience to WordPress. Customize your entire theme: header, footer, single post, archive and 404 page, all with one page builder.
 * Plugin URI: 
 * Author: Safae Baamel
 * Version: 3.0.8
 * Author URI: footer
 *
 * Text Domain: footer
*/

add_action('admin_menu', 'my_admin_menu');


function my_admin_menu () {
	//parameters details
	 //add_management_page( $page_title, $menu_title, $capability, $menu_slug, $function );
	 //add a new setting page udner setting menu
  //add_management_page('Footer Text', 'Footer Text', 'manage_options', __FILE__, //'footer_text_admin_page');
  //add new menu and its sub menu 
  add_menu_page('Footer Text title', 'Footer Settings', 'manage_options',
 'footer_setting_page', 'mt_settings_page', 'dashicons-visibility');
add_submenu_page( 'footer_setting_page', 'Page title', 'Sub-menu title', 
'manage_options', 'child-submenu-handle', 'my_magic_function');
}

function footer_text_admin_page () {
  echo 'this is where we will edit the variable';
}

// mt_settings_page() displays the page content for the Test Settings submenu
function mt_settings_page() {
    echo "<h2>" . __( 'Footer Settings Configurations', 'menu-test' ) . "</h2>";
	include_once('footer_settings_page.php');
}

function execute_function() {
   echo "<footer style='
   background-color:black;display:flex ; background:#1c1c1c; align-items:center; justify-content:center; gap:12%;height: 300px;
 '>
 <div style='display:flex; flex-direction:column'>
 <h5 style=' font-size:20px; color:white;' >Our Store</h5>
 <p style=' font-size:17px; color:white;'>Accessories</p>
 <p style=' font-size:17px; color:white;'>Clothing</p>
 <p style=' font-size:17px; color:white;'>Shoes</p>
 <p style=' font-size:17px; color:white;'>Belts</p>
 </div>

 <div style='display:flex; flex-direction:column'>
 <h5 style=' font-size:20px; color:white;' >Service Client</h5>
 <p style=' font-size:17px; color:white;'>Orders</p>
 <p style=' font-size:17px; color:white;'>Downloads</p>
 <p style=' font-size:17px; color:white;'>Join Our Community</p>
 <p style=' font-size:17px; color:white;'>FAQ</p>
 </div>
 <div class='footer_text' display:flex; flex-direction:column style='margin-left:5%; text-align: right;font-size: 17px;'>Made with &#10084; by:  ".get_option('quote_text')."</div>
 <div style='margin-right:3%;
 color:white;
 '>
 <a style='color:white; text-decoration: none;  padding: 5px;' href='".get_option('github_link')."'>
 <i class='fab fa-github'></i>
   </a>
   <a style='color:white; text-decoration: none; padding: 5px;' href='".get_option('instagram_link')."'>
   <i class='fab fa-instagram'></i>
     </a>
 <a style='color:white; text-decoration: none;  padding: 5px;' href='".get_option('twitter_link')."'>
 <i class='fab fa-twitter'></i>
   </a>
  
 </div>
  
 
</footer>";
}
add_action( 'wp_footer', 'execute_function' );


?>