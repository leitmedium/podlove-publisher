<?php 
namespace Podlove\Modules\Social;
use \Podlove\Model;

class Social extends \Podlove\Modules\Base {

    protected $module_name = 'Social Media &amp; Donations';
    protected $module_description = 'Allows to manage Social Media Accounts and Donations Services for the Podcast.';
    protected $module_group = 'metadata';
	
    public function load() {
		add_action( 'podlove_podcast_form', array( $this, 'podcast_form_extension' ), 10, 2 );
		add_action( 'admin_init', array( $this, 'extend_podcast_model' ), 10, 2 );
	}

	public function extend_podcast_model() {
		$podcast = \Podlove\Model\Podcast::get_instance();
		$podcast->property( 'adn' );
		$podcast->property( 'twitter' );
		$podcast->property( 'facebook' );
		$podcast->property( 'flattr' );
		$podcast->property( 'adn' );
		$podcast->property( 'paypal' );
		$podcast->property( 'bitcoin' );
		$podcast->property( 'litecoin' );
		$podcast->property( 'amazonwishlist' );
	}

	public function podcast_form_extension($wrapper, $podcast)
	{
		$wrapper->subheader(
			__( 'Social Media', 'podlove' )
		);

		$wrapper->string( 'adn', array(
			'label'       => __( 'App.net', 'podlove' ),
			'description' => 'App.net username.'
		) );	
		
		$wrapper->string( 'twitter', array(
			'label'       => __( 'Twitter', 'podlove' ),
			'description' => 'Twitter username.'
		) );				
		
		$wrapper->string( 'facebook', array(
			'label'       => __( 'Facebook', 'podlove' ),
			'description' => 'Facebook URL.'
		) );	

		$wrapper->subheader( __( 'Donations', 'podlove' ) );

		$wrapper->string( 'flattr', array(
			'label'       => __( 'Flattr', 'podlove' ),
			'description' => 'Flattr username.'
		) );	

		$wrapper->string( 'paypal', array(
			'label'       => __( 'Paypal', 'podlove' ),
			'description' => 'Paypal button id.'
		) );	

		$wrapper->string( 'bitcoin', array(
			'label'       => __( 'Bitcoin', 'podlove' ),
			'description' => 'Bitcoin Address.'
		) );

		$wrapper->string( 'litecoin', array(
			'label'       => __( 'Litecoin', 'podlove' ),
			'description' => 'Litecoin Address.'
		) );
		
		$wrapper->string( 'amazonwishlist', array(
			'label'       => __( 'Wishlist', 'podlove' ),
			'description' => 'URL of the contributors wishlist (e.g. Amazon).'
		) );	
	}

}