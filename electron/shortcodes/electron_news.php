<?php 

function practice_areas(){
    $query = new WP_Query(
        array(
            'post_type' => 'practice_areas',
            'post_status' => 'publish',
            'post_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'menu_order'
        )
    );
    $i = 1;
    $str = '<div class="elementor-row">';
    while($query->have_posts()): 
        $query->the_post();
        // $str .= '
        // <div class="elementor-element elementor-view-framed elementor-shape-square elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box animated fadeInDown" data-element_type="widget">
        //     <div class="practice-area-box homepage-services">
        //         <div class="content">
        //             <a class="icon" href="'.get_the_permalink().'">
        //             <i aria-hidden="true" class="'.do_shortcode('[act field="icon"]').'"></i></a>
        //             <h3 class="title">'.get_the_title().'</h3>
        //             <p class="description">'.do_shortcode('[act field="blurb"]').'</p>
        //         </div>            
        //     </div>
        // </div>
        // ';
        $str .= '
        <div>
            <div>
                <div>
                    <a class="icon" href="'.get_the_permalink().'">
                    <i aria-hidden="true" class="'.do_shortcode('[act field="icon"]').'"></i></a>
                    <h3 class="title">'.get_the_title().'</h3>
                    <p class="description">'.do_shortcode('[act field="blurb"]').'</p>
                </div>            
            </div>
        </div>
        ';
        if($i % 3 == 0):
            $str .= '</div>'; 
            $str .='<div class="elementor-row">'; 
        endif;
        $i++;
    endwhile;
    wp_reset_postdata(); 
    return $str;   
}
add_shortcode('practice_areas','practice_areas');

function electron_news_link(){
    $query = new WP_Query(
        array('post_type' => 'practice-areas',
              'post_status' => 'publish',
              'post_per_page' => -1,
              'order'=> 'ASC',
              'orderby' => 'menu_order'
        )
    );
    $links = '';
    while($query->have_posts()): 
        $query->the_post();
        $links .= '<a href="'.get_the_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></br>';
    endwhile;
    wp_reset_postdata();
    return $links;
}

add_shortcode('electron_news_link', 'electron_news_link');
