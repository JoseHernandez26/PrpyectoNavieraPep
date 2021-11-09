<?php

namespace Tests\Unit;

use App\Models\contacto;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactoTest extends TestCase
{
    use RefreshDatabase; 
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $contacto =contacto::factory()->create();

        $this->assertEquals('/contacto/'.$contacto->email,$contacto->path());

        dd($contacto->toArray());
    }
}
