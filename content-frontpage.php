



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

                <div class="outrocolumn">
                    <p>Dit artikel is geplaatst op <?php the_time('j F Y') ?>, in de categorie 
                        <span class="is-lowercase">
                            <a href="/inhoudsopgave#<?php $category = get_the_category(); echo $category[0]->slug ?>">  
                            <?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>.
                        </span>
                    </p>
                    <?php the_field('outro'); ?>   
                   
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



	
		

