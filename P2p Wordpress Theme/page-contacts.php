<?php /* Template Name: Contacts */ ?>

<?php get_header(); 

$section_1 = get_field( "section_1" );
$section_2 = get_field( "section_2" );
$contact_cards = $section_2['cards'];

?>

<section class="two-columns-text-img contacts position-relative overflow-hidden">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md">
                    <div class="text-center">
                        <h2 class="heading-main mb-4">
                        <?php echo $section_1['heading']; ?>
                        </h2>
                        <div class="devider-main mb-3 mx-auto"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="pr-md-5">
                        <p class="paragraph">
                        <?php echo $section_1['small_text']; ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-md-0 mt-5 mt-md-0">
                    <div class="two-images position-relative mt-4 mt-md-0">
                        <div class="img-1 text-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/obshchina-varna-logo.png" alt="" class="img-fluid">
                        </div>
                        <div class="img-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dots_around.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_cards_courses position-relative overflow-hidden">
        <div class="container container-width position-relative">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 class="heading-main mb-4">
                        <?php echo $section_2['heading']; ?>
                        </h2>
                        <div class="devider-main mb-3 mx-auto"></div>
                    </div>

                    <div class="cards_locations mt-5">

                    <?php   
                    if( $contact_cards ) { //Foreach Contact Cards Repeater

                        foreach ($contact_cards as $card) { 

                            $adress = $card['adress'];
                            $phone = $card['phone'];
                            $email = $card['email'];
                            $url = $card['url'];
                            
                            ?>

                       <div class="card_ position-relative d-flex mb-5">
                            <div class="img-card mr-md-5">
                                <img src="<?php echo $card['card_image']; ?>" alt="" class="img-fluid">
                            </div>
                            <div class="d-flex flex-column pt-3 mt-4 mt-md-0 px-3 px-md-0 px-lg-5">
                                <h4 class="card-title"><?php echo $card['card_heading']; ?></h4>

                                <div class="card-info d-flex align-items-start mt-3">
                                    <div class="mr-4">
                                        <?php if( !empty($adress) ): ?> <!-- Checks if field is empty -->
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/location.svg" alt="" class="img-fluid">
                                        <?php endif; ?> <!-- Checks if field is empty END -->
                                    </div>
                                    <div class="card-small-text mb-0 px-4"><?php echo $card['adress']; ?></div>
                                </div>

                                <div class="card-info d-flex align-items-center mt-2">
                                    <div class="mr-4">
                                    <?php if( !empty($email) ): ?> <!-- Checks if field is empty -->
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="" class="img-fluid">
                                    <?php endif; ?> <!-- Checks if field is empty END -->
                                    </div>
                                    <p class="card-small-text mb-0 px-4">
                                        <a href="mailto:" class="text-decoration-none"><?php echo $card['email']; ?></a>
                                    </p>
                                </div>

                                <div class="card-info d-flex align-items-center mt-2">
                                    <div class="mr-4">
                                    <?php if( !empty($phone) ): ?> <!-- Checks if field is empty -->
                                         <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="" class="img-fluid">
                                    <?php endif; ?> <!-- Checks if field is empty END -->
                                    </div>
                                    <p class="card-small-text mb-0 px-4">
                                        <a href="telto:" class="text-decoration-none"><?php echo $card['phone']; ?></a>
                                    </p>
                                </div>

                                <div class="card-info d-flex align-items-center mt-2">
                                    <div class="mr-4">
                                    <?php if( !empty($url) ): ?> <!-- Checks if field is empty -->
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/earth.svg" alt="" class="img-fluid">
                                    <?php endif; ?> <!-- Checks if field is empty END -->
                                    </div>
                                    <p class="card-small-text mb-0 px-4">
                                        <a href="<?php echo $card['url']; ?>" target="_blank" class="text-decoration-none"><?php echo $card['url_text']; ?></a>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <?php }} //Foreach END ?> 

                    </div>
                </div>
            </div>
            <div class="fllying-objects_ left-side d-none d-lg-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dots-left_1.svg" alt="" class="img-fluid">
            </div>
            <div class="fllying-objects_ right-side d-none d-lg-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dots-right.svg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="fllying-objects left-side">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yellow-lines.svg" alt="" class="img-fluid">
        </div>
        <div class="fllying-objects right-side">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/purple-lines.svg" alt="" class="img-fluid">
        </div>
    </section>

<?php get_footer(); ?>