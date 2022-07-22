<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function detectCycle($head) {
        if (is_null($head)) return null;
        
        $fast = $head;
        $slow = $head;
        
        while (!is_null($fast)) {
            if (is_null($fast->next)) return null;

            $fast = $fast->next->next;
            $slow = $slow->next;
            
            if ($fast === $slow) break;
        }
        
        if (is_null($fast)) return null;
        
        $slow = $head;
        while ($slow !== $fast) {
            $slow = $slow->next;
            $fast = $fast->next;
        }
        return $slow;
    }
}

