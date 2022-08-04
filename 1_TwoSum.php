<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $result = [];
        $set = [];
        $cnt = count($nums);
        
        for ($i = 0; $i < $cnt; $i++) {
            $diff = $target - $nums[$i];

            if (array_search($diff, $set) !== false) {
                $key = array_search($diff, $set);
                array_push($result, $key);
                array_push($result, $i);
                break;
            }
            array_push($set, $nums[$i]);
        }
        
        return $result;
    }
}

