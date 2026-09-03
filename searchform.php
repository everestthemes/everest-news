<?php
/**
 * The template for displaying search forms
 *
 * @package Everest_News
 */

?>
<form role="search" method="get" id="search-form" class="clearfix" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" name="s" placeholder="<?php echo esc_attr__( 'Type Something', 'everest-news' ); ?>" value="<?php echo get_search_query(); ?>" >
	<input type="submit" id="submit" value="<?php echo esc_attr__( 'Search', 'everest-news' ); ?>">
</form>
