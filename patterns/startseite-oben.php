<?php
/**
 * Title: Startseite oben: Motto und drei Kacheln
 * Slug: theme-schule-basis/startseite-oben
 * Categories: schule
 * Description: Motto zweisprachig, darunter Kacheln für Termine, Unterrichtszeiten und Schuleinschreibung. Ein Titelbild (Cover-Block) davor einfügen.
 *
 * @package SchulBank\Basis
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":1,"textAlign":"center"} -->
<h1 class="wp-block-heading has-text-align-center">Motto der Schule</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"is-style-sl"} -->
<p class="has-text-align-center is-style-sl">Moto šole</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2 class="wp-block-heading">Nächste Termine</h2>
<!-- /wp:heading -->

<!-- wp:sbd/termine {"anzahl":2} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2 class="wp-block-heading">Unterrichtszeiten</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Mo–Fr, 7:45–12:15</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2 class="wp-block-heading">Schuleinschreibung</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Termin und Unterlagen für das kommende Schuljahr.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
