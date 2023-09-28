<?php 

get_header();

if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
        <div class='card'>
            <p class='title'>Film: <?php the_title() ?></p>
            <?php the_post_thumbnail('medium', ['class'=>'imgCard']); ?>
            <div class='img_card'><img src="#" alt="#"></div>
            <p class='date'>Date de sortie: ??</p>
            <p class='realisateur'>Réalisateur: ??</p>
            <p class='duree'>Durée: ??</p>
            <p class='genre'>Genre: <?php the_category(' ') ?></p>
            <p class='synopsis'>Synopsis: <?php the_content() ?></p>
            <p class='bandeannonce'>Bande-annonce: ??</p>
        </div>
<?php

        endwhile;
endif;

get_footer();

?>