<?php

namespace App\Services;

class QuickSortService implements SortService
{
    public function sort($array):void 
    {
        $sortedArray = $this->quickSort($array);
        $sortedArrayToString = implode(', ', $sortedArray);
        echo 'Быстрая сортировка: ' . $sortedArrayToString . '<br><br>';
    }

    private function quickSort($array) 
    {
        $arrCount = count($array);

        if ($arrCount <= 1) {
            return $array;
        }
    
        $base = $array[0];
        $left = [];
        $right = [];
    
        for ($i = 1; $i < $arrCount; $i++) {
    
            if ($base >= $array[$i]) {
                $left[] = $array[$i];
            } else {
                $right[] = $array[$i];
            }
        }
    
        $left = $this->quickSort($left);
        $right = $this->quickSort($right);
    
        return array_merge($left, [$base], $right);
    }
}