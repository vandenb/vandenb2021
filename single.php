<?php get_header('single'); ?>




<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>
 

<?php endwhile; ?>


<section class="indexintro">
            <div class="indexintrocontainer">
                <div class="indexintrocolumn">
                   <?php dynamic_sidebar( 'sidebar-3' ); ?>
                   
                </div>
            </div>
        </section>


<?php get_template_part( 'pagination'); ?>

<?php get_footer(); ?>