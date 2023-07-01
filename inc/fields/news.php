<?php

acf_add_local_field_group([
    'key' => 'news_fields',
    'name' => 'newsComponents',
    'title' => 'News Details',
    'style' => 'standard',
    'position' => 'normal',
    'fields' => [
        [
            'key' => 'news_image_group',
            'label' => __('Image', 'flynt'),
            'name' => 'news_image',
            'type' => 'group',
            'layout' => 'block',
            'required' => 0,
            'sub_fields' => [
                [
                    'key' => 'news_image_desktop',
                    'label' => __('Desktop', 'flynt'),
                    'name' => 'desktop',
                    'type' => 'group',
                    'layout' => 'block',
                    'sub_fields' => [
                        [
                            'key' => 'news_image_desktop_one_x',
                            'label' => __('@1x', 'flynt'),
                            'name' => 'one_x',
                            'type' => 'group',
                            'layout' => 'table',
                            'sub_fields' => [
                                [
                                    'key' => 'news_image_desktop_one_x_old_format',
                                    'label' => __('PNG/JPEG/SVG', 'flynt'),
                                    'name' => 'old_format',
                                    'type' => 'image',
                                    'required' => 1,
                                    'preview_size' => 'thumbnail',
                                    'return_format' => 'array',
                                    'library' => 'all',
                                    'min_width' => 0,
                                    'min_height' => 0,
                                    'min_size' => 0,
                                    'max_width' => 2000,
                                    'max_height' => '',
                                    'max_size' => '1',
                                    'mime_types' => 'png,jpg,jpeg,svg',
                                ],
                                [
                                    'key' => 'news_image_desktop_one_x_avif',
                                    'label' => __('AVIF', 'flynt'),
                                    'name' => 'avif',
                                    'type' => 'image',
                                    'required' => 0,
                                    'preview_size' => 'thumbnail',
                                    'return_format' => 'array',
                                    'library' => 'all',
                                    'min_width' => 0,
                                    'min_height' => 0,
                                    'min_size' => 0,
                                    'max_width' => 2000,
                                    'max_height' => '',
                                    'max_size' => '1',
                                    'mime_types' => 'avif',
                                ],
                            ],
                        ],
                        [
                            'key' => 'news_image_desktop_two_x',
                            'label' => __('@2x', 'flynt'),
                            'name' => 'two_x',
                            'type' => 'group',
                            'layout' => 'table',
                            'sub_fields' => [
                                [
                                    'key' => 'news_image_desktop_two_x_old_format',
                                    'label' => __('PNG/JPEG/SVG', 'flynt'),
                                    'name' => 'old_format',
                                    'type' => 'image',
                                    'required' => 0,
                                    'preview_size' => 'thumbnail',
                                    'return_format' => 'array',
                                    'library' => 'all',
                                    'min_width' => 0,
                                    'min_height' => 0,
                                    'min_size' => 0,
                                    'max_width' => 2000,
                                    'max_height' => '',
                                    'max_size' => '1',
                                    'mime_types' => 'png,jpg,jpeg,svg',
                                ],
                                [
                                    'key' => 'news_image_desktop_two_x_avif',
                                    'label' => __('AVIF', 'flynt'),
                                    'name' => 'avif',
                                    'type' => 'image',
                                    'required' => 0,
                                    'preview_size' => 'thumbnail',
                                    'return_format' => 'array',
                                    'library' => 'all',
                                    'min_width' => 0,
                                    'min_height' => 0,
                                    'min_size' => 0,
                                    'max_width' => 2000,
                                    'max_height' => '',
                                    'max_size' => '1',
                                    'mime_types' => 'avif',
                                ],
                            ],
                        ],
                    ],
                    'wrapper' => [
                        'width' => '50',
                    ],
                ],
                [
                    'key' => 'news_image_mobile',
                    'label' => __('Mobile', 'flynt'),
                    'name' => 'mobile',
                    'type' => 'group',
                    'layout' => 'block',
                    'sub_fields' => [
                        [
                            'key' => 'news_image_mobile_one_x',
                            'label' => __('@1x', 'flynt'),
                            'name' => 'one_x',
                            'type' => 'group',
                            'layout' => 'table',
                            'sub_fields' => [
                                [
                                    'key' => 'news_image_mobile_one_x_old_format',
                                    'label' => __('PNG/JPEG/SVG', 'flynt'),
                                    'name' => 'old_format',
                                    'type' => 'image',
                                    'required' => 0,
                                    'preview_size' => 'thumbnail',
                                    'return_format' => 'array',
                                    'library' => 'all',
                                    'min_width' => 0,
                                    'min_height' => 0,
                                    'min_size' => 0,
                                    'max_width' => 2000,
                                    'max_height' => '',
                                    'max_size' => '1',
                                    'mime_types' => 'png,jpg,jpeg,svg',
                                ],
                                [
                                    'key' => 'news_image_mobile_one_x_avif',
                                    'label' => __('AVIF', 'flynt'),
                                    'name' => 'avif',
                                    'type' => 'image',
                                    'required' => 0,
                                    'preview_size' => 'thumbnail',
                                    'return_format' => 'array',
                                    'library' => 'all',
                                    'min_width' => 0,
                                    'min_height' => 0,
                                    'min_size' => 0,
                                    'max_width' => 2000,
                                    'max_height' => '',
                                    'max_size' => '1',
                                    'mime_types' => 'avif',
                                ],
                            ],
                        ],
                        [
                            'key' => 'news_image_mobile_two_x',
                            'label' => __('@2x', 'flynt'),
                            'name' => 'two_x',
                            'type' => 'group',
                            'layout' => 'table',
                            'sub_fields' => [
                                [
                                    'key' => 'news_image_mobile_two_x_old_format',
                                    'label' => __('PNG/JPEG/SVG', 'flynt'),
                                    'name' => 'old_format',
                                    'type' => 'image',
                                    'required' => 0,
                                    'preview_size' => 'thumbnail',
                                    'return_format' => 'array',
                                    'library' => 'all',
                                    'min_width' => 0,
                                    'min_height' => 0,
                                    'min_size' => 0,
                                    'max_width' => 2000,
                                    'max_height' => '',
                                    'max_size' => '1',
                                    'mime_types' => 'png,jpg,jpeg,svg',
                                ],
                                [
                                    'key' => 'news_image_mobile_two_x_avif',
                                    'label' => __('AVIF', 'flynt'),
                                    'name' => 'avif',
                                    'type' => 'image',
                                    'required' => 0,
                                    'preview_size' => 'thumbnail',
                                    'return_format' => 'array',
                                    'library' => 'all',
                                    'min_width' => 0,
                                    'min_height' => 0,
                                    'min_size' => 0,
                                    'max_width' => 2000,
                                    'max_height' => '',
                                    'max_size' => '1',
                                    'mime_types' => 'avif',
                                ],
                            ],
                        ],
                    ],
                    'wrapper' => [
                        'width' => '50',
                    ],
                ],
            ],
        ],
        [
            'key' => 'news_url',
            'label' => __('News URL', 'flynt'),
            'name' => 'url',
            'type' => 'url',
            'required' => 1,
        ],
        [
            'key' => 'news_source',
            'label' => __('Source', 'flynt'),
            'name' => 'source',
            'type' => 'text',
            'required' => 1,
        ],
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'news',
            ],
        ],
    ],
]);
