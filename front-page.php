<?php
    get_header();
?>

<?php
    
    $args = array(
        'category_name' => "nouvelle",
        'orderby' => 'title',
        'order' => 'ASC'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) : ?>
<?php
?>
<main class="principal">
    <section class="global">
        <h2><?= $args["category_name"] ?> </h2>

        <div class="principal__conteneur">
            <?php
        while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php 
                $title = get_the_title();
                $theContent = get_the_content();
                
                ?>
            <article class="principal__article">
                <a href="<?= the_permalink() ?>" class="article-link">
                    <h5><?= $title ?></h5>

                    <small><strong><?= "" ?></strong></small>
                    <p><?= wp_trim_words(get_the_excerpt(), 50, null); ?></p>
                </a>
            </article>
            <?php endwhile; ?>
            <?php endif;
    wp_reset_postdata();?>
    </section>
</main>
<?php
    get_footer();
?>