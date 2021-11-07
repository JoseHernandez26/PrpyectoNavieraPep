<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class DataBaseTestCanton extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertDataBaseTestCantonHas('canton',['Nombre'=>"Liberia"]);
    }
}
