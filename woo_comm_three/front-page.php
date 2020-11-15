<?php get_header();?>

<div class="hero">
    <div class="container d-flex align-items-center h-100">
        <div id="c1">
        <h3>Welcome to Scandinavian Style</h3>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <?php if(have_posts()):
                while(have_posts()): the_post();
                the_content();
                endwhile;
        else: 
        echo "<h5>sorry no posts yet</h5>";
        endif;
        ?>
    </div>
</div>

<?php get_footer();?>