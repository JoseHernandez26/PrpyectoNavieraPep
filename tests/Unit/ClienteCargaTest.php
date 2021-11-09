<?php

namespace Tests\Unit;

use App\Models\clienteCarga;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClienteCargaTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $clienteCarga =clienteCarga::factory()->create();

        $this->assertEquals('/clienteCarga/'.$clienteCarga->id,$clienteCarga->path());
    }
}
