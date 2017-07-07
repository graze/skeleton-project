<?php

/**
 * This file is part of graze/__package-name__.
 *
 * Copyright (c) __year__ Nature Delivered Ltd. <https://www.graze.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license https://github.com/graze/__package-name__/blob/master/LICENSE.md
 * @link https://github.com/graze/__package-name__
 */

namespace Graze\Skeleton\Test\Integration;

use Graze\Skeleton\Test\ExampleTestCase;

class ExampleIntegrationTest extends ExampleTestCase
{
    public function testFileExists()
    {
        static::assertTrue(file_exists(__DIR__ . '/ExampleIntegrationTest.php'));
    }
}
