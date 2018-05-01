<?php
/**
 * The footer template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
					<?php do_action( 'avada_after_main_content' ); ?>

				</div>  <!-- fusion-row -->
			</main>  <!-- #main -->
			<?php do_action( 'avada_after_main_container' ); ?>

			<?php global $social_icons; ?>

			<?php if ( false !== strpos( Avada()->settings->get( 'footer_special_effects' ), 'footer_sticky' ) ) : ?>
				</div>
			<?php endif; ?>

			<?php
			/**
			 * Get the correct page ID.
			 */
			$c_page_id = Avada()->fusion_library->get_page_id();
			?>

			<?php
			/**
			 * Only include the footer.
			 */
			?>
			<?php if ( ! is_page_template( 'blank.php' ) ) : ?>
				<?php $footer_parallax_class = ( 'footer_parallax_effect' == Avada()->settings->get( 'footer_special_effects' ) ) ? ' fusion-footer-parallax' : ''; ?>

				<div class="fusion-footer<?php echo esc_attr( $footer_parallax_class ); ?>">

					<?php
					/**
					 * Check if the footer widget area should be displayed.
					 */
					$display_footer = get_post_meta( $c_page_id, 'pyre_display_footer', true );
					?>
					<?php if ( ( Avada()->settings->get( 'footer_widgets' ) && 'no' !== $display_footer ) || ( ! Avada()->settings->get( 'footer_widgets' ) && 'yes' === $display_footer ) ) : ?>
						<?php $footer_widget_area_center_class = ( Avada()->settings->get( 'footer_widgets_center_content' ) ) ? ' fusion-footer-widget-area-center' : ''; ?>

						<footer role="contentinfo" class="fusion-footer-widget-area fusion-widget-area<?php echo esc_attr( $footer_widget_area_center_class ); ?> footer-section">
							<div class="fusion-row">
								<div style="display: none" class="fusion-columns fusion-columns-<?php echo esc_attr( Avada()->settings->get( 'footer_widgets_columns' ) ); ?> fusion-widget-area">
									<?php
									/**
									 * Check the column width based on the amount of columns chosen in Theme Options.
									 */
									$footer_widget_columns = Avada()->settings->get( 'footer_widgets_columns' );
									$footer_widget_columns = ( ! $footer_widget_columns ) ? 1 : $footer_widget_columns;
									$column_width = ( '5' == Avada()->settings->get( 'footer_widgets_columns' ) ) ? 2 : 12 / $footer_widget_columns;
									?>

									<?php
									/**
									 * Render as many widget columns as have been chosen in Theme Options.
									 */
									?>
									<?php for ( $i = 1; $i < 7; $i++ ) : ?>
										<?php if ( $i <= Avada()->settings->get( 'footer_widgets_columns' ) ) : ?>
											<div class="fusion-column<?php echo ( Avada()->settings->get( 'footer_widgets_columns' ) == $i ) ? ' fusion-column-last' : ''; ?> col-lg-<?php echo esc_attr( $column_width ); ?> col-md-<?php echo esc_attr( $column_width ); ?> col-sm-<?php echo esc_attr( $column_width ); ?>">
												<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( 'avada-footer-widget-' . $i ) ) : ?>
													<?php
													/**
													 * All is good, dynamic_sidebar() already called the rendering.
													 */
													?>
												<?php endif; ?>
											</div>
										<?php endif; ?>
									<?php endfor; ?>

															<div class="fusion-clearfix"></div>
														</div> <!-- fusion-columns -->
														<div class="row">
							 
						          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								   <div class="footer-heading">
								   <h2>about</h2>
								   <p>At Walcraft Cabinetry, we are passionate about superior quality and superior service. 
								   We only sell the best cabinets we can find, and provide our customers with top notch service 
								   from beginning to end. </p>
								   </div>
								   
								   <div class="footer-social-icon">
								     <ul>
									 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									   <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									 </ul>
								   </div>
								   
								 </div>
								 
								 
						          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
								      <div class="footer-heading">
								   <h2>Quick Links</h2>
								   
								   </div>
								   <div class="link">
								    <ul>
									<li><a href="<?php echo site_url();?>"><i class="fa fa-caret-right" aria-hidden="true"></i>Walcraft Home</a></li>
									<li><a href="<?php echo site_url();?>/product-category/white-cabinets/"><i class="fa fa-caret-right" aria-hidden="true"></i>White Cabinets</a></li>
									<li><a href="<?php echo site_url();?>/product-category/stained-cabinets/"><i class="fa fa-caret-right" aria-hidden="true"></i>Stained Cabinets</a></li>
									<li><a href="<?php echo site_url();?>/low-voc-cabinets/"><i class="fa fa-caret-right" aria-hidden="true"></i>Low VOC Cabinets</a></li>
									<li><a href="<?php echo site_url();?>/about-walcraft/"><i class="fa fa-caret-right" aria-hidden="true"></i>About Our Cabinets</a></li>
									<li><a href="<?php echo site_url();?>/terms-of-service/"><i class="fa fa-caret-right" aria-hidden="true"></i>Terms of Service</a></li>
									<li><a href="<?php echo site_url();?>/write-review/"><i class="fa fa-caret-right" aria-hidden="true"></i>Write A Review</a></li>
									<li><a href="<?php echo site_url();?>/contact-us/"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact</a></li>
									</ul>
								   </div>
								   
								 </div> 
								 
								 
								 
						          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display:none">
								  <div class="footer-heading">
								   <h2 class="fb">featured products</h2>
								   
								   </div>
						<?php
                        $params = array('posts_per_page' => 3,'post_type' => 'product'); // (1)
                        $wc_query = new WP_Query($params); // (2)
                        ?>
                        <?php if ($wc_query->have_posts()) :  ?>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 diver-top">
                        	<?php while ($wc_query->have_posts()) :
                                        $wc_query->the_post(); 
                            ?>
                        	<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12"><div class="featured-image-area">
						
						<?php $id=get_the_ID();
							  $wpcf_foot_run=get_post_meta($id);
							  $imageStart = wp_get_attachment_image_src( get_post_thumbnail_id( $id),'large' ); 
							  if($wpcf_foot_run['wpcf-foot-run'][0]) {
						?>  
						<img class="img-responsive" src="<?php echo $wpcf_foot_run['wpcf-foot-run'][0];?>">
						<?php } ?>
					</div></div>
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
											    <div class="dover">
												<h6 data-fontsize="16" data-lineheight="24"><?php the_title()?></h6>
												<p class="dover-left">10'X10' Kitchen  </p>
												<p class="dover-right">   10'Foot Run    </p>
												</div>
												
												<div class="dover-2">
												<p class="dover-left">MSRP:  $4810</p>
												<p class="dover-right">  MSRP:  $4810 </p>
												</div>
												
												<div class="dover-2">
												<p class="dover-left">OUR PRICE: $2405  </p>
												<p class="dover-right"> OUR PRICE: $2405 </p>
												</div>
												
												 <div class="more-information">
													 <a href="<?php the_permalink();?>" class="btn info-button">more Information</a>
											  </div>
												
											  </div>
					                       </div>
                                	
                                <?php endwhile; ?>
                                <?php wp_reset_postdata();?>
                                <?php else:  ?>
                                <p>
                                     <?php _e( 'No Products' ); ?>
                                </p>
                                <?php endif; ?>
                                	</div>
								   
								  </div>
								  
								  
								<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
								     <div class="footer-heading">
								        <h2>Request A Quote</h2>
								   </div>
						    <div class="checksui-footer">
					        <p class="checkeun">Send us a quote request today and we will provide you with a free kitchen design and an accurate quote!.</p>
							<?php echo do_shortcode('[contact-form-7 id="19016" title="Home contact"]');?>	   
							</div>
								</div> 
                                </div>
							</div> <!-- fusion-row -->
						</footer> <!-- fusion-footer-widget-area -->
					<?php endif; // End footer wigets check. ?>

					<?php
					/**
					 * Check if the footer copyright area should be displayed.
					 */
					$display_copyright = get_post_meta( $c_page_id, 'pyre_display_copyright', true );
					?>
					<?php if ( ( Avada()->settings->get( 'footer_copyright' ) && 'no' !== $display_copyright ) || ( ! Avada()->settings->get( 'footer_copyright' ) && 'yes' === $display_copyright ) ) : ?>
						<?php $footer_copyright_center_class = ( Avada()->settings->get( 'footer_copyright_center_content' ) ) ? ' fusion-footer-copyright-center' : ''; ?>

						<footer id="footer" class="fusion-footer-copyright-area<?php echo esc_attr( $footer_copyright_center_class ); ?>">
							<div class="fusion-row">
								<div class="fusion-copyright-content">

									<?php
									/**
									 * Footer Content (Copyright area) avada_footer_copyright_content hook.
									 *
									 * @hooked avada_render_footer_copyright_notice - 10 (outputs the HTML for the Theme Options footer copyright text)
									 * @hooked avada_render_footer_social_icons - 15 (outputs the HTML for the footer social icons)..
									 */
									do_action( 'avada_footer_copyright_content' );
									?>

								</div> <!-- fusion-fusion-copyright-content -->
							</div> <!-- fusion-row -->
						</footer> <!-- #footer -->
					<?php endif; // End footer copyright area check. ?>
					<?php
					// Displays WPML language switcher inside footer if parallax effect is used.
					if ( defined( 'ICL_SITEPRESS_VERSION' ) && 'footer_parallax_effect' === Avada()->settings->get( 'footer_special_effects' ) ) {
						global $wpml_language_switcher;
						$slot = $wpml_language_switcher->get_slot( 'statics', 'footer' );
						if ( $slot->is_enabled() ) {
							echo $wpml_language_switcher->render( $slot ); // WPCS: XSS ok.
						}
					}
					?>
				</div> <!-- fusion-footer -->
			<?php endif; ?>
		</div> <!-- wrapper -->

		<?php
		/**
		 * Check if boxed side header layout is used; if so close the #boxed-wrapper container.
		 */
		$page_bg_layout = ( $c_page_id ) ? get_post_meta( $c_page_id, 'pyre_page_bg_layout', true ) : 'default';
		?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'Top' !== Avada()->settings->get( 'header_position' ) ) : ?>
			</div> <!-- #boxed-wrapper -->
		<?php endif; ?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'framed' === Avada()->settings->get( 'scroll_offset' ) && 0 !== intval( Avada()->settings->get( 'margin_offset', 'top' ) ) ) : ?>
			<div class="fusion-top-frame"></div>
			<div class="fusion-bottom-frame"></div>
			<?php if ( 'None' !== Avada()->settings->get( 'boxed_modal_shadow' ) ) : ?>
				<div class="fusion-boxed-shadow"></div>
			<?php endif; ?>
		<?php endif; ?>
		<a class="fusion-one-page-text-link fusion-page-load-link"></a>

		<?php wp_footer(); ?>

		<?php
		/**
		 * Echo the scripts added to the "before </body>" field in Theme Options.
		 * The 'space_body' setting is not sanitized.
		 * In order to be able to take advantage of this,
		 * a user would have to gain access to the database
		 * in which case this is the least on your worries.
		 */
		echo Avada()->settings->get( 'space_body' ); // WPCS: XSS ok.
		?>
		<link rel="stylesheet" href="<?php echo site_url();?>/wp-content/themes/Avada/js/jquery.bxslider.css">
		<script src="<?php echo site_url();?>/wp-content/themes/Avada/js/jquery.bxslider.min.js"></script>
		<!---------------Pop-up Box-------------------------->
		<!--script type="text/javascript" src="//cdn.wishpond.net/connect.js?merchantId=1401569&writeKey=1abcce3cd0a8" async></script-->

		<!---------------Pop-up Box-------------------------->
		<script>
    jQuery(document).ready(function(){
            jQuery('.slider').bxSlider({
            slideWidth: 700,
            minSlides: 2,
            maxSlides: 6,
            moveSlides: 2,
            slideMargin: 10,
            auto:true
        });
    });
  </script>
       <script type="text/javascript">
            jQuery(document).ready(function(){
            jQuery("#detail_info").click(function(){
                    jQuery('.more_detailss').toggle();
                });
              jQuery(".dem_create").mouseover(function(){
                    jQuery(this).next('.base_under_product').show();
                });
                    jQuery(".base").mouseleave(function(){
                        //alert('test');
                    jQuery(this).find('.base_under_product').hide();
                });
            //     jQuery("form.cart").on("change", "input.qty", function() {
            //     if (this.value === "0")
            //         this.value = "1";
                    
             
            //     jQuery(this.form).find("button[data-quantity]").data("quantity", this.value);
            // });
            jQuery('div.woocommerce').on('change', '.qty', function(){
            jQuery("[name='update_cart']").trigger("click"); 
        });
           jQuery("body").on("change", "#fees_option", function() { 
               
              // alert('OI m bccllll');
            var value_price = jQuery( "#fees_option" ).val();
            var data = {
            action: 'woocommerce_apply_state',
            state: value_price,
          
        };
        jQuery('.woocommerce-cart .woocommerce').addClass('efectiv');
               
        jQuery.ajax({
            type: 'POST',
            url: wplc_ajaxurl,
            data: data,
            success: function (code) {
                        jQuery('.woocommerce-cart .woocommerce').removeClass('efectiv');
                        jQuery('#itemsd .fusion-update-cart').text('Email Cart'); 
                //alert('hiiiiii i m bac');
               // console.log(code);
                              var upd_cart_btn = jQuery("button[name='calc_shipping']");
               //upd_cart_btn.hide();
               upd_cart_btn.trigger("click"); 
              //jQuery('body').trigger('update_checkout');
            },
            //dataType: 'html'
        });

       
    });
      jQuery(document.body).on("adding_to_cart", function() {
                    jQuery("a.added_to_cart").remove();
                });
                 jQuery('div.woocommerce').on('change', '.qty', function(){
            jQuery("[name='update_cart']").trigger("click"); 
        });
    });
     
     
     

  /*  jQuery(document).ready(function () {
//jQuery( "#fees_option" ).change(function() {
//jQuery("#fees_option").delegate('.shipping_option', "change", function() {  
//jQuery("#fees_option").bind("change", function() {    
 var options = document.getElementsByName("fees_option");
        if (options.length >= 1) {
                                options[0].addEventListener("change", function() {
alert('i am here');
var value_price = jQuery( "#fees_option" ).val();
        var data = {
            action: 'woocommerce_apply_state',
            state: value_price,
          
        };

        jQuery.ajax({
            type: 'POST',
            url: wplc_ajaxurl,
            data: data,
            success: function (code) {
                alert('hiiiiii i m bac');
               // console.log(code);
                              var upd_cart_btn = jQuery("button[name='calc_shipping']");
               upd_cart_btn.hide();
               upd_cart_btn.trigger("click"); 
              //jQuery('body').trigger('update_checkout');
            },
            //dataType: 'html'
        });

       
    });
        }
  //  }); */
  
  
        </script>
 
	</body>
</html>