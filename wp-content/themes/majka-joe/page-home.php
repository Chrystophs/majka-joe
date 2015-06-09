<?php

/* Template Name: Home Page */

get_header(); 

?>
<div class="body-bg">
<?php if(has_post_thumbnail()); ?>
  <div class="head-img"><?php the_post_thumbnail(); ?></div>
    <div class="container">
          <div class="row">
              <div class="col-xs-12">
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
                    <div class="content-block">
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
                            <section itemprop="articleBody" class="page-content">
								
                                <?php
                                  if(get_field('page_sub-headline_(h2)')) {
                                    echo '<h2>';
                                        the_field('page_sub-headline_(h2)');
                                    echo '</h2>';
                                  }
                                ?>
                                <?php the_content(); ?>
                            </section>
                        </article>
                    </div>
              </div>
          </div>
    </div>
    <div class="first-box">
                <div class="row">
                          <article>
                              <section>
                                  <?php if(get_field('first-title'));?>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-size1">
                                    <div class="box-title">
                                      <?php the_field('first-title'); ?>
                                    </div>
                                  <?php if(get_field('first-content'));?>
                                    <div class="box-content">
                                      <?php the_field('first-content'); ?>
                                    </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-size1">
                                  <?php if(get_field('first-pic')); ?>
                                   <img src="<?php the_field('first-pic'); ?>" />
                                  </div>
                        	</section>
                        </article>
                </div>
    </div>
    <div class="second-box">
                <div class="row">
                          <article>
                              <section>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-size2">
                                  <?php if(get_field('second-pic'));?>
                                   <img src="<?php the_field('second-pic'); ?>" />
                                  </div>
                                  <?php if(get_field('second-title'));?>
                                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-size2">
                                    <div class="box-title">
                                      <?php the_field('second-title'); ?>
                                    </div>
                                  <?php if(get_field('second-content'));?>
                                    <div class="box-content">
                                      <?php the_field('second-content'); ?>
                                    </div>
                                  </div>
                          </section>
                        </article>
                </div>
    </div>
    <div class="dr-majka">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <img src="<?php bloginfo('template_url'); ?>/i/majka.jpg" class="circle quote-divider" />
          <div class="majka-quote">
           “I look forward to coming
            to work every day...
            so much that I could be
            here seven days a week if
            my team would let me!”
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="majka-right">
            What else could a smile want that it<br/>
            didn’t even know it wanted?
            <img src="<?php bloginfo('template_url'); ?>/i/down-arrow.png" class="down-arrow" />
            A DENTIST WITH ICOI MASTERSHIP STATUS<br/>
            OVER 20 YEARS’ EXPERIENCE<br/>
            OVER 20 YEARS IN THE COMMUNITY
          </div>
      </div>
    </div>
    <div class="container">
            <div class="row">
                    <div class="col-xs-12">
                  <?php endwhile; else: ?>    
                      Sorry, there may have been a problem.
                      <?php get_search_form(); ?>
                  <?php endif; ?>
                  <?php wp_reset_query(); ?>
                  </div>
          </div>
    </div>
</div>
<?php if (of_get_option('disable_footer_callouts') != 1) : ?> 
<div class="testimonial-bar">
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