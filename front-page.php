<?php
    get_header();
?>
<?php
    $args = array(
        'category_name' => "Favorites",
        'orderby' => 'title',
        'order' => 'ASC'
    );
    
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) : ?>
<main class="principal">
    <?php
    $hero_title = get_theme_mod('hero_title', 'Default Title');
    $hero_subtitle = get_theme_mod('hero_subtitle', 'Default Subtitle');
    $hero_background = get_theme_mod('hero_background',); $hero_cta_text = get_theme_mod('hero_cta_text', 'Default CTA');
    $hero_cta_link = get_theme_mod('hero_cta_link', '#');
    ?>
    <section class="global hero" style="background-image: url('<?= esc_url($hero_background) ?>');">
        <div class="hero__contenu">
            <h1><?= esc_html($hero_title)?></h1>
            <p><?= esc_html($hero_subtitle)?></p>
            <?php
                if (!empty($hero_cta_text) && !empty($hero_cta_link)) : ?>
            <a href="<?= esc_url($hero_cta_link)?>" class="hero__cta">
                <?= esc_html($hero_cta_text)?>
            </a>
            <?php
                    endif;
                ?>
        </div>
    </section>

    <section class="global">
        <h2><?= $args["category_name"] ?> </h2>

        <div class="principal__conteneur">
            <?php
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php 
                $title = get_the_title();
                $theContent = get_the_content();
                
                ?>
            <article class="principal__article">
                <a href="<?= the_permalink() ?>" class="article-link">
                    <h5><?= $title ?></h5>

                    <small><strong><?= "" ?></strong></small>
                    <p><?= wp_trim_words(get_the_excerpt(), 50, null); ?></p>
                </a>
            </article>
            <?php endwhile; ?>
            <?php endif;
    wp_reset_postdata();?>
    </section>
    <section id="inscription" class="global inscription"></section>
    <section id="filtre" class="global filtre">
        <!-- un appel à l'extention rest api filtre -->
    </section>
</main>
<?php
    get_footer();
?>