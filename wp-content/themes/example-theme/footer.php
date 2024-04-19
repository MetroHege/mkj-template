</div>
<footer>
    <p class="copyright">&copy; 2024 Wild West Clothing</p>
    <nav class="footer-nav">
        <?php
        $args = array(
            'title_li' => '',
            'echo'     => 1,
        );
        wp_list_pages($args);
        ?>
        <a href="https://users.metropolia.fi/~henriole/mkj-wp/category/products/">Tuotteet</a>

    </nav>
</footer>
<dialog id="single-post">
    <button id="close">Close</button>
    <article id="modal-content" class="single"></article>
</dialog>
<script src="<?php echo get_template_directory_uri(); ?>./js/map.js"></script>
<?php wp_footer(); ?>
</body>
</html>