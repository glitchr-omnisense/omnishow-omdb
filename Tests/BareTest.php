<?php

namespace Omnishow\Omdb\Tests;

use Omnishow\Testing\BareTestCase;
use Omnishow\Omdb\OmdbProvider;

/** omnishow/omdb's classes load with omnisense/omnishow and Symfony's HTTP client contracts alone. */
final class BareTest extends BareTestCase
{
    protected static function entryClass(): string
    {
        return OmdbProvider::class;
    }

    protected static function requiredPackages(): array
    {
        return ['symfony/http-client-contracts'];
    }
}
