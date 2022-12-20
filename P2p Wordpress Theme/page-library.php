<?php /* Template Name: Library */ ?>

<?php get_header(); 

$first_section = get_field( "section_1" );
$second_section = get_field( "section_2" );
$accordion = $second_section['accordion_card'];
$accordion_files = $second_section['files'];

?>

<section class="accordion-section overflow-hidden">

        <div class="container position-relative">
            <div class="row px-5">
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2 class="heading-main mb-4">
                        <?php echo $first_section['heading']; ?> 
                        </h2>
                        <div class="devider-main mb-3"></div>
                        <p class="paragraph">
                        <?php echo $first_section['small_text']; ?> 
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center mt-5 mt-md-0">
                    <div class="section-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/book_lover.svg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md">

                    <div id="accordion">

                    <?php   
                    if( $accordion ) {

                     $item=1;

                        foreach ($accordion as $accordion_card) { ?> <!--Foreach accordion start -->

                            <?php if($item == 1){
                            
                            $aria = 'aria-expanded="true"';
                            $collapseClass = ' show';
                         }
                            else {
                                $aria = 'aria-expanded="false"';
                                $collapseClass = '';
                            } 
                            
                            $files = $accordion_card['files'];
                            ?>
                                        
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h5 class="mb-0 d-flex" data-toggle="collapse" data-target="#collapse1<?php echo $item;?>" aria-expanded="false" aria-controls="collapse1">
                                    <button class="btn btn-link text-decoration-none">
                                    <?php echo $accordion_card['card_heading']; ?>
                                    </button>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-down.svg" alt="" class="card-arrow">
                                </h5>
                            </div>

                            <div id="collapse1<?php echo $item;?>" class="collapse" aria-labelledby="heading1<?php echo $item;?>" data-parent="#accordion">
                                <div class="card-body d-flex align-items-center">
                                    <div class="card-body-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/book.svg" alt="">
                                    </div>
                                    <div class="card-body-links ml-2 ml-md-5 d-flex flex-column mx-4">
                                    <?php foreach ($files as $file) { ?> 
                                         <a class="text-decoration-none" href="<?php echo $file['file_url']; ?>"><?php echo $file['file_name']; ?></a> 
                                       
                                       <?php } ?>
                                   
                                    </div>
                                </div>
                            </div>
                            
                  

                    <?php $item++;?>
                        </div>

                    <?php }}  ?> <!--Foreach accordion end -->

                       
            <div class="fllying-objects left-side d-none d-lg-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dots-left.svg" alt="" class="img-fluid">
            </div>
            <div class="fllying-objects right-side d-none d-lg-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dots-right.svg" alt="" class="img-fluid">
            </div>

            
        </div>
    </section>

<?php get_footer(); ?>

