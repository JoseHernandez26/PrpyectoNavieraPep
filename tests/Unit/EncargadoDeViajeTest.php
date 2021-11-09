<?php

namespace Tests\Unit;

use App\Models\encargadoDeViaje;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EncargadoDeViajeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $encargadoDeViaje =EncargadoDeViaje::factory()->create();

        $this->assertEquals('/encargadoDeViaje/'.$encargadoDeViaje->id,$encargadoDeViaje->path());
    }
}
