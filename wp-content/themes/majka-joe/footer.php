<footer>
    <div class="footer-bar">
        <div class="container">   
            <div class="row promo-row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="free">free
                    </div>
                    <div class="promo-text">
                    EXAM AND X-RAYS<br/>
                    FOR NEW PATIENTS<br/>
                    <span>A $195 VALUE</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="plus-div"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="free">free
                    </div>
                    <div class="promo-text">
                    IMPLANT CONSULTATION<br/>
                    <span>$500 OFF TREATMENT</span>
                    </div>
                </div>
            </div>
            <div class="row">
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
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="footer-links">
                    <?php 
                        wp_nav_menu( array(
                        'theme_location' => 'Footer Menu',
                        'depth'      => 1,
                        'container'  => false,
                        'menu_class' => 'footer-menu nav nav-pills nav-stacked',
                        'fallback_cb'    => '__return_false')
                        );
                    ?>
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
