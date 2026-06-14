<?php

if (is_route('/')) {
    require_once __DIR__ . '/views/home.php';
    exit;
}


if (is_route('/cases/new')) {
    require_once __DIR__ . '/views/cases-new.php';
    exit;
}


if (is_route('/cases') && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedCase = [
        'subject' => trim($_POST['subject'] ?? ''),
        'description' => trim($_POST['description'] ?? ''),
        'priority' => trim($_POST['priority'] ?? ''),
    ];

    $errors = [];

    if ($submittedCase['subject'] === '') {
        $errors[] = 'Subject is required.';
    }

    if ($submittedCase['description'] === '') {
        $errors[] = 'Description is required.';
    }

    if ($submittedCase['priority'] === '') {
        $errors[] = 'Priority is required.';
    }

    if (! empty($errors)) {
        require_once __DIR__ . '/views/cases-new.php';
        exit;
    }

    require_once __DIR__ . '/views/cases-created.php';
    exit;
}


if (is_route('/cases')) {
    require_once __DIR__ . '/models/SupportCase.php';

    $cases = all_cases();

    require_once __DIR__ . '/views/cases-index.php';
    exit;
}



http_response_code(404);
require_once __DIR__ . '/views/404.php';
exit;
