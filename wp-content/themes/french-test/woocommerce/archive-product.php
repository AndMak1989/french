
<ul><?php pll_the_languages(); ?></ul>
<?php // do_action('woocommerce_before_main_content'); ?>

<?php get_header(); ?>




<?php get_footer(); ?>

<?php // do_action('woocommerce_after_main_content'); ?>

<?php dynamic_sidebar('smartslider_area_1'); ?>
</body>

<?php


global $wp_query;
$args = [
    'post_type' => 'product',
    'post_per_page' => '4'
];
$wp_query = new WP_Query($args);


while ($wp_query->have_posts()) { $wp_query->the_post();

?>
    <?php wc_get_template_part('content','product');?>


<?php } ?>




