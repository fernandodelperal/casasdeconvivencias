<?php

/*******
 ******************************************
 * Plugin Name: WooCommerce Events Manager
 *
 * Plugin URI: http://cybersourcepk.com
 *
 * Description: A plugin for events managements based on Woo-commerce.
 *
 * Version: 1.4.0
 *
 * Author: CybersourcePK
 *
 * Author URI: http://cybersourcepk.com/
 *
 * Text Domain: wooevents
 *
 * Domain Path: /languages
 *
 * Copyright: © 2010-2016 CybersourcePK.
 *
 * License: GNU General Public License v3.0
 *
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 **************
 ********************************************************/



if ( ! defined( 'ABSPATH' ) ) { 

    exit; // Exit if accessed directly

}


/**
 *
 * Check if WooCommerce is active
 *
 **/

add_action( 'admin_init', 'child_plugin_has_parent_plugin' );
function child_plugin_has_parent_plugin() {
    if ( is_admin() && current_user_can( 'activate_plugins' ) &&  !is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
        add_action( 'admin_notices', 'child_plugin_notice' );
        deactivate_plugins( plugin_basename( __FILE__ ) ); 
        if ( isset( $_GET['activate'] ) ) {
            unset( $_GET['activate'] );
        }
    }
}

function child_plugin_notice(){
    ?><div class="error"><p><?php _e('Sorry, but this Plugin requires WooCommerce plugin to be installed and active.', 'wooevents') ?></p></div><?php
}

add_action( 'init', 'wooevent_load_textdomain' );
/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function wooevent_load_textdomain() {
  load_plugin_textdomain( 'wooevents', false, basename( dirname( __FILE__ ) ) . '/languages' ); 
}


/**

 * Event Tab Front

 *

 * Creating widget

 */

define( 'CCW_PLUGIN_NAME', 'Custom Calendar Widget' );
define( 'CCW_PLUGIN_PATH', plugin_dir_path(__FILE__) );
define( 'CCW_PLUGIN_URL', plugin_dir_url(__FILE__) );
define( 'CCW_SITE_BASE_URL',get_bloginfo('url'));
define( 'CCW_TOTAL_MONTHS',24);
define( 'CCW_MONTHS_DEFAULT',3);


require_once CCW_PLUGIN_PATH.'includes/admin/class.admin.events-settings-tab.php';
require_once CCW_PLUGIN_PATH.'includes/widget/ccw_class.php';

/**

 * Registering the scripts now

 *

 */



function register_scripts(){



	global $typenow;



	// checking for add product and edit product page.

	// include timepicker for product page only



	if (is_edit_page('edit') && "product" == $typenow || is_edit_page('new') && "product" == $typenow){



	    wp_register_script( 'timepicker-script', plugins_url( '/assets/js/timepicker.js', __FILE__ ) , array('jquery'),'', false );
		wp_enqueue_script( 'timepicker-script' );
		// Localize the script with new data
		$translation_array = array(
			'january' => __( 'January', 'wooevents' ),
			'february ' => __( 'February', 'wooevents' ),
			'march' => __( 'March', 'wooevents' ),
			'april' => __( 'April', 'wooevents' ),
			'may' => __( 'May', 'wooevents' ),
			'june' => __( 'June', 'wooevents' ),
			'july' => __( 'July', 'wooevents' ),
			'august' => __( 'August', 'wooevents' ),
			'september' => __( 'September', 'wooevents' ),
			'october' => __( 'October', 'wooevents' ),
			'november' => __( 'November', 'wooevents' ),
			'december' => __( 'December', 'wooevents' ),
			'monday' => __( 'Monday ', 'wooevents' ),
			'tuesday' => __( 'Tuesday ', 'wooevents' ),
			'wednesday' => __( 'Wednesday ', 'wooevents' ),
			'thursday ' => __( 'Thursday', 'wooevents' ),
			'friday' => __( 'Friday ', 'wooevents' ),
			'saturday' => __( 'Saturday', 'wooevents' ),
			'sunday' => __( 'Sunday', 'wooevents' ),
			'hrs' => __( 'hrs', 'wooevents' ),

		);
		
		wp_localize_script( 'timepicker-script', 'object_name', $translation_array );
	    wp_register_script( 'custom-script', plugins_url( '/assets/js/custom.js', __FILE__ ), array('timepicker-script') );
	    wp_register_style(  'timepicker-style', plugins_url( '/assets/css/timepicker.css', __FILE__ ) );
		 wp_enqueue_script( 'custom-script' );
	    wp_enqueue_style( 'timepicker-style' );

	}
	 
}


add_action( 'admin_enqueue_scripts', 'register_scripts' );

add_action( 'wp_enqueue_scripts', 'register_front_scripts' );
function register_front_scripts(){
	wp_enqueue_style( 'woo_event_manager_style',  CCW_PLUGIN_URL.'/assets/css/woo_event_manager.css');
}

/**

 * is_edit_page 

 * function to check if the current page is a product edit or edit add page

 * 

 */

function is_edit_page($new_edit = null){

    global $pagenow;

    //make sure we are on the backend

    if (!is_admin()) return false;





    if($new_edit == "edit")

        return in_array( $pagenow, array( 'post.php',  ) );

    elseif($new_edit == "new") //check for new post page

        return in_array( $pagenow, array( 'post-new.php' ) );

    else //check for either new or edit

        return in_array( $pagenow, array( 'post.php', 'post-new.php' ) );

}







/**

 * Process meta

 *

 * Processes the Events tab options when a post is saved

 */

function process_product_meta_event_tab( $post_id ) {

	if($_POST['event_date']!=''){
		// Update Event Date if set
		$time = new DateTime($_POST['event_date'].''. $_POST['event_time_start']);
		$stamp = $time->format('Y-m-d H:i');
		update_post_meta( $post_id, 'event_datetime', $stamp);

	}elseif(is_edit_page('edit') && "product" == $typenow){
		// Update Event Date if not set
		update_post_meta( $post_id, 'event_datetime', '');
	}else{
		update_post_meta( $post_id, 'event_datetime', '');
	}


	// Update Event End Date
	if($_POST['event_end_date']!=''){
		$time = new DateTime($_POST['event_end_date'].''. $_POST['event_time_end']);
		$stamp = $time->format('Y-m-d H:i');
		update_post_meta( $post_id, 'event_end_date', $stamp);
	}else{
		update_post_meta( $post_id, 'event_end_date', '');
	}

	// Update add to cart custom link
	update_post_meta( $post_id, 'custom_add_to_cart', $_POST['custom_add_to_cart']);
	
	// Update Expire on time(start or end date)
	update_post_meta( $post_id, 'expire_product', $_POST['expire_product']);
	
	//update address
	update_post_meta( $post_id, 'address', $_POST['address']);
	
	//Update lat and long
	update_post_meta( $post_id, 'event_lat', $_POST['lat']);
	update_post_meta( $post_id, 'event_lang', $_POST['long']);	
	
}

add_action('woocommerce_process_product_meta', 'process_product_meta_event_tab', 10, 2);

  



  

/**

 * Render the Event product tab panel content for the callback 'event_product_tabs_panel_content'

 */

function event_product_tabs_panel_content( $key, $event_tab_options ) {

			echo '<h2>' . __($event_tab_options['title'], 'wooevents') . '</h2>';
            _e( $event_tab_options['content'] , 'wooevents');

    }



  

function events_tab_options() { ?>

        <li class="events_tab"><a href="#events_tab"><?php _e('Events Manager', 'wooevents'); ?></a></li>

<?php }

add_action('woocommerce_product_write_panel_tabs', 'events_tab_options');


/**

 * Event Tab Options

 *

 * Provides the input fields and add/remove buttons for Event tab on the single product page.

 */

function event_tab_options() {

        global $post;
		$event_tab_options = array(   

				'event_date' => (get_post_meta($post->ID, 'event_datetime', true) != '' ? date('d-m-Y',strtotime(get_post_meta($post->ID, 'event_datetime', true))) : ''),     
				
				'event_end_date' => (get_post_meta($post->ID, 'event_end_date', true) != '' ? date('d-m-Y',strtotime(get_post_meta($post->ID, 'event_end_date', true))) : ''),     
				
				'event_time' => date('H:i',strtotime(get_post_meta($post->ID, 'event_datetime', true))),        

				'custom_add_to_cart' => get_post_meta($post->ID, 'custom_add_to_cart', true),
				
				'expire_product'	=> get_post_meta($post->ID, 'expire_product', true),
				
				'event_time_end'	=> date('H:i',strtotime(get_post_meta($post->ID, 'event_end_date', true))),
				
				'address'			=>get_post_meta($post->ID, 'address', true),
				
				'lat'			=>get_post_meta($post->ID, 'event_lat', true),
				
				'lang'			=>get_post_meta($post->ID, 'event_lang', true)

		);

?>

        <div id="events_tab" class="panel woocommerce_options_panel">

            <div class="options_group event_tab_options">                                                                        

                    <p class="form-field">

                            <label><?php _e('Select Event start Date :', 'wooevents'); ?></label>

                            <input type="text" name="event_date" id="event_date" value="<?php echo @$event_tab_options['event_date']; ?>" placeholder="<?php _e('Enter Event start Date', 'wooevents'); ?>" />
							<input type="text" class="woo_time"  name="event_time_start" id="event_time_start" value="<?php echo @$event_tab_options['event_time']; ?>" placeholder="<?php _e('Start time E.g: 19:30', 'wooevents'); ?>" />

                    </p>

    		</div>



            <div class="options_group event_tab_options">                                                                        

                    <p class="form-field">

                            <label><?php _e('Select Event End Date (optional) :', 'wooevents'); ?></label>

                            <input type="text" name="event_end_date" id="event_end_date" value="<?php echo @$event_tab_options['event_end_date']; ?>" placeholder="<?php _e('Enter Event End Date', 'wooevents'); ?>" />
							<input type="text" class="woo_time" name="event_time_end" id="event_time_end" value="<?php echo @$event_tab_options['event_time_end']; ?>" placeholder="<?php _e('End Time E.g: 19:30', 'wooevents'); ?>" />

                    </p>

            </div>


    		<div class="options_group event_tab_options">                                                                        

                    <p class="form-field">

                            <label><?php _e('Event external link :', 'wooevents'); ?></label>

                            <input type="text" name="custom_add_to_cart" id="custom_add_to_cart" value="<?php echo @$event_tab_options['custom_add_to_cart']; ?>" placeholder="<?php _e('E.g: http://www.example.com/my-product', 'wooevents'); ?>" />

                    </p>

    		</div>
			
			<div class="options_group event_tab_options">                                                                        

                    <p class="form-field">

                            <label><?php _e('Expire Event Date:', 'wooevents'); ?></label>
						   <input type="radio" name="expire_product" id="expire_product_start_date" value="0" <?php if(@$event_tab_options['expire_product']==0){ echo "checked"; } ?> /><?php _e('Start Date:', 'wooevents'); ?>
						  
						   <input type="radio" name="expire_product" id="expire_product_end_date" value="1" <?php if(@$event_tab_options['expire_product']==1){ echo "checked"; } ?> /><?php _e('End Date:', 'wooevents'); ?>
						   
                    </p>

    		</div>
			<?php if(get_option('woo_event_google_api_key')!=''){ ?>
			<div class="options_group event_tab_options">                                                                        
				<p class="form-field">
					<label><?php _e('Address:', 'wooevents'); ?></label>
						<input id="autocomplete" name="address" value="<?php echo @$event_tab_options['address']; ?>" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
						<input type="hidden" id="latitude" name="lat" value="<?php echo @$event_tab_options['lat']; ?>"/>
						<input type="hidden" id="longitude" name="long" value="<?php echo @$event_tab_options['lang']; ?>"/>
				</p>
    		</div>
			<?php } ?>
        </div>
		<?php if(get_option('woo_event_google_api_key')!=''){ ?>
		<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo get_option('woo_event_google_api_key'); ?>&libraries=places&callback=initAutocomplete" async defer></script>
		<script>
		
			  window.onerror = function (msg, url, lineNo, columnNo, error) { alert(); }
			var placeSearch, autocomplete;
			function initAutocomplete() {
				// Create the autocomplete object, restricting the search to geographical
				// location types.
				autocomplete = new google.maps.places.Autocomplete(
					/** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
					{types: ['geocode']});
				//Get lat and lang
				google.maps.event.addListener(autocomplete, 'place_changed', function() {
				var place = autocomplete.getPlace();
				var lat = place.geometry.location.lat();
				var lng = place.geometry.location.lng();
				var placeId = place.place_id;
				  
				document.getElementById("latitude").value = lat;
				document.getElementById("longitude").value = lng;
			});
			}
			//Get location as a dropdown
			function geolocate() {
			  if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function(position) {
				  var geolocation = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
				  };
				   var circle = new google.maps.Circle({
					center: geolocation,
					radius: position.coords.accuracy
				  });
				  autocomplete.setBounds(circle.getBounds());
				});
			  }
			  }
		</script>
		<?php } ?>
<?php

}

add_action('woocommerce_product_write_panels', 'event_tab_options');



/**

 * Event Tab Front

 *

 * Display Event Date on Shop page

 */

function get_woo_event_dates( $product_id = ''){
	
	global $post,$woocommerce,$product;
	
	if( '' != $product_id )
		$product_id = $product_id;
	else
		$product_id = get_the_ID();
	
	
    $event_Datetime = get_post_meta( $product_id ,'event_datetime',true);
	$event_end_Date = get_post_meta( $product_id ,'event_end_date',true);
	$end_Date = get_post_meta( $product_id ,'event_end_date',true);


    if($event_Datetime && $event_Datetime !=''):

        if($event_end_Date && $event_end_Date !=''){
			$event_end_Date = ' - '. date(get_option('date_format'), strtotime($event_end_Date) );
            $time =  '';
        }else{
			//$hrs = __('u');
			$time = date(get_option('time_format'), strtotime($event_Datetime)) ;
            $event_end_Date = '';

        }
		//strtotime($end_Date). strtotime(date('d-m-Y'));
        $start_date =  date(get_option('date_format'),strtotime($event_Datetime));
		if($end_Date!='' and strtotime($end_Date)<strtotime(date('d-m-Y'))){
			$color='red';
		}
		
		
		return '<span class="event_datetime" style="font-size: 12px; color:'.$color.'">'.date(get_option('date_format'), strtotime($event_Datetime)).$event_end_Date.$time. '</span>';
       
    endif;
}

add_action( 'woocommerce_after_shop_loop_item_title','display_event_date',0 );

function display_event_date(){
	
     echo get_woo_event_dates();
}

function woo_event_order_item_name( $name, $item ){
    
    $product_id = $item['product_id'];
	$name .= get_woo_event_dates( $product_id );
	return $name  ;

}
add_filter( 'woocommerce_order_item_name', 'woo_event_order_item_name', 10, 2 );
/**

 * Event Tab Front

 *

 * Display Event Date on Single Product

 */
 
//add_action( 'woocommerce_thankyou','add_google_calandar_link');
add_action('woocommerce_order_item_meta_start', 'add_google_calandar_link',10,10,10);
function add_google_calandar_link($item, $item_id, $order){
	//echo "<pre>"; print_r($item_id['product_id']); exit;
		$product_id=$item_id['product_id'];
		$event_Datetime = get_post_meta($product_id,'event_datetime',true);
		$end_Date = get_post_meta($product_id,'event_end_date',true);
		if($event_Datetime==''){ return; }
		//Event start date and time
		$start_year=date('Y', strtotime($event_Datetime));
		$start_month=date('m', strtotime($event_Datetime));
		$start_day=date('d', strtotime($event_Datetime));
		$event_start_date=$start_year.$start_month.$start_day;
		$start_hour=date('H', strtotime($event_Datetime));
		$start_minute=date('i', strtotime($event_Datetime));
		$event_start_time=$start_hour.$start_minute;
		//Event End date and time
		$end_year=date('Y', strtotime($end_Date));
		$end_month=date('m', strtotime($end_Date));
		$end_day=date('d', strtotime($end_Date));
		$e_end_date=$end_year.$end_month.$end_day;
		$end_hour=date('H', strtotime($end_Date));
		$end_minute=date('i', strtotime($end_Date));
		$e_end_time=$end_hour.$end_minute; 
		$post=get_post($product_id);
		if(get_option('allow_google_calandar')=='yes'){
			if(get_post_meta($product_id, 'address', true)!=''){
				$address='&location='.urlencode(get_post_meta($product_id, 'address', true));
			}else{
				$address='';
			}
		$google_calandar="<div class='add_to_google_calandar'><a href='https://calendar.google.com/calendar/render?action=TEMPLATE&text=".urlencode(get_the_title($product_id))."&dates=".$event_start_date."T".$event_start_time."00/".$e_end_date."T".$e_end_time."00&details=".urlencode($post->post_content).$address."' target='_blank' title='".__('Add this event to my Google calandar', 'wooevents')."'> <img src='".CCW_PLUGIN_URL."assets/images/google_calandar.ico' class='google_calandar_img' /> Add to Google calandar </a></div>";
        }else{
			$google_calandar='';
		}
		echo $google_calandar;	
}

add_action( 'woocommerce_single_product_summary','event_on_single_page',1 );



function event_on_single_page(){
	
    global $post,$woocommerce;
	echo get_woo_event_dates();
	
	
}

if(get_option('woo_event_google_api_key')!='' and get_option('show_google_map_on_product')=='yes'){
add_action('woocommerce_after_single_product_summary', 'woocommerce_add_map_after_single_product_summary',20);
}

function woocommerce_add_map_after_single_product_summary(){
	echo " <div id='map'></div>
	
    <script>
      function initMap() {
        var uluru = {lat: ".get_post_meta(get_the_ID(), 'event_lat', true).", lng: ".get_post_meta(get_the_ID(), 'event_lang', true)."};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
	<script  src='https://maps.googleapis.com/maps/api/js?key=".get_option('woo_event_google_api_key')."&callback=initMap'> </script> ";
}

/**

 * Event Tab Front
 *
 * Display Buy Tickets Button Product Listing Page
 */



/*STEP 1 - REMOVE ADD TO CART BUTTON ON PRODUCT ARCHIVE (SHOP) */



function remove_loop_button(){

	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	
}

add_action('init','remove_loop_button');



/*STEP 2 -ADD NEW BUTTON THAT LINKS TO PRODUCT PAGE FOR EACH PRODUCT */



add_action('woocommerce_after_shop_loop_item','replace_add_to_cart');

function replace_add_to_cart() {

	global $product;

	$link = $product->get_permalink();
 
   $event_add_to_cart_custom_url = get_post_meta($product->id,'custom_add_to_cart',true);
	$event_date = get_post_meta($product->id,'event_datetime',true);
   if($event_add_to_cart_custom_url != '') {
   		// now add new button with custom link
		echo '<a href="'.$event_add_to_cart_custom_url.'" class="button addtocartbutton" target="_blank">'.__('TICKETS', 'wooevents').'</a>';
    }else{
	//if the product is in stock
		if($event_date!='' && (!is_event_date_passed($product->id) || get_option('passed_events_purchasable')=='yes')){
		echo '<a href="'.site_url().'/?add-to-cart='.$product->id.'" data-quantity="1" data-product_id="'.$product->id.'" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">'.__('BOOK NOW', 'wooevents') .'</a>';
		}elseif($event_date!='' && is_event_date_passed($product->id)){
			echo '<span>'.__('Expired', 'wooevents').'</span>';
		} else{
			echo '<a rel="nofollow" href="'.site_url().'/?add-to-cart='.$product->id.'" data-quantity="1" data-product_id="'.$product->id.'" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">'.__('ADD TO CART', 'wooevents').'</a>';
			
		}

    }
}

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // < 2.1

function woo_custom_cart_button_text() {
 global $product;
 $event_date = get_post_meta($product->id,'event_datetime',true);
 if($event_date!=''){
        return __( 'Book Now', 'wooevents' );
 } else{
	 return __( 'Add to cart', 'wooevents' );
 }
 
}

/**

 * Event Tab Front
 *
 * Order Shop page by Event Date and time

 */

if( get_option('only_events') == 'yes'){
	add_filter('woocommerce_get_catalog_ordering_args', 'event_woocommerce_catalog_orderby');
}
function event_woocommerce_catalog_orderby( $args ) {
    $args['meta_key'] = 'event_datetime';
    $args['orderby'] = ('meta_value');
    $args['order'] = 'asc';
    return $args;

}




/**
 * Event Tab Front
 *
 * Modifying shop page query to show the events only if the event date is greater than today date

 */

add_action( 'pre_get_posts', 'rc_modify_query_get_posts_by_date' );

function rc_modify_query_get_posts_by_date( $query ) {

	// Check if on frontend and main query is modified

	if( ! is_admin() && $query->is_main_query() && $query->query_vars['post_type'] == 'product' && is_shop() && get_option('only_events') == 'no') {
        $query->set( 'order', 'desc' );
        add_filter( 'posts_where', 'rc_filter_where' );

    }elseif(! is_admin() && $query->is_main_query() && $query->query_vars['post_type'] == 'product' && is_shop() && get_option('only_events') == 'yes'){
		$query->set( 'order', 'desc' );
		 add_filter( 'posts_where', 'rc_filter_where' );
	}elseif(!is_admin()){
		$query->set( 'order', 'desc' );
        add_filter( 'posts_where', 'rc_filter_where' );
	}
	
	
   if( ! is_admin() && $query->is_main_query() && $query->query_vars['post_type'] == 'product' && is_page('passed-events') ) {
        $query->set( 'order', 'desc' );
        add_filter( 'posts_where', 'rc_filter_where' );
    }
	
    return $query;

}


/**
 * Event Tab Front
 *
 * Joining postmeta in query to get post by event_date meta key

 */

function custom_posts_join($join){
	 global $wpdb;



	 if(is_shop() && !is_admin()){

	 $join .= " LEFT JOIN $wpdb->postmeta as meta_1 ON $wpdb->posts.ID = meta_1.post_id LEFT JOIN $wpdb->postmeta as meta_2 ON $wpdb->posts.ID = meta_2.post_id";
    
	}
	
	if(is_page('passed-events') && !is_admin() ){
		
	 $join .= " LEFT JOIN $wpdb->postmeta as meta_1 ON $wpdb->posts.ID = meta_1.post_id LEFT JOIN $wpdb->postmeta as meta_2 ON $wpdb->posts.ID = meta_2.post_id";
    }
	 return $join;

}

add_filter( 'posts_join' , 'custom_posts_join');


/**

 * Event Tab Front

 *

 * Filtering now. Adding query String

 */

function rc_filter_where( $where = '' ) {



    if(is_shop() && get_option('only_events') == 'yes'){

		$where .= "AND meta_1.meta_key='event_datetime' AND meta_1.meta_value !=''";
	
    }elseif(is_shop() && get_option('only_events') == 'no'){
		$where .= "OR (meta_1.meta_key='event_datetime' AND meta_1.meta_value !='')";
	}
	
	if(is_page('passed-events')){

    $where .= " OR (meta_1.meta_key='event_datetime' AND meta_1.meta_value < NOW())";

    }
	
    return $where;

}



/**
 * Event Tab Front
 *
 * Add event date time to cart and checkout page
 */

function woo_event_dates_on_checkout( $product_link, $cart_item, $cart_item_key ) {
	
	$product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
	$product_link .= ' ';
    $product_link .= get_woo_event_dates( $cart_item['product_id'] );
	return   $product_link;
	
}

add_filter( 'woocommerce_cart_item_name', 'woo_event_dates_on_checkout', 10, 3 );


/**
 * Event Tab Front
 *
 * Disable Add to cart purchasing if the custom link for product is available
 */

function is_extrnal_link_to_event( $purchasable, $product ){
    global $post;

    $event_add_to_cart_custom_url = get_post_meta($post->ID,'custom_add_to_cart',true);
	if($event_add_to_cart_custom_url && $event_add_to_cart_custom_url != '')
        $purchasable = false;

    return $purchasable;
}
 add_filter( 'woocommerce_is_purchasable', 'is_extrnal_link_to_event', 10, 2 );



/**
 * Event Tab Front
 *
 * Adding custom button to single page if the custom add to cart link is available
 */

add_action( 'woocommerce_single_product_summary', 'event_custom_url_button_on_product_page', 30 );

function event_custom_url_button_on_product_page() {
  global $post;
 
   $event_add_to_cart_custom_url = get_post_meta($post->ID,'custom_add_to_cart',true);
   
   if($event_add_to_cart_custom_url != '') {
   		// now add new button with custom link
		echo '<a href="'.$event_add_to_cart_custom_url.'" class="button addtocartbutton" target="_blank">'.__('TICKETS', 'wooevents').'</a>';
    }

}


if ( ! function_exists( 'product_attribute' ) ) {
 function product_attribute( $atts ) {
    $atts = shortcode_atts( array(
      'per_page'  => '12',
      'columns'   => '4',
      'orderby'   => 'date',
      'order'     => 'asc',
      'attribute' => '',
      'filter'    => ''
    ), $atts );

    $query_args = array(
      'post_type'           => 'product',
      'post_status'         => 'publish',
      'ignore_sticky_posts' => 1,
      'posts_per_page'      => $atts['per_page'],
      'orderby'             => $atts['orderby'],
      'order'               => $atts['order'],
      'meta_query'          => WC()->query->get_meta_query(),
      'tax_query'           => array(
        array(
          'taxonomy' => strstr( $atts['attribute'], 'pa_' ) ? sanitize_title( $atts['attribute'] ) : 'pa_' . sanitize_title( $atts['attribute'] ),
          'terms'    => array_map( 'sanitize_title', explode( ',', $atts['filter'] ) ),
          'field'    => 'slug'
        )
      )
    );

   // return self::product_loop( $query_args, $atts, 'product_attribute' );
    return $this->product_loop( $query_args, $atts, 'product_attribute' );
  }
}


if ( ! function_exists( 'is_event_date_passed' ) ) {
	function is_event_date_passed($event_id){	
		$event_expire=get_post_meta($event_id, 'expire_product', true);
		$event_date = get_post_meta($event_id, 'event_datetime', true);
		$event_end_date = get_post_meta( $event_id ,'event_end_date',true);
		if($event_date!='' || $event_end_date!=''){
			if($event_expire==1 and $event_end_date!=''){
				
				$event_date=get_post_meta( $event_id ,'event_end_date',true);
				
			} elseif($event_expire==0 and $event_date != ''){ 
				$event_date=get_post_meta($event_id, 'event_datetime', true);
			}
				$gmt=get_option('gmt_offset'); //get the timezone int value from wordpress
				$time_wrt_utc=$gmt*3600;		//hours*3600sec get the time w.r.t UTC 0
				return strtotime($event_date) < time()+$time_wrt_utc ? true: false;
			
		}else{
			return;
		}
	}
	
}
/**
 * Event Tab Front
 *
 * Can User make Booking for passed events
 */
if ( ! function_exists( 'is_event_passed' ) ) {
	function is_event_passed($purchasable, $product){ //echo $product->id; exit;
		if( is_event_date_passed($product->id) && (get_option('passed_events_purchasable') == 'no' || get_option('passed_events_purchasable')=='') ){
			$purchasable=false;
			add_action( 'woocommerce_single_product_summary', 'single_product_event_expired_text', 30 );
		}else{
			$purchasable=true;
		}
		return $purchasable;
	}
}

function single_product_event_expired_text(){
	echo '<span style="color:red;">'.__('Event Expired', 'wooevents').'</span>';
}
add_filter( 'woocommerce_is_purchasable', 'is_event_passed', 10, 2 );