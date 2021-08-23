<?php get_header(); ?>




<?php while ( have_posts() ) : the_post(); ?>

		<!--?php get_template_part( 'content', get_post_format() ); ?-->

		<?php get_template_part( 'content', 'page' ); ?>
 

<?php endwhile; ?>

<?php get_template_part( 'pagination-page'); ?>
 

<?php get_footer(); ?>