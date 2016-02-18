<?php

/**
 * This file is part of graze/:package-name.
 *
 * Copyright (c) :year Nature Delivered Ltd. <https://www.graze.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license https://github.com/graze/package-name/blob/master/LICENSE.md
 * @link https://github.com/graze/package-name
 */

namespace Graze\Skeleton\Test\Functional;

use Graze\Skeleton\Test\ExampleTestCase;

class ExampleFunctionalTest extends ExampleTestCase
{
    public function testFileExists()
    {
        static::assertTrue(file_exists('ExampleFunctionalTest.php'));
    }
}
