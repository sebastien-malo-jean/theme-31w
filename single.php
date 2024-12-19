<?php
    get_header();
?>
<main class="principal">
    <section class="global">
        <?php
                $chaine = get_the_title();
                ?>
        <h2><?=$chaine?></h2>
        <div class="principal__conteneur single">
            <article class="principal__article single">
                <p><?= the_content() ?></p>
            </article>
        </div>
    </section>
</main>
<?php
    get_footer();
?>