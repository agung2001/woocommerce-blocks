<?php
/**
 * Title: Just Arrived Full Hero
 * Slug: woocommerce-blocks/just-arrived-full-hero
 * Categories: WooCommerce
 */

use Automattic\WooCommerce\Blocks\Patterns\PatternsHelper;

$pattern_title       = $content['titles'][0]['default'] ?? '';
$pattern_description = $content['descriptions'][0]['default'] ?? '';
$pattern_button      = $content['buttons'][0]['default'] ?? '';
$pattern_image       = PatternsHelper::get_image_url( $images, 0, 'images/pattern-placeholders/man-person-music-black-and-white-white-photography.jpg' );
?>

<!-- wp:cover {"url":"<?php echo esc_url( $pattern_image ); ?>", "focalPoint":{"x":0.5,"y":0.1}, "dimRatio":30,"minHeight":739,"contentPosition":"center right","align":"full","style":{"spacing":{"margin":{"bottom":"80px"},"padding":{"left":"0","right":"25%"}}}}  -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-right" style="margin-bottom:80px;padding-right:25%;padding-left:0;min-height:739px">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $pattern_image ); ?>" style="object-position:50% 10%" data-object-fit="cover" data-object-position="50% 10%" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"},"blockGap":"16px"}}} {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"anchor":"just-arrived"} -->
			<h2 class="wp-block-heading" id="just-arrived"><?php echo esc_html( $pattern_title ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html( $pattern_description ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>"><?php echo esc_html( $pattern_button ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
