<?php

namespace Tests\Unit;

use App\Models\distrito;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DistritoTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $distrito =distrito::factory()->create();
    
        $this->assertEquals('/distrito/'.$distrito->city,$distrito->path());
        dd($distrito->toArray());
    }
}
