<?php

add_filter('fl_builder_custom_fields', 'Custom_Cube_fields');
add_action('init', 'Load_module');

/**
 * Load_module 
 * 
 * @return void
 */
function Load_module()
{
    if (class_exists('FLBuilder')) {
        // Custom modules here.
        include_once 'Waves.php';

        /**
         * Register module 
         *
         * Custom module Waves CSS
         */
        FLBuilder::register_module('Waves', array(
            'general' => array(
                'title'    => esc_html__('Waves module', 'wds-bb-custom-field'),
                'sections' => array(
                    'general' => array(
                        'fields' => array(
                            'title'      => array(
                                'type'        => 'text',
                                'label'       => esc_html__('Título', 'wds-bb-custom-field'),
                                'default'     => '',
                                'placeholder' => esc_html__('Enter a title or leave blank to omit', 'wds-bb-custom-field'),
                            ),
                        ),
                    ),
                ),
            ),
        ));
    }
}

/**
 * Custom_Cube_fields 
 * 
 * @return void
 */
function Custom_Cube_fields($fields)
{
    $fields['title-field'] =  __DIR__ . '/fields/title.php';
    return $fields;
}
