<?php

/* Template Name: Team Page */

get_header(); ?>
<div class="body-bg" style="margin-top:20px;">
                            <?php 
                              $args = array( 'post_type' => 'team', 'order' => 'ASC', 'orderby' => 'menu_order' );
                              $loop = new WP_Query( $args );
                            ?>
                              <div class="row">
                                <?php $y = 0; ?>
                                  <?php $num_per_row = 2; ?>
                                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 no-margin">
                                      <section>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 center">
                                          <?php if ( has_post_thumbnail() ) { ?>
                                          <?php the_post_thumbnail('large',array('class'=>'')); ?>
                                          <?php } ?>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 team-content">
                                          <h3><?php the_title(); ?></h3>
                                          <?php the_content(); ?>
                                        </div>
                                       </section>
                                      </div>
                               <?php $y++; ?>
                               <?php if ($y % $num_per_row == 0) { echo '</div><div class="row">'; } ?>
                              <?php endwhile; ?>
                            <?php wp_reset_query(); ?> 
                            </div>
</div>
<?php $bottom_callout = get_field('bottom-callout'); ?>
<?php 
          if(!empty(get_field('bottom-callout'))) {
            echo '<div class="testimonial-bar2"><div class="container"><div class="row"><div class="callout">';
              if(!empty($bottom_callout)){ echo $bottom_callout; } else {echo '';}
              echo '</div></div></div></div>';
          }
        ?>	
<?php get_footer(); ?>