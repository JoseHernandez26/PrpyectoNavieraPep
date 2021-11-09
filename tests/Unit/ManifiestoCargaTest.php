<?php

namespace Tests\Unit;

use App\Models\manifiestoCarga;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManifiestoCargaTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $manifiestoCarga =manifiestoCarga::factory()->create();

        $this->assertEquals('/manifiestoCarga/'.$manifiestoCarga->id,$manifiestoCarga->path());
    }
}
