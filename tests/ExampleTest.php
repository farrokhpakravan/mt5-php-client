<?php

namespace Farrokhpakravan\Mt5PhpClient\Tests;

use Orchestra\Testbench\TestCase;
use Farrokhpakravan\Mt5PhpClient\Mt5PhpClientServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [Mt5PhpClientServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
