
<?php
get_header();
?>


<main id="primary" class="site-main">

    <?php
    // Arguments passés à la requète
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'bouton',
    );

    // requète => retourne un objet contenant un tableau d'objet $post
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()): ?>
        <div class="wrapper">
            <ul>
            <?php while ( $the_query-have_posts() ) : $the_query->the_post(); ?>
                <li>
                    <a href=" <?php the_permalink(); ?> ">
                        <?php the_title(); ?>
                    </a>
                </li>
            <?php endwhile; ?>    
            </ul>
        </div>
    <?php endif; 
    
    wp_reset_query();

    ?>
</main>

<?php
get_sidebar();
get_footer();
?>
