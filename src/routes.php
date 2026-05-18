<?php

declare(strict_types=1);

if (is_route('/')) {
    echo '<h1>PHP Technical Support Case System</h1>';
    echo '<p>Welcome to the support case system.</p>';
    echo '<ul>';
    echo '<li><a href="/cases">View Cases</a></li>';
    echo '<li><a href="/cases/create">Create Case</a></li>';
    echo '<li><a href="/health">Health Check</a></li>';
    echo '</ul>';
    exit;
}

if (is_route('/cases')) {
    echo '<h1>Support Cases</h1>';
    echo '<p>Case list will be built in a later phase.</p>';
    echo '<p><a href="/">Back home</a></p>';
    exit;
}

if (is_route('/cases/create')) {
    echo '<h1>Create Support Case</h1>';
    echo '<p>Case creation form will be built in a later phase.</p>';
    echo '<p><a href="/">Back home</a></p>';
    exit;
}

if (is_route('/health')) {
    header('Content-Type: application/json');

    echo json_encode([
        'service' => 'php-support-case-system',
        'status' => 'ok',
        'version' => '0.1.0',
        'phase' => 'phase-1-routing-simulation',
    ]);

    exit;
}

http_response_code(404);

echo '<h1>404 Not Found</h1>';
echo '<p>The requested page was not found.</p>';
echo '<p><a href="/">Back home</a></p>';

