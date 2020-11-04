<?php get_header(); ?>
<div class="page-container container">

    <div class="row">
        <div class="col-sm-12 col-md-9">
        <img src="<?php the_post_thumbnail_url('post_image');?>" alt="<?php the_title();?>" class="img-fluid mb-5" id="res">
            <h1><?php the_title();?></h1>
            <p><?php the_content();?></p>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="sticky-top" style="top:50px;">
            <?php get_sidebar();?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>