    <footer class="site-footer">

        <?php
        wp_nav_menu( array(
            'theme_location' => 'footer',
            'container'      => 'nav',
            'fallback_cb'    => false,
        ) );
        ?>

        <p>&copy; 2025 — La Boucle</p>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>
