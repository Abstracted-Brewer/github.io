<?php
/**
 * Layout
 *
 * @package Authentic
 */

CSCO_Kirki::add_panel(
	'layout', array(
		'title'    => esc_html__( 'Layout Settings', 'authentic' ),
		'priority' => 3,
	)
);

/**
 * -------------------------------------------------------------------------
 * |- [ Layout > Page Layout ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'layout', array(
		'title'    => esc_html__( 'Page Layout', 'authentic' ),
		'panel'    => 'layout',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'radio-image',
		'settings' => 'layout',
		'label'    => esc_html__( 'Sidebar', 'authentic' ),
		'section'  => 'layout',
		'default'  => 'layout-sidebar-right',
		'priority' => 10,
		'choices'  => array(
			'layout-sidebar-left'  => get_template_directory_uri() . '/images/layout-sidebar-left.png',
			'layout-fullwidth'     => get_template_directory_uri() . '/images/layout-full.png',
			'layout-sidebar-right' => get_template_directory_uri() . '/images/layout-sidebar-right.png',
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |- [ Layout > Top Bar ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'topbar', array(
		'title'    => esc_html__( 'Top Bar', 'authentic' ),
		'panel'    => 'layout',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'toggle',
		'settings' => 'topbar',
		'label'    => esc_html__( 'Top Bar', 'authentic' ),
		'section'  => 'topbar',
		'default'  => true,
		'priority' => 10,
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Top Bar > Layout ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'custom',
		'settings'        => 'topbar_collapsible_layout',
		'section'         => 'topbar',
		'default'         => '<div class="customize-collapsible"><h3>' . esc_html__( 'Layout', 'authentic' ) . '</h3></div>',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'topbar_container',
		'label'           => esc_html__( 'Container', 'authentic' ),
		'section'         => 'topbar',
		'default'         => 'cs-container',
		'priority'        => 10,
		'choices'         => array(
			'cs-container' => esc_html__( 'Boxed', 'authentic' ),
			'navbar-fluid' => esc_html__( 'Fullwidth', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'dimension',
		'settings' => 'topbar_height',
		'label'    => esc_html__( 'Height', 'authentic' ),
		'section'  => 'topbar',
		'default'  => '40px',
		'priority' => 10,
		'output'   => array(
			array(
				'element'  => '.topbar .navbar',
				'property' => 'height',
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Top Bar > Left Column ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'custom',
		'settings'        => 'topbar_collapsible_content_left',
		'section'         => 'topbar',
		'default'         => '<div class="customize-collapsible"><h3>' . esc_html__( 'Left Column', 'authentic' ) . '</h3></div>',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'topbar_content_left_select',
		'label'           => esc_html__( 'Type', 'authentic' ),
		'section'         => 'topbar',
		'default'         => 'menu',
		'priority'        => 10,
		'choices'         => csco_get_header_content_select( array( 'menu', 'search', 'social', 'cart', 'html', 'none' ) ),
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'topbar_content_left_menu',
		'label'           => esc_html__( 'Menu', 'authentic' ),
		'section'         => 'topbar',
		'default'         => csco_get_default_menu(),
		'priority'        => 10,
		'choices'         => csco_get_menus(),
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'topbar_content_left_select',
				'operator' => '==',
				'value'    => 'menu',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'textarea',
		'settings'        => 'topbar_content_left_html',
		'label'           => esc_html__( 'HTML', 'authentic' ),
		'section'         => 'topbar',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'topbar_content_left_select',
				'operator' => '==',
				'value'    => 'html',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'topbar_content_left_social_accounts_labels',
		'label'           => esc_html__( 'Labels', 'authentic' ),
		'section'         => 'topbar',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'topbar_content_left_select',
				'operator' => '==',
				'value'    => 'social',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'topbar_content_left_social_accounts_titles',
		'label'           => esc_html__( 'Titles', 'authentic' ),
		'section'         => 'topbar',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'topbar_content_left_select',
				'operator' => '==',
				'value'    => 'social',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'topbar_content_left_social_accounts_counts',
		'label'           => esc_html__( 'Counts', 'authentic' ),
		'section'         => 'topbar',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'topbar_content_left_select',
				'operator' => '==',
				'value'    => 'social',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'number',
		'settings'        => 'topbar_content_left_social_accounts_limit',
		'label'           => esc_html__( 'Limit', 'authentic' ),
		'description'     => esc_html__( 'Number of social accounts.', 'authentic' ),
		'section'         => 'topbar',
		'default'         => 3,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'topbar_content_left_select',
				'operator' => '==',
				'value'    => 'social',
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Top Bar > Right Column ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'custom',
		'settings'        => 'topbar_collapsible_content_right',
		'section'         => 'topbar',
		'default'         => '<div class="customize-collapsible"><h3>' . esc_html__( 'Right Column', 'authentic' ) . '</h3></div>',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'topbar_content_right_select',
		'label'           => esc_html__( 'Type', 'authentic' ),
		'section'         => 'topbar',
		'default'         => 'social',
		'priority'        => 10,
		'choices'         => csco_get_header_content_select( array( 'menu', 'search', 'social', 'cart', 'html', 'none' ) ),
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'topbar_content_right_menu',
		'label'           => esc_html__( 'Menu', 'authentic' ),
		'section'         => 'topbar',
		'default'         => csco_get_default_menu(),
		'priority'        => 10,
		'choices'         => csco_get_menus(),
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'topbar_content_right_select',
				'operator' => '==',
				'value'    => 'menu',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'textarea',
		'settings'        => 'topbar_content_right_html',
		'label'           => esc_html__( 'HTML', 'authentic' ),
		'section'         => 'topbar',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'topbar_content_right_select',
				'operator' => '==',
				'value'    => 'html',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'topbar_content_right_social_accounts_labels',
		'label'           => esc_html__( 'Labels', 'authentic' ),
		'section'         => 'topbar',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'topbar_content_right_select',
				'operator' => '==',
				'value'    => 'social',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'topbar_content_right_social_accounts_titles',
		'label'           => esc_html__( 'Titles', 'authentic' ),
		'section'         => 'topbar',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'topbar_content_right_select',
				'operator' => '==',
				'value'    => 'social',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'topbar_content_right_social_accounts_counts',
		'label'           => esc_html__( 'Counts', 'authentic' ),
		'section'         => 'topbar',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'topbar_content_right_select',
				'operator' => '==',
				'value'    => 'social',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'number',
		'settings'        => 'topbar_content_right_social_accounts_limit',
		'label'           => esc_html__( 'Limit', 'authentic' ),
		'description'     => esc_html__( 'Number of social accounts.', 'authentic' ),
		'section'         => 'topbar',
		'default'         => 3,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'topbar',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'topbar_content_right_select',
				'operator' => '==',
				'value'    => 'social',
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |- [ Layout > Header ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'header', array(
		'title'    => esc_html__( 'Header', 'authentic' ),
		'panel'    => 'layout',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'toggle',
		'settings' => 'header',
		'label'    => esc_html__( 'Header', 'authentic' ),
		'section'  => 'header',
		'default'  => true,
		'priority' => 10,
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Header > General ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'custom',
		'settings'        => 'header_collapsible_general',
		'section'         => 'header',
		'default'         => '<div class="customize-collapsible"><h3>' . esc_html__( 'General', 'authentic' ) . '</h3></div>',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'radio-image',
		'settings'        => 'header_layout',
		'label'           => esc_html__( 'Layout', 'authentic' ),
		'section'         => 'header',
		'default'         => 'center',
		'priority'        => 10,
		'choices'         => array(
			'center' => get_template_directory_uri() . '/images/header-center.png',
			'left'   => get_template_directory_uri() . '/images/header-left.png',
			'logo'   => get_template_directory_uri() . '/images/header-logo.png',
		),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'header_container',
		'label'           => esc_html__( 'Container', 'authentic' ),
		'section'         => 'header',
		'default'         => 'cs-container',
		'priority'        => 10,
		'choices'         => array(
			'cs-container'       => esc_html__( 'Boxed', 'authentic' ),
			'cs-container-fluid' => esc_html__( 'Fullwidth', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'dimension',
		'settings'        => 'header_height',
		'label'           => esc_html__( 'Height', 'authentic' ),
		'section'         => 'header',
		'default'         => '100px',
		'priority'        => 10,
		'output'          => array(
			array(
				'element'     => '.header-col',
				'property'    => 'height',
				'media_query' => '@media ( min-width: 970px )',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'header_home_only',
		'label'           => esc_html__( 'Display on homepage only', 'authentic' ),
		'section'         => 'header',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Header > Logo ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'custom',
		'settings'        => 'header_collapsible_logo',
		'section'         => 'header',
		'default'         => '<div class="customize-collapsible"><h3>' . esc_html__( 'Logo', 'authentic' ) . '</h3></div>',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'header_logo_select',
		'label'           => esc_html__( 'Type', 'authentic' ),
		'section'         => 'header',
		'default'         => 'text',
		'priority'        => 10,
		'choices'         => array(
			'image' => esc_html__( 'Image', 'authentic' ),
			'text'  => esc_html__( 'Text', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'header_logo_default_url',
		'label'           => esc_html__( 'Default Logo', 'authentic' ),
		'section'         => 'header',
		'default'         => get_template_directory_uri() . '/images/logo-dark.png',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'header_logo_default_retina_url',
		'label'           => esc_html__( 'Default Retina Logo', 'authentic' ),
		'section'         => 'header',
		'default'         => get_template_directory_uri() . '/images/logo-dark-2x.png',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'header_dark_logo_default_url',
		'label'           => esc_html__( 'Default Dark Logo', 'authentic' ),
		'section'         => 'header',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
			array(
				'setting'  => 'color_enable_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'header_dark_logo_default_retina_url',
		'label'           => esc_html__( 'Default Retina Dark Logo', 'authentic' ),
		'section'         => 'header',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
			array(
				'setting'  => 'color_enable_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'header_logo_overlay_url',
		'label'           => esc_html__( 'Overlay Logo', 'authentic' ),
		'section'         => 'header',
		'default'         => get_template_directory_uri() . '/images/logo-light.png',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'header_logo_overlay_retina_url',
		'label'           => esc_html__( 'Overlay Retina Logo', 'authentic' ),
		'section'         => 'header',
		'default'         => get_template_directory_uri() . '/images/logo-light-2x.png',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'              => 'text',
		'settings'          => 'header_logo_text',
		'label'             => esc_html__( 'Text', 'authentic' ),
		'section'           => 'header',
		'default'           => get_bloginfo( 'name' ),
		'priority'          => 10,
		'sanitize_callback' => 'wp_kses_post',
		'active_callback'   => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_logo_select',
				'operator' => '==',
				'value'    => 'text',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'typography',
		'settings'        => 'header_logo_font',
		'label'           => esc_html__( 'Font', 'authentic' ),
		'section'         => 'header',
		'default'         => array(
			'font-family'    => 'Montserrat',
			'variant'        => '600',
			'subsets'        => array( 'latin' ),
			'font-size'      => '2.5rem',
			'letter-spacing' => '-0.125rem',
			'text-transform' => 'none',
			'line-height'    => '1',
		),
		'transport'       => 'auto',
		'priority'        => 10,
		'output'          => array(
			array(
				'element' => '.header .site-title',
			),
		),
		'choices'         => apply_filters( 'powerkit_fonts_choices', array() ),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_logo_select',
				'operator' => '==',
				'value'    => 'text',
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Header > Background ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'custom',
		'settings'        => 'header_collapsible_background',
		'section'         => 'header',
		'default'         => '<div class="customize-collapsible"><h3>' . esc_html__( 'Background', 'authentic' ) . '</h3></div>',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'header_background',
		'label'           => esc_html__( 'Background', 'authentic' ),
		'section'         => 'header',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'background',
		'settings'        => 'header_background_object',
		'label'           => esc_html__( 'Background', 'authentic' ),
		'section'         => 'header',
		'default'         => array(
			'background-color'      => '#FFFFFF',
			'background-image'      => '',
			'background-position'   => 'center center',
			'background-repeat'     => 'no-repeat',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		),
		'priority'        => 10,
		'output'          => array(
			array(
				'element' => '.header-enabled:not(.header-type-large) .site-header .header-background',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_background',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'url',
		'settings'        => 'header_video_url',
		'label'           => esc_html__( 'Video URL', 'authentic' ),
		'section'         => 'header',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_background',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'number',
		'settings'        => 'header_video_start',
		'label'           => esc_html__( 'Start Time', 'authentic' ),
		'section'         => 'header',
		'default'         => 0,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_background',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'number',
		'settings'        => 'header_video_end',
		'label'           => esc_html__( 'End Time', 'authentic' ),
		'section'         => 'header',
		'default'         => 0,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_background',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'header_parallax',
		'label'           => esc_html__( 'Parallax', 'authentic' ),
		'description'     => esc_html__( 'If enabled, background position, size, repeat and attachment options will be ignored.', 'authentic' ),
		'section'         => 'header',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_background',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Header > Description ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'custom',
		'settings'        => 'header_collapsible_description',
		'section'         => 'header',
		'default'         => '<div class="customize-collapsible"><h3>' . esc_html__( 'Site Description', 'authentic' ) . '</h3></div>',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'              => 'text',
		'settings'          => 'header_description_text',
		'label'             => esc_html__( 'Text', 'authentic' ),
		'section'           => 'header',
		'default'           => '',
		'priority'          => 10,
		'sanitize_callback' => 'wp_kses_post',
		'active_callback'   => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'typography',
		'settings'        => 'header_description_font',
		'label'           => esc_html__( 'Font', 'authentic' ),
		'section'         => 'header',
		'default'         => array(
			'font-family'    => 'Montserrat',
			'variant'        => '300',
			'subsets'        => array( 'latin' ),
			'font-size'      => '0.875rem',
			'letter-spacing' => '-0.0125em',
			'text-transform' => 'none',
		),
		'transport'       => 'auto',
		'priority'        => 10,
		'output'          => array(
			array(
				'element' => '.header .site-description',
			),
		),
		'choices'         => apply_filters( 'powerkit_fonts_choices', array() ),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Header > Left Column ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'custom',
		'settings'        => 'header_collapsible_content_left',
		'section'         => 'header',
		'default'         => '<div class="customize-collapsible"><h3>' . esc_html__( 'Left Column', 'authentic' ) . '</h3></div>',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_layout',
				'operator' => '==',
				'value'    => 'center',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'header_content_left_select',
		'label'           => esc_html__( 'Type', 'authentic' ),
		'section'         => 'header',
		'default'         => 'button',
		'priority'        => 10,
		'choices'         => csco_get_header_content_select( array( 'menu', 'toggle', 'search', 'social', 'button', 'cart', 'html', 'none' ) ),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_layout',
				'operator' => '==',
				'value'    => 'center',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'header_content_left_button_text',
		'label'           => esc_html__( 'Text', 'authentic' ),
		'section'         => 'header',
		'default'         => esc_html__( 'Subscribe', 'authentic' ),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_left_select',
				'operator' => '==',
				'value'    => 'button',
			),
			array(
				'setting'  => 'header_layout',
				'operator' => '==',
				'value'    => 'center',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'header_content_left_button_link',
		'label'           => esc_html__( 'Link', 'authentic' ),
		'section'         => 'header',
		'default'         => get_site_url(),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_left_select',
				'operator' => '==',
				'value'    => 'button',
			),
			array(
				'setting'  => 'header_layout',
				'operator' => '==',
				'value'    => 'center',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'header_content_left_button_icon',
		'label'           => esc_html__( 'Icon', 'authentic' ),
		'section'         => 'header',
		'default'         => 'mail',
		'priority'        => 10,
		'choices'         => csco_get_icons(),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_left_select',
				'operator' => '==',
				'value'    => 'button',
			),
			array(
				'setting'  => 'header_layout',
				'operator' => '==',
				'value'    => 'center',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'header_content_left_menu',
		'label'           => esc_html__( 'Menu', 'authentic' ),
		'section'         => 'header',
		'default'         => csco_get_default_menu(),
		'priority'        => 10,
		'choices'         => csco_get_menus(),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_left_select',
				'operator' => '==',
				'value'    => 'menu',
			),
			array(
				'setting'  => 'header_layout',
				'operator' => '==',
				'value'    => 'center',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'textarea',
		'settings'        => 'header_content_left_html',
		'label'           => esc_html__( 'HTML', 'authentic' ),
		'section'         => 'header',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_left_select',
				'operator' => '==',
				'value'    => 'html',
			),
			array(
				'setting'  => 'header_layout',
				'operator' => '==',
				'value'    => 'center',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'header_content_left_social_accounts_labels',
		'label'           => esc_html__( 'Labels', 'authentic' ),
		'section'         => 'header',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_left_select',
				'operator' => '==',
				'value'    => 'social',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'header_content_left_social_accounts_titles',
		'label'           => esc_html__( 'Titles', 'authentic' ),
		'section'         => 'header',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_left_select',
				'operator' => '==',
				'value'    => 'social',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'header_content_left_social_accounts_counts',
		'label'           => esc_html__( 'Counts', 'authentic' ),
		'section'         => 'header',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_left_select',
				'operator' => '==',
				'value'    => 'social',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'number',
		'settings'        => 'header_content_left_social_accounts_limit',
		'label'           => esc_html__( 'Limit', 'authentic' ),
		'description'     => esc_html__( 'Number of social accounts.', 'authentic' ),
		'section'         => 'header',
		'default'         => 3,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_left_select',
				'operator' => '==',
				'value'    => 'social',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Header > Right Column ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'custom',
		'settings'        => 'header_collapsible_content_right',
		'section'         => 'header',
		'default'         => '<div class="customize-collapsible"><h3>' . esc_html__( 'Right Column', 'authentic' ) . '</h3></div>',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'left',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'header_content_right_select',
		'label'           => esc_html__( 'Type', 'authentic' ),
		'section'         => 'header',
		'default'         => 'search',
		'priority'        => 10,
		'choices'         => csco_get_header_content_select( array( 'menu', 'search', 'social', 'button', 'cart', 'html', 'none' ) ),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'left',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'header_content_right_button_text',
		'label'           => esc_html__( 'Text', 'authentic' ),
		'section'         => 'header',
		'default'         => esc_html__( 'Subscribe', 'authentic' ),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_right_select',
				'operator' => '==',
				'value'    => 'button',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'left',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'header_content_right_button_link',
		'label'           => esc_html__( 'Link', 'authentic' ),
		'section'         => 'header',
		'default'         => get_site_url(),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_right_select',
				'operator' => '==',
				'value'    => 'button',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'left',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'header_content_right_button_icon',
		'label'           => esc_html__( 'Icon', 'authentic' ),
		'section'         => 'header',
		'default'         => 'mail',
		'priority'        => 10,
		'choices'         => csco_get_icons(),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_right_select',
				'operator' => '==',
				'value'    => 'button',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'left',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'header_content_right_menu',
		'label'           => esc_html__( 'Menu', 'authentic' ),
		'section'         => 'header',
		'default'         => csco_get_default_menu(),
		'priority'        => 10,
		'choices'         => csco_get_menus(),
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_right_select',
				'operator' => '==',
				'value'    => 'menu',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'left',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'textarea',
		'settings'        => 'header_content_right_html',
		'label'           => esc_html__( 'HTML', 'authentic' ),
		'section'         => 'header',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_right_select',
				'operator' => '==',
				'value'    => 'html',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'left',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'header_content_right_social_accounts_labels',
		'label'           => esc_html__( 'Labels', 'authentic' ),
		'section'         => 'header',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_right_select',
				'operator' => '==',
				'value'    => 'social',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'left',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'header_content_right_social_accounts_titles',
		'label'           => esc_html__( 'Titles', 'authentic' ),
		'section'         => 'header',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_right_select',
				'operator' => '==',
				'value'    => 'social',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'left',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'header_content_right_social_accounts_counts',
		'label'           => esc_html__( 'Counts', 'authentic' ),
		'section'         => 'header',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_right_select',
				'operator' => '==',
				'value'    => 'social',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'left',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'number',
		'settings'        => 'header_content_right_social_accounts_limit',
		'label'           => esc_html__( 'Limit', 'authentic' ),
		'description'     => esc_html__( 'Number of social accounts.', 'authentic' ),
		'section'         => 'header',
		'default'         => 3,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'header',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'header_content_right_select',
				'operator' => '==',
				'value'    => 'social',
			),
			array(
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'center',
				),
				array(
					'setting'  => 'header_layout',
					'operator' => '==',
					'value'    => 'left',
				),
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |- [ Layout > Navigation Bar ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'navbar', array(
		'title'    => esc_html__( 'Navigation Bar', 'authentic' ),
		'panel'    => 'layout',
		'priority' => 10,
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Navigation Bar > Layout ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'custom',
		'settings' => 'navbar_collapsible_layout',
		'section'  => 'navbar',
		'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Layout', 'authentic' ) . '</h3></div>',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'select',
		'settings' => 'navbar_container',
		'label'    => esc_html__( 'Container', 'authentic' ),
		'section'  => 'navbar',
		'default'  => 'cs-container',
		'priority' => 10,
		'choices'  => array(
			'cs-container'       => esc_html__( 'Boxed', 'authentic' ),
			'cs-container-fluid' => esc_html__( 'Fullwidth', 'authentic' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'dimension',
		'settings' => 'navbar_height',
		'label'    => esc_html__( 'Height', 'authentic' ),
		'section'  => 'navbar',
		'default'  => '50px',
		'priority' => 10,
		'output'   => array(
			array(
				'element'  => '.navbar-primary .navbar',
				'property' => 'height',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'select',
		'settings' => 'navbar_alignment',
		'label'    => esc_html__( 'Alignment', 'authentic' ),
		'section'  => 'navbar',
		'default'  => 'center',
		'priority' => 10,
		'choices'  => array(
			'center' => esc_html__( 'Center', 'authentic' ),
			'left'   => esc_html__( 'Left', 'authentic' ),
			'right'  => esc_html__( 'Right', 'authentic' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'navbar_toggle',
		'label'    => esc_html__( 'Display off-canvas toggle', 'authentic' ),
		'section'  => 'navbar',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'navbar_search',
		'label'    => esc_html__( 'Display search icon', 'authentic' ),
		'section'  => 'navbar',
		'default'  => false,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'        => 'checkbox',
		'settings'    => 'effects_navbar_scroll',
		'label'       => esc_html__( 'Enable sticky navigation bar', 'authentic' ),
		'description' => esc_html__( 'If enabled the navigation bar will be revealed when scrolling up and hidden when scrolling down.', 'authentic' ),
		'section'     => 'navbar',
		'default'     => true,
		'priority'    => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'navbar_sticky',
		'label'           => esc_html__( 'Make navigation bar always sticky', 'authentic' ),
		'description'     => esc_html__( 'Enabling this option will force the navigation bar to be always visible when scrolling.', 'authentic' ),
		'section'         => 'navbar',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'effects_navbar_scroll',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Navigation Bar > Logo ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'custom',
		'settings' => 'navbar_collapsible_logo',
		'section'  => 'navbar',
		'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Logo', 'authentic' ) . '</h3></div>',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'select',
		'settings' => 'navbar_logo_select',
		'label'    => esc_html__( 'Type', 'authentic' ),
		'section'  => 'navbar',
		'default'  => 'text',
		'priority' => 10,
		'choices'  => array(
			'image' => esc_html__( 'Image', 'authentic' ),
			'text'  => esc_html__( 'Text', 'authentic' ),
			'none'  => esc_html__( 'None', 'authentic' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'navbar_logo_default_url',
		'label'           => esc_html__( 'Default Logo', 'authentic' ),
		'section'         => 'navbar',
		'default'         => get_template_directory_uri() . '/images/logo-small-dark.png',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'navbar_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'navbar_logo_default_retina_url',
		'label'           => esc_html__( 'Default Retina Logo', 'authentic' ),
		'section'         => 'navbar',
		'default'         => get_template_directory_uri() . '/images/logo-small-dark-2x.png',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'navbar_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'navbar_dark_logo_default_url',
		'label'           => esc_html__( 'Default Dark Logo', 'authentic' ),
		'section'         => 'navbar',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'navbar_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
			array(
				'setting'  => 'color_enable_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'navbar_dark_logo_default_retina_url',
		'label'           => esc_html__( 'Default Retina Dark Logo', 'authentic' ),
		'section'         => 'navbar',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'navbar_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
			array(
				'setting'  => 'color_enable_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'navbar_logo_overlay_url',
		'label'           => esc_html__( 'Overlay Logo', 'authentic' ),
		'section'         => 'navbar',
		'default'         => get_template_directory_uri() . '/images/logo-small-light.png',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'navbar_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'navbar_logo_overlay_retina_url',
		'label'           => esc_html__( 'Overlay Retina Logo', 'authentic' ),
		'section'         => 'navbar',
		'default'         => get_template_directory_uri() . '/images/logo-small-light-2x.png',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'navbar_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'              => 'text',
		'settings'          => 'navbar_logo_text',
		'label'             => esc_html__( 'Text', 'authentic' ),
		'section'           => 'navbar',
		'default'           => get_bloginfo( 'name' ),
		'priority'          => 10,
		'sanitize_callback' => 'wp_kses_post',
		'active_callback'   => array(
			array(
				'setting'  => 'navbar_logo_select',
				'operator' => '==',
				'value'    => 'text',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'typography',
		'settings'        => 'navbar_logo_font',
		'label'           => esc_html__( 'Font', 'authentic' ),
		'section'         => 'navbar',
		'default'         => array(
			'font-family'    => 'Montserrat',
			'variant'        => '600',
			'subsets'        => array( 'latin' ),
			'font-size'      => '1.375rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'line-height'    => '1',
		),
		'transport'       => 'auto',
		'priority'        => 10,
		'output'          => array(
			array(
				'element' => '.navbar-primary .navbar-brand',
			),
		),
		'choices'         => apply_filters( 'powerkit_fonts_choices', array() ),
		'active_callback' => array(
			array(
				'setting'  => 'navbar_logo_select',
				'operator' => '==',
				'value'    => 'text',
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Navigation Bar > Social Accounts ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'custom',
		'settings' => 'navbar_collapsible_social_icons',
		'section'  => 'navbar',
		'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Social Icons', 'authentic' ) . '</h3></div>',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'navbar_social',
		'label'    => esc_html__( 'Social Icons', 'authentic' ),
		'section'  => 'navbar',
		'default'  => false,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'navbar_social_accounts_labels',
		'label'           => esc_html__( 'Labels', 'authentic' ),
		'section'         => 'navbar',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'navbar_social',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'navbar_social_accounts_titles',
		'label'           => esc_html__( 'Titles', 'authentic' ),
		'section'         => 'navbar',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'navbar_social',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'navbar_social_accounts_counts',
		'label'           => esc_html__( 'Counts', 'authentic' ),
		'section'         => 'navbar',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'navbar_social',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'number',
		'settings'        => 'navbar_social_accounts_limit',
		'label'           => esc_html__( 'Limit', 'authentic' ),
		'description'     => esc_html__( 'Number of social accounts.', 'authentic' ),
		'section'         => 'navbar',
		'default'         => 3,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'navbar_social',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Navigation Bar > Multi-Column Sub-Menu ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'custom',
		'settings' => 'navbar_collapsible_multi_column',
		'section'  => 'navbar',
		'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Multi-Column Sub-Menu', 'authentic' ) . '</h3></div>',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'navbar_multi_column_display',
		'label'    => esc_html__( 'Display multi-column sub-menu', 'authentic' ),
		'section'  => 'navbar',
		'default'  => false,
		'priority' => 10,
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Navigation Bar > Single-Column Sub-Menu ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'custom',
		'settings' => 'navbar_collapsible_single_column',
		'section'  => 'navbar',
		'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Single-Column Sub-Menu', 'authentic' ) . '</h3></div>',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'navbar_single_column_display',
		'label'    => esc_html__( 'Display single-column sub-menu', 'authentic' ),
		'section'  => 'navbar',
		'default'  => false,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'navbar_single_column_title',
		'label'           => esc_html__( 'Dropdown Title', 'authentic' ),
		'section'         => 'navbar',
		'default'         => esc_html__( 'Follow', 'authentic' ),
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'navbar_single_column_display',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'navbar_single_column_image',
		'label'           => esc_html__( 'Background Image', 'authentic' ),
		'section'         => 'navbar',
		'priority'        => 10,
		'choices'         => array(
			'save_as' => 'id',
		),
		'active_callback' => array(
			array(
				'setting'  => 'navbar_single_column_display',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |- [ Layout > Off-Canvas ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'offcanvas', array(
		'title'    => esc_html__( 'Off-Canvas Area', 'authentic' ),
		'panel'    => 'layout',
		'priority' => 10,
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Off-Canvas Area > Logo ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'custom',
		'settings' => 'offcanvas_collapsible_topbar',
		'section'  => 'offcanvas',
		'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Top Bar', 'authentic' ) . '</h3></div>',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'dimension',
		'settings' => 'offcanvas_topbar_height',
		'label'    => esc_html__( 'Height', 'authentic' ),
		'section'  => 'offcanvas',
		'default'  => '50px',
		'priority' => 10,
		'output'   => array(
			array(
				'element'       => '.offcanvas .offcanvas-header',
				'property'      => 'flex',
				'value_pattern' => '0 0 $',
			),
			array(
				'element'  => '.offcanvas .navbar-offcanvas',
				'property' => 'height',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'custom',
		'settings' => 'offcanvas_collapsible_logo',
		'section'  => 'offcanvas',
		'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Logo', 'authentic' ) . '</h3></div>',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'dimension',
		'settings' => 'navbar_height',
		'label'    => esc_html__( 'Height', 'authentic' ),
		'section'  => 'navbar',
		'default'  => '50px',
		'priority' => 10,
		'output'   => array(
			array(
				'element'  => '.navbar-primary .navbar',
				'property' => 'height',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'select',
		'settings' => 'offcanvas_logo_select',
		'label'    => esc_html__( 'Type', 'authentic' ),
		'section'  => 'offcanvas',
		'default'  => 'text',
		'priority' => 10,
		'choices'  => array(
			'image' => esc_html__( 'Image', 'authentic' ),
			'text'  => esc_html__( 'Text', 'authentic' ),
			'none'  => esc_html__( 'None', 'authentic' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'offcanvas_logo_url',
		'label'           => esc_html__( 'Logo', 'authentic' ),
		'section'         => 'offcanvas',
		'default'         => get_template_directory_uri() . '/images/logo-small-dark.png',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'offcanvas_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'offcanvas_logo_retina_url',
		'label'           => esc_html__( 'Retina Logo', 'authentic' ),
		'section'         => 'offcanvas',
		'default'         => get_template_directory_uri() . '/images/logo-small-dark-2x.png',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'offcanvas_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'offcanvas_dark_logo_url',
		'label'           => esc_html__( 'Dark Logo', 'authentic' ),
		'section'         => 'offcanvas',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'offcanvas_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
			array(
				'setting'  => 'color_enable_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'offcanvas_dark_logo_retina_url',
		'label'           => esc_html__( 'Retina Dark Logo', 'authentic' ),
		'section'         => 'offcanvas',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'offcanvas_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
			array(
				'setting'  => 'color_enable_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'              => 'text',
		'settings'          => 'offcanvas_logo_text',
		'label'             => esc_html__( 'Text', 'authentic' ),
		'section'           => 'offcanvas',
		'default'           => get_bloginfo( 'name' ),
		'priority'          => 10,
		'sanitize_callback' => 'wp_kses_post',
		'active_callback'   => array(
			array(
				'setting'  => 'offcanvas_logo_select',
				'operator' => '==',
				'value'    => 'text',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'typography',
		'settings'        => 'offcanvas_logo_font',
		'label'           => esc_html__( 'Font', 'authentic' ),
		'section'         => 'offcanvas',
		'default'         => array(
			'font-family'    => 'Montserrat',
			'variant'        => '600',
			'subsets'        => array( 'latin' ),
			'font-size'      => '1.375rem',
			'letter-spacing' => '-0.05em',
			'text-transform' => 'none',
			'line-height'    => '1',
		),
		'transport'       => 'auto',
		'priority'        => 10,
		'output'          => array(
			array(
				'element' => '.offcanvas-header .navbar .navbar-brand',
			),
		),
		'choices'         => apply_filters( 'powerkit_fonts_choices', array() ),
		'active_callback' => array(
			array(
				'setting'  => 'offcanvas_logo_select',
				'operator' => '==',
				'value'    => 'text',
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |- [ Layout > Page Header ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'page_header', array(
		'title'    => esc_html__( 'Page Header', 'authentic' ),
		'panel'    => 'layout',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'select',
		'settings' => 'page_header',
		'label'    => esc_html__( 'Type', 'authentic' ),
		'section'  => 'page_header',
		'default'  => 'simple',
		'priority' => 10,
		'choices'  => array(
			'none'   => esc_html__( 'None', 'authentic' ),
			'simple' => esc_html__( 'Simple', 'authentic' ),
			'small'  => esc_html__( 'Small', 'authentic' ),
			'wide'   => esc_html__( 'Wide', 'authentic' ),
			'large'  => esc_html__( 'Large', 'authentic' ),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |- [ Layout > Post Archive ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'archive', array(
		'title'    => esc_html__( 'Post Archive', 'authentic' ),
		'panel'    => 'layout',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'radio-image',
		'settings' => 'layout_archive_type',
		'label'    => esc_html__( 'Type', 'authentic' ),
		'section'  => 'archive',
		'default'  => 'standard',
		'priority' => 10,
		'choices'  => array(
			'standard' => get_template_directory_uri() . '/images/layout-full.png',
			'list'     => get_template_directory_uri() . '/images/layout-list.png',
			'grid'     => get_template_directory_uri() . '/images/layout-grid.png',
			'masonry'  => get_template_directory_uri() . '/images/layout-masonry.png',
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'layout_columns',
		'label'           => esc_html__( 'Columns', 'authentic' ),
		'description'     => esc_html__( 'Three- and four-column layouts are visible on larger screens only.', 'authentic' ),
		'section'         => 'archive',
		'default'         => 2,
		'priority'        => 10,
		'choices'         => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
		),
		'active_callback' => array(
			array(
				array(
					'setting'  => 'layout_archive_type',
					'operator' => '==',
					'value'    => 'grid',
				),
				array(
					'setting'  => 'layout_archive_type',
					'operator' => '==',
					'value'    => 'masonry',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'layout_first_post',
		'label'           => esc_html__( 'Display first post as standard', 'authentic' ),
		'section'         => 'archive',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				array(
					'setting'  => 'layout_archive_type',
					'operator' => '!=',
					'value'    => 'standard',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'layout_meta_category',
		'label'    => esc_html__( 'Display post category', 'authentic' ),
		'section'  => 'archive',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'layout_meta',
		'label'    => esc_html__( 'Display post meta', 'authentic' ),
		'section'  => 'archive',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'layout_summary',
		'label'    => esc_html__( 'Display post summary', 'authentic' ),
		'section'  => 'archive',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'layout_standard_summary',
		'label'           => esc_html__( 'Standard Post Summary', 'authentic' ),
		'section'         => 'archive',
		'default'         => 'excerpt',
		'priority'        => 10,
		'choices'         => array(
			'excerpt' => esc_html__( 'Post Excerpt', 'authentic' ),
			'content' => esc_html__( 'Post Content', 'authentic' ),
		),
		'active_callback' => array(
			array(
				array(
					'setting'  => 'layout_summary',
					'operator' => '==',
					'value'    => true,
				),
			),
			array(
				array(
					'setting'  => 'layout_archive_type',
					'operator' => '==',
					'value'    => 'standard',
				),
				array(
					'setting'  => 'layout_first_post',
					'operator' => '==',
					'value'    => true,
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'layout_first_post',
		'label'           => esc_html__( 'Display first post as standard', 'authentic' ),
		'section'         => 'archive',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				array(
					'setting'  => 'layout_archive_type',
					'operator' => '!=',
					'value'    => 'standard',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'layout_more_button',
		'label'    => esc_html__( 'Display View Post button', 'authentic' ),
		'section'  => 'archive',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'layout_reduce_margin',
		'label'           => esc_html__( 'Reduce white-space between posts', 'authentic' ),
		'section'         => 'archive',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'layout_archive_type',
				'operator' => '!=',
				'value'    => 'standard',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'select',
		'settings' => 'layout_orientation',
		'label'    => esc_html__( 'Image Orientation', 'authentic' ),
		'section'  => 'archive',
		'default'  => 'landscape',
		'priority' => 10,
		'choices'  => array(
			'original'  => esc_html__( 'Original', 'authentic' ),
			'landscape' => esc_html__( 'Landscape', 'authentic' ),
			'portrait'  => esc_html__( 'Portrait', 'authentic' ),
			'square'    => esc_html__( 'Square', 'authentic' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'layout_list_width',
		'label'           => esc_html__( 'Image Width', 'authentic' ),
		'section'         => 'archive',
		'default'         => '6',
		'priority'        => 10,
		'choices'         => array(
			'5' => esc_html__( 'One Third', 'authentic' ),
			'6' => esc_html__( 'Half', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'layout_archive_type',
				'operator' => '==',
				'value'    => 'list',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'select',
		'settings' => 'layout_highlight',
		'label'    => esc_html__( 'Highlight Posts', 'authentic' ),
		'section'  => 'archive',
		'default'  => 'featured',
		'priority' => 10,
		'choices'  => array(
			'featured' => esc_html__( 'Featured', 'authentic' ),
			'all'      => esc_html__( 'All', 'authentic' ),
			'none'     => esc_html__( 'None', 'authentic' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'select',
		'settings' => 'layout_pagination_type',
		'label'    => esc_html__( 'Pagination', 'authentic' ),
		'section'  => 'archive',
		'default'  => 'standard',
		'priority' => 10,
		'choices'  => array(
			'standard' => esc_html__( 'Standard', 'authentic' ),
			'ajax'     => esc_html__( 'Load More', 'authentic' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'layout_infinite_load',
		'label'           => esc_html__( 'Infinite Load', 'authentic' ),
		'section'         => 'archive',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'layout_pagination_type',
				'operator' => '==',
				'value'    => 'ajax',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'layout_widgets',
		'label'    => esc_html__( 'Display widgets in archive', 'authentic' ),
		'section'  => 'archive',
		'default'  => false,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'number',
		'settings'        => 'layout_widgets_after',
		'label'           => esc_html__( 'Display widgets after N-th post', 'authentic' ),
		'section'         => 'archive',
		'default'         => 3,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'layout_widgets',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'layout_widgets_repeat',
		'label'           => esc_html__( 'Repeat widgets', 'authentic' ),
		'section'         => 'archive',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'layout_widgets',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |- [ Layout > Footer ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'footer', array(
		'title'    => esc_html__( 'Footer', 'authentic' ),
		'panel'    => 'layout',
		'priority' => 10,
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Footer > Logo  ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'custom',
		'settings' => 'footer_collapsible_logo',
		'section'  => 'footer',
		'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Logo', 'authentic' ) . '</h3></div>',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'select',
		'settings' => 'footer_logo_select',
		'label'    => esc_html__( 'Type', 'authentic' ),
		'section'  => 'footer',
		'default'  => 'text',
		'priority' => 10,
		'choices'  => array(
			'image' => esc_html__( 'Image', 'authentic' ),
			'text'  => esc_html__( 'Text', 'authentic' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'footer_logo_url',
		'label'           => esc_html__( 'Logo', 'authentic' ),
		'section'         => 'footer',
		'default'         => get_template_directory_uri() . '/images/logo-light.png',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'footer_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'footer_logo_retina_url',
		'label'           => esc_html__( 'Retina Logo', 'authentic' ),
		'section'         => 'footer',
		'default'         => get_template_directory_uri() . '/images/logo-light-2x.png',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'footer_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'footer_dark_logo_url',
		'label'           => esc_html__( 'Dark Logo', 'authentic' ),
		'section'         => 'footer',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'footer_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
			array(
				'setting'  => 'color_enable_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'image',
		'settings'        => 'footer_dark_logo_retina_url',
		'label'           => esc_html__( 'Retina Dark Logo', 'authentic' ),
		'section'         => 'footer',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'footer_logo_select',
				'operator' => '==',
				'value'    => 'image',
			),
			array(
				'setting'  => 'color_enable_dark_mode',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'              => 'text',
		'settings'          => 'footer_logo_text',
		'label'             => esc_html__( 'Text', 'authentic' ),
		'section'           => 'footer',
		'default'           => get_bloginfo( 'name' ),
		'priority'          => 10,
		'sanitize_callback' => 'wp_kses_post',
		'active_callback'   => array(
			array(
				'setting'  => 'footer_logo_select',
				'operator' => '==',
				'value'    => 'text',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'typography',
		'settings'        => 'footer_logo_font',
		'label'           => esc_html__( 'Font', 'authentic' ),
		'section'         => 'footer',
		'default'         => array(
			'font-family'    => 'Montserrat',
			'variant'        => '600',
			'subsets'        => array( 'latin' ),
			'font-size'      => '1.75rem',
			'letter-spacing' => '-0.05rem',
			'text-transform' => 'none',
			'line-height'    => '1',
		),
		'transport'       => 'auto',
		'priority'        => 10,
		'output'          => array(
			array(
				'element' => '.site-footer .site-title',
			),
		),
		'choices'         => apply_filters( 'powerkit_fonts_choices', array() ),
		'active_callback' => array(
			array(
				'setting'  => 'footer_logo_select',
				'operator' => '==',
				'value'    => 'text',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'              => 'text',
		'settings'          => 'footer_text',
		'label'             => esc_html__( 'Footer Text', 'authentic' ),
		'section'           => 'footer',
		'default'           => get_bloginfo( 'description' ),
		'priority'          => 10,
		'sanitize_callback' => 'wp_kses_post',
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Footer > Subscribe  ]
 * -------------------------------------------------------------------------
 */

if ( csco_powerkit_module_enabled( 'opt_in_forms' ) ) {

	CSCO_Kirki::add_field(
		'csco_theme_mod', array(
			'type'     => 'custom',
			'settings' => 'footer_collapsible_subscribe',
			'section'  => 'footer',
			'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Subscribe', 'authentic' ) . '</h3></div>',
			'priority' => 10,
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod', array(
			'type'     => 'checkbox',
			'settings' => 'footer_subscribe_name',
			'label'    => esc_html__( 'Display first name field', 'authentic' ),
			'section'  => 'footer',
			'default'  => false,
			'priority' => 10,
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod', array(
			'type'              => 'text',
			'settings'          => 'footer_subscribe_title',
			'label'             => esc_html__( 'Title', 'authentic' ),
			'section'           => 'footer',
			'default'           => esc_html__( 'Subscribe', 'authentic' ),
			'priority'          => 10,
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod', array(
			'type'              => 'text',
			'settings'          => 'footer_subscribe_message',
			'label'             => esc_html__( 'Message', 'authentic' ),
			'section'           => 'footer',
			'default'           => esc_html__( 'Subscribe now to our newsletter', 'authentic' ),
			'priority'          => 10,
			'sanitize_callback' => 'wp_kses_post',
		)
	);
}

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Footer > Instagram  ]
 * -------------------------------------------------------------------------
 */
if ( csco_powerkit_module_enabled( 'instagram_integration' ) ) {

	CSCO_Kirki::add_field(
		'csco_theme_mod', array(
			'type'     => 'custom',
			'settings' => 'footer_collapsible_instagram',
			'section'  => 'footer',
			'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Instagram', 'authentic' ) . '</h3></div>',
			'priority' => 10,
		)
	);

	CSCO_Kirki::add_field(
		'csco_theme_mod', array(
			'type'     => 'text',
			'settings' => 'footer_instagram_username',
			'label'    => esc_html__( 'Instagram Username', 'authentic' ),
			'section'  => 'footer',
			'default'  => '',
			'priority' => 10,
		)
	);
}

/**
 * -------------------------------------------------------------------------
 * |-- [ Layout > Footer > Arrangement  ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'custom',
		'settings' => 'footer_collapsible_components',
		'section'  => 'footer',
		'default'  => '<div class="customize-collapsible"><h3>' . esc_html__( 'Arrangement', 'authentic' ) . '</h3></div>',
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'sortable',
		'settings' => 'footer_components',
		'label'    => esc_html__( 'Components', 'authentic' ),
		'section'  => 'footer',
		'default'  => csco_footer_components_default(),
		'choices'  => csco_footer_components_choices(),
		'priority' => 10,
	)
);

/**
 * -------------------------------------------------------------------------
 * |- [ Layout > Post Meta ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'post_meta', array(
		'title'    => esc_html__( 'Post Meta', 'authentic' ),
		'priority' => 10,
		'panel'    => 'layout',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'multicheck',
		'settings' => 'post_meta',
		'label'    => esc_attr__( 'Post Meta', 'authentic' ),
		'section'  => 'post_meta',
		'default'  => array( 'date', 'author', 'category' ),
		'priority' => 10,
		'choices'  => apply_filters(
			'csco_post_meta_choices', array(
				'category'     => esc_html__( 'Category', 'authentic' ),
				'author'       => esc_html__( 'Author', 'authentic' ),
				'date'         => esc_html__( 'Date', 'authentic' ),
				'comments'     => esc_html__( 'Comments', 'authentic' ),
				'views'        => esc_html__( 'Views', 'authentic' ),
				'reading_time' => esc_html__( 'Reading Time', 'authentic' ),
			)
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |- [ Layout > Effects ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'effects', array(
		'title'    => esc_html__( 'Effects', 'authentic' ),
		'priority' => 10,
		'panel'    => 'layout',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'effects_parallax',
		'label'    => esc_html__( 'Parallax', 'authentic' ),
		'section'  => 'effects',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'effects_sticky_sidebar',
		'label'    => esc_html__( 'Sticky Sidebar', 'authentic' ),
		'section'  => 'effects',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'radio',
		'settings'        => 'effects_sticky_sidebar_method',
		'label'           => esc_html__( 'Sticky Method', 'authentic' ),
		'section'         => 'effects',
		'default'         => 'stick-to-bottom',
		'priority'        => 10,
		'choices'         => array(
			'stick-to-top'    => esc_html__( 'Sidebar top edge', 'authentic' ),
			'stick-to-bottom' => esc_html__( 'Sidebar bottom edge', 'authentic' ),
			'stick-last'      => esc_html__( 'Last widget top edge', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'effects_sticky_sidebar',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |- [ Layout > Miscellaneous ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'layout_misc', array(
		'title'    => esc_html__( 'Miscellaneous', 'authentic' ),
		'priority' => 10,
		'panel'    => 'layout',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'checkbox',
		'settings' => 'display_published_date',
		'label'    => esc_html__( 'Display published date instead of modified date', 'authentic' ),
		'section'  => 'layout_misc',
		'default'  => true,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'text',
		'settings' => 'label_readmore',
		'label'    => esc_html__( '"View Post" Button Label', 'authentic' ),
		'section'  => 'layout_misc',
		'default'  => esc_html__( 'View Post', 'authentic' ),
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'      => 'dimension',
		'settings'  => 'border_radius',
		'label'     => esc_html__( 'Border Radius', 'authentic' ),
		'section'   => 'layout_misc',
		'default'   => '0',
		'priority'  => 10,
		'transport' => 'auto',
		'output'    => apply_filters(
			'csco_border_radius', array(
				array(
					'element'  => '.button-primary, .wp-block-button:not(.is-style-squared) .wp-block-button__link, .wp-block-search .wp-block-search__button, .pk-button, .pk-about-button, .pk-zoom-icon-popup:after, .pk-pin-it, .entry-content .pk-dropcap:first-letter, .pk-social-links-template-vertical .pk-social-links-link, .pk-share-buttons-before-post .pk-share-buttons-link, .pk-share-buttons-after-post .pk-share-buttons-link, .pk-instagram-follow, .pk-twitter-follow, .pk-scroll-to-top, .widget-area .pk-subscribe-with-name input[type="text"], .widget-area .pk-subscribe-with-name button, .widget-area .pk-subscribe-with-bg input[type="text"], .widget-area .pk-subscribe-with-bg button, .entry-content .pk-share-buttons-wrap .pk-share-buttons-link, .adp-button, .abr-badge-primary',
					'property' => 'border-radius',
				),
				array(
					'element'     => '.pk-subscribe-with-name input[type="text"], .pk-subscribe-with-name button, .pk-subscribe-with-bg input[type="text"], .pk-subscribe-with-bg button',
					'property'    => 'border-radius',
					'media_query' => '@media (max-width: 719px)',
				),
				array(
					'element'  => '.cs-input-group-btn button, .pk-subscribe-form-wrap button',
					'property' => 'border-top-right-radius',
				),
				array(
					'element'  => '.cs-input-group-btn button, .pk-subscribe-form-wrap button',
					'property' => 'border-bottom-right-radius',
				),
			)
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'select',
		'settings' => 'style_align',
		'label'    => esc_html__( 'Text Align', 'authentic' ),
		'section'  => 'layout_misc',
		'default'  => 'center',
		'priority' => 10,
		'choices'  => array(
			'center' => esc_html( 'Center', 'authentic' ),
			'left'   => esc_html( 'Left', 'authentic' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'radio',
		'settings' => 'classic_gallery_alignment',
		'label'    => esc_html__( 'Alignment of Galleries in Classic Block', 'authentic' ),
		'section'  => 'layout_misc',
		'default'  => 'default',
		'priority' => 10,
		'choices'  => array(
			'default' => esc_html__( 'Default', 'authentic' ),
			'wide'    => esc_html__( 'Wide', 'authentic' ),
			'large'   => esc_html__( 'Large', 'authentic' ),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'        => 'radio',
		'settings'    => 'webfonts_load_method',
		'label'       => esc_html__( 'Webfonts Load Method', 'authentic' ),
		'description' => esc_html__( 'Please', 'authentic' ) . ' <a href="' . add_query_arg( array( 'action' => 'kirki-reset-cache' ), get_site_url() ) . '" target="_blank">' . esc_html__( 'reset font cache', 'authentic' ) . '</a> ' . esc_html__( 'after saving.', 'authentic' ),
		'section'     => 'layout_misc',
		'default'     => 'async',
		'priority'    => 10,
		'choices'     => array(
			'async' => esc_html__( 'Asynchronous', 'authentic' ),
			'link'  => esc_html__( 'Render-Blocking', 'authentic' ),
		),
	)
);
