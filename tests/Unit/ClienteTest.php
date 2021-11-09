<?php

namespace Tests\Unit;

use App\Models\cliente;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClienteTest extends TestCase
{
    use RefreshDatabase; 
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $cliente =cliente::factory()->create();
    
        $this->assertEquals('/cliente/'.$cliente->name,$cliente->path());

        dd($cliente->toArray());
    }
}
