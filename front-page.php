<?php
/**
 * HOMEPAGE
 *
 * @package maxcanvas
 */

get_header(); ?>

<main class="main">
    <?php get_template_part( 'templates/component/billboard' ); ?>
    <div class="info-line">
        <div class="container text-center">
            <address>
                <span class="title"><?php the_field('home_title'); ?></span>
                <?php if (have_posts()):
                the_post();
                the_content();
                endif;?>
            </address>
            <a href="<?php the_field('btn_url');?>" class="btn btn-red"><?php the_field('btn_label');?></a>
        </div>
    </div>
    <div class="indent-block">
        <?php if (have_rows('image_list')): ?>
        <div class="container">
            <div class="page-link-list">
                    <?php while (have_rows('image_list')): the_row(); ?>
                        <div class="page-link">
                            <a  href="<?php echo get_sub_field('image_url');?>" style="background-image: url('<?php echo get_sub_field('image')['url']; ?>')">
                               <?php echo get_sub_field('image_title');?>
                          </a>

                        </div>
                    <?php endwhile;?>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php get_template_part( 'templates/component/bottom' ); ?>
</main>

<?php get_footer(); ?>