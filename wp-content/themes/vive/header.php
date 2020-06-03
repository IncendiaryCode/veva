<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vive
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- David removed GA snippet here on 5/15/20 so that it can be implemented with GTM4WP -->
	<!-- David is adding Google Optimize anti-flicker snippet here on 5/18/20-->
	<style>.async-hide { opacity: 0 !important} </style>
	<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
	h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
	(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
	})(window,document.documentElement,'async-hide','dataLayer',4000,
	{'GTM-NT6GNZZ':true});
	</script>
	<!--End anti-flicker snippet-->
    <?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vive' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-2">
                        <div class="site-branding">
                            <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
                            <h4 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h4>
                            <?php
			else :
				?>
                            <h4 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h4>
                            <?php
			endif;
			$vive_description = get_bloginfo( 'description', 'display' );
			if ( $vive_description || is_customize_preview() ) :
				?>
                            <p class="site-description"><?php echo $vive_description; /* WPCS: xss ok. */ ?></p>
                            <?php endif; ?>
                        </div><!-- .site-branding -->
                    </div>
                    <div class="col-md-10 col-10 text-right" style="margin-top: 5px;">
                       <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <nav class="navbar navbar-expand-lg">
                            
                            <div class="collapse navbar-collapse text-center" id="navbarNavDropdown">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                    'container' => 'ul',
                                    'menu_class'=>'navbar-nav'
                                ) );
                             ?>
                            </div>
                        </nav>


                        <nav id="site-navigation" class="main-navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'vive' ); ?></button>

                        </nav><!-- #site-navigation -->
                    </div>
                </div>
            </div>

        </header><!-- #masthead -->

        <div id="content" class="site-content">
