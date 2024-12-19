<?php
/*
Template Name: Template Pays
*/
?>
<?php
    get_header();
?>

<section class="featured-article global">
    <h2 class="featured-title"><?= esc_html(get_the_title()); ?></h2>
    <div class="featured-content">

    </div>
</section>

<?php
    // Requête pour l'article 196 (galerie)
    $featured_post = new WP_Query(array(
        'p' => 196, // ID de l'article
        'post_type' => 'post' // Type de contenu (post, page, etc.)
    ));

    if ($featured_post->have_posts()) : 
        while ($featured_post->have_posts()) : $featured_post->the_post(); 
    ?>
<main class="principal">
    <section class="global">
        <h2>Destination par pays</h2>
        <p>Découvrez les plus belles destinations à travers le monde, classées par pays. Nous avons soigneusement
            sélectionné les pays les plus populaires pour vous offrir une expérience unique et inoubliable.</p>
        <div class="principal__conteneur">
            <?php
            ?>
            <article class="principal__article pays">
                <?= the_content(); ?>
            </article>
        </div>
    </section>
    <?php
        endwhile;
    endif;

    // Réinitialiser les données de la requête
    wp_reset_postdata();
    ?>
    <?php
    // Requête pour l'article 182
    $extraire_categorie = new WP_Query(array(
    'p' => 213, // ID de l'article
    'post_type' => 'post'
    ));

    if ($extraire_categorie->have_posts()) :
    while ($extraire_categorie->have_posts()) : $extraire_categorie->the_post();

    // Récupérer les catégories de l'article
    $categories = wp_get_post_categories(get_the_ID());
    ?>
    <section class="global filtrePost">
        <div class="filtrePost-content">
            <?php
                // Si l'article n'est pas dans la catégorie 14, on affiche le bouton
                if (!in_array(14, $categories)) {
                    ?>
            <?php
                }
                ?>
            <?= the_content(); ?>

        </div>
    </section>
    <?php
    endwhile;
endif;

// Réinitialiser les données de la requête
wp_reset_postdata();
?>
</main>
<?php
    get_footer();
?>