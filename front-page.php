<?php
get_header();
?>

<main class="principal">
    <?php
    // Section Hero
    $hero_title = get_theme_mod('hero_title', 'Default Title');
    $hero_subtitle = get_theme_mod('hero_subtitle', 'Default Subtitle');
    $hero_background = get_theme_mod('hero_background', 'default-image-url.jpg');
    $hero_cta_text = get_theme_mod('hero_cta_text', 'Default CTA');
    $hero_cta_link = get_theme_mod('hero_cta_link', '#');
    ?>

    <section class="global hero" style="background-image: url('<?= esc_url($hero_background); ?>');">
        <div class="hero__contenu">
            <h1><?= esc_html($hero_title); ?></h1>
            <p><?= esc_html($hero_subtitle); ?></p>
            <?php if (!empty($hero_cta_text) && !empty($hero_cta_link)) : ?>
            <a href="<?= esc_url($hero_cta_link); ?>" class="hero__cta">
                <?= esc_html($hero_cta_text); ?>
            </a>
            <?php endif; ?>
        </div>
        <div class="hero-newsletter" id="newsletter">
            <form action="#newsletter-signup" method="post" class="hero-newsletter-form">
                <?php
                $email_placeholder = get_theme_mod('hero_newsletter_email', 'Entrez votre email');
                $button_text = get_theme_mod('hero_newsletter_button_text', 'Subscribe');
                ?>
                <input type="email" name="newsletter_email" placeholder="<?= esc_attr($email_placeholder); ?>" required>
                <button type="submit"><?= esc_html($button_text); ?></button>
            </form>
        </div>
    </section>

    <?php
    // Requête pour l'article 145
    $featured_post = new WP_Query(array(
        'p' => 145, // ID de l'article
        'post_type' => 'post' // Type de contenu (post, page, etc.)
    ));

    if ($featured_post->have_posts()) : 
        while ($featured_post->have_posts()) : $featured_post->the_post(); 
    ?>
    <section class="featured-article global">
        <h2 class="featured-title"><?= esc_html(get_the_title()); ?></h2>
        <div class="featured-content">
            <?= the_content(); ?>
        </div>
    </section>
    <?php
        endwhile;
    endif;

    // Réinitialiser les données de la requête
    wp_reset_postdata();
    ?>

    <?php
    // Requête pour les articles restants
    $args = array(
        'category_name' => "Favorites",
        'orderby' => 'title',
        'order' => 'ASC',
        'post__not_in' => array(145)
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
    ?>
    <section class="global">
        <div class="principal__conteneur">
            <?php
            while ($query->have_posts()) : $query->the_post();
                $title = get_the_title();
            ?>
            <article class="principal__article">
                <a href="<?= esc_url(get_permalink()); ?>" class="article-link">
                    <?php if (has_post_thumbnail()) : ?>
                    <figure class="imgMEA">
                        <?= get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
                    </figure>
                    <?php else : ?>
                    <figure class="imgMEA">
                        <img src="<?= esc_url(get_template_directory_uri() . '/images/default-image.jpg'); ?>"
                            alt="Image par défaut">
                    </figure>
                    <?php endif; ?>
                    <h5><?= esc_html($title); ?></h5>
                    <p><?= esc_html(wp_trim_words(get_the_excerpt(), 50, null)); ?></p>
                </a>
            </article>
            <?php endwhile; ?>
        </div>
    </section>
    <?php
    endif;
    wp_reset_postdata();
    ?>
    <?php
    // Requête pour l'article 182
    $extraire_categorie = new WP_Query(array(
    'p' => 182, // ID de l'article
    'post_type' => 'post'
    ));

    if ($extraire_categorie->have_posts()) :
    while ($extraire_categorie->have_posts()) : $extraire_categorie->the_post();

    // Récupérer les catégories de l'article
    $categories = wp_get_post_categories(get_the_ID());
    ?>
    <section class="global filtrePost">
        <h2 class="filtrePost-title"><?= esc_html(get_the_title()); ?></h2>
        <div class="filtrePost-content">
            <?php
                // Si l'article n'est pas dans la catégorie 14, on affiche le bouton
                if (!in_array(14, $categories)) {
                    ?>
            <button>Mon Bouton</button>
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
    </section>

</main>

<?php
get_footer();
?>