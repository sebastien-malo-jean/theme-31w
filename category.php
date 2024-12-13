<?php
    get_header();
?>
<main class="principal">
    <section class="global">
        <?php $category = get_queried_object();?>
        <h2><?=$category->name ?></h2>
        <p><?=$category->description?></p>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
        <?php
            $chaine = get_the_title();
            ?>
        <div class="principal__conteneur">
            <a href="<?= the_permalink() ?>">
                <article class="principal__article">
                    <h5><?= $chaine ?></h5>
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