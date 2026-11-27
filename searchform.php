<?php
/**
 * Formulaire de recherche (loupe dans une pastille, comme sur la maquette).
 *
 * @package Underscores
 */

$unique_id = wp_unique_id( 'search-form-' );
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="<?php echo esc_attr( $unique_id ); ?>"><?php esc_html_e( 'Rechercher', 'underscores' ); ?></label>
	<input
		type="search"
		id="<?php echo esc_attr( $unique_id ); ?>"
		class="search-field"
		name="s"
		value="<?php echo esc_attr( get_search_query() ); ?>"
	/>
	<button type="submit" class="search-submit">
		<svg aria-hidden="true" focusable="false" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round">
			<circle cx="10" cy="10" r="6.5"/>
			<path d="M15 15l6 6"/>
		</svg>
		<span class="screen-reader-text"><?php esc_html_e( 'Lancer la recherche', 'underscores' ); ?></span>
	</button>
</form>
