<?php get_header(); ?>

<div id="hero">
    <div class="container d-flex justify-content-center align-items-center h-100">
        <h1>New shop.New style.</h1>
    </div>
</div>

<div class="content">
    <div class="container">
            <?php
            if(have_posts()):
                
                while(have_posts()):
                    echo '<h5>'.the_title().'</h5>';
                    the_post();
                    the_content();
                endwhile;
            else:
                echo '<h5>Sorry no posts yet.</h5>';
            endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>