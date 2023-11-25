<?php
/*
 *   Jamshidbek Akhlidinov
 *   25 - 11 2023 10:38:44
 *   https://github.com/JamshidbekAkhlidinov
 */

return [
    'plugins' => [
        'anchor', 'charmap', 'code', 'help', 'hr',
        'image', 'link', 'lists', 'media', 'paste',
        'searchreplace', 'table',
    ],
    'height' => 300,
    'convert_urls' => false,
    'element_format' => 'html',
    'image_caption' => true,
    'keep_styles' => false,
    'paste_block_drop' => true,
    'table_default_attributes' => new yii\web\JsExpression('{}'),
    'table_default_styles' => new yii\web\JsExpression('{}'),
    'invalid_elements' => 'acronym,font,center,nobr,strike,noembed,script,noscript',
    'extended_valid_elements' => 'strong/b,em/i,table[style]',
    // elFinder file manager https://github.com/alexantr/yii2-elfinder
//    'file_picker_callback' => alexantr\elfinder\TinyMCE::getFilePickerCallback(['elfinder/tinymce']),
];