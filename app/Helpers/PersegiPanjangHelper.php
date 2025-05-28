<?php

namespace App\Helpers;

class PersegiPanjangHelper
{
    public static function hitungKeliling($panjang, $lebar)
    {
        if (!is_numeric($panjang) || !is_numeric($lebar)) {
            throw new \InvalidArgumentException("Panjang dan lebar harus angka.");
        }

        if ($panjang <= 0 || $lebar <= 0) {
            throw new \InvalidArgumentException("Panjang dan lebar harus lebih dari 0.");
        }

        return 2 * ($panjang + $lebar);
    }
}
