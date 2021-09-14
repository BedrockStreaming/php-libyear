<?php

namespace LibYear\Tests;

use LibYear\App;
use LibYear\Factory;
use PHPUnit\Framework\TestCase;

class FactoryTests extends TestCase
{
    public function testCanCreateApp()
    {
        //act
        $app = Factory::App();

        //assert
        $this->assertInstanceOf(App::class, $app);
    }
}