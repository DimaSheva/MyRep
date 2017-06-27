<?php
/**
 * 404
 *
 * @package maxcanvas
 */

get_header(); ?>

<main class="main" role="main">
    <div class="subheader" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/banners/img_2.jpg')">
        <div class="container">
            <h1>404</h1>
        </div>
    </div>
    <div class="indent-block">
        <div class="container text-center">

			<article class="error-404 not-found">
				<header class="entry-header">
					<h2 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'maxcanvas' ); ?></h2>
				</header>
				<div class="entry-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'maxcanvas' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</article>

		</div>
	</div>
    <?php get_template_part('templates/component/bottom'); ?>
</main>

<?php get_footer(); ?>
