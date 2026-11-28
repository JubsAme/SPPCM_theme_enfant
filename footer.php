<?php
get_sidebar();
get_footer();
wp_footer();
?>
</body>
</html>
<footer>
    <div class="triangle_contrast"></div>
    <div class="triangle_sombre"></div>
    <div class="contenu_footer">
        <h1><span class="text-rouge-titre">Contactez</span><span class="text-contrast-titre">-nous</span></h1>
        <div class="footer_contact">
            <p class="footer_p">
                3800, rue Sherbrooke Est, Local : A-4452 
            </p>
            <p class="footer_p">
                Montréal (Québec) H1X 2A2
            </p>
            <p class="footer_p">
                Téléphone : (514) 254-7131, poste 4555
            </p>
            <p class="footer_p">
                Télécopieur : (514) 254-4371
            </p>
            <p class="footer_p">
                Courriel : <a href="mailto:sppcm@cmaisonneuve.qc.ca">sppcm@cmaisonneuve.qc.ca</a>
            </p>
        </div>
        <div id="lien_footer">
            <div class="img_lien_footer">
                <p class="footer_p">Négo table centrale CSN</p>
                <a href="https://www.frontcommun.org/" class="img_nego_csn">
                    <div class="img_lien">
                        <img src="<?php echo get_theme_file_uri("images/FC-768x284.jpg") ?>" alt="img_nego_csn"/> 
                    </div>
                </a>
            </div>
            <div class="img_lien_footer">
                <p class="footer_p">Négo table sectorielle FNEEQ</p>
                <a href="https://fneeq.qc.ca/fr/" class="img_nego_fneeq">
                    <div class="img_lien">
                        <img src="<?php echo get_theme_file_uri("images/NEGO_bandeau_vert-mains.jpg") ?>" alt="img_nego_fneeq"/>
                    </div>
                </a>
            </div>
            <div class="img_lien_footer">
                <p class="footer_p">Coalition main rouge</p>
                <a href="https://www.nonauxhausses.org/" class="img_coalition">
                    <div class="img_lien">
                        <img src="<?php echo get_theme_file_uri("images/logomainrougeside-2-768x284.png") ?>" alt="img_coalition"/>
                    </div>
                </a>
            </div>
            <div class="img_lien_footer">
                <p class="footer_p">La planète s'invite au travail</p>
                <a href="https://secteurpublic.quebec/" class="img_travail">
                    <div class="img_lien">
                        <img src="<?php echo get_theme_file_uri("images/bonbord-768x284.png") ?>" alt="img_travail"/>
                    </div>
                </a>
            </div>
        </div>
        <div id="boutons_footer">
            <a href="https://www.facebook.com/SPPCMaisonneuve" class="bouton_facebook">
                <img src="<?php echo get_theme_file_uri("images/logo_facebook.png") ?>" alt="logo_facebook"/>
            </a>
            <a href="https://www.csn.qc.ca/" class="bouton_csn">
                <img src="<?php echo get_theme_file_uri("images/logo_csn.png") ?>" alt="logo_csn"/>
            </a>
            <a href="https://fneeq.qc.ca/fr/" class="bouton_fneeq">
                <img src="<?php echo get_theme_file_uri("images/logo_fneeq.png") ?>" alt="logo_fneeq"/>
            </a>
        </div>
        <div class="logo_sppcm">
            <img src="<?php echo get_theme_file_uri("images/cropped-sppcm_logo_rgb.png") ?>" alt="logo_sppcm"/>
        </div>
        <p class="footer_credits footer_p">
            Maquette réalisée par <a href="">Wordmess</a>
        </p>
    </div>
</footer>
