<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header>
        <h2><?php the_title(); ?></h2>
        <div class="meta-info">
            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
            <p>Categories: <?php the_category( ', ' ); ?></p> <!--Gunakan koma dan spasi-->
            <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
        </div>
    </header>
    
    <div class="content">
        <p><?php the_content(); ?></p>
    </div>
    
</article>