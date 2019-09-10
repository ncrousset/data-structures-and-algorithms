<?php

namespace App\CodeKatas;


class BubbleSort
{

    public function sort(array $data) : array
    {
        $dataCount = count($data);

        for ($index = 0; $index < $dataCount; $index++ ) {
            for ($secundIndex = $dataCount -1; $secundIndex >= $index; $secundIndex--) {
                if($secundIndex > 0 && ($data[$secundIndex- 1] > $data[$secundIndex])) {
                    $temp = $data[$secundIndex];
                    $data[$secundIndex] = $data[$secundIndex- 1];
                    $data[$secundIndex- 1] = $temp;
                }
            }
        }

        return $data;
    }

    /**
     * Lol, It's just a joke
     *
     * @param array $data
     * @return array
     */
    public function easySort(array $data) : array
    {
        return sort($data);
    }

}
