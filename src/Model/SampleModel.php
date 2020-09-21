<?php

declare(strict_types=1);

namespace JulienAnquetil\m2sample;

class SampleModel
{
    /**
     * this function returns the result of the addition of two numbers
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add(int $a, int $b)
    {
        return $a + $b;
    }

    /**
     * this function returns the result of the subtraction of two numbers
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function subtract(int $a, int $b)
    {
        return $a - $b;
    }

    /**
     * this function returns the result of the multiplication of two numbers
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function multiply(int $a, int $b)
    {
        return $a * $b;
    }

}
