<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">

    <div class="content-area"> <!--BLOCK 2-->
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        
                        <div class="error-404">
                          
                            <header>
                            
                                <h3>Page Not Found</h3>
                                <p>Unfornatunely, The page you tried to reach does not exit on this site!</p>
                            
                            </header>

                            <div class="error">
                            
                                <p>How about doing a search</p>
                                <?php get_search_form(); ?>
                                <?php the_widget( 'WP_Widget_Recent_Posts', array( 'title' => 'Latest Posts', 'number' => 3) ); ?>
                            
                            </div>

                        </div>
                        <aside class="sidebar col-md-3 h-100"><?php get_sidebar( 'blog' ) ?></aside>    
                    </div>
                </div>
                    
            </section>
            <section class="map">
                <div class="container">
                    <div class="row">Map</div>
                </div>
            </section>
        </main> 
    </div> <!--END BLOCK 2-->
<?php get_footer(); ?>