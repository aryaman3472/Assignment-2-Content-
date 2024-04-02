<?php get_header(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Linked css -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_stylesheet_uri() ); ?>?v=<?php echo time(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="masthead" class="site-header" role="banner">
        <div class="container">
            <h1 class="site-title">BookHaven</h1>
            <a href="http://cms-class-2024.local/product/pride-and-prejudice/" class="shop-button">Shop now</a>
        </div>
    </header>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <div class="images-container">
        <div class="images-container">
            <!-- I added link for the image -->
            <!-- Thank You https://www.kobo.com/ca/en/plus/plans?utm_source=google&utm_medium=cpc&utm_campaign=brd_ca_kplu&utm_source=google&utm_medium=cpc&utm_campaign=ca-kplu-search-brd&gad_source=1&gclid=CjwKCAjwtqmwBhBVEiwAL-WAYf40M3gq4sQrfjIDM8cwnAkisUTjpLUoHrn5GpJ0gPwpTR-bvxe_YhoC51sQAvD_BwE for the image -->
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/The.jpg" alt="First Image">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Harry.jpg" alt="Second Image">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Robert.jpg" alt="Third Image">
</div>

            </div>
            <!-- Why BookHaven? Section -->
            <section class="why-bookhaven">
                <div class="container">
                    <h2>Why BookHaven?</h2>
                    <p> You can Discover a world of literature at BookHaven, where we offer a vast selection of books from various genres. Whether you're a seasonal reader or just starting your literary journey, we have something for everyone. Explore our curated collection and immerse yourself in the joy of reading.</p>
                </div>
            </section>
            
            <div class="entry-content">
                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                    the_excerpt();

                // End the loop.
                endwhile;
                ?>
                 <a href="<?php the_permalink(); ?>" class="btn btn-secondary">Read More</a>
    
                 <a href="http://cms-class-2024.local/product/pride-and-prejudice/" class="btn btn-success">Buy Now</a>
            </div>
        </main>
    </div>
     <!-- Including the footer template -->
    <?php get_footer(); ?>
</body>
</html>




