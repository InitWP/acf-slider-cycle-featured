/************************************* Slider Featured *************************************/
if( have_rows('featured_slider') ): ?>
	<div class="slider slider-featured">

	<?php while( have_rows('featured_slider') ): the_row();

		// Get the page
		$post_object = get_sub_field('slider_item');

		if ($post_object) {
			$post = $post_object;
			setup_postdata($post);

			$post_id = $post->ID;
		?>
			<div class="slider-featured--slide" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id, 'Slider large'); ?>');">
				<ul class="slider--pager"></ul>
				<a href="<?php the_permalink(); ?>" class="teaser teaserFeatured">
					<div class="teaserFeatured--title">
						<?php the_title(); ?>
					</div>
					<div class="teaserFeatured--content">

					</div>
				</a>
			</div>
			<?php
			wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
		}

	endwhile; ?>

	</div>
<?php
endif;
/************************************* /Slider Featured ************************************/
