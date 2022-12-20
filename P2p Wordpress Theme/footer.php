<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package p2p
 */

?>
	
    <section class="footer pb-0 position-absolute w-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-content">
                        <div>
                            <div class="devider"></div>
                            <?php //Footer Menu 1
								wp_nav_menu(
									array(
									'theme_location' => 'footer-menu-1',
									'menu_id'        => 'footer-menu-1',
                                    'container' => 'none',
									'menu_class'=> 'footer-nav',
									'add_li_class'  => 'footer-nav-item',
									'add_a_class'  => 'footer-nav-link',
									)
							);
							?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-content">
                        <div>
                            <div class="devider"></div>
                            <?php //Footer Menu 2
								wp_nav_menu(
									array(
									'theme_location' => 'footer-menu-2',
									'menu_id'        => 'footer-menu-2',
                                    'container' => 'none',
									'menu_class'=> 'footer-nav',
									'add_li_class'  => 'footer-nav-item',
									'add_a_class'  => 'footer-nav-link',
									)
							);
							?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-content">
                        <div>
                            <div class="devider"></div>
                            <?php
								wp_nav_menu(
									array(
									'theme_location' => 'footer-menu-3',
                                    'menu-id' => 'footer-menu-3',
									'container' => 'none',
									'menu_class'=> 'footer-nav',
                                    'add_li_class'  => 'footer-nav-item',
									'add_a_class'  => 'footer-nav-link',
									)
							);
							?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-content">
                        <div>
                            <div class="devider"></div>
                            <div class="social-links">
							<?php
								wp_nav_menu(
									array(
									'theme_location' => 'menu-2',
                                    'menu-id' => 'soc-menu-footer',
									'container' => 'none',
									'menu_class'=> 'd-flex flex-row ml-lg-auto',
									'add_li_class'  => 'nav-item social-links pr-md-4',
									)
							);
							?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="footer-text">
                        Дигитална платформа за превенция на рисковото поведение сред деца ©
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php wp_footer(); ?>

</body>
</html>
