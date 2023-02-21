<?php
/**
 * Waves Module
 *
 * Custom Waves Module
 * @package test
 * @author pedro henrique
 * @abstract
 */
class Waves extends FLBuilderModule 
{
    
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(
            array(
                    'name'            => __( 'Custom Landing Page', 'fl-builder' ),
                    'description'     => __( 'A totally Custom Landing Page!', 'fl-builder' ),
                    'group'           => __( 'My Group', 'fl-builder' ),
                    'category'        => __( 'My Category', 'fl-builder' ),
                    'dir'             => MY_MODULES_DIR . '/Waves/',
                    'url'             => MY_MODULES_URL . '/Waves/',
                    'icon'            => 'button.svg',
                    'editor_export'   => true, // Defaults to true and can be omitted.
                    'enabled'         => true, // Defaults to true and can be omitted.
                    'partial_refresh' => false, // Defaults to false and can be omitted.
            )
        );
    }
}