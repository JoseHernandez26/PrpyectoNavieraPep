<?php

namespace Tests\Unit;

use App\Models\canton;
use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;

class CantonTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $canton =canton::factory()->create();
    
        

        $this->assertEquals('/canton/'.$canton->name,$canton->path());
    }
}
