<?php
/**
 * The template for displaying search content.
 *
 * @package Wromo Marketplace
 * @subpackage AppOryPro
 * @since AppOryPro 1.1
 */
$apporypro_settings = apporypro_get_theme_options(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
		<?php $apporypro_blog_post_image = $apporypro_settings['apporypro_blog_post_image'];
		if( has_post_thumbnail() && $apporypro_blog_post_image == 'on') { ?>
			<div class="post-image-content">
				<figure class="post-featured-image">
					<a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(); ?>
					</a>
				</figure><!-- end.post-featured-image  -->
			</div> <!-- end.post-image-content -->
		<?php } ?>
		<header class="entry-header">
			<h2 class="entry-title"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title();?> </a> </h2> <!-- end.entry-title -->
			<div class="entry-meta">
				<?php if ( 'post' === get_post_type() ) : ?>
						<span class="posted-on"><a title="<?php echo esc_attr( get_the_time() ); ?>" href="<?php the_permalink(); ?>">
						<?php esc_html(the_time( get_option( 'date_format' ) )); ?> </a></span>
				<?php endif;?>
			</div><!-- end .entry-meta -->
		</header><!-- end .entry-header -->
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div> <!-- end .entry-summary -->
	</article><!-- end .post -->