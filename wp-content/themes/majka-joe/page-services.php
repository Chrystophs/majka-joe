<?php

/* Template Name: Services Page */

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
                            <section itemprop="articleBody" class="articleBody">
                              <?php if(get_field('first-title'));?>
                                <h2 class="service-h2"><?php the_field('first-title'); ?></h2>
                              <hr/>
                                <?php if(get_field('first-content')); ?>
                                    <?php the_field('first-content'); ?>
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
                        <img src="<?php the_field('first-pic'); ?>" />
                    </div>          
            </div>
    </div>
</div>
    <div class="second-box">
                <div class="row">
                          <article>
                              <section>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-size2">
                                   <?php if(get_field('second-pic')); ?>
                                   <img src="<?php the_field('second-pic'); ?>" />
                                  </div>
                                  <?php if(get_field('second-title'));?>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-size2">
                                    <div class="box-title">
                                      <?php the_field('second-title'); ?>
                                    </div>
                                    <div class="down-arrow2"></div>
                                  <?php if(get_field('second-content'));?>
                                    <div class="box-content">
                                      <?php the_field('second-content'); ?>
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