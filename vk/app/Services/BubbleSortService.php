<?php

namespace App\Services;

class BubbleSortService implements SortService
{
    public function sort($array):void 
    {
        for ($i=0; $i<count($array); $i++) {
            $count = count($array);

            for ($j=$i+1; $j<$count; $j++) {
                if ($array[$i]>$array[$j]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$i];
                    $array[$i] = $temp;
                }
            }
        }

        $sortedArrayToString = implode(', ', $array);
        echo 'Cортировка пузырьком: ' . $sortedArrayToString . '<br><br>';
    }
}