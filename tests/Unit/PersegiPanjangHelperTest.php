<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Helpers\PersegiPanjangHelper;

class PersegiPanjangHelperTest extends TestCase
{
    public function test_hitung_keliling()
    {
        $this->assertEquals(20, PersegiPanjangHelper::hitungKeliling(5, 5));
        $this->assertEquals(18, PersegiPanjangHelper::hitungKeliling(4, 5));
    }

    public function test_keliling_dengan_nol()
    {
        $this->assertEquals(10, PersegiPanjangHelper::hitungKeliling(0, 5));
        $this->assertEquals(8, PersegiPanjangHelper::hitungKeliling(4, 0));
    }
}
