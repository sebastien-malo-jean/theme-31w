<?php
    get_header();
?>
<main class="principal">
    <section class="global">
        <h2>Résultat de la recherche</h2>
        <div class="principal__conteneur">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
            <?php
                $chaine = get_the_title();
            ?>
            <article class="principal__recherche">
                <a href="<?= the_permalink() ?>" class="article-link">
                    <?php if (has_post_thumbnail()) : ?>
                    <figure class="imgMEA">
                        <?= get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
                    </figure>
                    <?php
                        endif;
                    ?>
                    <h5><?= $chaine ?></h5>
                    <p><?php  echo wp_trim_words(get_the_excerpt(), 80, null); ?></p>
                </a>
            </article>
            <?php endwhile; ?>
        </div>
        <?php endif ?>
    </section>
</main>
<?php
    get_footer();
?>