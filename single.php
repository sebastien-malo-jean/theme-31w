<?php
    get_header();
?>
<main class="principal">
    <section class="global">
        <?php// if (have_posts()) : ?>
        <?php// while (have_posts()) : the_post() ?>
        <?php
                $chaine = get_the_title();
                $sigle = substr($chaine,0,7);
                $titre = substr($chaine, 8,stripos($chaine,"(")-8);
                ?>
        <h2><?=$titre?></h2>
        <div class="principal__conteneur">
            <article class="principal__article">
                <h5><a href="<?= the_permalink() ?>"><?= $sigle?></a></h5>
                <p><?= get_the_content() ?></p>
                <?php
                    $pos_ouvrante = stripos($chaine, "(");
                    if ($pos_ouvrante !== false) {
                        $heureDemandé = substr($chaine, $pos_ouvrante + 1, -1);
                    }
                ?>
                <small>(<?= $heureDemandé ?>)</small>
            </article>
            <?php// endwhile; ?>
        </div>
        <?php// endif ?>
    </section>
</main>
<?php
    get_footer();
?>