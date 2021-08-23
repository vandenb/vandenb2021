
        <section class="outro">
            <div class="outrocontainer">
                <div class="outrocolumn">
                    <p>Dit artikel is geplaatst op <?php the_time('j F Y') ?>.</p>
                    <?php the_field('outro'); ?>   
                   
				 </div>
            </div>
		</section>	
       
       <section class="pagination">
            <div class="columns is-4">
                <div class="column has-bumpers-of-30 has-side-padding ">
                    <h5 class="is-size-5 has-text-centered">De chronologie in deze categorie</h5>
                    <p class="is-size-7 has-text-centered">
                        <?php posts_nav_link(' &bull; ','&laquo; vooruit in de tijd','achteruit in de tijd &raquo;'); ?>
                    </p>
                </div>
            </div>
		    </section>	