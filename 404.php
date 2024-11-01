<?php
    get_header();
?>
<main class="principal">
    <section class="global">
        <h2>404 - Page non trouvée</h2>
        <p>Désolé, la page que vous recherchez semble introuvable.
            Elle a peut-être été déplacée, renommée ou n'existe tout simplement plus.</p>
        <div class="principal__conteneur">

            <section class="blocflex">
                <?php
    $chaine = get_the_title();
    
    $category = get_queried_object();
    $args = array(
        'category_name' => "cours",
        'orderby' => 'title',
        'order' => 'ASC'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php 
                $chaine = get_the_title();
                $sigle = substr(substr($chaine, 0,7),4);
                ?>
                <article>
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?= $sigle; ?>
                        </a>
                    </h3>
                </article>
                <?php endwhile; ?>
                <?php endif;
    wp_reset_postdata();?>
            </section>
        </div>
    </section>
</main>
<?php
    get_footer();
?>