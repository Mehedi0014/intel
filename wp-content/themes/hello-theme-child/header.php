<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' );
$enable_skip_link = apply_filters( 'hello_elementor_enable_skip_link', true );
$skip_link_url = apply_filters( 'hello_elementor_skip_link_url', '#content' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php if ( $enable_skip_link ) { ?>
<a class="skip-link screen-reader-text" href="<?php echo esc_url( $skip_link_url ); ?>"><?php echo esc_html__( 'Skip to content', 'hello-elementor' ); ?></a>
<?php } ?>

<?php
$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );
/* $header_nav_menu = wp_nav_menu( [
	'theme_location' => 'menu-1',
	'fallback_cb' => false,
	'container' => false,
	'echo' => false,
] ); */

$menu_args = [
	'theme_location' => 'menu-1',
	'fallback_cb' => false,
	'container' => false,
	'echo' => false,
];

$is_editor = isset( $_GET['elementor-preview'] );
$header_class = did_action( 'elementor/loaded' ) ? hello_get_header_layout_class() : '';
$header_nav_menu = wp_nav_menu( $menu_args );
$header_mobile_nav_menu = wp_nav_menu( $menu_args );
?>



<?php
/* 
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
	if ( hello_elementor_display_header_footer() ) {
		if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
			// get_template_part( 'template-parts/dynamic-header' );
        ?>        
        <header id="site-header" class="site-header dynamic-header <?php echo esc_attr( $header_class ); ?>">
            <div class="header-inner">
                <div class="site-branding show-<?php echo esc_attr( hello_elementor_get_setting( 'hello_header_logo_type' ) ); ?>">
                    <?php if ( has_custom_logo() && ( 'title' !== hello_elementor_get_setting( 'hello_header_logo_type' ) || $is_editor ) ) : ?>
                        <div class="site-logo <?php echo esc_attr( hello_show_or_hide( 'hello_header_logo_display' ) ); ?>">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php endif;

                    if ( $site_name && ( 'logo' !== hello_elementor_get_setting( 'hello_header_logo_type' ) || $is_editor ) ) : ?>
                        <div class="site-title <?php echo esc_attr( hello_show_or_hide( 'hello_header_logo_display' ) ); ?>">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr__( 'Home', 'hello-elementor' ); ?>" rel="home">
                                <?php echo esc_html( $site_name ); ?>
                            </a>
                        </div>
                    <?php endif;

                    if ( $tagline && ( hello_elementor_get_setting( 'hello_header_tagline_display' ) || $is_editor ) ) : ?>
                        <p class="site-description <?php echo esc_attr( hello_show_or_hide( 'hello_header_tagline_display' ) ); ?>">
                            <?php echo esc_html( $tagline ); ?>
                        </p>
                    <?php endif; ?>
                </div>

                <?php if ( $header_nav_menu ) : ?>
                    <nav class="site-navigation <?php echo esc_attr( hello_show_or_hide( 'hello_header_menu_display' ) ); ?>" aria-label="<?php echo esc_attr__( 'Main menu', 'hello-elementor' ); ?>">
                        <?php
                        echo $header_nav_menu;
                        ?>
                    </nav>
                <?php endif; ?>
                <?php if ( $header_mobile_nav_menu ) : ?>
                    <div class="site-navigation-toggle-holder <?php echo esc_attr( hello_show_or_hide( 'hello_header_menu_display' ) ); ?>">
                        <button type="button" class="site-navigation-toggle" aria-label="<?php echo esc_attr( 'Menu', 'hello-elementor' ); ?>">
                            <span class="site-navigation-toggle-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                    <nav class="site-navigation-dropdown <?php echo esc_attr( hello_show_or_hide( 'hello_header_menu_display' ) ); ?>" aria-label="<?php echo esc_attr__( 'Mobile menu', 'hello-elementor' ); ?>" aria-hidden="true" inert>
                        <?php
                        echo $header_mobile_nav_menu;
                        ?>
                    </nav>
                <?php endif; ?>
            </div>
        </header>      
        <?php
		} else {
			// get_template_part( 'template-parts/header' );            
            ?>
            <header id="site-header" class="site-header">
                <h1>    Mehedi</h1>
                <div class="site-branding">
                    <?php
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    } elseif ( $site_name ) {
                        ?>
                        <div class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr__( 'Home', 'hello-elementor' ); ?>" rel="home">
                                <?php echo esc_html( $site_name ); ?>
                            </a>
                        </div>
                        <?php if ( $tagline ) : ?>
                        <p class="site-description">
                            <?php echo esc_html( $tagline ); ?>
                        </p>
                        <?php endif; ?>
                    <?php } ?>
                </div>

                <?php if ( $header_nav_menu ) : ?>
                    <nav class="site-navigation" aria-label="<?php echo esc_attr__( 'Main menu', 'hello-elementor' ); ?>">
                        <?php
                        echo $header_nav_menu;
                        ?>
                    </nav>
                <?php endif; ?>
            </header>
            <?php
		}
	}
}
 */
?>




<div class="fixedElement">
	<div id="masthead" class="masthead">
    	<div class="container-fluid">
        	<div class="row">       	 
       	 
                <div class="col-9 col-md-3 NavBgColor" id="logo_part">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr__( 'Home', 'hello-elementor' ); ?>" rel="home">
                        <!-- <img src="<?php // bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" class="menu_logo" alt="Logo"> -->
                        <?php if ( has_custom_logo() && ( 'title' !== hello_elementor_get_setting( 'hello_header_logo_type' ) || $is_editor ) ) : ?>
                        <div class="site-logo <?php echo esc_attr( hello_show_or_hide( 'hello_header_logo_display' ) ); ?>">
                            <?php the_custom_logo(); ?>
                        </div>
                        <?php endif; 

                        if ( $site_name && ( 'logo' !== hello_elementor_get_setting( 'hello_header_logo_type' ) || $is_editor ) ) : ?>
                            <div class="site-title <?php echo esc_attr( hello_show_or_hide( 'hello_header_logo_display' ) ); ?>">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr__( 'Home', 'hello-elementor' ); ?>" rel="home">
                                    <?php echo esc_html( $site_name ); ?>
                                </a>
                            </div>
                        <?php endif;

                        /* if ( $tagline && ( hello_elementor_get_setting( 'hello_header_tagline_display' ) || $is_editor ) ) : ?>
                            <p class="site-description <?php echo esc_attr( hello_show_or_hide( 'hello_header_tagline_display' ) ); ?>">
                                <?php echo esc_html( $tagline ); ?>
                            </p>
                        <?php endif; */
                        ?>
                    </a>
                </div>


                <header id="masthead_part" class="col-3 col-md-9 NavBgColor">
                    <nav>
                        <?php                                
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'    	=> 'primary-menu',
                        ) );                            
                        ?>
                    </nav><!-- #site-navigation -->
                </header><!-- #masthead_part -->

        	</div> <!-- row -->
    	</div> <!-- container-fluid -->
	</div> <!-- #masthead -->
</div> <!-- fixedElement-->
