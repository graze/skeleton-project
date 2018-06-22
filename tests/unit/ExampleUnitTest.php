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
 * @link    https://github.com/graze/skeleton-project
 */

namespace Graze\Skeleton\Test\Unit;

use Graze\Skeleton\Skeleton;
use Graze\Skeleton\Test\TestCase;

class ExampleUnitTest extends TestCase
{
    public function testTrueIsTrue()
    {
        static::assertTrue(true);
    }

    public function testSinging()
    {
        $skeleton = new Skeleton('big', 'small', 'dog');

        static::assertEquals(
            'In a dark, dark town there was a dark, dark street
            and in the dark, dark street there was a dark, dark house,
            and in the dark, dark house there were some dark, dark stairs
            and down the dark, dark stairs there was a dark, dark cellar
            and in the dark dark cellar, three skeletons lived!',
            $skeleton->sing()
        );
    }
}
