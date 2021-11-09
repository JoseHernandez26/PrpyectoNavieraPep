<?php

namespace Tests\Unit;

use App\Models\nave;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NaveTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $nave =nave::factory()->create();

        $this->assertEquals('/nave/'.$nave->id,$nave->path());


    }
}
