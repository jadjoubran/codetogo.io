<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'how-to' => [
            'path' => 'how-to-{filename}-in-javascript',
            'section' => 'content',
            'question' => function ($page) {
                return str_replace('-', ' ', $page->getFilename());
            },
        ],
    ],
];
