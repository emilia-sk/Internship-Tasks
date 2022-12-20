<?php /* Template Name: Courses */ ?>

<?php get_header(); 

$first_section = get_field( "first_section" );
$second_section = get_field( "second_section" );
$third_section = get_field( "third_section" );
$cards = $third_section['card'];

?>

<section class="two-columns-text-img lectors position-relative">
        <div class="d-md-none mobile-bg-top">
            <img src="../img/bg-image-2.jpg" alt="" class="img-fluid">
        </div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2 class="heading-main mb-4">

                        <?php echo $first_section['heading']; ?>

                        </h2>
                        <div class="devider-main mb-3"></div>
                        <p class="paragraph" style="text-align: left;">

                        <?php echo $first_section['primary_text']; ?>

                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="section-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/undraw_teaching_f1cm 1.svg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cards cards_courses position-relative">
        <div class="container">

            <div class="row">
                <div class="col-md">
                    <div class="text-center mb-5 pb-5">
                        <h2 class="heading-main mb-4">

                        <?php echo $second_section['heading']; ?>

                        </h2>
                        <div class="devider-main mb-3 mx-auto"></div>
                        <p class="paragraph">
                            <!-- Важно е да знаем как да се държим с децата и колко много имаме възможност да променим начина
                            им на мисене ала бала -->
                        </p>
                        <p class="paragraph">
                            <a href="<?php echo $second_section['button']; ?>" class="btn-main mt-3"><?php echo $second_section['button_label']; ?></a>
                        </p>
                    </div>
                    <div class="text-center" id="active-courses">
                        <h2 class="heading-main mb-4">

                            <?php echo $third_section['heading']; ?>
                            
                        </h2>
                        <div class="devider-main mb-3 mx-auto"></div>
                        <p class="paragraph">

                            <?php echo $third_section['primary_text']; ?>

                        </p>
                    </div>
                </div>
            </div>

        <div class="row mt-5 pt-5 px-5 px-md-0">
            
                <?php   
                if( $cards ) {

                foreach ($cards as $third_section_card) { ?> <!--Foreach cards start -->


                <div class="col-md-3 mb-5 mb-md-0">
                    <div class="card_">
                        <div class="card-img">
                        <img src="<?php echo $third_section_card['card_image'] ?>" />
                        </div>
                        <h4 class="card-title"><?php echo $third_section_card['card_heading']; ?></h4>
                        <p class="card-text"><?php echo $third_section_card['gray_card_text']; ?></p>
                    </div>
                </div>

                <?php }}  ?> <!--Foreach cards end -->

            </div>

        <div class="fllying-objects left-side">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yellow-lines.svg" alt="" class="img-fluid">
        </div>
        <div class="fllying-objects right-side">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/purple-lines.svg" alt="" class="img-fluid">
        </div>
    </section>


<?php get_footer(); ?>
