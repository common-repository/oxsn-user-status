<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//[oxsn_user_status logged="in"]
if ( ! function_exists ( 'oxsn_user_status_shortcode' ) ) {

	add_shortcode('oxsn_user_status', 'oxsn_user_status_shortcode');
	function oxsn_user_status_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'logged' => 'in',
		), $atts );

		$oxsn_user_status_logged = esc_attr($a['logged']);
		$oxsn_user_status_logged = strtolower($oxsn_user_status_logged);

		if ($oxsn_user_status_logged == 'in') :

			if (is_user_logged_in()) :
				$output = do_shortcode($content);
				return $output;
			else :
				$output = '';
				return $output;
			endif;

		else :

			if (!is_user_logged_in()) :
				$output = do_shortcode($content);
				return $output;
			else :
				$output = '';
				return $output;
			endif;

		endif;

	}

}


?>