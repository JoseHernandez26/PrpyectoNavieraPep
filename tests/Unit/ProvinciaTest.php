<?php

namespace Tests\Unit;
use App\Models\provincia;
use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;


class ProvinciaTest extends TestCase
{
   use RefreshDatabase;

   
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $provincia =provincia::factory()->create();

        $this->assertEquals('/provincia/'.$provincia->state,$provincia->path());
    
        dd($provincia->toArray());
    }
}
