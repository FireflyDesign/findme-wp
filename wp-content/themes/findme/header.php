<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

	<script type="text/javascript">
		var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
		console.log(ajaxurl);
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
