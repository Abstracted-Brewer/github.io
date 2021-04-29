<?php
/**
 * Advanced
 *
 * @package Authentic
 */

CSCO_Kirki::add_section(
	'advanced', array(
		'title'    => esc_html__( 'Advanced Settings', 'authentic' ),
		'priority' => 9999,
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Advanced > jQuery ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_option', array(
		'type'        => 'checkbox',
		'settings'    => 'csco_jquery_in_footer',
		'label'       => esc_html__( 'Load jQuery in footer', 'authentic' ),
		'description' => esc_html__( 'Solves render-blocking issue, however can cause plugin conflicts.', 'authentic' ),
		'section'     => 'advanced',
		'default'     => false,
		'priority'    => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_option', array(
		'type'        => 'checkbox',
		'settings'    => 'csco_enable_legacy_features',
		'label'       => esc_html__( 'Enable Legacy Features', 'authentic' ),
		'description' => esc_html__( 'This will enable features which were available in version 5 and before. After enabling the checkbox click Save and reload the page by clicking the browser Reload button.', 'authentic' ),
		'section'     => 'advanced',
		'default'     => false,
		'priority'    => 10,
	)
);

/**
 * -------------------------------------------------------------------------
 * [ Hookable Theme Mods ]
 * -------------------------------------------------------------------------
 */

/**
 * Sidebar Select
 */
function csco_widgets_sidebar() {

	$registered_sidebars = csco_get_registered_sidebars();

	$locations = array( 'layout', 'home' );

	foreach ( $locations as $location ) {

		$section = $location;

		if ( 'layout' === $location ) {
			$section = 'archive';
		}

		CSCO_Kirki::add_field(
			'csco_theme_mod', array(
				'type'            => 'select',
				'settings'        => $location . '_widgets_sidebar',
				'label'           => esc_html__( 'Widget Area', 'authentic' ),
				'section'         => $section,
				'default'         => 'sidebar-archive',
				'priority'        => 10,
				'active_callback' => array(
					array(
						'setting'  => $location . '_widgets',
						'operator' => '==',
						'value'    => true,
					),
				),
				'choices'         => $registered_sidebars,
			)
		);

	}
}
add_action( 'init', 'csco_widgets_sidebar' );
