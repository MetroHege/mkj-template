<?php
global $wp_query;
get_header();
?>

    <section class="hero">
        <div class="hero-text">
            <?php
            echo '<h1>' . single_cat_title('', false) . '</h1>';
            echo '<p>' . category_description() . '</p>';
            ?>
        </div>
        <img src="<?php echo get_random_post_image(get_queried_object_id()); ?>"/>
    </section>
<p>test</p>
    <main>
        <section class="products">
            <h2><?php single_cat_title(); ?></h2>
            <?php
            //$wp_query = new WP_Query('cat=' . get_queried_object_id());
            generate_article($wp_query);
            ?>
        </section>
    </main>
<?php
get_footer();
?>