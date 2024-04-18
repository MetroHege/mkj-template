<?php
get_header();
?>

    <section class="hero">
        <div class="hero-text">
            <?php
            if (is_front_page()) {
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        the_title('<h1>', '</h1>');
                        the_content();
                    endwhile;
                else :
                    _e('Sorry, no posts matched your criteria.', 'aivan-sama');
                endif;
            } elseif (is_page('about')) {
                $page = get_page_by_path('about');
                if ($page) {
                    echo '<h1>' . $page->post_title . '</h1>';
                    echo apply_filters('the_content', $page->post_content);
                } else {
                    echo 'Sorry, no page was found.';
                }
            }
            ?>
        </div>
        <?php the_custom_header_markup(); ?>
    </section>
    <main>
        <?php
        if (is_front_page()) {
            ?>
            <section class="products">
                <h2>Featured Products</h2>
                <?php
                $args = ['tag' => 'featured', 'posts_per_page' => 3];

                $products = new WP_Query($args);
                generate_article($products);
                ?>
            </section>
            <?php
        } elseif (is_page('about')) {
            // This is the 'about' page
            echo '<div class="content">';
            echo '<h2>Wild West Clothing</h2>';
            echo '<p>Wild West Clothing on tarina villistä seikkailusta ja ajattomasta tyylistä. Jo 20 vuoden ajan olemme tarjonneet laadukkaita cowboy-vaatteita ja -tarvikkeita, jotka huokuvat lännenhenkeä ja modernia eleganssia.</p>';
            echo '<p>Alkuperämme juontavat juurensa Vantaan Länsimäen pölyisiltä teiltä, missä intohimomme lännenkulttuuriin syttyi. Matkamme on vienyt meidät läpi aavikon ja kaupunkien, kunnes löysimme kodin Helsingin Kampin sydämestä.</p>';
            echo '<p>Kivijalkakauppamme Kampissa on paikka, jossa villi länsi kohtaa urbaanin elämänrytmin. Tule tutustumaan tarinaamme ja löydä oma sielusi kaupungin tomuista ja avaruuden taivaasta!</p>';
            echo '</div>';
        }
        ?>
    </main>
<?php
if (!is_page('about')) {
    get_sidebar();
}
get_footer();
?>