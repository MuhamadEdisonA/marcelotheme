    <footer> <!--BLOCK 3-->
        <div class="container">
            <div class="row">
                <div class="copyright col-md-4 col-sm-7 col-4 text-center">
                    <p><?php echo get_theme_mod( 'set_copyright' ); ?></p>
                </div>
                <nav class="footer-menu col-md-8 col-sm-5 col-8 text-right">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
                </nav> 
            </div>
        </div>
    </footer> <!--END BLOCK 3-->
<?php wp_footer(); ?>
</body>
</html>