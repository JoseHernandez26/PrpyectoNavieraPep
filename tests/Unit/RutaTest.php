<?php

namespace Tests\Unit;

use App\Models\ruta;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RutaTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $ruta =ruta::factory()->create();

        $this->assertEquals('/ruta/'.$ruta->name,$ruta->path());

        dd($ruta->toArray());
    }
}
