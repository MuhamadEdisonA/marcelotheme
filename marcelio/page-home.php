<?php get_header(); ?>
    <div class="content-area"> <!--BLOCK 2-->
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row"><?php motoPressSlider( "home-slider" ) ?></div>
                </div>
            </section>
            <section class="services">
                <div class="container">
                <h1>Our Services</h1>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="service-item">
                                <?php

                                if( is_active_sidebar( 'service-1' ) ){
                                dynamic_sidebar( 'service-1' );
                                }

                                ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-item">
                                <?php

                                if( is_active_sidebar( 'service-2' ) ){
                                dynamic_sidebar( 'service-2' );
                                }

                                ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service-item">
                                <?php

                                if( is_active_sidebar( 'service-3' ) ){
                                dynamic_sidebar( 'service-3' );
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-4 h-100"><?php get_sidebar( 'home' ) ?></aside>
                        <div class="news col-md-8">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    
                                    //First Loop
                                    $featured = new WP_Query( 'post_type=post&posts_per_page=1&cat=1,3' );
                                    
                                    if( $featured->have_posts() ): 
                                        while( $featured->have_posts() ): $featured->the_post();
                                    
                                    ?>

                                    <div class="col-lg-12">
                                        <?php get_template_part( 'template-parts/content', 'featured' ); ?>
                                    </div>

                                    <?php

                                        endwhile;
                                        wp_reset_postdata();
                                    endif;

                                    //Second loop
                                    $secondary = new WP_Query( 'post_type=post&posts_per_page=1&cat=1,3' );
                                    
                                    if( $secondary->have_posts() ): 
                                        while( $secondary->have_posts() ): $secondary->the_post();
                                    
                                    ?>

                                    <div class="col-lg-12">
                                        <?php get_template_part( 'template-parts/content', 'featured' ); ?>
                                    </div>

                                    <?php

                                        endwhile;
                                        wp_reset_postdata();
                                    endif;

                                    ?>
                                </div>
                            </div>
                        </div>    
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