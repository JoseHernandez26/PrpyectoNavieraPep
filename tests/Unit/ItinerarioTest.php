<?php

namespace Tests\Unit;

use App\Models\itinerario;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ItinerarioTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $itinerario =itinerario::factory()->create();

        $this->assertEquals('/itinerario/'.$itinerario->id,$itinerario->path());

        dd($itinerario->toArray());
    }
}
