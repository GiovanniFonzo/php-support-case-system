# PHP Technical Support Case System

A PHP fundamentals project that simulates a technical support case/ticketing system inspired by Salesforce Cases and web form support workflows.

## Project Goal

The goal of this project is to build a small support case management system while strengthening PHP fundamentals before moving into Laravel and MVC architecture.

This project is part of a broader portfolio roadmap:

1. prod-platform — production monitoring platform
2. Flask Blogging App — API/database application monitored by prod-platform
3. PHP Technical Support Case System — support workflow application
4. Future Laravel/MVC project

## Current Phase

Phase 1 — PHP basics and routing simulation.

## Stack

- PHP
- PHP built-in development server
- HTML
- JSON health endpoint
- Future local JSON persistence

## Planned Features

- Basic PHP routing simulation
- Support case data model
- Create and list support cases
- Case status workflow
- Basic persistence using JSON files
- Simple authentication/admin role
- UI/forms
- Health endpoint for monitoring
- Documentation and CV-ready project story

## Routes

| Route | Purpose |
|---|---|
| `/` | Home page |
| `/cases` | Case list placeholder |
| `/cases/create` | Case creation placeholder |
| `/health` | JSON health check endpoint |

## Run Locally

```bash
php -S localhost:8000 -t public
```

Open:

```text
http://localhost:8000
```

## Health Check

```bash
curl http://localhost:8000/health
```

Expected response:

```json
{
  "service": "php-support-case-system",
  "status": "ok",
  "version": "0.1.0",
  "phase": "phase-1-routing-simulation"
}
```

## Portfolio Angle

This project demonstrates PHP fundamentals, backend request handling, support workflow modelling, and preparation for Laravel/MVC development.

## Current Features

- Small public entry point through `public/index.php`
- Reusable helper functions in `src/helpers.php`
- Basic route handling through `src/routes.php`
- Home route at `/`
- Support cases placeholder route at `/cases`
- Create case placeholder route at `/cases/create`
- JSON health check route at `/health`
- Basic 404 response for unknown routes




## Current Routes

The application currently supports these basic routes:

| Route | View File | Purpose |
|---|---|---|
| `/` | `src/views/home.php` | Displays the home page |
| `/cases` | `src/views/cases-index.php` | Displays the case list placeholder |
| Any invalid route | `src/views/404.php` | Displays a 404 page and returns HTTP 404 |

## Current Project Structure

    public/index.php
    src/helpers.php
    src/routes.php
    src/views/home.php
    src/views/cases-index.php
    src/views/404.php
    docs/runbook.md
    storage/

The project now separates routing logic from view rendering:

- `public/index.php` is the front controller.
- `src/helpers.php` contains helper functions such as `current_path()` and `is_route()`.
- `src/routes.php` decides which view to load.
- `src/views/` contains the page templates displayed in the browser.


## Phase 2: Support Case Data Model

The project now includes a basic support case data model:

    src/models/SupportCase.php

This file currently provides a `sample_cases()` function that returns sample support case records.

Each support case includes:

- `id`
- `subject`
- `description`
- `status`
- `priority`
- `created_at`

The `/cases` route now loads the support case model, calls `sample_cases()`, stores the result in `$cases`, and passes that data to the cases index view.

Current data flow:

    User visits /cases
    src/routes.php loads src/models/SupportCase.php
    sample_cases() returns sample case data
    $cases stores the returned data
    src/views/cases-index.php loops through $cases
    Browser displays the support case list

The cases view uses `htmlspecialchars()` when displaying case values so that text output is safer for HTML rendering.
