<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="author" content="Sebastien Malo Jean">
    <meta name="description" content="">
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>31w</title>
    <?php
        wp_head();
    ?>
</head>

<body>
    <header class="entete">
        <section class="global">
            <h1>31w</h1>
            <nav>
                <ul>
                    <li><a href="">Accueil</a></li>
                    <li><a href="">À propos</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
            <form action="" class="recherche">
                <input type="search" name="" id="">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="32" height="32">
            </form>
        </section>
    </header>
    <main class="principal">
        <section class="global">
            <h2>Accueil</h2>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
            <article class="principal__article">
                <h3><?= get_the_title() ?></h3>
                <?php  echo wp_trim_words(get_the_excerpt(), 20, null); ?>
            </article>
            <?php endwhile; ?>
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