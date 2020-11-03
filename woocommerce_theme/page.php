<?php get_header(); ?>
<div class="page-container container">

    <div class="row">
        <div class="col">
        <img src="<?php the_post_thumbnail_url('post_image');?>" class="img-fluid mb-5" id="res">
            <h1><?php the_title();?></h1>
            <p><?php the_content();?></p>
        </div>
    </div>
    <?php get_sidebar();?>
</div>


<?php get_footer(); ?>