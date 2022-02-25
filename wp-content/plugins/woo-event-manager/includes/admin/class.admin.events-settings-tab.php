<?php
if ( ! class_exists( 'woo_events_settings' ) ) :
class woo_events_settings{
	public function __construct() {
		//add_filter( 'woocommerce_get_sections_products', array($this,'add_woo_events_settings_tab') );
		add_filter( 'woocommerce_settings_tabs_array', array($this,'add_woo_events_settings_tab'), 50 );
		add_action( 'woocommerce_settings_tabs_ccw_settings', array($this,'add_woo_events_settings') );
		add_action( 'woocommerce_update_options_ccw_settings', __CLASS__ . '::update_woo_events_settings' );
	}
	
	public function add_woo_events_settings_tab($sections){
		$sections['ccw_settings'] = __( 'Woo Events', 'CCW_TEXTDOMAIN' );
		return $sections;
	}
	
	
	public function add_woo_events_settings(){
		 woocommerce_admin_fields( $this->get_woo_events_settings() );
	}
	
	public function get_woo_events_settings(){
		 $settings = array(
        'events_on_shop' => array(
            'name'     => __( 'Event Options', 'CCW_TEXTDOMAIN' ),
            'type'     => 'title',
            'desc'     => '',
            'id'       => 'show_events_on_shop'
        ),
        'show_events_on_shop' => array(
            'name' => __( 'Only Events on Shop page', 'CCW_TEXTDOMAIN' ),
            'type' => 'checkbox',
            'desc' => __( 'Show Only Events on Shop page', 'CCW_TEXTDOMAIN' ),
            'id'   => 'only_events'
        ),
        'passed_events_purchasable' => array(
            'name' => __( 'Book Passed Events', 'CCW_TEXTDOMAIN' ),
            'type' => 'checkbox',
            'desc' => __( 'Can User book Passed Events', 'CCW_TEXTDOMAIN' ),
            'id'   => 'passed_events_purchasable'
        ),
		'show_google_map_on_product' => array(
            'name' => __( 'Show Google Map', 'CCW_TEXTDOMAIN' ),
            'type' => 'checkbox',
            'desc' => __( 'Show Google Map on sigle event page', 'CCW_TEXTDOMAIN' ),
            'id'   => 'show_google_map_on_product'
        ),
		'add_to_google_calandar' => array(
            'name' => __( 'Allow Google calandar', 'CCW_TEXTDOMAIN' ),
            'type' => 'checkbox',
            'desc' => __( 'Show Add to Google calandar Link on events', 'CCW_TEXTDOMAIN' ),
            'id'   => 'allow_google_calandar'
        ),
        'google_api_key' => array(
            'name' => __( 'Google API key', 'CCW_TEXTDOMAIN' ),
            'type' => 'text',
            'desc' => __( 'Please enter your Google API key here', 'CCW_TEXTDOMAIN' ),
            'id'   => 'woo_event_google_api_key'
        ),
        'section_end' => array(
             'type' => 'sectionend',
             'id' => 'wc_settings_tab_demo_section_end'
        )
    );
    return apply_filters( 'woo_events_manager_settings', $settings );
	}
	
	public function update_woo_events_settings(){
		woocommerce_update_options( self::get_woo_events_settings() );
	}
}
$ccw_events_settings = new woo_events_settings();
endif;

?>