<?php


if (!function_exists('currency_IDR')) {
    # code...
    function currency_IDR($value)
    {
        return "Rp. " . number_format($value, 0, ',', '.');
    }
}
