<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   WPMUNetworkAds
 * @author    Boris Aguilar <me@borisaguilar.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Your Name or Company Name
 */
?>

<div class="wrap">

	<?php screen_icon(); ?>
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
	<form action="/wp-admin/network/edit.php?action=wpmu_network_ads_snippet">
	      <label for="snippet-code">Snippet Code to use:</label>
	      <textarea name="snippet-code" rows=4 cols=2></textarea>
	      <?php submit_button(); ?>
	</form>

	<!-- TODO: Provide markup for your options page here. -->

</div>
