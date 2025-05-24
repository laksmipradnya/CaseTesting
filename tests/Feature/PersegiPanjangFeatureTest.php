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

    public function test_hitung_keliling()
    {
        $response = $this->post('/hitung-keliling', [
            'panjang' => 4,
            'lebar' => 5,
        ]);

        $response->assertSee('Keliling dari persegi panjang');
        $response->assertSee('18');
    }
}
