# PHP Technical Support Case System Runbook

## Purpose

This runbook documents how to run, validate, and troubleshoot the PHP Technical Support Case System.

## Project

Service name:

```text
php-support-case-system
```

Current phase:

```text
Phase 1 — PHP basics and routing simulation
```

## Local Development

Start the PHP development server from the project root:

```bash
php -S localhost:8000 -t public
```

## Validation Commands

Check the home page:

```bash
curl http://localhost:8000/
```

Check the case list route:

```bash
curl http://localhost:8000/cases
```

Check the case creation route:

```bash
curl http://localhost:8000/cases/create
```

Check the health endpoint:

```bash
curl http://localhost:8000/health
```

Check a missing route:

```bash
curl -i http://localhost:8000/not-real
```

Expected result:

```text
HTTP/1.1 404 Not Found
```

## Troubleshooting

### PHP command not found

Check whether PHP is installed:

```bash
php -v
```

If PHP is missing, install it before continuing.

### Port already in use

If port 8000 is busy, use another port:

```bash
php -S localhost:8001 -t public
```

### Page not found unexpectedly

Make sure the server was started with the correct document root:

```bash
php -S localhost:8000 -t public
```

Do not run the server from inside the `public` folder for this project structure.

## Phase 1.2 — Route helper and cleaner route handling

### Goal

Refactored routing so `public/index.php` stays small and route decisions are handled through `src/routes.php`.

### Files changed

- `public/index.php`
- `src/helpers.php`
- `src/routes.php`

### Helper functions

```php
current_path()
is_route(string $route)
```

### Routes validated

| Route | Purpose | Result |
|---|---|---|
| `/` | Home page | Working |
| `/cases` | Support cases placeholder | Working |
| `/cases/create` | Create case placeholder | Working |
| `/health` | JSON health check | Working |
| Unknown route | 404 response | Working |

### Validation commands

```bash
php -S localhost:8000 -t public
curl http://localhost:8000/
curl http://localhost:8000/cases
curl http://localhost:8000/cases/create
curl http://localhost:8000/health
curl -i http://localhost:8000/not-real
```

### Validation result

The app returned the expected HTML responses for `/`, `/cases`, and `/cases/create`.

The `/health` endpoint returned JSON:

```json
{
  "service": "php-support-case-system",
  "status": "ok",
  "version": "0.1.0",
  "phase": "phase-1-routing-simulation"
}
```

The unknown route returned:

```text
HTTP/1.1 404 Not Found
```

### Notes

`public/index.php` now acts only as the application entry point.

`src/helpers.php` contains reusable helper functions for route matching.

`src/routes.php` controls route decisions and responses.




## Phase 1.3 Route/View Validation

Run the PHP development server from the project root:

    php -S localhost:8000 -t public

Validate the home route:

    curl http://localhost:8000/

Expected result includes:

    <h1>PHP Support Case System</h1>

Validate the cases route:

    curl http://localhost:8000/cases

Expected result includes:

    <h1>Cases</h1>

Validate an invalid route:

    curl -i http://localhost:8000/random

Expected result includes:

    HTTP/1.1 404 Not Found

The invalid route should load:

    src/views/404.php

This confirms that `src/routes.php` correctly sends known routes to their matching view files and sends unknown routes to the 404 view.
