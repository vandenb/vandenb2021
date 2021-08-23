


        <section class="bread">
            <div class="breadcontainer">
                <div class="breadcolumn">
                <?php if (is_home() or is_category() or is_archive()): ?>
                    <a href="<?php the_permalink() ?>" class="blacklink" rel="bookmark" title="Permanente link naar <?php the_title_attribute(); ?>"><h2 class="articletitle"><?php the_title(); ?></h2></a>
                <?php elseif (is_single()): ?>
                     <h1 class="articletitle"><?php the_title(); ?></h1>
                <?php else: ?>
                    <a href="<?php the_permalink() ?>" class="blacklink" rel="bookmark" title="Permanente link naar <?php the_title_attribute(); ?>"><h2 class="articletitle"><?php the_title(); ?></h2></a>
                <?php endif; ?>   

                <?php if( get_field('intro') ): ?>
                    <div class="introcolumn2">
                            <p><?php the_field('intro'); ?></p>
                    </div>
                <?php endif; ?>

                    <div class="note">                    	
						<?php the_content('Lees verder'); ?>
				  	</div>
                </div>
            </div>
        </section>


        <section class="bottomhrsection">
            <div class="bottomhrcontainer">
                <div class="bottomhrcolumn">
                        <hr class="is-standard-hr"> 
                </div>
            </div>
        </section>



	
		

