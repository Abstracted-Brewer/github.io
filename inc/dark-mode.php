<?php
/**
 * Dark Mode
 *
 * @package Authentic
 */

if ( class_exists( 'Kirki' ) ) {
	/**
	 * Add customizer fields for dar mode.
	 */
	function csco_dark_mode_customizer() {

		CSCO_Kirki::add_section(
			'colors_dark_mode',
			array(
				'title'    => esc_html__( 'Dark Mode', 'authentic' ),
				'panel'    => 'colors',
				'priority' => 5,
			)
		);

		CSCO_Kirki::add_field(
			'csco_theme_mod',
			array(
				'type'     => 'checkbox',
				'settings' => 'color_enable_dark_mode',
				'label'    => esc_html__( 'Enable Dark Mode', 'authentic' ),
				'section'  => 'colors_dark_mode',
				'default'  => false,
				'priority' => 10,
			)
		);

		CSCO_Kirki::add_field(
			'csco_theme_mod',
			array(
				'type'            => 'radio',
				'settings'        => 'color_scheme',
				'label'           => esc_html__( 'Site Color Scheme', 'authentic' ),
				'section'         => 'colors_dark_mode',
				'default'         => 'system',
				'choices'         => array(
					'system' => esc_html__( 'User’s system preference', 'authentic' ),
					'light'  => esc_html__( 'Light', 'authentic' ),
					'dark'   => esc_html__( 'Dark', 'authentic' ),
				),
				'priority'        => 10,
				'active_callback' => array(
					array(
						'setting'  => 'color_enable_dark_mode',
						'operator' => '==',
						'value'    => true,
					),
				),
			)
		);

		CSCO_Kirki::add_field(
			'csco_theme_mod',
			array(
				'type'            => 'checkbox',
				'settings'        => 'color_scheme_toggle',
				'label'           => esc_html__( 'Enable dark/light mode toggle', 'authentic' ),
				'section'         => 'colors_dark_mode',
				'default'         => true,
				'priority'        => 10,
				'active_callback' => array(
					array(
						'setting'  => 'color_enable_dark_mode',
						'operator' => '==',
						'value'    => true,
					),
				),
			)
		);
	}
	add_action( 'init', 'csco_dark_mode_customizer', 11 );

	/**
	 * Canvas: Enable data scheme.
	 */
	function csco_dark_mode_setup() {
		if ( ! csco_live_get_theme_mod( 'color_enable_dark_mode', false ) ) {
			return;
		}

		add_theme_support( 'canvas-enable-data-scheme' );
	}
	add_action( 'after_setup_theme', 'csco_dark_mode_setup' );

	/**
	 * Front localization scheme.
	 */
	function csco_front_scheme_localize() {
		if ( ! csco_live_get_theme_mod( 'color_enable_dark_mode', false ) ) {
			return;
		}

		// Localization scheme.
		$localize = array(
			'siteSchemeMode'   => get_theme_mod( 'color_scheme', 'system' ),
			'siteSchemeToogle' => get_theme_mod( 'color_scheme_toggle', true ),
		);

		// Localize the main theme scripts.
		wp_localize_script( 'csco-scripts', 'csSchemeLocalize', $localize );
	}
	add_action( 'wp_enqueue_scripts', 'csco_front_scheme_localize', 99 );

	/**
	 * Editor localization scheme.
	 */
	function csco_editor_scheme_localize() {
		if ( ! csco_live_get_theme_mod( 'color_enable_dark_mode', false ) ) {
			return;
		}

		// Localization scheme.
		$localize = array(
			'siteSchemeMode'   => 'light',
			'siteSchemeToogle' => false,
		);

		// Localize the main theme scripts.
		wp_localize_script( 'csco-scripts', 'csSchemeLocalize', $localize );
	}
	add_action( 'enqueue_block_editor_assets', 'csco_editor_scheme_localize', 99 );

	/**
	 * Get site scheme data
	 */
	function csco_site_scheme_data() {

		// Get options.
		$color_scheme = get_theme_mod( 'color_scheme', 'system' );
		$color_toggle = get_theme_mod( 'color_scheme_toggle', true );

		// Set site scheme.
		$site_scheme = 'default';

		switch ( $color_scheme ) {
			case 'dark':
				$site_scheme = 'dark';
				break;
			case 'light':
				$site_scheme = 'default';
				break;
			case 'system':
				if ( isset( $_COOKIE['_color_system_schema'] ) && 'default' === $_COOKIE['_color_system_schema'] ) {
					$site_scheme = 'default';
				}
				if ( isset( $_COOKIE['_color_system_schema'] ) && 'dark' === $_COOKIE['_color_system_schema'] ) {
					$site_scheme = 'dark';
				}
				break;
		}

		if ( $color_toggle ) {
			if ( isset( $_COOKIE['_color_schema'] ) && 'default' === $_COOKIE['_color_schema'] ) {
				$site_scheme = 'default';
			}
			if ( isset( $_COOKIE['_color_schema'] ) && 'dark' === $_COOKIE['_color_schema'] ) {
				$site_scheme = 'dark';
			}
		}

		return array(
			'site_scheme' => $site_scheme,
		);
	}

	/**
	 * Scheme Toggle
	 */
	function csco_scheme_toggle() {
		if ( ! csco_live_get_theme_mod( 'color_enable_dark_mode', false ) ) {
			return;
		}

		if ( ! get_theme_mod( 'color_scheme_toggle', true ) ) {
			return;
		}
		?>
			<span role="button" class="navbar-scheme-toggle cs-site-scheme-toggle">
				<i class="navbar-scheme-toggle-icon cs-icon cs-icon-sun"></i>
				<i class="navbar-scheme-toggle-icon cs-icon cs-icon-moon"></i>
			</span>
		<?php
	}

	/**
	 * Handler customizer fields for color schemes.
	 */
	function csco_scheme_handler_customizer() {
		if ( ! csco_live_get_theme_mod( 'color_enable_dark_mode', false ) ) {
			return;
		}

		$kirki_fields = Kirki::$fields;

		foreach ( $kirki_fields as $key => $field ) {

			if ( isset( $field['support_dark'] ) && $field['support_dark'] ) {
				$new_key = "dark_{$key}";

				// Create new field.
				$new_field = $field;

				// Change new label.
				$new_field['label'] = sprintf( 'Dark %s', $new_field['label'] );

				// Change new default.
				$new_field['default'] = $new_field['default_dark'];

				// Change new key.
				$new_field['args']['settings'] = $new_key;
				$new_field['settings']         = $new_key;
				$new_field['id']               = $new_key;

				$new_field['args']['dark_output'] = isset( $new_field['args']['output'] ) ? $new_field['args']['output'] : array();
				$new_field['dark_output']         = isset( $new_field['output'] ) ? $new_field['output'] : array();
				$new_field['dark_js_vars']        = isset( $new_field['js_vars'] ) ? $new_field['js_vars'] : array();

				$new_field['args']['output'] = array();
				$new_field['output']         = array();
				$new_field['js_vars']        = array();

				// Add new active callback.
				if ( isset( $new_field['args']['active_callback'] ) && is_array( $new_field['args']['active_callback'] ) ) {
					$new_field['args']['active_callback'] = array_merge( $new_field['args']['active_callback'], array(
						array(
							'setting'  => 'color_enable_dark_mode',
							'operator' => '==',
							'value'    => true,
						),
					) );
				} else {
					$new_field['args']['active_callback'] = array(
						array(
							'setting'  => 'color_enable_dark_mode',
							'operator' => '==',
							'value'    => true,
						),
					);
				}

				if ( isset( $new_field['required'] ) && is_array( $new_field['required'] ) ) {
					$new_field['required'] = array_merge( $new_field['required'], array(
						array(
							'setting'  => 'color_enable_dark_mode',
							'operator' => '==',
							'value'    => true,
						),
					) );
				} else {
					$new_field['required'] = array(
						array(
							'setting'  => 'color_enable_dark_mode',
							'operator' => '==',
							'value'    => true,
						),
					);
				}

				// Change current output.
				$kirki_fields[ $key ]['args']['default_output'] = isset( $kirki_fields[ $key ]['args']['output'] ) ? $kirki_fields[ $key ]['args']['output'] : array();
				$kirki_fields[ $key ]['default_output']         = isset( $kirki_fields[ $key ]['output'] ) ? $kirki_fields[ $key ]['output'] : array();
				$kirki_fields[ $key ]['default_js_vars']        = isset( $kirki_fields[ $key ]['js_vars'] ) ? $kirki_fields[ $key ]['js_vars'] : array();

				$kirki_fields[ $key ]['args']['output'] = array();
				$kirki_fields[ $key ]['output']         = array();
				$kirki_fields[ $key ]['js_vars']        = array();

				// Insert new field.
				$kirki_fields = array_insert_after( $kirki_fields, $key, array( $new_key => $new_field ) );
			}
		}

		Kirki::$fields = $kirki_fields;
	}
	add_action( 'init', 'csco_scheme_handler_customizer', 12 );

	/**
	 * Print schemes styles inline.
	 */
	function csco_schemes_print_styles_inline() {
		if ( ! csco_live_get_theme_mod( 'color_enable_dark_mode', false ) ) {
			return;
		}

		$schemes = array(
			'default',
			'dark',
		);

		$data = csco_site_scheme_data();

		foreach ( $schemes as $scheme ) {

			$media = $scheme === $data['site_scheme'] ? '' : ' media="max-width: 1px"';

			printf( '<style id="kirki-inline-styles-%s" %s>', $scheme, $media );

			echo wp_strip_all_tags( csco_schemes_print_styles( $scheme ) );

			printf( '</style>' );
		}
	}
	add_action( 'wp_head', 'csco_schemes_print_styles_inline', 1000 );

	/**
	 * Admin styles, adds compatibility with the new WordPress editor (Gutenberg).
	 */
	function csco_schemes_enqueue_styles() {
		if ( ! csco_live_get_theme_mod( 'color_enable_dark_mode', false ) ) {
			return;
		}

		$schemes = array(
			'default',
			'dark',
		);

		$data = csco_site_scheme_data();

		foreach ( $schemes as $scheme ) {

			$media = $scheme === $data['site_scheme'] ? '' : 'max-width: 1px';

			$args = array( 'action' => 'kirki-styles-' . $scheme );

			if ( is_admin() && ! is_customize_preview() ) {
				$args['editor'] = '1';
			}

			// Enqueue the dynamic stylesheet.
			wp_enqueue_style(
				'kirki-styles-' . $scheme,
				add_query_arg( $args, site_url() ),
				array(),
				KIRKI_VERSION,
				$media
			);
		}
	}
	add_action( 'enqueue_block_editor_assets', 'csco_schemes_enqueue_styles', 101 );

	/**
	 * Prints the styles as an enqueued file.
	 */
	function csco_schemes_print_styles_action() {
		if ( ! csco_live_get_theme_mod( 'color_enable_dark_mode', false ) ) {
			return;
		}

		/**
		 * Note to code reviewers:
		 * There is no need for a nonce check here, we're only checking if this is a valid request or not.
		 */
		if ( isset( $_GET['action'] ) && ( 'kirki-styles-default' === $_GET['action'] || 'kirki-styles-dark' === $_GET['action'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification

			if ( 'kirki-styles-dark' === $_GET['action'] ) { // phpcs:ignore WordPress.Security.NonceVerification
				$scheme = 'dark';
			} else {
				$scheme = 'default';
			}

			// This is a stylesheet.
			header( 'Content-type: text/css' );

			echo wp_strip_all_tags( csco_schemes_print_styles( $scheme ) );

			exit;
		}
	}
	add_action( 'wp', 'csco_schemes_print_styles_action' );

	/**
	 * Print schemes styles.
	 *
	 * @param string $scheme Current scheme.
	 */
	function csco_schemes_print_styles( $scheme ) {

		Kirki_Modules_CSS_Generator::get_instance();

		$fields = Kirki::$fields;
		$css    = array();

		// Early exit if no fields are found.
		if ( empty( $fields ) ) {
			return;
		}

		foreach ( $fields as $field ) {

			if ( ! ( isset( $field['support_dark'] ) && $field['support_dark'] ) ) {
				continue;
			}

			$field['args']['output'] = isset( $field['args'][ "{$scheme}_output" ] ) ? $field['args'][ "{$scheme}_output" ] : array();
			$field['output']         = isset( $field[ "{$scheme}_output" ] ) ? $field[ "{$scheme}_output" ] : array();
			$field['js_vars']        = isset( $field[ "{$scheme}_js_vars" ] ) ? $field[ "{$scheme}_js_vars" ] : array();

			// Only continue if field dependencies are met.
			if ( ! empty( $field['required'] ) ) {
				$valid = true;

				foreach ( $field['required'] as $requirement ) {
					if ( isset( $requirement['setting'] ) && isset( $requirement['value'] ) && isset( $requirement['operator'] ) ) {
						$controller_value = Kirki_Values::get_value( $field['kirki_config'], $requirement['setting'] );
						if ( ! Kirki_Helper::compare_values( $controller_value, $requirement['value'], $requirement['operator'] ) ) {
							$valid = false;
						}
					}
				}

				if ( ! $valid ) {
					continue;
				}
			}

			// Only continue if $field['output'] is set.
			if ( isset( $field['output'] ) && ! empty( $field['output'] ) ) {
				$css = Kirki_Helper::array_replace_recursive( $css, Kirki_Modules_CSS_Generator::css( $field ) );
			}
		}

		if ( is_array( $css ) ) {
			return Kirki_Modules_CSS_Generator::styles_parse( Kirki_Modules_CSS_Generator::add_prefixes( $css ) );
		}
	}
}
