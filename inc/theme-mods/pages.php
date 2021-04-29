<?php
/**
 * Pages
 *
 * @package Authentic
 */

CSCO_Kirki::add_section(
	'page', array(
		'title'    => esc_html__( 'Pages Settings', 'authentic' ),
		'priority' => 6,
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Pages > Page Layout ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'custom',
		'settings' => 'page_collapsible_page_layout',
		'section'  => 'page',
		'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Page Layout', 'authentic' ) . '</h3></div>',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'page_layout_default',
		'label'       => esc_html__( 'Default Settings', 'authentic' ),
		'description' => esc_html__( 'You may change the default settings in Layout Settings &rarr; ', 'authentic' ) . esc_html__( 'Page Layout', 'authentic' ),
		'section'     => 'page',
		'default'     => true,
		'priority'    => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'radio-image',
		'settings'        => 'page_layout',
		'label'           => esc_html__( 'Sidebar', 'authentic' ),
		'section'         => 'page',
		'default'         => 'layout-sidebar-right',
		'priority'        => 10,
		'choices'         => array(
			'layout-sidebar-left'  => get_template_directory_uri() . '/images/layout-sidebar-left.png',
			'layout-fullwidth'     => get_template_directory_uri() . '/images/layout-full.png',
			'layout-sidebar-right' => get_template_directory_uri() . '/images/layout-sidebar-right.png',
		),
		'active_callback' => array(
			array(
				'setting'  => 'page_layout_default',
				'operator' => '==',
				'value'    => false,
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Pages > Page Header ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'custom',
		'settings' => 'page_collapsible_page_header',
		'section'  => 'page',
		'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Page Header', 'authentic' ) . '</h3></div>',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'        => 'toggle',
		'settings'    => 'page_page_header_default',
		'label'       => esc_html__( 'Default Settings', 'authentic' ),
		'description' => esc_html__( 'You may change the default settings in Layout Settings &rarr; ', 'authentic' ) . esc_html__( 'Page Header', 'authentic' ),
		'section'     => 'page',
		'default'     => true,
		'priority'    => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'page_page_header',
		'label'           => esc_html__( 'Type', 'authentic' ),
		'description'     => esc_html__( 'You may also change the page header type on per page basis, when editing a page.', 'authentic' ),
		'section'         => 'page',
		'default'         => 'simple',
		'priority'        => 10,
		'choices'         => array(
			'none'   => esc_html__( 'None', 'authentic' ),
			'simple' => esc_html__( 'Simple', 'authentic' ),
			'small'  => esc_html__( 'Small', 'authentic' ),
			'wide'   => esc_html__( 'Wide', 'authentic' ),
			'large'  => esc_html__( 'Large', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'page_page_header_default',
				'operator' => '==',
				'value'    => false,
			),
		),
	)
);
