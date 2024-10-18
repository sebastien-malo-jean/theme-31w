<?php
    get_header();
?>
<main class="principal">
    <section class="global">
        <h2>Accueil</h2>
        <div class="principal__conteneur">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
            <?php
                $chaine = get_the_title();
                $sigle = substr($chaine,0,7);
                $titre = substr($chaine, 8,stripos($chaine,"(")-8);
            ?>
            <article class="principal__article">
                <h5><?= $sigle ?></h5>
                <h6><?= $titre ?></h6>
                <p><?php  echo wp_trim_words(get_the_excerpt(), 30, null); ?></p>
                <?php
                    $pos_ouvrante = stripos($chaine, "(");
                    if ($pos_ouvrante !== false) {
                        $heureDemandé = substr($chaine, $pos_ouvrante + 1, -1);
                    }
                ?>
                <small>(<?= $heureDemandé ?>)</small>
            </article>
            <?php endwhile; ?>
        </div>
        <?php endif ?>
    </section>
</main>
<footer class="pied">
    <section class="global">
        <div>lien 1</div>
        <div>lien 2</div>
        <div>lien 3</div>
    </section>
    <?php
            wp_footer();
        ?>
</footer>
</body>

</html>