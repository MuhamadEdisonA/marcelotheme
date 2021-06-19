<?php

/*
Template Name: General template
*/

?>

<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">

    <div class="content-area"> <!--BLOCK 2-->
        <main>
            <section class="middle-area">
                <div class="container">
                    
                        <div class="general-template">
                            <?php 
                                //If there are any posts
                                if( have_posts() ): 
                                    //While have posts. show them to us
                                    while( have_posts() ): the_post();
            
                            ?>

                            <article>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </article>

                            <p>This page template is the same on all selected page</p>

                            <?php

                            endwhile;
                            else:

                            ?>
                            <h3>There's nothing yet to be displayed here!!</h3>
                            <?php endif; ?>
                        </div>    
                </div>
            </section>
        </main> 
    </div> <!--END BLOCK 2-->
<?php get_footer(); ?>