<?php

declare(strict_types=1);

function current_path(): string
{
    $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
    $path = parse_url($requestUri, PHP_URL_PATH);

    return $path ?: '/';
}

function is_route(string $route): bool
{
    return current_path() === $route;
}

