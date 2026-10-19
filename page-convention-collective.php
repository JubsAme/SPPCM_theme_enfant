
<?php
get_header();
?>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();
    ?>

        <h1><?php the_title(); ?></h1>

        <section class="contenu-convention">
            <?php the_content(); ?>
        </section>

    <?php endwhile; ?>

</main>

<?php
get_sidebar();
get_footer();
?>
