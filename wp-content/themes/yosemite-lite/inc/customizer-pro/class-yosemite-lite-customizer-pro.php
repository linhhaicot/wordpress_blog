<?php
/**
 * Handles the "Go Pro" section in the Customizer.
 *
 * @package Yosemite Lite
 */

/**
 * The customizer pro class.
 */
final class Yosemite_Lite_Customizer_Pro {

	/**
	 * Pro Version.
	 *
	 * @var string Pro version slug.
	 */
	private $pro_slug;

	/**
	 * Theme Name.
	 *
	 * @var string Theme Name.
	 */
	private $name;

	/**
	 * UTM link.
	 *
	 * @var string UTM link.
	 */
	private $utm;

	/**
	 * Sets up initial actions.
	 */
	public function init() {

		$theme          = wp_get_theme();
		$slug           = $theme->template;
		$this->name     = $theme->name;
		$this->pro_slug = str_replace( '-lite', '', $slug );
		$this->utm      = '?utm_source=WordPress&utm_medium=link&utm_campaign=' . $slug;

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @param  WP_Customize_Manager $manager WP_Customize_Manager instance.
	 */
	public function sections( $manager ) {
		// Load custom sections.
		require get_template_directory() . '/inc/customizer-pro/class-yosemite-lite-customizer-section-pro.php';

		// Register custom section types.
		$manager->register_section_type( 'Yosemite_Lite_Customizer_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Yosemite_Lite_Customizer_Section_Pro(
				$manager,
				'yosemite-lite-pro',
				array(
					'section_type' => 'pro',
					'title'        => esc_html__( 'Ready For More?', 'yosemite-lite' ),
					'pro_text'     => esc_html__( 'Upgrade To PRO', 'yosemite-lite' ),
					'pro_url'      => "https://gretathemes.com/wordpress-themes/{$this->pro_slug}",
					'priority'     => 99999999,
				)
			)
		);

		$manager->add_section(
			new Yosemite_Lite_Customizer_Section_Pro(
				$manager,
				'yosemite-lite-doc',
				array(
					'section_type' => 'doc',
					'doc_title'    => esc_html__( 'Need Some Help?', 'yosemite-lite' ),
					'doc_text'     => esc_html__( 'Need help setting up your site?', 'yosemite-lite' ),
					'doc_url'      => "https://gretathemes.com/docs/{$this->pro_slug}",
					'priority'     => 0,
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 */
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'yosemite-lite-customize-pro-script', get_template_directory_uri() . '/inc/customizer-pro/customize-controls.js', array( 'customize-controls' ) );
		wp_enqueue_style( 'yosemite-lite-customize-pro-style', get_template_directory_uri() . '/inc/customizer-pro/customize-controls.css' );
	}
}
