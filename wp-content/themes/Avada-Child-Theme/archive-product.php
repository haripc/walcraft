<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php

if ( have_posts() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked wc_print_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

		$cate = get_queried_object();
		$cateID = $cate->term_id;
		//echo $cateID;

		$args = array(
		   'hierarchical' => 1,
		   'show_option_none' => '',
		   'hide_empty' => 0,
		   'parent' => $cateID,
		   'taxonomy' => 'product_cat'
		);
		$subcats = get_categories($args);

		$resultSubCat=count($subcats);

		if($cateID==18 || $cateID==17){ ?>
		<ul class="products clearfix products-2">
		   	<?php foreach($subcats as $cat_id  ) {
					//print_r($cat_id);
		   		 	$thumbnail_id = get_woocommerce_term_meta( $cat_id->term_id, 'thumbnail_id', true ); 
					$image = wp_get_attachment_url( $thumbnail_id );
		   		?>
		   	<li class="post-1463 product type-product status-publish has-post-thumbnail product_cat-essex product_cat-two-door-wall-cabinets-essex product_cat-wall-cabinets-essex product-grid-view first instock sale taxable shipping-taxable purchasable product-type-simple">
						<div class="featured-image">
							<img width="300" height="300" src="<?php echo $image; ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image">
							<div class="cart-loading"><i class="fusion-icon-spinner"></i></div>
						</div>

				<div class="product-details">
					<div class="product-details-container">
						<h3 class="product-title-custom">
						<a href="<?php echo get_category_link($cat_id->term_id); ?>">
							<?php echo $cat_id->name; ?></a>
						</h3>
						<div class="fusion-price-rating">
							<p class="cat_description"> <?php echo $cat_id->category_description; ?> </p>
						</div>
					</div>
				</div>

			<div class="product-buttons">
				<div class="fusion-content-sep sep-double sep-solid"></div>
				<div class="product-buttons-container clearfix">
				<a href="<?php echo get_category_link($cat_id->term_id); ?>" class="button add_to_cart_button custom-view" rel="nofollow"><span>View Cabinet Selection and Pricing </span> </a>
				<a href="#" class="show_details_button">Details </a>
				</div>
			</div>
		</li>
           		
          <?php 	} ?>

           </ul>

           	
       <?php    }
           else {
			 if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/*
			 * Hook: woocommerce_shop_loop.
			 *
			 * @hooked WC_Structured_Data::generate_product_data() - 10
			 */
			 
			do_action( 'woocommerce_shop_loop' );
			
			wc_get_template_part( 'content', 'product' );
			
		}
	}
}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
