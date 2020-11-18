<?php get_header();?>
<div class="container">
    <div class="row">
        <div class="col" id="pagediv">
            <h1><?php the_title();?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="sticky-top">
                <?php dynamic_sidebar('blog-sidebar');?>
            </div>
        </div>
        <div class="col-lg-9" id="pagedivcontent">
        <?php if(has_post_thumbnail()){ ?>
             <img src="<?php the_post_thumbnail_url('custom-size');?>" alt="<?php the_title();?>" class="img-fluid mb-3 mt-3">
        <?php 
        }else{
            echo "Sorry No image for that post";
        }
        ?>

       
           <?php if (have_posts()):
    while (have_posts()): the_post();
        the_content();
    endwhile;
else:
    echo "Sorry no posts yet";
endif;

?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <!-- empty column -->
        </div> 
        <div class="col-lg-9">
                <?php
                $tagi = '<h4>Tags</h4>';?>
                <p class="tagi"><?php the_tags($tagi,' '); ?></p>
        </div>
    </div>
</div>
<?php get_footer();?>