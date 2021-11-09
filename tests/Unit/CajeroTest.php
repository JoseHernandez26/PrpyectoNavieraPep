<?php

namespace Tests\Unit;

use App\Models\cajero;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CajeroTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $cajero =cajero::factory()->create();

        $this->assertEquals('/cajero/'.$cajero->id,$cajero->path());
    }
}
