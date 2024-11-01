<?php
    get_header();
?>
<main class="principal">
    <section class="global">
        <?php $category = get_the_category() ?>
        <h2><?=$category[0]->name ?></h2>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
        <?php
            $chaine = get_the_title();
            $sigle = substr($chaine,0,7);
            $titre = substr($chaine, 8,stripos($chaine,"(")-8);
            ?>
        <div class="principal__conteneur">
            <a href="<?= the_permalink() ?>">
                <article class="principal__article">
                    <h5><?= $sigle . " " . $titre ?></h5>
                    <p><?= wp_trim_words(get_the_excerpt(), 50, null); ?></p>

                </article>
            </a>
            <?php endwhile; ?>
        </div>
        <?php endif ?>
    </section>
</main>
<?php
    get_footer();
?>