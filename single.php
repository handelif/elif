<?php get_header(); ?>
<a href="<?php echo home_url(); ?>">Anasayfa</a>
<h1>
    <?php the_title(); ?>
</h1>
<div>
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>
 <!--Blog yazılarınızın devamını görüntüle linkinin açan alandır