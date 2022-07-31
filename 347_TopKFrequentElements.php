<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $result = [];
        
        $len = count($nums);
        if ($len == 0) return $result;
        if ($len == 1) return $nums;
        
        $arrCntVals = array_count_values($nums);
        arsort($arrCntVals);
        
        $cnt = 0;
        foreach ($arrCntVals as $key => $val) {
            $cnt++;
            if ($cnt > $k) break;
        
            array_push($result, $key);
        }

        return $result;
    }
}

