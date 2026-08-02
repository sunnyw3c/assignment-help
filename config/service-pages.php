<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Canonical public service pages
    |--------------------------------------------------------------------------
    |
    | Database slugs identify service records; they do not define public URLs.
    | Named Laravel routes are the single source of truth for public links.
    |
    */
    'canonical_routes' => [
        'essay-writing' => 'services.essay-writing.index',
        'research-paper' => 'services.research-paper.index',
        'homework-help' => 'services.homework-help.index',
        'lab-report' => 'services.lab-report.index',
        'case-study' => 'services.case-study.index',
        'literature-review' => 'services.literature-review.index',
        'presentation-design' => 'services.presentation-design.index',
        'proofreading-editing' => 'services.proofreading-editing.index',
        'math-problem-solving' => 'services.homework-help.math',
        'law-assignment' => 'services.law-assignment.index',
    ],

    'blocked_slugs' => [
        'thesis-dissertation',
    ],
];
