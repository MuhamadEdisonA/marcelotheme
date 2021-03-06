<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">

    <div class="content-area"> <!--BLOCK 2-->
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        
                        <div class="news col-md-9">
                            <?php 

                                //If there are any posts
                                if( have_posts() ): 
                                    //While have posts. show them to us
                                    while( have_posts() ): the_post();
            
                            get_template_part( 'template-parts/content', get_post_format() ); 

                            endwhile;

                            ?>

                            <div class="row">
                            
                                <div class="pages col-md-6 text-left">
                                    <?php previous_posts_link ("<< Newer posts"); ?>
                                </div>
                                <div class="pages col-md-6 text-right">
                                    <?php next_posts_link ("<< Older posts"); ?>
                                </div>
                            
                            </div>
                            
                            <?php

                            else:

                            ?>
                            <h3>There's nothing yet to be displayed here!!</h3>
                            <?php endif; ?>
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