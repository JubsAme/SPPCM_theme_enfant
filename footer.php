<?php
get_sidebar();
get_footer();
?>

<footer>
    <div class="triangle_sombre"></div>
    <div class="triangle_contrast"></div>
    <div class="contenu_footer">
        <h1><span class="text-rouge-titre">Contactez</span><span class="text-contrast-titre">-nous</span></h1>
        <p>
            3800, rue Sherbrooke Est, Local : A-4452 
        </p>
        <p>
            Montréal (Québec) H1X 2A2
        </p>
        <p>
            Téléphone : (514) 254-7131, poste 4555
        </p>
        <p>
            Télécopieur : (514) 254-4371
        </p>
        <p>
            Courriel : <a href="">sppcm@cmaisonneuve.qc.ca</a>
        </p>
        <div id="lien_footer">
            <div class="titre_lien_footer">
                <p>Négo table centrale CSN</p>
                <p>Négo table sectorielle FNEEQ</p>
            </div>
            <div class="img_lien_footer">
                <a href="" class="img_nego_csn">
                    <div class="img_lien">
                        <img src="<?php echo get_theme_file_uri("images/FC-768x284.jpg") ?>" alt="img_nego_csn"/> 
                    </div>
                </a>
                <a href="" class="img_nego_fneeq">
                    <div class="img_lien">
                        <img src="<?php echo get_theme_file_uri("images/NEGO_bandeau_vert-mains.jpg") ?>" alt="img_nego_fneeq"/>
                    </div>
                </a>
            </div>
            <div class="titre_lien_footer">
                <p>Coalition main rouge</p>
                <p>La planète s'invite au travail</p>
            </div>
            <div class="img_lien_footer">
                <a href="" class="img_coalition">
                    <div class="img_lien">
                        <img src="<?php echo get_theme_file_uri("images/logomainrougeside-2-768x284.png") ?>" alt="img_coalition"/>
                    </div>
                </a>
                <a href="" class="img_travail">
                    <div class="img_lien">
                        <img src="<?php echo get_theme_file_uri("images/bonbord-768x284.png") ?>" alt="img_travail"/>
                    </div>
                </a>
            </div>
        </div>
        <div id="boutons_footer">
            <a href="" class="bouton_facebook">
                <img src="<?php echo get_theme_file_uri("images/logo_facebook.png") ?>" alt="logo_facebook" width="65px" height="65px"/>
            </a>
            <a href="" class="bouton_csn">
                <img src="<?php echo get_theme_file_uri("images/logo_csn.png") ?>" alt="logo_csn" width="65px" height="65px"/>
            </a>
            <a href="" class="bouton_fneeq">
                <img src="<?php echo get_theme_file_uri("images/logo_fneeq.png") ?>" alt="logo_fneeq" width="137px" height="55px"/>
            </a>
        </div>
        <div class="logo_sppcm">
            <img src="<?php echo get_theme_file_uri("images/cropped-sppcm_logo_rgb.png") ?>" alt="logo_sppcm"/>
        </div>
        <p>
            Maquette réalisée par <a href="">Wordmess</a>
        </p>
    </div>
</footer>
