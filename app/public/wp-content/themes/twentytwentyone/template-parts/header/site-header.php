<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= true === get_theme_mod( 'display_title_and_tagline', true ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">

	<?php get_template_part( 'template-parts/header/site-branding' ); ?>

</header><!-- #masthead -->

<div class="mastnav">
<?php echo do_shortcode( '[searchandfilter fields="post_tag,category,post_date,search" hierarchical=",1" types="checkbox,,daterange," search_placeholder="Pesquisar"]' ); ?>
</div>