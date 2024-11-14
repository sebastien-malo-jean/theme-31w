<?php
    get_header();
?>
<main class="principal">
    <section class="global">
        <!--h2>Page</h2!-->
        <div class="principal__conteneur">
            <?php
                $chaine = get_the_title();
                $sigle = substr($chaine,0,7);
                $titre = substr($chaine, 8,stripos($chaine,"(")-8);
            ?>
            <article class="principal__article">
                <h5><?=$chaine?></h5>
                <p><?= the_content() ?></p>
            </article>
        </div>
    </section>
</main>
<?php
    get_footer();
?>