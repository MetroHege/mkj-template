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
                    echo '<h1>Wild West Clothing</h1>';
                    the_content();
                endwhile;
            else :
                _e('Sorry, no posts matched your criteria.', 'aivan-sama');
            endif;
        } elseif (is_page('about')) {
            $page = get_page_by_path('about');
            if ($page) {
                echo '<h1>Wild West Clothing</h1>'; // Change here
                echo apply_filters('the_content', $page->post_content);
            } else {
                echo 'Sorry, no page was found.';
            }
        }
        ?>
    </div>
    <?php the_custom_header_markup(); ?>
</section>
<?php
if (is_front_page()) {
    echo '<div class="custom-paragraphs">';
    echo '<p>Olemme Wild West Clothingilla ylpeitä ja kiitollisia siitä, että olemme vuosien varrella myyneet tuotteita jo useamman tuhannen kappaleen verran!</p>';
    echo '<p>Tämä ei kuitenkaan ole loppuvahti, sillä western-kulttuuri kukoistaa nyt enemmän kuin koskaan. Jokainen myyty tuote edustaa intohimoamme ja omistautumistamme tarjota asiakkaillemme parasta mahdollista laatua ja tyyliä.</p>';
    echo '<p>Tule mukaan tähän ainutlaatuiseen matkaan ja löydä oma villin lännen henkesi Wild West Clothingin valikoimasta!</p>';
    echo '</div>';
}
?>
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
        echo '<h2>Meidän tarinamme</h2>';
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
