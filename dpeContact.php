<?php
/**
 * Template Name: Contact - DPE
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						
						<div class="homeLogo">
							<a href="#" class="logo">
								<img src="/dealpointsent/wp-content/uploads/2013/12/logov1_black_transparent.png" width="100%" height="100%" title="Deal Points Entertainment" id="dpeLogo" alt="Deal Points Entertainment" />
							</a>
							<p class="locationText">
								1801 Century Park East, 19th Floor<br />
								Los Angeles, CA, 90067<br />
								+1(424)652-4411<br />
								<a href="mailto:ak@dealpointsent.com?subject=Coming from Deal Points Entertainment website">ak@dealpointsent.com</a>
							</p>
							<div class="dpeLogo"><img src="http://harrisonschaen.com/dealpointsent/wp-content/uploads/2013/12/dealpointsentlogo.png" width="100" height="auto" alt="Deal Points Entertainment"></p>
						</div>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>