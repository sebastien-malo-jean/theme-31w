<footer class="pied">
    <section class="pied__global global">
        <div class="range1">
            <div class="entete__search_form">
                <?php
                get_search_form();
            ?>
            </div>
            <div class="entete__nav">
                <?php
                wp_nav_menu(array(
                                        "menu" => "principal",
                                        "container" => "nav"
                                    )); ?>
            </div>
        </div>
        <div class="range2">
            <div class="colonne1">
                <h3><?php bloginfo('name')?></h3>
                <p><?php bloginfo('description')?></p>
                <p>Auteur : Sébastien Malo Jean</p>
                <a href="https://github.com/sebastien-malo-jean/theme-31w"><img class="pied__logo"
                        src="https://logos-world.net/wp-content/uploads/2020/11/GitHub-Logo.png" alt="github"></a>
            </div>
            <div class="colonne2">
                <p>Cet exercice a pour objectif d’enrichir et de perfectionner le thème
                    WordPress en intégrant divers modèles, en ajoutant des fonctionnalités
                    de style et de recherche, ainsi qu’en structurant le pied de
                    page.</p>

                <a href="https://www.cmaisonneuve.qc.ca" class="pied__img-frame">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY52p9xHQBK5npgsurkiQvfStx-8Tb3O6R-g&s"
                        alt="college maisonneuve"></a>

            </div>
        </div>

    </section>
</footer>
<?php
    wp_footer();
?>
</body>

</html>