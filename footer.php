<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content.
 *
 * @package Houzez
 * @since Houzez 1.0
 */
$copy_rights = houzez_option('copy_rights');
global $houzez_local;
?>

<?php if ( houzez_is_footer() ) { ?>

    <?php if( houzez_container_needed() ) { ?>
    </div> <!--.container Start in header-->
    <?php } ?>
</div> <!--Start in header end #section-body-->

<?php get_template_part('template-parts/scroll-to-top'); ?>

<!--start footer section-->
<footer id="footer-section">
    
    <?php get_template_part('template-parts/footer'); ?>

    <div class="footer-bottom">

    	<div class="container">
            <div class="row">
                <?php if( !empty($copy_rights) ) { ?>
                <div class="col-md-3 col-sm-3">
                    <div class="footer-col">
                        <p><?php echo ( $copy_rights ); ?></p>
                    </div>
                </div>  <?php } ?>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-col">
                        <div class="navi">
	                        <?php
							// Pages Menu
							if ( has_nav_menu( 'footer-menu' ) ) :
								wp_nav_menu( array (
									'theme_location' => 'footer-menu',
									'container' => '',
									'container_class' => '',
									'menu_class' => '',
									'menu_id' => 'footer-menu',
									'depth' => 1
								));
							endif;
							?>
						</div>

                    </div>
                </div>  
                         
              
                 <div class="col-md-12 col-sm-12"> <center><a href="http://sarahollandco.com/"> <img src="http://sarahollandco.com/wp-content/uploads/2017/04/Sara-Holland-Co-color-100.png" alt="sara holland co logo"></a>  <hr>
<a href="http://www.youtube.com/user/sothebysrealty?feature=results_main" target="_blank"><img src="http://sarahollandco.com/wp-content/uploads/2017/04/Sothebys-youtube-channel.png" alt="Visit Sotheby's International Realty YouTube Channel"/ style="padding-right: 50px;"></a>
                <a href="http://www.sothebysrealty.com/" target="_blank"><img src="http://sarahollandco.com/wp-content/uploads/2017/04/Sothebys-realty-listings.png" alt="Visit Sotheby's International Realty Listings from around the globe"/ style="padding-right: 50px;"></a>
                <a href="http://sothebys.com/" target="_blank"><img src="http://sarahollandco.com/wp-content/uploads/2017/04/Sothebys-auction-house.png" alt="Visit Sotheby's Auction House"/ "></a>
          
         <p>Sotheby's International Realty&reg; is a registered trademark licensed to Sotheby's International Realty Affiliates LLC.<br>Each Office is Independently Owned and Operated.</p>  
             
<hr> <?php if( houzez_option('social-footer') != '0' ) {
                 if( houzez_option('fs-facebook') != '' || houzez_option('fs-twitter') != '' || houzez_option('fs-linkedin') != '' || houzez_option('fs-googleplus') != '' || houzez_option('fs-instagram') != '' || houzez_option('fs-pinterest') != '' ) { ?>
                <div class="col-md-12 col-sm-12">
                  
                        <p>
                            <?php echo $houzez_local['follow_us']; ?>
                           
                            <?php if( houzez_option('fs-facebook') != '' ){ ?>
					        	<a target="_blank" href="<?php echo esc_url(houzez_option('fs-facebook')); ?>"><i class="fa fa-facebook-square fa-2x"></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-twitter') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-twitter')); ?>"><i class="fa fa-twitter-square fa-2x"></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-linkedin') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-linkedin')); ?>"><i class="fa fa-linkedin-square fa-2x "></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-googleplus') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-googleplus')); ?>"><i class="fa fa-google-plus-square fa-2x"></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-instagram') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-instagram')); ?>"><i class="fa fa-instagram fa-2x"></i></a>
					        <?php } ?>

					        <?php if( houzez_option('fs-pinterest') != '' ){ ?>
					            <a target="_blank" href="<?php echo esc_url(houzez_option('fs-pinterest')); ?>"><i class="fa fa-pinterest fa-2x"></i></a>
					        <?php } ?>
                        </p>
                  
               
                <?php } 
                } ?></div>

      
<a href="http://sarahollandco.com/contact"><p>Contact us</p></a>
<a href="https://www.nar.realtor"><img src="http://sarahollandco.com/wp-content/uploads/2017/04/office_R_white.png" alt="realtor" style="width:50px;height:55px;"></a><a href="https://www.nar.realtor/programs/housing-opportunity-program"><img src="http://sarahollandco.com/wp-content/uploads/2017/04/equal-opportunity-lender-logo.png" alt="housing" style="width:68px;height:34px;padding-right: 10px;"></a>
<a href="http://www.greenresourcecouncil.org/"><img src="http://sarahollandco.com/wp-content/uploads/2017/04/GreenLogo_White.png" alt="green designation" style="width:80px;height:48px; padding-right: 10px;"> </a><a href="https://www.nar.realtor"><img src="http://sarahollandco.com/wp-content/uploads/2017/04/broker-reciprocity-logo.png" alt="broker reciprocity" style="width:144px;height:34px;"></a></center>

 
            
</div> </div></div><center>  &copy; Sara Holland and Company <?php echo date("Y"); ?></center>
       

  <!-- End footer bottom -->

</footer>
<!--end footer section-->
<?php } // End splash template if ?>

<?php wp_footer(); ?>

</body>
</html>