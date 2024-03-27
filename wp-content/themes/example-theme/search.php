<?php
global $wp_query;
get_header();
?>
    <main>
        <section class="products">
            <h2><?php _e('Search results', 'aivan-sama') ?></h2>
            <?php
            //$wp_query = new WP_Query('cat=' . get_queried_object_id());
            generate_article($wp_query);
            ?>
        </section>
    </main>
<?php
get_footer();
?>