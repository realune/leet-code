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
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        if(is_null($head)) return null;
        
        $copy = $head;
        
        while (!is_null($copy->next)) {
            if($copy->val == $copy->next->val) {
                $copy->next = $copy->next->next;
            } else {
                $copy = $copy->next;
            }
        }
        return $head;
    }
}

