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


