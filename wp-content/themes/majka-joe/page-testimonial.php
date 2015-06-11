<?php

/* Template Name: Testimonial Page */

get_header(); ?>
<div class="purple-bg">
    <div class="services-box">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                          <article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/WebPage">
                            <header class="article-header">
                                <h1 class="service-title top-margin" itemprop="headline">
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

                                  <?php endwhile; else: ?>
                                      
                                    Sorry, there may have been a problem.
                                  
                                    <?php get_search_form(); ?>
                                  
                                  <?php endif; ?>
                                  <?php wp_reset_query(); ?>
                          </section>
                        </article> 
                  </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-size-service">
                      <?php get_field('first-pic'); ?>
                        <img src="<?php the_field('first-pic'); ?>" />
                    </div>              
            </div>
    </div>
</div>
  <div class="body-bg">
      <div class="container">
							<?php 
                                $args = array( 'post_type' => 'testimonials', 'order' => 'date', 'posts_per_page' => 15 );
                                $loop = new WP_Query( $args );
                            ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <hr/>
                                </div>
                            </div>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                              <section>         
                                <div class="row">
                                    
                                    <?php if ( has_post_thumbnail() ) { ?>
                                        <div class="col-xs-3">
                                             <?php the_post_thumbnail('medium',array('class'=>'img-responsive img-thumbnail')); ?>
                                        </div>
                                    <?php } ?>
                                    
                                    <?php if ( has_post_thumbnail() ) { ?><div class="col-xs-9"><?php } else { ?><div class="col-xs-12"><?php } ?>
                                        <?php the_content(); ?>
                                        <h3 class="text-right"><em>- <?php the_title(); ?></em></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <hr/>
                                    </div>
                                </div>
                              </section>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                            <div class="row">
                              <div class="col-xs-12">
                                <?php the_content(); ?>
                              </div>
                            </div>
                     </article> 
               </div>          			
          </div>
        </div>
   	</div>
</div>
		
<?php get_footer(); ?>