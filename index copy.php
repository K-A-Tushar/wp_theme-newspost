<?php get_header(); // Includes the header.php file 
?>

<main id="primary" class="site-main">
    <div class="container"> <!-- Start container for posts -->

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content"><?php the_content(); ?></div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->

                <hr>

            <?php
            endwhile;
        else :
            ?>
            <p><?php _e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
        <?php
        endif;
        ?>
    </div> <!-- End container for posts -->
</main><!-- #main -->

<?php get_footer(); // Includes the footer.php file 
?>