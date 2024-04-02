<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        //page cart content
        echo do_shortcode('[woocommerce_cart]');
        ?>
    </main>
</div>
<?php get_footer(); ?>
