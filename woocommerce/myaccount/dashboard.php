<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$current_user = wp_get_current_user();
?>

<div class="custom-account-dashboard">
	<div class="custom-account-header">
		<h2><?php printf(esc_html__('Welcome, %s!', 'woocommerce'), esc_html($current_user->display_name)); ?></h2>
		<p>
			<?php
			printf(
				wp_kses(__('Not you? <a href="%1$s">Log out</a>', 'woocommerce'), array('a' => array('href' => array()))),
				esc_url(wc_logout_url())
			);
			?>
		</p>
	</div>

	<div class="custom-account-options">
		<p>
			<?php
			$dashboard_desc = __('From here, you can view your <a href="%1$s">orders</a>, manage <a href="%2$s">addresses</a>, and <a href="%3$s">update account details</a>.', 'woocommerce');
			printf(
				wp_kses($dashboard_desc, array('a' => array('href' => array()))),
				esc_url(wc_get_endpoint_url('orders')),
				esc_url(wc_get_endpoint_url('edit-address')),
				esc_url(wc_get_endpoint_url('edit-account'))
			);
			?>
		</p>
	</div>
</div>

<?php
do_action('woocommerce_account_dashboard');
?>

<?php
echo '<h2 class="best-sellers-heading">Best Sellers</h2>';
echo do_shortcode('[products limit="4" best_selling="true"]');
?>