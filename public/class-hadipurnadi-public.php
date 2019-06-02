<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       lapakunik.com
 * @since      1.0.0
 *
 * @package    Hadipurnadi
 * @subpackage Hadipurnadi/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Hadipurnadi
 * @subpackage Hadipurnadi/public
 * @author     Hadi Purnadi <hadipurnadi@gmail.com>
 */
class Hadipurnadi_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->wp_cbf_options = get_option($this->plugin_name);

	}
	

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hadipurnadi_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hadipurnadi_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/hadipurnadi-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hadipurnadi_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hadipurnadi_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/hadipurnadi-public.js', array( 'jquery' ), $this->version, false );

	}
	
	function add_pop_up_custom() {
	    if(!empty($this->wp_cbf_options['switch'])&&$this->wp_cbf_options['switch']==1){
	        if(!empty($this->wp_cbf_options['tujuan'])&&!empty($this->wp_cbf_options['login_logo_id'])){
	            if(!is_admin()){
	            
	            $login_logo = wp_get_attachment_image_src($this->wp_cbf_options['login_logo_id'], 'full');
                $login_logo_url = wp_parse_url( $login_logo[0] );
            ?>
                <div id="ngambang" >
                  <a href="<?=$this->wp_cbf_options['tujuan']?>">
                  <div style="background-image: url('<?php echo $login_logo_url['path']; ?>');height: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;" id="posisi"></div></a>
                </div>
        
            <?php
	            }
	        }
	    }
    }
	
	

}
