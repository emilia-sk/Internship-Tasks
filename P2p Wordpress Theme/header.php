<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package p2p
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'p2p' ); ?></a>

<header id="masthead" class="site-header">

<section class="navigation">
        <div class="container px-0">

            <nav class="navbar navbar-expand-lg py-md-3">

                <a class="navbar-brand" href="index.html">
				<?php if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				}; ?>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile"
                    aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="icon-bar">
                        <img src="../img/hamburger.svg" alt="">
                    </div>
                    <div class="icon-close">
                        <img src="../img/close.svg" alt="">
                    </div>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarMobile">
                    <div class="navbar-collapse-content">
                        <ul class="navbar-nav ml-lg-auto">

							<?php //Top Nav Main Menu
								wp_nav_menu(
									array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'=> 'navbar-nav ml-lg-auto',
									'add_li_class'  => 'nav-item',
									'add_a_class'  => 'nav-link',
									)
							);
							?>

							<?php //Top Nav Soc Links
								wp_nav_menu(
									array(
									'theme_location' => 'menu-2',
									'container' => 'none',
									'menu_class'=> 'navbar-nav ml-lg-auto',
									'add_li_class'  => 'nav-item social-links pr-md-4',
									)
							);
							?>

						<?php if(!is_user_logged_in()){?>
							<li class="nav-item mt-3 mt-md-0">
                        	<a class="nav-link btn-main text-decoration-none" href="<?php echo wp_login_url( home_url($user_page) ); ?>">Вход</a>
                            </li>
						<?php } ?>

						<?php if(is_user_logged_in()) { ?>
							
						<li class="nav-item mt-3 mt-md-0">
						<a class="nav-link btn-main text-decoration-none" href="<?php echo wp_logout_url( home_url() ); ?>" >Изход</a>
						</li>
						
						<?php } ?>
						
                        </ul>
                        <div class="mobile-menu-img d-flex justify-content-center mt-auto d-lg-none">
                            <img src="../img/book_lover.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </nav>

       		 </div>
    </section>

	</header>

	
