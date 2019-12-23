<?php

namespace App\Entity\Interfaces;

/**
 * Interface SimpleTimeInterface
 * @package App\Entity\Interfaces
 */
interface SimpleTimeInterface
{
    public function getDateTimeStringFrom(string $column, $format = "Y-m-d H:i:s"): string;
}