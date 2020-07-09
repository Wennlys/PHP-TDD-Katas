<?php

declare(strict_types=1);

namespace Exercises\ArrayGroup\Complete;

use function array_chunk;
use function array_slice;
use function count;

final class ArrayGroupComplete
{
    /**
     * @param mixed[] $array
     *
     * @return mixed[]
     */
    public static function group(array $array, int $size): array
    {
        $grouped = [];

        for ($i = 0, $iMax = count($array); $i < $iMax; $i += $size) {
            $grouped[] = array_slice($array, $i, $size);
        }

        return $grouped;
    }

    /**
     * @param mixed[] $array
     *
     * @return mixed[]
     */
    public static function group1(array $array, int $size): array
    {
        $grouped = [];
        $last = count($array) - 1;

        foreach ($array as $i => $iValue) {
            $temporary[] = $iValue;

            if ($i === $last) {
                $grouped[] = $temporary;
            } elseif (count($temporary) === $size) {
                $grouped[] = $temporary;
                $temporary = [];
            }
        }

        return $grouped;
    }

    /**
     * @param mixed[] $array
     *
     * @return mixed[]
     */
    public static function group2(array $array, int $size): array
    {
        return array_chunk($array, $size);
    }
}
