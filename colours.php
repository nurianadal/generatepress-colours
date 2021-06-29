<?php 
/**
 * Change GeneratePress default color palettes.
 *
 * @param array $palettes GeneratePress array palettes, until 8 colors.
 *
 * @return array
 */
function cherry_custom_color_palettes( $palettes ) {
	// Could be 8 colors.
	$palettes = array(
		'#A10524',
		'#2B0926',
		'#FCFCFC',
		'#1F1F1F',
		'#F1F1F1',
		'#630316',
	);

	return $palettes;
}
add_filter( 'generate_default_color_palettes', 'cherry_custom_color_palettes' );


/**
 * Load Gutemberg and Theme defaults.
 *
 * @return void
 */
add_action(
	'after_setup_theme',
	function() {
		// Disables custom colors in block color palette.
		add_theme_support( 'disable-custom-colors' );

		// Adds support for editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Cherry-Red', 'cherry-colours' ),
					'slug'  => 'Cherry-Red',
					'color' => '#A10524',
				),
				array(
					'name'  => __( 'Cherry-Purple', 'cherry-colours' ),
					'slug'  => 'Cherry-Purple',
					'color' => '#2B0926',
				),
				array(
					'name'  => __( 'Cultured', 'cherry-colours' ),
					'slug'  => 'light-gray',
					'color' => '#F5F5F5',
				),
				array(
					'name'  => __( 'Eerie Black', 'cherry-colours' ),
					'slug'  => 'pure-black',
					'color' => '#1F1F1F',
				),
			)
		);
	}
);
