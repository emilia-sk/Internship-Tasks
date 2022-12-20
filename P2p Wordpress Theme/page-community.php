<?php /* Template Name: Community */ ?>

<?php get_header(); 

$section_1 = get_field( "section_1" );
$carousel_videos = $section_1['video_carousel'];
$section_2 = get_field( "section_2" );

?>

<section class="video-section position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="text-center">
                        <h2 class="heading-main mb-4">
                           <?php echo $section_1['heading']; ?>
                        </h2>

                        <div class="devider-main mb-3 mx-auto"></div>

                        <?php echo $section_1['small_text']; ?>

                    </div>

                <div class="slider">

                    <?php   
                    if( $carousel_videos ) {

                        foreach ($carousel_videos as $slide) { ?>

                        <div>
                            <div class="video-container" data-video="<?php echo $slide['video_id']; ?>" data-toggle="modal"
                                data-target="#video-modal" role="button">
                                <div class="content">
                                    <img src="https://img.youtube.com/vi/<?php echo $slide['video_id']; ?>/hqdefault.jpg" alt="video"
                                        class="img-fluid video-img">
                                    <h4 class="video-title"><?php echo $slide['video_title']; ?></h4>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video-btn.svg" alt="" class="video-btn img-fluid">
                                </div>
                            </div>
                        </div>

                    <?php }}  ?> 
                    
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-12 pt-5">
                    <div>
                        <p class="paragraph">
                        <b><?php echo $section_2['bold_text']; ?></b>
                        <?php echo $section_2['text']; ?> 
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="fllying-objects left-side d-none d-lg-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yellow-lines.svg" alt="" class="img-fluid">
        </div>
        <div class="fllying-objects right-side d-none d-lg-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/purple-lines.svg" alt="" class="img-fluid">
        </div>
    </section>

<?php get_footer(); ?>

<div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-modal="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe allowfullscreen="" frameborder="0" height="315" src="#" width="100%"></iframe>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Затвори</button></div>
            </div>
        </div>
    </div>