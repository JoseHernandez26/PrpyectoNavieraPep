<?php

namespace Tests\Unit;

use App\Models\altaGerencia;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class AltaGerenciaTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $altaGerencia =altaGerencia::factory()->create();

        $this->assertEquals('/altaGerencia/'.$altaGerencia->id,$altaGerencia->path());
    }
}
