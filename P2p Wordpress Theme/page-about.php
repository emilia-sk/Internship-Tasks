<?php /* Template Name: About */ ?>

<?php get_header(); 

$section1 = get_field( "section_1" );
$section2 = get_field( "section_2" );
$section3 = get_field( "section_3" );
$section4 = get_field( "section_4" );


$args1 = array(
    'post_type' => 'members',  
    'meta_key' => 'big_image',
	'orderby' => 'meta_value',
	'order' => 'DESC'
);        

$args2 = array(
    'post_type'=> 'partners', 
	'orderby' => 'meta_value',
    'meta_key' => 'partner_number',
    'order' => 'DESC'
);       

$the_query = new WP_Query( $args1 );
$the_query2 = new WP_Query( $args2 );

$posts = $the_query->get_posts();
$posts2 = $the_query2->get_posts();
 
?>

<section class="two-columns-text-img about position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-md">
                <div class="text-center">
                    <h2 class="heading-main mb-4">
                        <?php echo $section1['title']; ?>
                    </h2>
                    <div class="devider-main mb-3 mx-auto"></div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 d-flex align-items-center">
                <div class="pr-md-5 px-5">
                    <div class="paragraph">
                        <?php echo $section1['paragraph_1']; ?>
                    </div>
                    <div class="paragraph mt-5 d-none d-md-block">
                        <?php echo $section1['paragraph_2']; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-5 mb-md-0">
                <div class="two-images position-relative mt-4 mt-md-0">
                    <div class="behind-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Ellipse.svg" alt=""
                            class="img-fluid">
                    </div>
                    <div class="top-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people-about.svg" alt=""
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=" cards cards_team position-relative overflow-hidden">
    <div class="container">

        <div class="row">
            <div class="col-md">
                <div class="text-center">
                    <h2 class="heading-main mb-4">
                        <?php echo $section2['title']; ?>
                    </h2>
                    <div class="devider-main mb-3 mx-auto"></div>
                </div>
            </div>
        </div>

        <div class="row px-5 px-md-0">
            
            <?php  
            
            if( $posts ): ?>

            <?php foreach( $posts as $key => $post ): 
                
                $big_image = get_field( "big_image" ,  $post->id );
            ?>

            
            <div class="<?php if ($big_image == 1) { echo 'col-md-4';} else { echo 'col-md-3 m-auto'; } ?> mb-5 mb-md-0 mt-5 pt-3">

                <div class="card_">

                    <div class="card-img">
                        <img src="<?php echo get_the_post_thumbnail_url( $post->id, 'medium' );?>" alt=""
                            class="img-fluid">
                    </div>

                    <h4 class="card-title"><?php echo str_replace(' ','<br />',get_the_title( $post->id )); ?></h4>

                    <p class="card-text"><?php echo get_the_content( $post->id ); ?></p>

                </div>
            </div>

            <?php  
            endforeach;
            endif; ?>

        </div>
    
        <div class="fllying-objects left-side">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yellow-lines.svg" alt="" class="img-fluid">
        </div>
        <div class="fllying-objects right-side">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/purple-lines.svg" alt="" class="img-fluid">
        </div>

    </div>
</section>

<section class="partners position-relative with-flying-objects">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md">
                    <div class="text-center">
                        <h2 class="heading-main mb-4">
                        <?php echo $section3['title']; ?>
                        </h2>
                        <div class="devider-main mb-3 mx-auto"></div>
                        <p class="paragraph">
                        <?php echo $section3['text']; ?>
                        </p>
                        </div>

                        <div class="section-images">

                        <?php if( $posts2 ): ?>
                        <?php foreach( $posts2 as $post ):
                        
                        $partner_number = get_field( "partner_number" , $post->id ); ?>

                            <div>
                                <img src="<?php if ($partner_number == 1) echo get_the_post_thumbnail_url( $post->id, 'medium' );?>" alt="" class="img-fluid">
                            </div>
                            <div>
                                <img src="<?php if ($partner_number == 2) echo get_the_post_thumbnail_url( $post->id, 'medium' );?>" alt="" class="img-fluid">
                            </div>

                        <?php  
                        endforeach;
                        endif; ?>

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
</section>

    <section class="contacts position-relative  bg-color-secondary overflow-hidden">
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
                        <?php echo $section4['title']; ?>
                        </h2>
                        <p class="paragraph mb-5 pr-md-5">
                        <?php echo $section4['text']; ?>
                        </p>
                        <a href="<?php echo $section4['button_url']; ?>" class="btn-main"><?php echo $section4['button_text']; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="fllying-objects d-none d-lg-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/purple-lines.svg" alt="" class="img-fluid">
        </div>
    </section>



<?php get_footer(); ?>