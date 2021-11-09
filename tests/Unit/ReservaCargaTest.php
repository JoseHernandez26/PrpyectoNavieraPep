<?php

namespace Tests\Unit;

use App\Models\reservaCarga;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReservaCargaTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $reservaCarga =reservaCarga::factory()->create();

        $this->assertEquals('/reservaCarga/'.$reservaCarga->id,$reservaCarga->path());
    }
}
