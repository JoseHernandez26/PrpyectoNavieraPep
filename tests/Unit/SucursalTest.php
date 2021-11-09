<?php

namespace Tests\Unit;

use App\Models\sucursal;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SucursalTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $sucursal =sucursal::factory()->create();
        
        $this->assertEquals('/sucursal/'.$sucursal->cityPrefix,$sucursal->path());

        dd($sucursal->toArray());
    }
}
