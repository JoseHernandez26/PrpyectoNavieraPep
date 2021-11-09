<?php

namespace Tests\Unit;

use App\Models\reserva;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReservaTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $reserva =reserva::factory()->create();

        $this->assertEquals('/reserva/'.$reserva->id,$reserva->path());
    }
}
