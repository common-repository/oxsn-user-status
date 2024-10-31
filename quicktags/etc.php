<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_user_status_quicktags' ) ) {

	add_action( 'admin_print_footer_scripts', 'oxsn_user_status_quicktags' );
	function oxsn_user_status_quicktags() {

		if ( wp_script_is( 'quicktags' ) ) {

		?>

			<script type="text/javascript">
				QTags.addButton( 'oxsn_user_status_quicktag', '[oxsn_user_status]', '[oxsn_user_status logged="in"]', '[/oxsn_user_status]', 'oxsn_user_status', 'User Status', 201 );
			</script>

		<?php

		}

	}

}


?>