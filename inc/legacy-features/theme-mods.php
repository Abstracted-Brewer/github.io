<?php
/**
 * Theme Mods.
 *
 * @package Authentic
 */

/**
 * -------------------------------------------------------------------------
 * |-- [ Homepage > Post Slider ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'home_post_slider', array(
		'title'    => esc_html__( 'Post Slider', 'authentic' ),
		'priority' => 10,
		'panel'    => 'home',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'toggle',
		'settings' => 'home_slider',
		'label'    => esc_html__( 'Post Slider', 'authentic' ),
		'section'  => 'home_post_slider',
		'default'  => false,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'home_slider_source',
		'label'           => esc_html__( 'Source', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => 'all',
		'priority'        => 10,
		'choices'         => csco_get_post_sources( 'featured' ),
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'home_slider_source_category_slug',
		'label'           => esc_html__( 'Slug', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_slider_source',
				'operator' => '==',
				'value'    => 'category',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'home_slider_source_tag_slug',
		'label'           => esc_html__( 'Slug', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_slider_source',
				'operator' => '==',
				'value'    => 'tag',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'home_slider_source_posts_slug',
		'label'           => esc_html__( 'Slug', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_slider_source',
				'operator' => '==',
				'value'    => 'posts',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'home_slider_orderby',
		'label'           => esc_html__( 'Order By', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => 'date',
		'priority'        => 10,
		'choices'         => array(
			'date'  => esc_html__( 'Date', 'authentic' ),
			'views' => esc_html__( 'Views', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'home_slider_time_frame',
		'label'           => esc_html__( 'Time Frame', 'authentic' ),
		'description'     => esc_html__( 'Input period of posts in English, i.e. &laquo;2 months&raquo;, &laquo;14 days&raquo; or even &laquo;1 year&raquo;', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_slider_orderby',
				'operator' => '==',
				'value'    => 'views',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'home_slider_location',
		'label'           => esc_html__( 'Display Location', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => 'front_page',
		'priority'        => 10,
		'choices'         => array(
			'front_page' => esc_html__( 'Homepage', 'authentic' ),
			'home'       => esc_html__( 'Posts page', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'show_on_front',
				'operator' => '==',
				'value'    => 'page',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_slider_exclude',
		'label'           => esc_html__( 'Exclude featured posts from the main archive', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'home_slider_type',
		'label'           => esc_html__( 'Type', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => 'center',
		'priority'        => 10,
		'choices'         => array(
			'center'   => esc_html__( 'Center', 'authentic' ),
			'large'    => esc_html__( 'Large', 'authentic' ),
			'boxed'    => esc_html__( 'Boxed', 'authentic' ),
			'multiple' => esc_html__( 'Multiple', 'authentic' ),
			'wide'     => esc_html__( 'Wide', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'home_slider_visible',
		'label'           => esc_html__( 'Visible Slides', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => '3',
		'priority'        => 10,
		'choices'         => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_slider_type',
				'operator' => '==',
				'value'    => 'multiple',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'number',
		'settings'        => 'home_slider_total',
		'label'           => esc_html__( 'Total Slides', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => 5,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_slider_parallax',
		'label'           => esc_html__( 'Enable parallax effect', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'dimension',
		'settings'        => 'home_slider_height',
		'label'           => esc_html__( 'Height', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => '600px',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_slider_type',
				'operator' => '!=',
				'value'    => 'large',
			),
		),
		'output'          => array(
			array(
				'element'     => '.slider-featured .overlay-outer',
				'property'    => 'height',
				'media_query' => '@media ( min-width: 760px )',
			),
			array(
				'element'  => '.slider-featured:not(.slider-large):not(.slider-multiple) .owl-carousel:not(.owl-loaded)',
				'property' => 'height',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'dimension',
		'settings'        => 'home_slider_padding',
		'label'           => esc_html__( 'Padding', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => '30px',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
			array(
				array(
					'setting'  => 'home_slider_type',
					'operator' => '==',
					'value'    => 'center',
				),
				array(
					'setting'  => 'home_slider_type',
					'operator' => '==',
					'value'    => 'multiple',
				),
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_slider_autoplay',
		'label'           => esc_html__( 'Auto Play', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'number',
		'settings'        => 'home_slider_timeout',
		'label'           => esc_html__( 'Time-Out', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => 7000,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_slider_autoplay',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_slider_meta_category',
		'label'           => esc_html__( 'Display post category', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_slider_meta',
		'label'           => esc_html__( 'Display post meta', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_slider_button',
		'label'           => esc_html__( 'Display View Post button', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'typography',
		'settings'        => 'home_slider_heading',
		'label'           => esc_html__( 'Heading', 'authentic' ),
		'section'         => 'home_post_slider',
		'default'         => array(
			'font-size'      => '3rem',
			'letter-spacing' => '-.125rem',
			'text-transform' => 'none',
		),
		'transport'       => 'auto',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_slider',
				'operator' => '==',
				'value'    => true,
			),
		),
		'output'          => array(
			array(
				'element'     => '.slider-featured h2',
				'media_query' => '@media ( min-width: 970px )',
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Homepage > Post Tiles ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'home_page_tiles', array(
		'title'    => esc_html__( 'Post Tiles', 'authentic' ),
		'priority' => 10,
		'panel'    => 'home',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'toggle',
		'settings' => 'home_tiles',
		'label'    => esc_html__( 'Post Tiles', 'authentic' ),
		'section'  => 'home_page_tiles',
		'default'  => false,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'home_tiles_source',
		'label'           => esc_html__( 'Source', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => 'all',
		'priority'        => 10,
		'choices'         => csco_get_post_sources( 'featured' ),
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'home_tiles_source_category_slug',
		'label'           => esc_html__( 'Slug', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_tiles_source',
				'operator' => '==',
				'value'    => 'category',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'home_tiles_source_tag_slug',
		'label'           => esc_html__( 'Slug', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_tiles_source',
				'operator' => '==',
				'value'    => 'tag',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'home_tiles_source_posts_slug',
		'label'           => esc_html__( 'Posts', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_tiles_source',
				'operator' => '==',
				'value'    => 'posts',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'home_tiles_orderby',
		'label'           => esc_html__( 'Order By', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => 'date',
		'priority'        => 10,
		'choices'         => array(
			'date'  => esc_html__( 'Date', 'authentic' ),
			'views' => esc_html__( 'Views', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'home_tiles_time_frame',
		'label'           => esc_html__( 'Time Frame', 'authentic' ),
		'description'     => esc_html__( 'Input period of posts in English, i.e. &laquo;2 months&raquo;, &laquo;14 days&raquo; or even &laquo;1 year&raquo;', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_tiles_orderby',
				'operator' => '==',
				'value'    => 'views',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'home_tiles_location',
		'label'           => esc_html__( 'Display Location', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => 'front_page',
		'priority'        => 10,
		'choices'         => array(
			'front_page' => esc_html__( 'Homepage', 'authentic' ),
			'home'       => esc_html__( 'Posts page', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'show_on_front',
				'operator' => '==',
				'value'    => 'page',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_tiles_exclude',
		'label'           => esc_html__( 'Exclude featured posts from the main archive', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'radio-image',
		'settings'        => 'home_tiles_layout',
		'label'           => esc_html__( 'Layout', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => '1',
		'priority'        => 10,
		'choices'         => array(
			'1' => get_template_directory_uri() . '/images/tiles-1.png',
			'2' => get_template_directory_uri() . '/images/tiles-2.png',
			'3' => get_template_directory_uri() . '/images/tiles-3.png',
			'4' => get_template_directory_uri() . '/images/tiles-4.png',
			'5' => get_template_directory_uri() . '/images/tiles-5.png',
			'6' => get_template_directory_uri() . '/images/tiles-6.png',
			'7' => get_template_directory_uri() . '/images/tiles-7.png',
			'8' => get_template_directory_uri() . '/images/tiles-8.png',
			'9' => get_template_directory_uri() . '/images/tiles-9.png',
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'dimension',
		'settings'        => 'home_tiles_height',
		'label'           => esc_html__( 'Min Height', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => '570px',
		'priority'        => 10,
		'output'          => array(
			array(
				'element'     => '.home .section-tiles .tiles-outer, .blog .section-tiles .tiles-outer',
				'property'    => 'min-height',
				'media_query' => '@media ( min-width: 1020px )',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'dimension',
		'settings'        => 'home_tiles_padding',
		'label'           => esc_html__( 'Padding', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => '40px',
		'priority'        => 10,
		'output'          => array(
			array(
				'element'     => '.home .section-tiles .tiles-outer, .blog .section-tiles .tiles-outer',
				'property'    => 'grid-gap',
				'media_query' => '@media ( min-width: 760px )',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_tiles_parallax',
		'label'           => esc_html__( 'Enable parallax effect', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_tiles_meta_category',
		'label'           => esc_html__( 'Display post category', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_tiles_meta',
		'label'           => esc_html__( 'Display post meta', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_tiles_button',
		'label'           => esc_html__( 'Display View Post button', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'typography',
		'settings'        => 'home_tiles_heading_primary',
		'label'           => esc_html__( 'Heading', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => array(
			'font-size'      => '2.5rem',
			'letter-spacing' => '-.125rem',
		),
		'transport'       => 'auto',
		'priority'        => 10,
		'output'          => array(
			array(
				'element'     => '.home .section-tiles .tile-primary h2, .blog .section-tiles .tile-primary h2',
				'media_query' => '@media ( min-width: 1020px )',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'typography',
		'settings'        => 'home_tiles_heading_secondary',
		'label'           => esc_html__( 'Secondary Heading', 'authentic' ),
		'section'         => 'home_page_tiles',
		'default'         => array(
			'font-size'      => '1.5rem',
			'letter-spacing' => '-.125rem',
		),
		'transport'       => 'auto',
		'priority'        => 10,
		'output'          => array(
			array(
				'element'     => '.home .section-tiles h2, .blog .section-tiles h2',
				'media_query' => '@media ( min-width: 760px )',
			),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_tiles',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_tiles_layout',
				'operator' => '!=',
				'value'    => '1',
			),
			array(
				'setting'  => 'home_tiles_layout',
				'operator' => '!=',
				'value'    => '2',
			),
			array(
				'setting'  => 'home_tiles_layout',
				'operator' => '!=',
				'value'    => '9',
			),
		),
	)
);

/**
 * -------------------------------------------------------------------------
 * |-- [ Homepage > Post Carousel ]
 * -------------------------------------------------------------------------
 */

CSCO_Kirki::add_section(
	'home_post_carousel', array(
		'title'    => esc_html__( 'Post Carousel', 'authentic' ),
		'priority' => 10,
		'panel'    => 'home',
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'     => 'toggle',
		'settings' => 'home_carousel',
		'label'    => esc_html__( 'Post Carousel', 'authentic' ),
		'section'  => 'home_post_carousel',
		'default'  => false,
		'priority' => 10,
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'              => 'text',
		'settings'          => 'home_carousel_title',
		'label'             => esc_html__( 'Title', 'authentic' ),
		'section'           => 'home_post_carousel',
		'default'           => esc_html__( 'Trending Posts', 'authentic' ),
		'priority'          => 10,
		'sanitize_callback' => 'wp_kses_post',
		'active_callback'   => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'home_carousel_source',
		'label'           => esc_html__( 'Source', 'authentic' ),
		'section'         => 'home_post_carousel',
		'default'         => 'all',
		'priority'        => 10,
		'choices'         => csco_get_post_sources( 'featured' ),
		'active_callback' => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'home_carousel_source_category_slug',
		'label'           => esc_html__( 'Slug', 'authentic' ),
		'section'         => 'home_post_carousel',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_carousel_source',
				'operator' => '==',
				'value'    => 'category',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'home_carousel_source_tag_slug',
		'label'           => esc_html__( 'Slug', 'authentic' ),
		'section'         => 'home_post_carousel',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_carousel_source',
				'operator' => '==',
				'value'    => 'tag',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'home_carousel_source_posts_slug',
		'label'           => esc_html__( 'Posts', 'authentic' ),
		'section'         => 'home_post_carousel',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_carousel_source',
				'operator' => '==',
				'value'    => 'posts',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'home_carousel_orderby',
		'label'           => esc_html__( 'Order By', 'authentic' ),
		'section'         => 'home_post_carousel',
		'default'         => 'date',
		'priority'        => 10,
		'choices'         => array(
			'date'  => esc_html__( 'Date', 'authentic' ),
			'views' => esc_html__( 'Views', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'text',
		'settings'        => 'home_carousel_time_frame',
		'label'           => esc_html__( 'Time Frame', 'authentic' ),
		'description'     => esc_html__( 'Input period of posts in English, i.e. &laquo;2 months&raquo;, &laquo;14 days&raquo; or even &laquo;1 year&raquo;', 'authentic' ),
		'section'         => 'home_post_carousel',
		'default'         => '',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'home_carousel_orderby',
				'operator' => '==',
				'value'    => 'views',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'home_carousel_location',
		'label'           => esc_html__( 'Display Location', 'authentic' ),
		'section'         => 'home_post_carousel',
		'default'         => 'front_page',
		'priority'        => 10,
		'choices'         => array(
			'front_page' => esc_html__( 'Homepage', 'authentic' ),
			'home'       => esc_html__( 'Posts page', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
			array(
				'setting'  => 'show_on_front',
				'operator' => '==',
				'value'    => 'page',
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_carousel_exclude',
		'label'           => esc_html__( 'Exclude featured posts from the main archive', 'authentic' ),
		'section'         => 'home_post_carousel',
		'default'         => false,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'select',
		'settings'        => 'home_carousel_orientation',
		'label'           => esc_html__( 'Image Orientation', 'authentic' ),
		'section'         => 'home_post_carousel',
		'default'         => 'landscape',
		'priority'        => 10,
		'choices'         => array(
			'landscape' => esc_html__( 'Landscape', 'authentic' ),
			'portrait'  => esc_html__( 'Portrait', 'authentic' ),
			'square'    => esc_html__( 'Square', 'authentic' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_carousel_meta',
		'label'           => esc_html__( 'Display post meta', 'authentic' ),
		'section'         => 'home_post_carousel',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'checkbox',
		'settings'        => 'home_carousel_meta_category',
		'label'           => esc_html__( 'Display post category', 'authentic' ),
		'section'         => 'home_post_carousel',
		'default'         => true,
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
		),
	)
);

CSCO_Kirki::add_field(
	'csco_theme_mod', array(
		'type'            => 'typography',
		'settings'        => 'home_carousel_heading',
		'label'           => esc_html__( 'Heading', 'authentic' ),
		'section'         => 'home_post_carousel',
		'default'         => array(
			'font-size'      => '1rem',
			'letter-spacing' => '-.025rem',
			'text-transform' => 'none',
		),
		'transport'       => 'auto',
		'priority'        => 10,
		'active_callback' => array(
			array(
				'setting'  => 'home_carousel',
				'operator' => '==',
				'value'    => true,
			),
		),
		'output'          => array(
			array(
				'element'     => '.site-inner > .section-carousel h2',
				'media_query' => '@media ( min-width: 970px )',
			),
		),
	)
);
