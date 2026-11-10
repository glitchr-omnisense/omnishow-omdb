# Changelog

## Unreleased (1.x)

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
