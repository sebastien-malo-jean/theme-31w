<?php
    get_header();
?>
<main class="principal">
    <section class="global">
        <?php $category = get_the_category() ?>
        <h2><?=$category[0]->name ?></h2>
        <div class="principal__conteneur">
            <?php if (have_posts()) : ?>
            <?php
                    
                ?>
            <?php while (have_posts()) : the_post() ?>
            <?php 
                
                $chaine = get_the_title();
                $sigle = substr($chaine,0,7);
                $titre = substr($chaine, 8,stripos($chaine,"(")-8);
            ?>
            <a href="<?= the_permalink() ?>">
                <article class="principal__article">
                    <h5><?= $sigle . " " . $titre ?></h5>
                    <p>Professeur : <?=get_field("professeur")?></p>
                    <p><?= wp_trim_words(get_the_excerpt(), 50, null); ?></p>
                    <?php
                    $pos_ouvrante = stripos($chaine, "(");
                    if ($pos_ouvrante !== false) {
                        $heureDemandé = substr($chaine, $pos_ouvrante + 1, -1);
                    }
                ?>
                    <small>(<?= $heureDemandé ?>)</small>
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