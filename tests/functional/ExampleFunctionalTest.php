<?php

namespace Graze\Skeleton\Test\Functional;

use Graze\Skeleton\Test\ExampleTestCase;

class ExampleFunctionalTest extends ExampleTestCase
{
    public function testFileExists()
    {
        static::assertTrue(file_exists('ExampleFunctionalTest.php'));
    }
}
