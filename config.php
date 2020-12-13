<?php

return [
    'baseUrl' => '',
    'production' => true,
    'collections' => [
        'jsusecases' => [
            'type' => 'javascript',
            'formatted_type' => 'JavaScript',
            'path' => 'how-to-{filename}-in-javascript',
            'section' => 'content',
            'question' => function ($page) {
                $question = str_replace('-', ' ', $page->getFilename());
                return "How to $question in JavaScript";
            },
            'url' => function ($page) {
                return 'how-to-'.$page->getFilename().'-in-javascript';
            },
            'learnbtn' => '<div style="text-align: center"><a href="https://learnjavascript.online/?utm_source=codetogo.io" target="_blank" rel="noopener" class="learn-btn learn-javascript">Learn JavaScript step by step</a></div>'
        ],
        'reactusecases' => [
            'type' => 'react',
            'formatted_type' => 'React',
            'path' => 'how-to-{filename}-in-react',
            'section' => 'content',
            'question' => function ($page) {
                $question = str_replace('-', ' ', $page->getFilename());
                return "How to $question in React";
            },
            'url' => function ($page) {
                return 'how-to-'.$page->getFilename().'-in-react';
            },
            'learnbtn' => '<a href="https://react-tutorial.app/?utm_source=codetogo.io" target="_blank" rel="noopener" class="learn-btn learn-react">Step by step React Tutorial</a>'
        ],
    ],
];
