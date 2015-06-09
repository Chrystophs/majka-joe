<?php

/* Template Name: Smile Gallery */

get_header(); ?>
<div class="purple-bg">
    <div class="services-box">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                          <article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/WebPage">
                          <header class="article-header">
                              <h1 class="service-title" itemprop="headline">
                  <?php
                                    if(get_field('custom_page_headline_(h1)')) {
                                          the_field('custom_page_headline_(h1)');
                                    } else {
                                          the_title();
                                    }
                                  ?>
                                </h1>
                          </header>
                            <section itemprop="articleBody">
                              <?php if(get_field('first-title'));?>
                                <h2 class="service-h2"><?php the_field('first-title'); ?></h2>
                              <hr/>
                                <?php if(get_field('first-content')); ?>
                                    <?php the_field('first-content'); ?>
                              <div class="down-arrow2"></div>
                               <?php the_content(); ?>

                                  <?php endwhile; else: ?>
                                      
                                    Sorry, there may have been a problem.
                                  
                                    <?php get_search_form(); ?>
                                  
                                  <?php endif; ?>
                                  <?php wp_reset_query(); ?>
                          </section>
                        </article> 
                  </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-size-service">
                    <?php if(get_field('first-pic')); ?>
                        <img src="<?php the_field('first-pic') ?>" />
                    </div>          
            </div>
    </div>
</div>
<div class="second-box">
    		<div class="row">
            	<div class="col-xs-12">
                	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
                </div><?php 
                                  $args = array( 'post_type' => 'gallery', 'order' => 'ASC' );
                                  $loop = new WP_Query( $args ); 
                              ?>
                            <section>
                              <div id="owl-smile" class="owl-carousel owl-carousel-majka owl-theme">
                                  <?php $cnt2 = 0; ?>
                                  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                      <div>
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-margin">
                                        <?php
                                            $children = get_children( 'post_type=attachment&post_mime_type=image&output=ARRAY_N&orderby=menu_order&order=DESC&posts_per_page=-1&post_parent='.$post->ID);
                                            $num_children = count($children);
                                            if ($num_children == 1) {
                                                $num_children = 1;
                                            } else if ($num_children % 3 == 0) {
                                                $num_children = 3;
                                            } elseif ($num_children % 2 == 0) {
                                                $num_children = 2;
                                            } else {
                                                $num_children = 2;
                                            } 
                                        ?>
                                        <?php echo do_shortcode('[gpm-gallery numperrow="'.$num_children.'" imgthumb="large"]'); ?>
                                        </div>
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 team-content">
                                        <h3>{ <?php the_title(); ?> }</h3> 
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