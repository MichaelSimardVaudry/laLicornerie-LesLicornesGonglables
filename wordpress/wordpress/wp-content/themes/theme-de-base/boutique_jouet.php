<?php 
/**
 * 	Template Name: Boutique_jouet
 */
get_header();

$products = array('post_type' => array('jouet'));

?>

<main>
    <article class='lesProduits'>
        <?php $query = new WP_Query($products);
        while($query->have_posts()) : $query->the_post(); ?>
        <div class='produit'>
            <a
                href="http://localhost/laLicornerie-LesLicornesGonflables/wordpress/wordpress/article/<?php the_field('titre')?>"><img
                    class='imgProduit' src='<?php the_field('image_produit') ; ?>'></a>
            <div class='nomProduit produitGeneralInfo'><?php the_field('titre') ; ?></div>
            <div class='prixProduit produitGeneralInfo'><?php the_field('prix') ; ?></div>
            <button type="button" class='boutiqueBouton'>Ajouter au Panier</button>
        </div>
        <?php  endwhile; wp_reset_postdata(); ?>
    </article>
</main>

<?php get_footer(); ?>