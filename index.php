<?php get_header(); ?>




<section class="bread">
            <div class="breadcontainer">
                <div class="breadcolumn">
                               

                 


                
                    <div class="article"> 


                        
                         
                        <div class="articlebread">
                            <div class="inhoudsopgave">



<?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 1,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <div class="highlighted">
                    
                    <h4>Laatste update</h4>
                        <h3 style="font-size:2.5rem !important;font-style:italic !important;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="overzichtdatum"><?php the_time('j F Y') ?></p>
                        <br>
                        <p class="overzichtintro"><?php the_field('intro'); ?></p>
                        <br>
                        <p class="laatsteupdate"><i><?php the_field('_yoast_wpseo_metadesc'); ?></i><br><span style="font-size:1rem"><a href="<?php the_permalink(); ?>">Lees verder &raquo;</a></span></p>
                    <hr>
                    </div>
    

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>


<p>U kunt zich inschrijven voor <a href="https://tinyletter.com/vandenb/" target="_blank" rel="noopener">de nieuwsbrief</a>.</p>

<!--h3>Over</h3-->
<ul>
 	<li><a href="https://vandenb.com/biografie/">Over Walter van den Berg</a></li>
 	<li><a href="https://vandenb.com/over/">Over vandenb.com</a></li>
</ul>
<h3>Boeken</h3>
Ik heb vijf romans geschreven.
<ul>
 	<li>2020: <a href="https://vandenb.com/ruimte/">Ruimte</a></li>
 	<li>2015: <a href="https://vandenb.com/schuld/">Schuld</a></li>
 	<li>2012:<a href="https://vandenb.com/van-dode-mannen-win-je-niet/">Van dode mannen win je niet</a></li>
 	<li>2007:<a href="https://vandenb.com/west/">West</a></li>
 	<li>2004: <a href="https://vandenb.com/de-hondenkoning/">De hondenkoning</a></li>
</ul>

<h3>Stukjes</h3>
<p>Alle stukjes, omgekeerd chronologisch. <br>Stukjes die iets meer aandacht verdienen, hebben een grotere kop.</p>
<br>
<br> 





<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>500,'offset' => 1)); ?>
<!-- posts_perPage staat hier op 500 omdat offset niet werkt als je -1 gebruikt, zoals eigenlijk zou moeten -->
<?php if ( $wpb_all_query->have_posts() ) : ?>
 

 
    
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

            <?php if ( has_tag( 'highlight' ) ) : ?>
                
                    <div class="highlighted">
                    <hr>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="overzichtintro"><?php the_field('intro'); ?></p>
                        <p class="overzichtdatum"><?php the_time('j F Y') ?></p>
                        
                    
                    </div>

 
                    <?php else : ?>

                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>  
                        <div class="overzichtdatum"><?php the_time('j F Y') ?></div>               
  
            
                    <?php endif; ?>





    <?php endwhile; ?>
    <!-- end of the loop -->
 

 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>
</div>


<section class="indexintro">
            <div class="indexintrocontainer">
                <div class="indexintrocolumn">
                   <?php dynamic_sidebar( 'sidebar-3' ); ?>
                   
                </div>
            </div>
        </section>



 

        <div class="has-topbumper-of-30">
       
       <div class="analytics">
         
         <p>Statistieken worden bijgehouden door Google Analytics, maar ik heb geen idee waar ik eigenlijk naar kijk.</p>
         
         </div>

</div><!-- container -->


<!-- End Document
================================================== -->



</body>
</html>