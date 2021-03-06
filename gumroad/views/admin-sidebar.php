<?php

/**
 * Sidebar portion of the administration dashboard view.
 *
 * @package    GUM
 * @subpackage views
 * @author     Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="sidebar-container">
	<div class="sidebar-content">
		<p>
			<?php _e( 'We\'d love a super short review. Seriously, it means a lot.', 'gum' ); ?>
		</p>

		<a href="https://wordpress.org/support/view/plugin-reviews/gumroad" class="button-primary" target="_blank">
			<?php _e( 'Submit a review', 'gum' ); ?></a>
	</div>
</div>

<div class="sidebar-container">
	<div class="sidebar-content">
		<p>
			<?php _e( 'Need some help? Have a feature request?', 'gum' ); ?>
		</p>
		<p>
			<a href="https://wordpress.org/support/plugin/gumroad" target="_blank">
				<?php _e( 'Visit our Community Support Forums', 'gum' ); ?></a>
		</p>
	</div>
</div>
