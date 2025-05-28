<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helpers\PersegiPanjangHelper;

class PersegiPanjangHelperTest extends TestCase
{
    public function test_hitung_keliling_biasa()
    {
        $this->assertEquals(18, PersegiPanjangHelper::hitungKeliling(4, 5));
        $this->assertEquals(20, PersegiPanjangHelper::hitungKeliling(5, 5));
    }

    public function test_keliling_dengan_float()
    {
        $this->assertEquals(12.0, PersegiPanjangHelper::hitungKeliling(3.5, 2.5));
    }

    public function test_keliling_dengan_nol()
    {
        $this->expectException(\InvalidArgumentException::class);
        PersegiPanjangHelper::hitungKeliling(0, 5);
    }

    public function test_keliling_dengan_angka_negatif()
    {
        $this->expectException(\InvalidArgumentException::class);
        PersegiPanjangHelper::hitungKeliling(-4, 5);
    }

    public function test_keliling_dengan_input_tidak_valid()
    {
        $this->expectException(\InvalidArgumentException::class);
        PersegiPanjangHelper::hitungKeliling("abc", 5);
    }
}
