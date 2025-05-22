<?php

namespace Tests\Unit;

use Tests\TestCase;

class PersegiPanjangHelperTest extends TestCase
{
    public function test_keliling()
    {
        $this->assertEquals(14, $this->calculateKeliling(4, 3));
        $this->assertEquals(0, $this->calculateKeliling(0, 0));
        $this->assertEquals(20.4, $this->calculateKeliling(7.2, 3));
    }

    public function test_keliling_with_float_precision()
    {
        $this->assertEqualsWithDelta(20.44, $this->calculateKeliling(7.22, 3), 0.01);
    }

    private function calculateKeliling($p, $l)
    {
        return 2 * ($p + $l);
    }
}
