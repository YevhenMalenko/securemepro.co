<?php

function notificationx_builder_args() {
    return array(
        'id'           => 'notificationx_metabox_wrapper',
        'title'        => __('NotificationX', 'notificationx'),
        'object_types' => array( 'notificationx' ),
        'context'      => 'normal',
        'priority'     => 'high',
        'show_header'  => false,
        'tabnumber'    => true,
        'layout'       => 'horizontal',
        'tabs'         => apply_filters('nx_builder_tabs', array(
            'source_tab' => array(
                'title'         => __('Source', 'notificationx'),
                'icon'          => 'database.svg',
                'sections'      => array(
                    'config'        => array(
                        'title'             => __('Select Source', 'notificationx'),
                        'fields'            => array(
                            'display_type'  => array(
                                'type'         => 'theme',
                                'type_content' => 'text',
                                'inner_title'  => __('Notification Type' , 'notificationx'),
                                'default'      => 'comments',
                                'options'      => NotificationX_Helper::notification_types(),
                                'dependency'   => array(
                                    'comments'       => NotificationX_ToggleFields::comments(),
                                    'press_bar'      => NotificationX_Helper::press_bar_toggle_data(),
                                    'conversions'    => NotificationX_ToggleFields::conversions(),
                                    'reviews'        => NotificationX_ToggleFields::reviews(),
                                    'download_stats' => NotificationX_ToggleFields::stats(),
                                ),
                                'hide' => NotificationX_Helper::hide_data( 'display_types' ),
                                'priority' => 50
                            ),
                            'reviews_source'  => apply_filters('nx_reviews_source', array(
                                'type'     => 'theme',
                                'inner_title'    => __('Source' , 'notificationx'),
                                'default'  => 'wp_reviews',
                                'options'  => NotificationX_Helper::reviews_source(),
                                'priority' => 51,
                            )),
                            'stats_source'  => apply_filters('nx_stats_source', array(
                                'type'     => 'theme',
                                'inner_title'    => __('Source' , 'notificationx'),
                                'default'  => 'wp_stats',
                                'options'  => NotificationX_Helper::stats_source(),
                                'priority' => 52,
                            )),
                            'comments_source'  => apply_filters('nx_comments_source', array(
                                'type'     => 'theme',
                                'inner_title'    => __('Source' , 'notificationx'),
                                'default'  => 'wp_comments',
                                'options'  => NotificationX_Helper::comments_source(),
                                'priority' => 53,
                            )),
                            'conversion_from'  => array(
                                'type'     => 'theme',
                                'inner_title'    => __('Source' , 'notificationx'),
                                'default'  => 'woocommerce',
                                'options'  => NotificationX_Helper::conversion_from(),
                                'priority' => 60,
                                'dependency' => array(
                                    'woocommerce' => NotificationX_ToggleFields::woocommerce(),
                                    'edd' => NotificationX_ToggleFields::edd()
                                ),
                                'hide' => array(
                                    'woocommerce' => NotificationX_ToggleFields::woocommerce_hide(),
                                    'edd' => NotificationX_ToggleFields::edd_hide()
                                ),
                            ),
                            'press_content' => array(
                                'type'     => 'editor',
                                'label'    => __('Content' , 'notificationx'),
                                'priority' => 70,
                            ),
                        ),
                    ),
                )
            ),
            'design_tab' => array(
                'title'      => __('Design', 'notificationx'),
                'icon'       => 'magic-wand.svg',
                'sections'   => array(
                    'bar_themes' => array(
                        'title'      => __('Themes', 'notificationx'),
                        'priority' => 3,
                        'fields'   => array(
                            'bar_theme' => array(
                                'type'      => 'theme',
                                'priority'	=> 5,
                                'default'	=> 'theme-one',
                                'options'   => NotificationX_Helper::bar_colored_themes(),
                            ),
                        )
                    ),
                    'comment_themes' => array(
                        'title'      => __('Comments Themes', 'notificationx'),
                        'priority' => 4,
                        'fields'   => array(
                            'comment_theme' => array(
                                'type'      => 'theme',
                                'priority'	=> 5,
                                'default'	=> 'theme-one',
                                'options'   => NotificationX_Helper::comment_colored_themes(),
                            ),
                        )
                    ),
                    'themes' => array(
                        'title'      => __('Themes', 'notificationx'),
                        'priority' => 5,
                        'fields'   => array(
                            'theme' => array(
                                'type'      => 'theme',
                                'priority'	=> 5,
                                'default'	=> 'theme-one',
                                'options'   => NotificationX_Helper::colored_themes(),
                            ),
                        )
                    ),
                )
            ),
            'display_tab' => array(
                'title'         => __('Display', 'notificationx'),
                'icon'          => 'screen.svg',
                'sections'      => array(
                    'appearance'        => array(
                        'title'    => __('Appearance', 'notificationx'),
                        'priority' => 10,
                        'fields'   => array(
                            'pressbar_position'  => array(
                                'type'      => 'select',
                                'label'     => __('Position' , 'notificationx'),
                                'priority'	=> 40,
                                'options'   => [
                                    'top'       => __('Top' , 'notificationx'),
                                    'bottom'    => __('Bottom' , 'notificationx'),
                                ],
                            ),
                            'conversion_position'  => array(
                                'type'      => 'select',
                                'label'     => __('Position' , 'notificationx'),
                                'priority'	=> 50,
                                'options'   => [
                                    'bottom_left'       => __('Bottom Left' , 'notificationx'),
                                    'bottom_right'      => __('Bottom Right' , 'notificationx'),
                                ],
                            ),
                        ),
                    ),
                    'visibility'        => array(
                        'title'    => __('Visibility', 'notificationx'),
                        'priority' => 1000,
                        'fields'   => array(
                            'show_on'  => array(
                                'type'      => 'select',
                                'label'     => __('Show On' , 'notificationx'),
                                'priority'	=> 10,
                                'options'   => [
                                    'everywhere'       => __('Show Everywhere' , 'notificationx'),
                                    'on_selected'      => __('Show On Selected' , 'notificationx'),
                                    'hide_on_selected' => __('Hide On Selected' , 'notificationx'),
                                ],
                                'hide' => [
                                    'everywhere' => [ 
                                        'fields' => [ 'all_locations' ]
                                    ],
                                ],
                                'dependency' => array(
                                    'on_selected' => [
                                        'fields' => [ 'all_locations' ]
                                    ],
                                    'hide_on_selected' => [
                                        'fields' => [ 'all_locations' ]
                                    ]
                                ),
                            ),
                            'all_locations'  => array(
                                'type'      => 'select',
                                'label'     => __('Locations' , 'notificationx'),
                                'priority'	=> 20,
                                'options'   => NotificationX_Locations::locations(),
                            ),
                            'show_on_display'  => array(
                                'type'      => 'select',
                                'label'     => __('Display For' , 'notificationx'),
                                'priority'	=> 200,
                                'options'   => [
                                    'always'          => __('Everyone' , 'notificationx'),
                                    'logged_out_user' => __('Logged Out User' , 'notificationx'),
                                    'logged_in_user'  => __('Logged In User' , 'notificationx'),
                                ],
                            ),
                            'show_notification_image'  => array(
                                'type'           => 'select',
                                'builder_hidden' => true,
                                'label'          => __('Image' , 'notificationx'),
                                'priority'       => 201,
                                'defualt'        => 'product_image',
                                'options'        => apply_filters('nx_show_image_options', array(
                                    'product_image' => __('Product Image' , 'notificationx'),
                                    'gravatar'      => __('Gravatar' , 'notificationx'),
                                    'none'          => __('None' , 'notificationx'),
                                )),
                            ),
                        ),
                    ),
                )
            ),
            'finalize_tab' => array(
                'title'         => __('Finalize', 'notificationx'),
                'icon'          => 'cog.svg',
                'sections'      => array(
                )
            ),
        ))
    );
}