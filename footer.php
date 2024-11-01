<footer class="pied">
    <section class="pied__global global">
        <div class="range1">
            <div class="footer__search_form">
                <?php
                get_search_form();
            ?>
            </div>
            <div class="footer__nav">
                <?php
                wp_nav_menu(array(
                                        "menu" => "footer",
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
                <p>Cet exercice consiste à améliorer un thème WordPress en apportant des modifications à plusieurs
                    modèles et en intégrant des fonctionnalités avancées. Les objectifs incluent l’optimisation de la
                    page d'accueil front-page.php pour n'afficher que les articles de la catégorie "Nouvelle" en
                    modifiant la requête principale avec le hook pre_get_posts, ainsi que la création des modèles
                    category-cours.php et 404.php. Le modèle category-cours.php affichera les cours du département TIM
                    avec les noms des professeurs, tandis que le modèle 404.php présentera un message d'erreur et une
                    liste simplifiée des cours avec des sigles cliquables pour accéder à leurs descriptions complètes.
                    Le pied de page, footer.php, sera enrichi d'une liste de liens vers des cours Web spécifiques.</p>

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