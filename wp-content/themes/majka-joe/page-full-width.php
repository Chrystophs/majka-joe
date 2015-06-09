<?php

/* Template Name: Full-Width Page */

get_header(); 

?>
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
                        <img src="<?php the_field('first-pic'); ?>" />
                    </div>              
            </div>
    </div>
</div>
<div class="body-bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php $bottom_callout = get_field('bottom-callout'); ?>
<?php
              if(!empty($bottom_callout)) {
                  echo '<div class="testimonial-bar2"><div class="container"><div class="row"><div class="callout">';
                    if(!empty($bottom_callout)) { echo $bottom_callout; } else { echo ''; }
                  echo '</div></div></div></div>';
              }
            ?>
<?php get_footer(); ?>