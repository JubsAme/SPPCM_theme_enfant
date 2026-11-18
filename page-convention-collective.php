<?php

get_header();
?>
<main id="primary" class="site-main">

    <section class="convention-collective">

        <h1>Convention Collective</h1>

        <div class="liste-documents">

            <?php
            // Boucle pour afficher les 4 documents ACF
            for ($i = 1; $i <= 4; $i++) :

                // Le premier champ ne possède pas de suffixe
                $suffixe = ($i === 1) ? '' : '_' . $i;

                // Récupération des champs ACF
                $titre_document = get_field('titre_du_document' . $suffixe);
                $lien_document = get_field('lien_document' . $suffixe);

                // Vérifie que les champs contiennent des valeurs
                if ($titre_document && $lien_document) :
            ?>

                <div class="document">

                    <a href="<?php echo esc_url($lien_document); ?>"
                       class="document-complet"
                       target="_blank"
                       rel="noopener noreferrer">

                        <!-- Bouton PDF -->
                        <span class="document-pdf">
                            PDF
                        </span>

                        <!-- Titre du document ACF -->
                        <span class="document-lien">
                            <?php echo esc_html($titre_document); ?>
                        </span>

                    </a>

                </div>

                <!-- Sous-titre après le premier document -->
                <?php if ($i === 1) : ?>

                    <h2 class="convention-sous-titre">
                        Documents complémentaires
                    </h2>

                <?php endif; ?>

            <?php
                endif;
            endfor;
            ?>

        </div>

    </section>

</main>

<?php
get_footer();
?>