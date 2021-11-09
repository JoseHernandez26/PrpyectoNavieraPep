<?php

namespace Tests\Unit;

use App\Models\direccion;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DireccionTest extends TestCase
{
    use RefreshDatabase; 
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $direccion =direccion::factory()->create();

        $this->assertEquals('/direccion/'.$direccion->address,$direccion->path());

        dd($direccion->toArray());
    }
}
