<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class DataBaseTestProvincia extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertDataBaseTestProvinciaHas('provincia',['Nombre'=>"Jose Alberto"]);
    }
}
