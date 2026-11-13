# Changelog

## [Unreleased]

## [1.0.0] - 2026-11-13

The first stable release.

### Release

- Requires `omnisense/contracts: ^1.0`, `omnisense/omnishow: ^1.0`: stable versions, so `composer
  require omnishow/omdb` installs in a project at Composer's default minimum-stability.
  `extra.branch-alias` names 1.x (`1.x-dev`); the CI (`.github/workflows/ci.yml`, glitchr-studio/ci's
  php-package.yml) is callable, and `release.yml` runs it on a tag before glitchr-studio/ci's
  php-release.yml.

### Added
- OMDb's usage policy declared as data in `policy.json` (omnisense/contracts' schema, read on
  2026-11-10): 1,000 calls a day per key, commercial use, storage and redistribution forbidden, CC
  BY-NC 4.0. `OmdbProvider` implements `DeclaresUsagePolicyInterface`, its Capabilities carry the
  policy, the factory gives its JsonClient the provider's Backoff (a 429 and its `Retry-After` hold
  every call). `composer.json` names the policy (`extra.omnisense.policy`) and requires
  `omnisense/contracts`.

### Fixed
- OMDb's `"Error": "Too many results."` (a search on a very common word) is an empty search,
  `[]`, where it was a `ProviderException`.
