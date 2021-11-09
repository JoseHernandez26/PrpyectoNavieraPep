<?php

namespace Tests\Unit;

use App\Models\usuario;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuarioTest extends TestCase
{
    use RefreshDatabase; 
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $usuario =usuario::factory()->create();

        $this->assertEquals('/usuario/'.$usuario->email,$usuario->path());

        dd($usuario->toArray());
    }
}
