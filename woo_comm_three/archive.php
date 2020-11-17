<?php get_header();?>
<div class="container">
    <div class="row">
        <div class="col" id="pagediv">

            <?php 
                //show post's image
                if(has_post_thumbnail()){ 
            ?>
                <a href="<?php the_permalink(); ?>">   
                <img src="<?php the_post_thumbnail_url('post_image');?>" alt="<?php the_title(); ?>" class="img-fluid"> 
                </a>
            <?php 
                }else{
                    echo "Sorry no image for that post";
                }
            
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        ?>
                        <div class="postslist">
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <p><?php  the_excerpt(); ?></p>
                        </div>
                    <?php
                    }
                }
            ?>
        
      </div>  
    </div>
</div>
<?php get_footer();?>