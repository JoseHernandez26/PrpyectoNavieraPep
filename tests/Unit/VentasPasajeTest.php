<?php

namespace Tests\Unit;

use App\Models\ventasPasaje;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VentasPasajeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $ventasPasaje =ventasPasaje::factory()->create();

        $this->assertEquals('/ventasPasaje/'.$ventasPasaje->id,$ventasPasaje->path());
    }
}
