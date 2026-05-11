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

