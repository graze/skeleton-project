<?php

/**
 * This file is part of graze/skeleton-project.
 *
 * Copyright (c) __year__ Nature Delivered Ltd. <https://www.graze.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license https://github.com/graze/skeleton-project/blob/master/LICENSE.md
 * @link https://github.com/graze/skeleton-project
 */

namespace Graze\Skeleton\Test\Integration;

use Graze\Skeleton\Test\TestCase;

class ExampleIntegrationTest extends TestCase
{
    public function testFileExists()
    {
        static::assertTrue(file_exists(__DIR__ . '/ExampleIntegrationTest.php'));
    }
}
