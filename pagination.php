
    <section class="outro">
            <div class="outrocontainer">
                <div class="outrocolumn">
                    <p>Dit artikel is geplaatst op <?php the_time('j F Y') ?>, in de categorie 
                        <span class="is-lowercase">
                                <a href="/<?php $category = get_the_category(); echo $category[0]->slug ?>">  
                                <?php $category = get_the_category(); echo $category[0]->cat_name; ?></a>.
                        </span>
                    </p>
                     
                   
				 </div>
            </div>
		</section>	
   
   	


        <section class="indexintro">
            <div class="indexintrocontainer">
                <div class="indexoutrocolumn">
                <h5 class="bottomheader is-size-5 has-text-centered">Hiervoor/hierna</h5>
                    <?php
                        $prev_post = get_previous_post();
                        if (!empty( $prev_post )): ?>
                            <p class="is-size-7 has-text-centered">Hiervoor geplaatst: <?php previous_post_link('%link'); ?></p>
                    <?php endif ?>
                    <?php
                        $next_post = get_next_post();
                        if (!empty( $next_post )): ?>
                            <p class="is-size-7 has-text-centered">Hierna geplaatst: <?php next_post_link('%link'); ?></p>
                    <?php endif ?> 
                   
                    

                </div>
            </div>
        </section>      

        
              