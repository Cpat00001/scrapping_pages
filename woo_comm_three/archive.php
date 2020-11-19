<?php get_header();?>
<div class="container">
    <div class="row">
        <div class="col-lg-3" >
            <div class="sticky-top">
            <?php if(is_active_sidebar('blog-sidebar'))
                dynamic_sidebar('blog-sidebar')
            ?>
            </div>
        </div>
        <div class="col-lg-9" id="pagediv">

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

            <!-- Paginate links -->
            <?php
                global $wp_query;
                $big = 999999999; // need an unlikely integer
                
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,

                ) );
            ?>
      </div>  
    </div>
</div>
<?php get_footer();?>