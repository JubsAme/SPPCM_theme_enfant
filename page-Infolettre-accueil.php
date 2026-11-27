<?php
/* Template Name: infolettre-accueil */

get_header();
?>


<main id="primary" class="site-main">
    <div class="container">
        <?php
        // Arguments passés à la requète
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'page',
            'post_parent' => get_the_ID(),
        );

        // requète => retourne un objet contenant un tableau d'objet $post
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()): ?>
            <div class="wrapper">
                <ul>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
                            <a class="btn-infolettres titre" href=" <?php the_permalink(); ?> ">
                                <?php echo get_field('titre'); ?>
                            </a>
                            <a class="btn-infolettres label" href=" <?php the_permalink(); ?> ">
                                <?php echo get_field('label'); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="contenu">
                    <?php echo the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif;

        wp_reset_query();

        ?>
    </div>
</main>

<?php
get_sidebar();
get_footer();
?>