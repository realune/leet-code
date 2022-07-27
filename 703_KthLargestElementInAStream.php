<?php

class KthLargest {
    private $minHeap;
    private $k;
    
    /**
     * @param Integer $k
     * @param Integer[] $nums
     */
    function __construct($k, $nums) {
        $this->minHeap = new SplMinHeap();
        $this->k = $k;
        foreach ($nums as $num) $this->minHeap->insert($num);

        $cnt = count($nums);
        for ($i = 0; $i < $cnt - $k; $i++) $this->minHeap->extract();
    }
  
    /**
     * @param Integer $val
     * @return Integer
     */
    function add($val) {   
        $this->minHeap->insert($val);
        if ($this->minHeap->count() <= $this->k) {
            return $this->minHeap->top();
        }
        $this->minHeap->extract();

        return $this->minHeap->top();
    }
}

/**
 * Your KthLargest object will be instantiated and called as such:
 * $obj = KthLargest($k, $nums);
 * $ret_1 = $obj->add($val);
 */

