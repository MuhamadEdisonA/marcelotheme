<article>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail( array( 275,275) ); ?> <!---Menampi;kam featured image dan array untuk mengatur ukuran gambar-->
    <div class="meta-info">
        <p>Posted in <?php echo get_the_date(); ?></p>
        <p>Categories: <?php the_category( ', ' ); ?></p> <!--Gunakan koma dan spasi-->
        <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
    </div>
    <p><?php the_content(); ?></p>
</article>