<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscores
 */

get_header();
?>
<main id="primary" class="site-main">
	<div class="container">
		<div>
			<h1 class="main-title"><span class="text-rouge-titre">Qui</span><span> sommes-nous?</span></h1>
			<p class="main-p1">
				Le syndicat des professeures et professeurs du Collège de Maisonneuve (SPPCM) a pour objectifs l’étude,
				la défense et la promotion des intérêts et des objectifs professionnels, syndicaux, économiques et sociaux de ses membres.
				Il vise également la promotion de la recherche et de la qualité du travail en éducation.
			</p>
			<p class="main-p2">
				Le SPPCM regroupe plus de 630 membres. Fondé le 7 mars 1968, il est affilié à la fédération nationale des enseignantes et enseignants du Québec (FNEEQ),
				elle-même membre (ou filiale) de la Confédération des syndicats nationaux (CSN).
			</p>
			<p class="main-p3 common-links"><span>Notre</span><span class="blue-links"> structure </span><span>en détails-></span></p>
		</div>
	</div>
	<div id="fond-contrast" class="container2">
		<h1 class="main-title">Actualité</h1>
		<p class="main-actualitelinks common-links"><span>Toutes les</span><span class="blue-links"> actualités-></span></p>
		<div class="main-bigActualiteImage text-dark">

			<?php
			$i = 0;
			while (have_posts() && $i < 3) :
				the_post();
				get_template_part('template-parts/content', 'page');
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
				$i = $i + 1;
			endwhile; // End of the loop.
			?>
		</div>
		<h1 class="main-lisez">Lisez notre</h1>
		<h1 class="main-infolettre text-rouge-titre ">infolettre</h1>
		<div class="div-bg-red main-info">
			<p class="text-button">Infolettre</p>
		</div>
		<div class="div-bg-red main-lettre">
			<p class="text-button"> 26 - 27</p>
		</div>
		<p class="main-infolettrelinks common-links"><span>Toutes les</span><span class="blue-links"> Infolettres-></span></p>
		<div class="main-tinyInfolettreImage"></div>
	</div>
	<div id="" class="container3">
		<h1 class="main-title"><span>À</span><span class="text-rouge-titre"> votre</span><span> service</span></h1>
		<div class="imgC3"><img src="../images/n_TR4_o22WBG1o.jpg" alt=""></div>
		<p class="main-p1">La convention collective définit les détails de l’entente entre vous et votre employeur.</p>
		<p class="main-p3 common-links lien-collection "><span><span>Consulter la</span><span class="blue-links"> convention-></span></span></p>

	</div>
	<div id="" class="container4">
		<h1 class="main-title"><span class="text-rouge-titre">Avantages</span><span> sociaux</span></h1>
		<p class="main-p1">Votre adhésion au SPPCM vous donne droit à certains avantages sociaux.</p>
		<p class="main-p2 common-links"><span><span>Consulter les</span><span class="blue-links"> avantages sociaux-></span></span></p>

	</div>


	<?php
	/**
	 * Récupérer toutes les entrées du Post Type, ici comite-executif
	 */

	// args
	$args = array(
		'posts_per_page'    => -1,
		'post_type'     => 'texte-front-page',
	);

	// query
	$the_query = new WP_Query($args);
	//var_dump($the_query);
	?>


	<?php
	/**
	 * Boucler sur toutes les entrées récupérées
	 */
	if ($the_query->have_posts()): ?>
		<section>
			<div class="">
				<h2>Comité exécutif</h2>
				<div>

					<?php while ($the_query->have_posts()) : $the_query->the_post();

						$nom = get_the_title();

						/**
						 * Récupérer les champs ACF de l'itération'
						 */
						$champs = get_fields();
						$url_image = $champs['comite_image'];
						$poste = $champs['comite_poste'];
					?>

						<article class="tile">
							<a href="<?php the_permalink(); ?>">
								<?php if ($url_image) : ?>
									<div>
										<img src="<?php echo $url_image; ?>" class="">
									</div>
								<?php endif ?>
								<div>
									<h3><?php echo $nom; ?></h3>
									<?php if ($poste) : ?>
										<?php // Version avec la fonction WordPress the_title() directement dans la balise 
										?>
										<small><?php echo $poste; ?></small>
									<?php endif ?>
								</div>
							</a>
						</article>

					<?php endwhile; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	</div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
