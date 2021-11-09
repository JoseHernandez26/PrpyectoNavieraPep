<?php

namespace Tests\Unit;

use App\Models\pasajero;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PasajeroTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $pasajero =pasajero::factory()->create();

        $this->assertEquals('/pasajero/'.$pasajero->id,$pasajero->path());
    }
}
