<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecologica
 */

?>

	<footer id="colophon" class="site-footer">
        <style>

        </style>
		<section class="FS FS1">
          <p class="FDP" >Ecologica est l’école supérieure de la transition résiliente, solidaire et désirable, à la fois lieu d’apprentissages et de participations à un changement de modèle de société.</p>
          <div>
            <h3>Navigation</h3>
            <?php wp_nav_menu(array(
              'theme_location' => 'footer_nav'
            )) ?>
          </div>
            <div>
                <h3>Ecologica</h3>
              <?php wp_nav_menu(array(
                'theme_location' => 'footer_eco'
              )) ?>
            </div>
            <div>
                <h3>Nous contacter</h3>
                <p>Téléphone: +33 6 17 20 44 92</p>
                <p>Email: contact@ecologica.education</p>
            </div>
        </section>
        <section class="FS FS2">
            <p >Copyright © 2022 <br> IIM - Institue de l'internet et des multimedia</p>
            <ul>
                <li><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            </ul>
            <p>Politique de confidentialité – Mentions légales</p>
        </section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
