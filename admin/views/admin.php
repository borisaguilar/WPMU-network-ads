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
	      <label for="snippet-code"><h3>Snippet Code to use:</h3></label>
		<p><small>This snippet is shown on every page by hooking wp_foot.</small></p>
	      <textarea style="width:100%;" rows=10 id="snippet-code" name="snippet-code" rows=4 cols=2><?php get_option( 'wpmu_network_snippet' ); ?></textarea>
		
	      <label for="snippet-code-exceptions"><h3>Excluded Sites:</h3></label>
		<p><small>One per line, don't include https or http just the URL. This URL's won't have ads.</small></p>
	      <textarea style="width:100%;" rows=10 id="snippet-code-exceptions" name="snippet-code-exceptions" rows=4 cols=2><?php get_option( 'wpmu_network_exceptions' ); ?></textarea>
	      <?php submit_button(); ?>
	</form>

	<!-- TODO: Provide markup for your options page here. -->

</div>