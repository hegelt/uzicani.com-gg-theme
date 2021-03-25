<?php

return [
    "facebook" => [
        "type"   => "anomaly.field_type.url"
    ],
    "twitter" => [
        "type"   => "anomaly.field_type.url"
    ],
    "instagram" => [
        "type"   => "anomaly.field_type.url"
    ],
    "youtube" => [
        "type"   => "anomaly.field_type.url"
    ],
    "linked_in" => [
        "type"   => "anomaly.field_type.url"
    ],
    "horizontal_menu_categories" => [
        'type' => 'anomaly.field_type.checkboxes',
        'config' => [
            'handler' => 'Visiosoft\UzicaniTheme\SettingHandler\CategoriesOptions@handle'
        ],
    ],
    "choices_tabs_categories" => [
        'type' => 'anomaly.field_type.checkboxes',
        'config' => [
            "max"     => 6,
            'handler' => 'Visiosoft\UzicaniTheme\SettingHandler\CategoriesOptions@handle'
        ],
    ],
    "show_button_in_menu" => [
        'type' => 'anomaly.field_type.boolean',
        "config" => [
            "default_value" => 1,
        ]
    ],
    "menu_button_text" => [
        "type"   => "anomaly.field_type.text",
        "config" => [
            "default_value" => 'Novi Oglas',
        ],
    ],
    "menu_button_url" => [
        "type"   => "anomaly.field_type.url",
        "config" => [
            "default_value" => '/advs/create_adv'
        ]
    ],
    "menu_button_icon" => [
        "type"   => "anomaly.field_type.text",
        "config" => [
            "default_value" => 'fas fa-plus-circle'
        ]
    ],
    "logo" => [
        "type"   => "anomaly.field_type.file",
        "config" => [
            "folders" => ['images'],
        ]
    ],
    "favicon" => [
        "type" => "anomaly.field_type.file",
        "config" => [
            "folders" => ['favicon'],
            "mode" => "upload",
        ]
    ],
    "show_header_ad_area" => [
        'type' => 'anomaly.field_type.boolean',
        "config" => [
            "default_value" => 1,
        ]
    ],
    "header_ad_image" => [
        "type"   => "anomaly.field_type.file",
        "config" => [
            "folders" => ['images'],
        ]
    ],
    "header_ad_url" => [
        "type"   => "anomaly.field_type.url",
    ],
    "header_ad_background" => [
        "type"   => "anomaly.field_type.colorpicker",
        "config" => [
            "default_value" => '#61259e',
        ]
    ],
    "copyright_text_footer" => [
        "type" => "anomaly.field_type.text",
        "config" => [
            "default_value" => '© Copyright 2021 uzicani.com - powered by Hegelt',
        ],
    ],
    "view_all_cats_show" => [
        'type' => 'anomaly.field_type.boolean',
        "config" => [
            "default_value" => 1,
        ]
    ],
    "view_all_cats_text" => [
        "type"   => "anomaly.field_type.text",
        "config" => [
            "default_value" => 'Погледај све категорије',
        ],
    ],
    "view_all_cats_url" => [
        "type"   => "anomaly.field_type.url",
        "config" => [
            "default_value" => '/all-cats'
        ]
    ],
    "link_footer_title" => [
        'type' => 'anomaly.field_type.boolean',
        "config" => [
            "default_value" => 1,
        ]
    ],
];
