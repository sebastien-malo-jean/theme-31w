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
                <h3>Collège de Maisonneuve</h3>
                <p>Campus principal</p>
                <p>3800, rue Sherbrooke Est</p>
                <p>Montréal (Québec) H1X 2A2</p>
                <p>514 254-7131</p>
                <p>communic@cmaisonneuve.qc.ca</p>
            </div>
            <div class="colonne2">
                <p>Auteur : Sébastien Malo Jean</p>
                <div class="logo__box">
                    <a href="https://github.com/sebastien-malo-jean/theme-31w/tree/epreuveFinal"><img class="pied__logo"
                            src="https://logos-world.net/wp-content/uploads/2020/11/GitHub-Logo.png" alt="github"></a>
                    <a href="https://github.com/sebastien-malo-jean/filtre-pays"><img class="pied__logo"
                            src="https://logos-world.net/wp-content/uploads/2020/11/GitHub-Logo.png" alt="github"></a>
                </div>
                <?php
                if (function_exists('the_custom_logo')) {
                the_custom_logo();
                }
                else {
                echo '<a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a>';
                }
            ?>
            </div>
        </div>

    </section>
</footer>
<?php
    wp_footer();
?>
</body>

</html>