<?php
/**
 * Title: Social: Follow us on social media
 * Slug: woocommerce-blocks/social-follow-us-in-social-media
 * Categories: WooCommerce
 */

use Automattic\WooCommerce\Blocks\Patterns\PatternsHelper;

$image1 = PatternsHelper::get_image_url( $images, 0, 'images/pattern-placeholders/drinkware-liquid-tableware-dishware-bottle-fluid.jpg' );
$image2 = PatternsHelper::get_image_url( $images, 1, 'images/pattern-placeholders/watch-hand-brand-jewellery-strap-platinum.jpg' );
$image3 = PatternsHelper::get_image_url( $images, 2, 'images/pattern-placeholders/tree-branch-plant-wood-leaf-flower.jpg' );
$image4 = PatternsHelper::get_image_url( $images, 3, 'images/pattern-placeholders/road-sport-vintage-wheel-retro-old.jpg' );

$social_title = $content['titles'][0]['default'] ?? '';
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0px","bottom":"80px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:80px;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"level":3,"align":"wide"} -->
		<h3 class="wp-block-heading alignwide"><?php echo esc_html( $social_title ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:social-links {"iconColor":"primary","openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"0","left":"16px"}}},"className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

			<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

			<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

			<!-- wp:social-link {"url":"https://www.twitch.tv/","service":"twitch"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"width":"266px","height":"266px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image is-resized size-large">
				<img src="<?php echo esc_url( $image1 ); ?>" alt="<?php esc_attr_e( 'Placeholder image used to represent products being showcased under the social media icons. 1 out of 4.', 'woo-gutenberg-products-block' ); ?>" style="aspect-ratio:1;object-fit:cover;width:266px;height:266px"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"width":"266px","height":"266px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image is-resized size-large">
				<img src="<?php echo esc_url( $image2 ); ?>" alt="<?php esc_attr_e( 'Placeholder image used to represent products being showcased under the social media icons. 2 out of 4.', 'woo-gutenberg-products-block' ); ?>" style="aspect-ratio:1;object-fit:cover;width:266px;height:266px"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"width":"266px","height":"266px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image is-resized size-large">
				<img src="<?php echo esc_url( $image3 ); ?>" alt="<?php esc_attr_e( 'Placeholder image used to represent products being showcased under the social media icons. 3 out of 4.', 'woo-gutenberg-products-block' ); ?>" style="aspect-ratio:1;object-fit:cover;width:266px;height:266px"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"width":"266px","height":"266px","aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image is-resized size-large">
				<img src="<?php echo esc_url( $image4 ); ?>" alt="<?php esc_attr_e( 'Placeholder image used to represent products being showcased under the social media icons. 4 out of 4.', 'woo-gutenberg-products-block' ); ?>" style="aspect-ratio:1;object-fit:cover;width:266px;height:266px"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
