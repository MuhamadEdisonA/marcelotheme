<article <?php post_class( array( 'class' => 'featured') ); ?>>
    
    <div class="thumbnail">
        <a href="<?php the_permalink(); ?>" class="href"><?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?> </a>
    </div>

    <a href="<?php the_permalink(); ?>" class="href"><h2><?php the_title(); ?></h2></a>

    <div class="meta-info"><!--
        <p>
            by <span><?php //the_author_posts_link(); ?></span>
            Categories: <span><?php //the_category( ', ' ); ?></span> <!--Gunakan koma dan spasi-->
            <?php //the_tags( 'Tags: <span>', ', ', '<span>' ); ?>
            
        </p>
    </div>
    Posted in <span><?php echo get_the_date(); ?></pan>
    <p><?php the_excerpt(); ?></p>
</article>