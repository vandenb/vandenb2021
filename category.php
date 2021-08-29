<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

			<section class="intro">
				<div class="introcontainer">
					<div class="introcolumn">
					<h3><?php printf(single_cat_title( '', false )); ?></h3>
					<?php if ( category_description() ) : // Show an optional category description ?>
						<p class="archive-meta"><?php echo category_description(); ?></p>
					<?php endif; ?>
					</div>
				</div>
			</section>

        <section class="bread">
            <div class="breadcontainer">
                <div class="breadcolumn">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				
				echo do_shortcode("[catlist categorypage='yes' numberposts=-1 date=yes dateformat='j F Y']");

			endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		                </div>
            </div>
        </section>





<?php get_footer(); ?>





