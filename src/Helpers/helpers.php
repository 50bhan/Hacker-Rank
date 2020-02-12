<?php

if (!function_exists('dd')) {
    function dd($output)
    {
        var_dump($output);
        die(1);
    }
}

if (!function_exists('readInputFile')) {
    function readInputFile()
    {
        $path = realpath(dirname(debug_backtrace()[0]['file'])) . '/input.txt';

        $fptr = fopen($path, 'rb');

        $n = (int)trim(fgets($fptr));

        $arr = [];
        for ($i = 0; $i < $n; $i++) {
            $arrTemp = rtrim(fgets($fptr));
            $arr[]   = array_map('intval', preg_split('/ /', $arrTemp, -1, PREG_SPLIT_NO_EMPTY));
        }

        fclose($fptr);

        return [
            'arrayCount' => $n,
            'arrayData'  => $arr
        ];
    }
}