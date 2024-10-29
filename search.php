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
                $sigle = substr($chaine,0,7);
                $titre = substr($chaine, 8,stripos($chaine,"(")-8);
            ?>
            <article class="principal__recherche">
                <a href="<?= the_permalink() ?>" class="article-link">
                    <h5><?= $sigle . " " . $titre ?></h5>
                    <?php
                    $pos_ouvrante = stripos($chaine, "(");
                    if ($pos_ouvrante !== false) {
                        $heureDemandé = substr($chaine, $pos_ouvrante + 1, -1);
                    }
                ?>
                    <small><strong>(<?= $heureDemandé ?>)</strong></small>
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