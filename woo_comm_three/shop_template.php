<?php

/*
Template Name: Shop Page
*/

get_header();?>
<div class="container">
    <div class="row">
        <div class="col" id="pagediv">
            <h1><?php the_title();?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" id="shop_input">
           <?php if(have_posts()): 
                    while(have_posts()): the_post();
                    the_content();
                    endwhile; 
                else: 
                    echo "Sorry no posts yet";
                endif;
           ?>
        </div>
    </div>
</div>
<?php get_footer();?>