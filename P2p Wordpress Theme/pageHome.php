<?php /* Template Name: Home Page */ ?>

<?php get_header(); 

$first_section = get_field( "first_section" );
$second_section = get_field( "second_section" );
$second_section_card = $second_section['card'];
$third_section = get_field( "third_section" );
$third_section_gallery = $third_section['gallery'];
$fourth_section = get_field("fourth_section");
$fifth_section = get_field("fifth_section");

$args = array(
    'post_type'=> 'partners', 
    'order'    => 'ASC'
);              

$the_query = new WP_Query( $args );
$posts = $the_query->get_posts();

?>

<section class="two-columns-text-img prevention position-relative"> <!--First Section -->
        <div class="d-md-none mobile-bg-top">
            <img src="../img/bg-image-2.jpg" alt="" class="img-fluid">
        </div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center order-2 order-md-1">
                    <div>
                        <h2 class="heading-main mb-4">
                            
                            <?php echo $first_section['header']; ?> 
                           
                        </h2>
                        <div class="devider-main mb-3"></div>
                        <p class="paragraph">

                        <?php echo $first_section['subtext']; ?> 

                        </p>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2 mb-5 mb-md-0">
                    <div class="section-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube_tutorial.svg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="fllying-objects d-none d-md-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dots_.svg" alt="" class="img-fluid">
            </div>
        </div>
</section>

<section class="cards position-relative"> <!--Second Section -->
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="text-center">
                        <h2 class="heading-main mb-4">
                        <?php echo $second_section['heading']; ?> 
                        </h2>
                        <div class="devider-main mb-3 mx-auto"></div>
                        <p class="paragraph">
                        <?php echo $second_section['subtext']; ?> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-5 px-5 px-md-0">
                <?php   
                foreach ($second_section_card as $card) { ?>
                <div class="col-md-6 col-lg-3  mb-5 mb-lg-0">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card-img">
                                    <img src="<?php echo $card['card_image'] ?>" />
                                </div>
                                <h4 class="card-title">
                                <?php echo $card['card_title']; ?>
                                </h4>
                            </div>
                            <div class="flip-card-back">
                                <ul class="flip-card-back-list">
                                    <?php $card_flip_text_list = explode("\n", $card['card_flip_text']);

                                    foreach ($card_flip_text_list as $card_flip_text) {
                                        ?>
                                        <li class="card-back-list-item"><?php echo $card_flip_text; ?></li> 
                                        <?php
                                    }
                                    
                                    ?> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
 
                            <?php }  ?>
            </div>
        </div>
        <div class="fllying-objects left-side">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yellow-lines.svg" alt="" class="img-fluid">
        </div>
        <div class="fllying-objects right-side">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/purple-lines.svg" alt="" class="img-fluid">
        </div>
</section>

<section class="gallery-section overflow-hidden"> <!-- Third Section -->
        <div class="container position-relative">
            <div class="row">
                <div class="col-md">
                    <div class="text-center">
                        <h2 class="heading-main mb-4">
                        <?php echo $third_section['title']; ?> 
                        </h2>
                        <div class="devider-main mb-5 mx-auto"></div>
                    </div>
                </div>
            </div>

            <div class="grid-gallery">

                <?php   

                if( $third_section_gallery ): ?>

                <?php foreach( $third_section_gallery as $key => $image ): ?>

                <div class="gallery__item <?php if($key == 0 || $key == 1) {echo 'grid-col-3';} 
                elseif($key == 4 || $key == 5 ) {echo 'grid-col-4';}
                elseif($key == 2) {echo 'grid-row-2 grid-col-2';}
                else {echo 'grid-col-2';}
                ?>"> 
                    
                    <img src="<?php echo $image; ?>" alt="" class="gallery__img">
                </div> 

                <?php 

                    endforeach;
                    endif; ?>
            </div>

            <div class="pic-quote">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pic-quote-img position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/student.png" alt="" class="img-fluid">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dot1.svg" alt="img-fluid" class="dot dot1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dot2.svg" alt="img-fluid" class="dot dot2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dot3.svg" alt="img-fluid" class="dot dot3">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="section-text">
                            <div>
                                <div class="mt-md-3">
                                    <img src="../img/quotes-left.svg" alt="">
                                </div>
                                <p class="paragraph mb-4">
                                    <?php echo $third_section['quote_text']; ?> 
                                    <img src="<?php echo get_template_directory_uri(); ?>/asssets/img/quotes-right.svg" alt="">
                                </p>
                            </div>

                            <div class="center-text-mobile">
                                <p class="bigger-text mb-0">
                                <?php echo $third_section['name_text']; ?> 
                                </p>
                                <span class="small-text"><?php echo $third_section['small_text']; ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fllying-objects left-side d-none d-lg-block">
                <img src="../img/dots-left.svg" alt="" class="img-fluid">
            </div>

            <div class="fllying-objects right-side d-none d-lg-block">
                <img src="../img/dots-right.svg" alt="" class="img-fluid">
            </div>
        </div>
</section>

<section class="partners position-relative"> <!-- Fourth Section -->
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="text-center">
                        <h2 class="heading-main mb-4">

                        <?php echo $fourth_section['title']; ?>

                        </h2>
                        <div class="devider-main mb-3 mx-auto"></div>
                        <p class="paragraph">

                        <?php echo $fourth_section['small_text']; ?>

                        </p>
                        <div class="section-images">

                        <?php foreach($posts as $post){ ?>
        
                            <div class="img-box">
                                <img src="<?php echo get_the_post_thumbnail_url( $post->id, 'medium' );?>" alt="" class="img-fluid">
                            </div>
                            
                        <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fllying-objects d-none d-lg-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yellow-lines.svg" alt="" class="img-fluid">
        </div>
 </section>

 <section class="contacts position-relative  bg-color-secondary overflow-hidden"> <!-- Fifth Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="two-images position-relative">
                        <div class="behind-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Ellipse.svg" alt="" class="img-fluid">
                        </div>
                        <div class="top-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Ellipse-top.svg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="column-content pt-5 pt-md-0">
                        <h2 class="heading-main mb-4">

                        <?php echo $fifth_section['title']; ?>

                        </h2>
                        
                        <a href="<?php echo $fifth_section['url']; ?>" class="btn-main text-light text-decoration-none"><?php echo $fifth_section['text_url']; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="fllying-objects d-none d-lg-block">
            <img src="<?php echo get_template_directory_uri(); ?> /assets/img/purple-lines.svg" alt="" class="img-fluid">
        </div>
    </section>

 <?php get_footer(); ?>
