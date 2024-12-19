<?php get_header(); ?>

<main class="principal">
    <section class="global">
        <?php 
        $category = get_queried_object();
        $categoryName = $category->name ?? '';
        $categoryDescription = $category->description ?? '';
        ?>

        <?php if (!empty($categoryName)): ?>
        <h2><?= esc_html($categoryName) ?></h2>
        <?php endif; ?>

        <?php if (!empty($categoryDescription)): ?>
        <?php
            // Découper la description en phrases
            $phrases = preg_split('/(?<=[.!?])\s+/', $categoryDescription, -1, PREG_SPLIT_NO_EMPTY);
            // Groupement des phrases par 2
            $paragraphes = array_chunk($phrases, 2);
            foreach ($paragraphes as $paragraphe) {
                // Chaque groupe de 2 phrases sera affiché dans un <p>
                echo '<p>' . esc_html(implode(' ', $paragraphe)) . '</p>';
            }
            ?>
        <?php endif; ?>

        <?php if (have_posts()): ?>
        <div class="principal__conteneur">
            <?php while (have_posts()): the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <article class="principal__article">
                    <h5><?= esc_html(get_the_title()) ?></h5>
                    <p><?= esc_html(wp_trim_words(get_the_excerpt(), 40, null)); ?></p>
                </article>
            </a>
            <?php endwhile; ?>
        </div>
        <?php else: ?>
        <p>Aucun article trouvé dans cette catégorie.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>