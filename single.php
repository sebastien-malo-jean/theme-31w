<?php
    get_header();
?>
<main class="principal">
    <section class="global">
        <?php
                $chaine = get_the_title();
                $sigle = substr($chaine,0,7);
                $titre = substr($chaine, 8,stripos($chaine,"(")-8);
                ?>
        <h2><?=$chaine?></h2>
        <div class="principal__conteneur">
            <article class="principal__article">
                <h5><?= $chaine ?></h5>
                <?php $professeur = get_field("professeur");
                if ($professeur !== null){
                    echo "<p>Professeur :" . $professeur . "</p>";
                }else {
                    echo "";
                }
                ?>
                <p><?= get_the_content() ?></p>
                <?php
                    $pos_ouvrante = stripos($chaine, "(");
                    if ($pos_ouvrante !== false) {
                        $heureDemandé = substr($chaine, $pos_ouvrante + 1, -1);
                        echo "(".$heureDemandé.")";
                } else {$heureDemandé = "";}
                ?>
            </article>
        </div>
    </section>
</main>
<?php
    get_footer();
?>