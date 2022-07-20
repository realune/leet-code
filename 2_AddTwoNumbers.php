<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $root = new ListNode();
        $ans = $root;
        $carry = 0;
        
        while(!is_null($l1) || !is_null($l2)) {
            $n = 0;
            if(!is_null($l1) && !is_null($l2)) {
                $n = ($l1->val + $l2->val + $carry) % 10;
                $carry = ($l1->val + $l2->val + $carry) / 10;
                $l1 = $l1->next;
                $l2 = $l2->next;
            } elseif (!is_null($l1)) {
                $n = ($l1->val + $carry) % 10;
                $carry = ($l1->val + $carry) / 10;
                $l1 = $l1->next;
            } elseif (!is_null($l2)) {
                $n = ($l2->val + $carry) % 10;
                $carry = ($l2->val + $carry) / 10;
                $l2 = $l2->next;
            } else {
                //ThrowException
            }
            $ans->val = $n;
            if(!is_null($l1) || !is_null($l2)) {
                $ans->next = new ListNode();
                $ans = $ans->next;
            }
        }
        
        if(floor($carry) == 1) $ans->next = new ListNode(1);
        
        return $root;
    }
}

