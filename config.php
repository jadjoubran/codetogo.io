<?php

return [
    'baseUrl' => '',
    'production' => true,
    'collections' => [
        'usecases' => [
            'path' => 'how-to-{filename}-in-javascript',
            'section' => 'content',
            'question' => function ($page) {
                $question = str_replace('-', ' ', $page->getFilename());
                return "How to $question in JavaScript";
            },
            'url' => function ($page) {
                return 'how-to-'.$page->getFilename().'-in-javascript';
            }
        ],
    ],
];
