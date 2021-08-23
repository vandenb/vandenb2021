
    <section class="outro">
            <div class="outrocontainer">
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
		</section>	
   


        <section class="indexintro">
            <div class="indexintrocontainer">
                <div class="indexoutrocolumn">
                <h5 class="bottomheader is-size-5 has-text-centered">Hiervoor</h5>
                    <?php
                        $prev_post = get_previous_post();
                        if (!empty( $prev_post )): ?>
                            <p class="is-size-7 has-text-centered">Hiervoor geplaatst: <?php previous_post_link('%link'); ?></p>
                    <?php endif ?>

                   
                    <h5 class="bottomheader is-size-5 has-text-centered">Meer lezen?</h5>
                <p>Er staat een <a href="/inhoudsopgave">inhoudsopgave</a> met alle stukjes voor u klaar.</p>


                </div>
            </div>
        </section>      
