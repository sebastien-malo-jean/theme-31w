<?php
    get_header();
?>
<main class="principal">
    <section class="global">
        <h2>404</h2>

        <div class="principal__conteneur">

            <section class="blocflex">
                <?php
      $category = get_queried_object();
      $args = array(
         'category_name' => "cours",
         'orderby' => 'title',
         'order' => 'ASC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
                <article>
                    <h2><a href="<?php the_permalink(); ?>"> <?= get_the_title(); ?></a></h2>
                    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
                </article>
                <?php endwhile; ?>
                <?php endif;
      wp_reset_postdata();?>
            </section>

            <?php
        wp_nav_menu(array("menu" => "erreur404",
                            "container"=> "nav"
));
/*
        
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
            <?php
                $chaine = get_the_title();
                $sigle = substr($chaine,0,7);
                $titre = substr($chaine, 8,stripos($chaine,"(")-8);
            ?>
            <article class="principal__article">
                <h5><a href="<?= the_permalink() ?>"><?= $sigle . " " . $titre ?></a></h5>
                <p><?= get_the_content() ?></p>
                <?php
                    $pos_ouvrante = stripos($chaine, "(");
                    if ($pos_ouvrante !== false) {
                        $heureDemandé = substr($chaine, $pos_ouvrante + 1, -1);
                    }
                ?>
                <small>(<?= $heureDemandé ?>)</small>
            </article>
            <?php endwhile; ?>
        </div>
        <?php endif ?>

        */?>
    </section>
</main>
<?php
    get_footer();
?>