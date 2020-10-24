<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<section class="elementor-section elementor-top-section elementor-element elementor-section-boxed single-team elementor-section-height-default elementor-section-height-default content" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                        <div class="elementor-column elementor-col-30 elementor-top-column elementor-element  data-element_type="column">
                                <div class="elementor-column-wrap">
                                    <div class="elementor-widget-wrap">
                                       <img src="<?php echo do_shortcode('[acf field="image"]');?>" class="single_team_img"/>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-70 elementor-top-column elementor-element  data-element_type="column">
                                <div class="elementor-column-wrap">
                                    <div class="elementor-widget-wrap">
                                        <h1><?php echo get_the_title(); ?></h1>
                                        <h2><?php echo do_shortcode('[acf field="title"]'); ?></h2>
                                        <?php 
                                            $email = get_field('email_address');
                                            $phone = get_field('phone_number');

                                            if($email != ''): 
                                                echo '<a href="mailto:"'.$email.' title="email'.get_the_title().' "><i class="fas fa-envelope-open-text team_icon fa-2x"></i>  '.$email.'</a>' ;
                                                echo '<br>';
                                            endif;
                                            if($phone != ''): 
                                                echo '<a href="tel:"'.$phone.' title="Phone number'.get_the_title().' "><i class="fas fa-phone-square team_icon fa-2x"></i>  '.$phone.'</a>';
                                            endif;
                                        ?>
                                        <p><?php echo the_content(); ?></p>
                                        <?php
                                            // grab values from Custom Fields Plugin  
                                            $spec = get_field('specialisation');
                                            $assoc = get_field('professional_association');
                                            $edu = get_field('education');

                                            if($spec != ''): 
                                                echo '<h3>Areas of expertise</h3>';
                                                // echo $spec;
                                                foreach((array)$spec as $s){
                                                    echo '<p>'.$s.'</p>';
                                                }
                                            endif;
                                            if($assoc != ''): 
                                                echo '<h3>Professional Associations</h3>';
                                                // echo $spec;
                                                foreach((array)$assoc as $asc){
                                                    echo '<p>'.$asc.'</p>';
                                                }
                                            endif;
                                            if($edu != ''): 
                                                echo '<h3>Education: </h3>';
                                                echo '<p>'.$edu.'</p>';
                                            endif;
                                        ?>
                                        <div class="member_form_request">
                                            <h3>Contact me,in order to get more information:</h3>
                                            <?php echo do_shortcode('[fluentform id="3"]');
                                            ?>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
        </section>


<?php endwhile;?>
<?php get_footer(); ?>