<?php
/**
 * Modèle générique au cas où Wordpress ne trouve pas un modèle
 * À utiliser comme fallback seulement.
 */

get_header(); // Affiche header.php
//$comestible = new WP_Query('post_type=comestible');
//$jouet = new WP_Query('post_type=jouet');
//$bijoux = new WP_Query('post_type=bijoux');
//$accessoir = new WP_Query('post_type=accessoir');
//$Nouvelle = new WP_Query('post_type=Nouvelle');

// Est-ce que nous avons des posts qui correspondent à notre requête ?
// Dans le cas de la page d'accueil, les billets les plus récents serons affichés
?>


<main>
    <section class="main-hero">

        <h1>La Licornerie</h1>
        </div>
        </div>
        <?php xo_slider( 44 ); ?>
    </section>

    <section class="main-categorie">

        <H2>Magasinez Par Catégories</H2>
        </div>
        <a>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <img class="catego-1"
                            src="http://localhost/laLicornerie-LesLicornesGonflables/medias/boutique/9-Emma_licorne_sorbet.jpg"
                            alt="">
                        <p>Jouets</p>
                    </div>
                    <div class="col-3">
                        <img class="catego-1"
                            src="http://localhost/laLicornerie-LesLicornesGonflables/medias/boutique/9-Emma_licorne_sorbet.jpg"
                            alt="">
                        <p>Bijoux</p>
                    </div>
                    <div class="col-3">
                        <img class="catego-1"
                            src="http://localhost/laLicornerie-LesLicornesGonflables/medias/boutique/9-Emma_licorne_sorbet.jpg"
                            alt="">
                        <p>Accessoires</p>
                    </div>
                    <div class="col-3">
                        <img class="catego-1"
                            src="http://localhost/laLicornerie-LesLicornesGonflables/medias/boutique/9-Emma_licorne_sorbet.jpg"
                            alt="">
                        <p>Comestibles</p>
                    </div>
                </div>
            </div>
        </a>

    </section>
    <section class="main-vedette">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <H2>Produits Vedettes</H2>
                </div>
            </div>
            <?php
                $arguments = array(
                    'post_type' => 'comestible',
                    'posts_per_page' => 1
                );
                $comestible = new WP_Query($arguments);
                while ($comestible->have_posts()) : $comestible->the_post('sirop-de-licorne-rose'); 
            
            ?>

            <div class="row">
                <div class="col-4 vedette">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php the_field('image_produit'); ?>" class="card-img-top" alt="poop">

                        <div class="card-body">
                            <h5 class="card-title"><?php the_field('titre'); ?></h5>
                            <a href="#" class="btn btn-primary">Voir</a>
                        </div>
                    </div>
                </div>

                <?php
                    endwhile; 
                    wp_reset_postdata(); 
                ?>
                <?php
                $arguments = array(
                    'post_type' => 'jouet',
                    'posts_per_page' => 1
                );
                $jouet = new WP_Query($arguments);
                while ($jouet->have_posts()) : $jouet->the_post('toutou-meowchi'); 
            
            ?>
                <div class="col-4 vedette">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php the_field('image_produit'); ?>" class="card-img-top" alt="poop">

                        <div class="card-body">
                            <h5 class="card-title"><?php the_field('titre'); ?></h5>
                            <a href="#" class="btn btn-primary">Voir</a>
                        </div>
                    </div>
                </div>

                <?php
                    endwhile; 
                    wp_reset_postdata(); 
                ?>
                <?php
                $arguments = array(
                    'post_type' => 'bijoux',
                    'posts_per_page' => 1
                );
                $bijou = new WP_Query($arguments);
                while ($bijou->have_posts()) : $bijou->the_post('collier-quartz'); 
            
            ?>
                <div class="col-4 vedette">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php the_field('image_produit'); ?>" class="card-img-top" alt="poop">

                        <div class="card-body">
                            <h5 class="card-title"><?php the_field('titre'); ?></h5>
                            <a href="#" class="btn btn-primary">Voir</a>
                        </div>
                    </div>
                </div>

                <?php
                    endwhile; 
                    wp_reset_postdata(); 
                ?>

            </div>
    </section>
    <section class="main-temoignage">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <H2>Avis</H2>
                </div>
            </div>
            <div class="row">
                <?php
                $arguments = array(
                    'post_type' => 'avis',
                    'posts_per_page' => 3
                );
                $avis = new WP_Query($arguments);
                while ($avis->have_posts()) : $avis->the_post(); 
            
            ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="col-5">
                            <img src="<?php the_field('photo'); ?>" class="img-fluid">
                        </div>
                        <div class="col-7">
                            <h5 class="card-title"><?php the_field('nom'); ?></h5>
                            <div class="card-body"><?php the_field('commentaire'); ?></div>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile; 
                    wp_reset_postdata(); 
                ?>

            </div>
        </div>
    </section>

</main>
<?php
get_footer(); // Affiche footer.php 
?>