<?php

namespace App\DictionariesAndMaps;

use App\Contracts\ProblemAbstract;

class DictionariesAndMaps extends ProblemAbstract
{
    private function dictionariesAndMaps($fptr, $arr): void
    {
        while (! feof($fptr)) {
            $index = rtrim(fgets($fptr));

            if (! empty($index)) { // Skip if any line was blank
                if (array_key_exists($index, $arr)) {
                    echo($index . '=' . $arr[$index]);
                } else {
                    echo('Not found' . "\n");
                }
            }
        }

        fclose($fptr);
    }

    public function solve(): void
    {
        $fptr = $this->openFile();
        $arr  = $this->readFromFile($fptr);

        $this->dictionariesAndMaps($fptr, $arr);
    }

    /**
     * @return resource
     */
    private function openFile()
    {
        $path = realpath(dirname(debug_backtrace()[0]['file'])) . '/input.txt';

        return fopen($path, 'rb');
    }

    private function readFromFile($fptr): array
    {
        $n = (int)trim(fgets($fptr));

        $arr = [];
        for ($i = 0; $i < $n; $i++) {
            $line               = fgets($fptr);
            $tempArray          = explode(' ', $line);
            $arr[$tempArray[0]] = $tempArray[1];
        }

        return $arr;
    }
}
