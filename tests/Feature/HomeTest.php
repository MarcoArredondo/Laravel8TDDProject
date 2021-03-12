<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    Use RefreshDatabase; //Aqui es como si se ejecutaran los migrate virtualmente en modo testing (Requiere descomentar las lineas de conexión a sqlite en phpunit.xml)

    public function testEmpty()
    {
        $this->get("/")
        ->assertStatus(200)
        ->assertSee("No hay etiquetas");
    }
}
