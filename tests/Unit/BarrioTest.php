<?php

namespace Tests\Unit;

use App\Models\barrio;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BarrioTest extends TestCase
{
    use RefreshDatabase; 
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $barrio =barrio::factory()->create();

        $this->assertEquals('/barrio/'.$barrio->name,$barrio->path());

        dd($barrio->toArray());

    }
}
