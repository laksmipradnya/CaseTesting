<?php

namespace Tests\Feature;

use Tests\TestCase;

class PersegiPanjangFeatureTest extends TestCase
{
    public function test_page_loads()
    {
        $response = $this->get('/hitung-keliling');
        $response->assertStatus(200);
        $response->assertSee('Hitung Keliling Persegi Panjang');
    }

    public function test_calculate_keliling()
    {
        $response = $this->post('/hitung-keliling', ['panjang' => 5, 'lebar' => 3]);
        $response->assertSee('Keliling persegi panjang dengan panjang 5 dan lebar 3');
        $response->assertSee('16');
    }

    public function test_validation_error()
    {
        $response = $this->post('/hitung-keliling', ['panjang' => -1, 'lebar' => 3]);
        $response->assertSessionHasErrors('panjang');
    }
}
