<?php get_header(); ?>
<?php
// the query
$wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
<?php if ($wpb_all_query->have_posts()) : ?>

    <div class="post-list">

        <!-- the loop -->
        <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
            <div class="post-single">
                <p>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </p>
                <p>
                    Yazar: <?php the_author() ?>
                </p>
                <p>
                    Tarih: <?php the_date('Y-m-d'); ?>
                </p>
            </div>
        <?php endwhile; ?>
        <!-- end of the loop -->

    </div>

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>