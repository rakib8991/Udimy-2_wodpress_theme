        <footer id="mustfooter" class="site-footer">
            <div class="container">
                <div class="footer-menu">
                    <?php 
                        $args = array(
                            'theme_location'    => 'primary_menu',
                            'container'         => 'nav',
                            'containar_class'   => 'site_nav'
                        );
                        wp_nav_menu($args);
                    ?>
                </div>
                <hr>
                <p class="copyright-text">all right are reserve | <?php echo date('Y'); ?></p>
            </div>
        </footer>
    </div>
</body>
<?php wp_footer(); ?>
</html>