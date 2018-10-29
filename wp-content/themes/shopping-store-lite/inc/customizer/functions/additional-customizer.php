<?php

//Single product listing section

$wp_customize->add_setting(
    'shopping_store_theme_options[single_product_show]',
    array(
        'default' => $shopping_store_setting['single_product_show'],
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'shopping_store_checkbox_integer',
    )
);
$wp_customize->add_control(new Shopping_Store_checkbox_Customize_Controls(
        $wp_customize, 'shopping_store_theme_options[single_product_show]',
        array(
            'label' => esc_html__('Show Product Listing Section In Homepage ? ', 'shopping-store-lite'),
            'section' => 'shopping_store_single_listing',
            'settings' => 'shopping_store_theme_options[single_product_show]',
            'priority' => 1,
        )
    )
);

$wp_customize->add_setting(
    'shopping_store_theme_options[single_product_woo]',
    array(
        'type'    => 'option',
        'sanitize_callback' => 'shopping_store_sanitize_select',
        'default' => $shopping_store_setting['single_product_woo'],

    )
);
$wp_customize->add_control(
    'shopping_store_theme_options[single_product_woo]',
    array(
        'label'   => esc_html__( 'Choose Product To Show', 'shopping-store-lite' ),
        'section' =>  'shopping_store_single_listing',
        'type'    => 'select',
        'choices' =>  array(
            'new-product'   => esc_html__('New Products','shopping-store-lite'),
            'sale'   => esc_html__('Sale Products','shopping-store-lite'),
            'feature'   => esc_html__('Feature Products','shopping-store-lite'),
            'total-sales'   => esc_html__('Maximum Sale Products','shopping-store-lite'),
        ),
        'settings' => 'shopping_store_theme_options[product_listing1_woo]',
    )
);