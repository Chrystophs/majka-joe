<?php

/* Template Name: Doctors Page */

get_header(); ?>

                      <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="purple-bg">
                            <div class="services-box">
                          <article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/WebPage">
                          <?php 
                              $args = array( 'post_type' => 'doctors', 'order' => 'ASC' );
                              $loop = new WP_Query( $args );
                          ?>
                          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                          <section>
                              <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-ld-6 team-content">
                                        <header class="article-header box-content">
                                    <h1 class="service-title" itemprop="headline">
                                    <?php
                                        if(get_field('custom_page_headline_(h1)')) {
                                              the_field('custom_page_headline_(h1)');
                                        } else {
                                              the_title();
                                    }
                                  ?>
                                </h1>
                              <?php if(get_field('first-title'));?>
                                <h2 class="service-h2"><?php the_field('first-title'); ?></h2>
                              <hr/>
                                <?php if(get_field('first-content')); ?>
                                    <?php the_field('first-content'); ?>
                                      </header>
                                    </div>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-size-service">
                    <?php if ( has_post_thumbnail() ) { ?>
                                                 <?php the_post_thumbnail('full size',array()); ?>
                                        <?php } ?>
                                    </div>

                              </div>
                          </section>
                        </article>
                      </div>
                    </div>
                    <div class="body-bg">
                          <div class="row">
                              <div class="container">
                                <div class="col-xs-12">
                                  <?php the_content()?>
                                </div>
                              </div>
                          

                          <?php endwhile; ?>
                          <?php wp_reset_query(); ?> 

                                  <?php endwhile; else: ?>
                                      
                                    Sorry, there may have been a problem.
                                  
                                    <?php get_search_form(); ?>
                                  
                                  <?php endif; ?>
                                  <?php wp_reset_query(); ?>

    </div>
</div>
                          

<?php get_footer(); ?>