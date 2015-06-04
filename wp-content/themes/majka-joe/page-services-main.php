<?php

/* Template Name: Services (Main) */

get_header(); ?>
<div class="body-bg">
    <div class="services-box">
            <div class="row">
              	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                          <article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/WebPage">
                        	<header class="article-header">
                            	<h1 class="page-title" itemprop="headline">
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
									             <?php the_content(); ?>

                                  <?php endwhile; else: ?>
                                      
                                    Sorry, there may have been a problem.
                                  
                                    <?php get_search_form(); ?>
                                  
                                  <?php endif; ?>
                                  <?php wp_reset_query(); ?>
                          </section>
                        </article> 
                  </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <?php if(has_post_thumbnail()); ?>
                  <div clas="right-img"><?php the_post_thumbnail();?></div>
                </div>          			
            </div>
   	</div>
</div>
<?php if (of_get_option('disable_footer_callouts') != 1) : ?> 
<div class="testimonial-bar2">
    <div class="container">
      <div class="row">
        <?php if(get_field('bottom-callout'));?>
            <div class="callout">
            <?php the_field('bottom-callout'); ?>
            </div>
      </div>
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>