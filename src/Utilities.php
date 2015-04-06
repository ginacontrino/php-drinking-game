<?php namespace Gina;


class Utilities {

    /**
     * @param $arr
     * @param $index
     * @param string $errorMessage
     * @throws \Exception
     */
    public static function assertArrayIndexExists($arr, $index, $errorMessage = 'Array index does not exist.')
    {
        if ( ! isset($arr[$index]))
        {
            throw new \Exception('Error: ' . $errorMessage . PHP_EOL);
        }
    }

    /**
     * @param $arr
     * @param $index
     * @param string $errorMessage
     * @return mixed
     * @throws \Exception
     */
    public static function getArrayOrFail($arr, $index, $errorMessage = 'Array index does not exist.')
    {
        static::assertArrayIndexExists($arr, $index, $errorMessage);

        return $arr[$index];
    }
}