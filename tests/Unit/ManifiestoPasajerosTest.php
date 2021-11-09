<?php

namespace Tests\Unit;

use App\Models\manifiestoPasajeros;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManifiestoPasajerosTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $manifiestoPasajeros =manifiestoPasajeros::factory()->create();

        $this->assertEquals('/manifiestoPasajeros/'.$manifiestoPasajeros->id,$manifiestoPasajeros->path());
    }
}
