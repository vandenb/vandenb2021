



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
                    <div class="introcolumn">
                            <p><?php the_field('intro'); ?></p>
                    </div>
                <?php endif; ?> 


                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                                <?php if( get_field('toon_uitgelichte_afbeelding') == 'ja' ): ?>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <?php $width = get_field('width_afbeelding'); ?>
                                    <div class="illustration has-text-centered"><img src="<?php echo $image[0]; ?>" width="<?php echo $width; ?>%"/></div>
                                <?php endif; ?>
                 <?php endif; ?>

                    <div class="article"> 


                        
                        <?php if( get_field('articlestart') ): ?>
                            <h3 class="articlestart"><?php the_field('articlestart'); ?></h3> 
                        <?php endif; ?> 
                        <div class="articlebread">
                            <?php the_content('Lees verder'); ?>
                        </div>
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



	
		

