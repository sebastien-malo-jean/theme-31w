<?php
    get_header();
?>
<main class="principal">
    <section class="global">
        <h2>Front Page</h2>

        <div class="principal__conteneur">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
            <?php
                $chaine = get_the_title();
                $sigle = substr($chaine,0,7);
                $titre = substr($chaine, 8,stripos($chaine,"(")-8);
            ?>

            <article class="principal__article">
                <a href="<?= the_permalink() ?>" class="article-link">
                    <h5><?= $sigle . " " . $titre ?></h5>
                    <?php
            // Extraction de l'heure demandée
            $pos_ouvrante = stripos($chaine, "(");
            if ($pos_ouvrante !== false) {
                $pos_fermante = strrpos($chaine, ")");
                $heureDemandé = substr($chaine, $pos_ouvrante + 1, $pos_fermante - $pos_ouvrante - 1);
            }
        ?>
                    <small><strong>(<?= $heureDemandé ?>)</strong></small>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30, null); ?></p>
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