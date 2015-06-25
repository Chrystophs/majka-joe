<footer>
    <div class="footer-bar">
        <div class="container">   
            <div class="row promo-row">
            <?php 
                $args = array('post_type' => 'promos', 'order' => 'date', 'posts_per_page' => 2 );
                $loop = new WP_Query( $args );
                $price = get_field('price');           
                $content = get_field('content');
                $value = get_field('value');
                $expires = get_field('expires');
            ?>
                <?php $y = 0; ?>
                    <?php $num_per_row = 2; ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> 
                                <a href="<?php bloginfo('template_url'); ?>/promotions/" class="promo-link">
                                    <div class="free"> 
                                        <?php the_field('price'); ?>
                                    </div>
                                    <div class="promo-text">
                                        <?php the_field('content'); ?><br/>
                                            <span>
                                                <?php the_field('value'); ?>
                                            </span>
                                    </div>
                                </a>
                            </div>
                        <?php $y++; ?>
                        <?php if ($y == 1) { echo '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><div class="plus-div"></div></div>'; } ?>
                <?php if ($y % $num_per_row == 0 ){ echo ''; } ?>
            <?php endwhile;?>
            <?php wp_reset_query(); ?>
            </div>
            <div class="row">
            <a href="<?php bloginfo('template_url'); ?>/contact-us/" alt="Contact Us" >
            	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <?php 
                            $contact_fax = contact_detail('fax', '' , '', false);
                            $contact_short= contact_detail('address_short', '', '', false);
                            $phone_new = contact_detail('phone_new', '' , '', false);
                            $phone_current = contact_detail('phone_current', '' , '', false);
							$google_maps = contact_detail('google_maps', '' , '', false);
                        ?>
                        <div itemprop="address" itemtype="http://schema.org/PostalAddress">
                        <div class="foot-h1">Address
                                <span itemprop="Addressshort"><?php echo $contact_short; ?></span>
                        </div>
                        </div>

                </div>
            </a>
            <a href="<?php bloginfo('template_url'); ?>/contact-us/" alt="Contact Us" >
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <?php 
                            $contact_h_short = contact_detail('hours_short', '' , '', false);
                        ?>
                        <div itemprop="address" itemtype="http://schema.org/Hours">
                        <div class="foot-h1">Hours
                                <span itemprop="Addresshourshort"><?php echo $contact_h_short; ?></span>
                        </div>
                        </div>

                </div>
            </a>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <address>
                        <div class="foot-h2">Phone<br/><span>
                            <?php if (!empty($phone_new)) : ?>
                                New Patients: <?php echo $phone_new; ?></strong><br/>
                            <?php endif; ?>
                            <?php if (!empty($phone_new)) : ?>
                                Current Patients:
                            <?php else: ?>
                                <span>Phone: </span>
                            <?php endif; ?>
                                <?php echo $phone_current; ?></span>
                                </div>
                        </address>
                        
                        
                    </div>
                    
                </div>
                <div class="col-xs-12">
                    <div class="social-links social-links-bottom">
                            <?php get_template_part( 'partials/svg','declaration2'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

<!-- <script type="text/javascript">try{Typekit.load();}catch(e){}</script> -->

</html>
