<div class="main_menu">

    <a class="co-logo" href="/"><img src="https://www.agcled.com/static/images/agc-logo.png"></a>

    <?php wp_nav_menu(array('theme_location' => 'header_menu', 'menu_class' => 'mak_menu')); ?>

    <div class="full_menu clearfix">
        <?php wp_nav_menu(array('theme_location' => 'applic_menu')); ?>
    </div>
    <div class="full_menu clearfix">
            <?php dynamic_sidebar('Menu_widgets'); ?>
    </div>
</div>