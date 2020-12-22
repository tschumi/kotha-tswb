<?php

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function kotha_tswb_register_theme_customizer( $wp_customize ) {
 
    // Disable preloader    
    $wp_customize->add_setting(
        'kotha_preloader',
        array(
            'default'     => true,
            'sanitize_callback' => 'esc_attr'
        )
    );
		
    // Set our colors as default
    $wp_customize->add_setting(
        'kotha_theme_color',
        array(
            'default'     => '#ff7f2a',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_setting(
        'kotha_anchor_color',
        array(
            'default'     => '#ff7f2a',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_setting(
        'kotha_anchor_hover_color',
        array(
            'default'     => '#ff7f2a',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'kotha_theme_color',
            array(
                'label'      => __('Theme Color', 'kotha'),
                'section'    => 'colors',
                'settings'   => 'kotha_theme_color',
                'priority'	 => 1
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'kotha_anchor_color',
            array(
                'label'      => __('Anchor Color', 'kotha'),
                'section'    => 'colors',
                'settings'   => 'kotha_anchor_color',
                'priority'	 => 2
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'kotha_anchor_hover_color',
            array(
                'label'      => __('Anchor Hover Color', 'kotha'),
                'section'    => 'colors',
                'settings'   => 'kotha_anchor_hover_color',
                'priority'	 => 3
            )
        )
    );
	
}
add_action( 'customize_register', 'kotha_tswb_register_theme_customizer', 11 );
?>