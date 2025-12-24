# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [v0.1.1] - 2025-12-24

### Added
- Initial project structure for PHP/MySQL architecture.
- `database/` directory for SQL schemas.
- `public/` directory for web server root.
- `.gemini/` folder for AI context and persona management.
- Documentation for cPanel and LAMP stack deployment in `README.md`.
- **Level 1 Mode:** Root `index.html` for standalone, client-side CSV menu display (no PHP required).
- **Admin Panel:** Basic dashboard structure at `public/admin/index.php`.
- **Sample Data:** Included `sample_products_crystal_shop.csv` for immediate testing.

### Changed
- Pivoted backend from Python/Flask to PHP/MySQL to support standard web hosting.
- Updated `CONTRIBUTING.md` with new development setup instructions.