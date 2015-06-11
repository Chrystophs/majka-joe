<?php

/* Template Name: Promotions Page */

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
          $args = array('post_type' => 'promos', 'order' => 'date');
          $loop = new WP_Query( $args );
          $price = get_field('price');           
          $content = get_field('content');
          $value = get_field('value');
          $expires = get_field('expires');
        ?>
        <div class="row">
          <?php $y = 0; ?>
            <?php $num_per_row = 3; ?>
              <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <section>
                      <div class="col-xs-12 col-sm-12 col-md-<?php echo 12/$num_per_row ?> col-lg-<?php echo 12/$num_per_row ?>">
                        <div class="promo-box">
                          <h1><?php the_field('price'); ?></h1>
                            <p><?php the_field('content');?><span><?php the_field('value'); ?></span></p>
                          <h5>*Expires: <?php the_field('expires'); ?></h5>
                        </div>
                      </div>
                    </section>
                <?php $y++; ?>
                <?php if ($y % $num_per_row == 0) { echo '</div></div class="row">'; } ?>
              <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>