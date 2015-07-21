<?php

/* Template Name: Smile Gallery */

get_header(); ?>
<div class="purple-bg-smile">
        <div class="row">
                  <?php 
                        $args = array( 'post_type' => 'gallery', 'order' => 'ASC' );
                        $loop = new WP_Query( $args ); 
                    ?>
                  <section>
                    <div id="owl-smile" class="owl-carousel owl-theme">
                        <?php $cnt2 = 0; ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-margin">
                              <?php
                                  $children = get_children( 'post_type=attachment&post_mime_type=image&output=ARRAY_N&orderby=menu_order&order=DESC&posts_per_page=-1&post_parent='.$post->ID);
                                  $num_children = count($children);
                                  if ($num_children == 1) {
                                      $num_children = 1;
                                      }elseif ($num_children == 3) {
                                        $num_children = 3; 
                                      }elseif ($num_children == 2) {
                                        $num_children = 2;
                                      }else {
                                        $num_children = 2;
                                      }
                                
                              ?>
                              <?php echo do_shortcode('[gpm-gallery numperrow="'.$num_children.'" imgthumb="large"]'); ?>
                              </div>
                              <div class="col-xs-12 smile-text <?php if($cnt2 % 2 == 0) { echo 'green-bg'; }?> ">
                              <h3> { <?php the_title(); ?> } </h3>
                              <?php the_content(); ?>
                              </div>
                            </div>
                            <?php $cnt2++; ?>
                         <?php endwhile; ?>
                         <?php wp_reset_query(); ?>     
                    </div>
                 </section>
            
        </div>
</div>

<?php get_footer(); ?>