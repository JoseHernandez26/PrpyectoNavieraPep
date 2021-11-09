<?php

namespace Tests\Unit;

use App\Models\empleado;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmpleadoTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $empleado =empleado::factory()->create();

        $this->assertEquals('/empleado/'.$empleado->name,$empleado->path());

        dd($empleado->toArray());
    }
}
