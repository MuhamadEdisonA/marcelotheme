<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

<h2>Search result for "<?php echo get_search_query(); ?>"</h2>

        <?php 

            get_search_form();

            //If there are any posts
            if( have_posts() ): 
            //While have posts. show them to us
            while( have_posts() ): the_post();
            
            get_template_part( 'template-parts/content', 'search' ); 

            endwhile;

            the_posts_pagination(
                array(
                    'screen_reader_text' => ' ', 
                    'mid_size'  => 2,
                    'prev_text' => 'Previous',
                    'next_text' => 'Next',
                )
            );


            else:

        ?>
        <h3>There's nothing yet to be displayed here!!</h3>
        <?php endif; ?>
        
        </div>
    </div>
</div>
<?php get_footer(); ?>