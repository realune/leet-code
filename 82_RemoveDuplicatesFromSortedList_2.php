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
        
        $dummyHead = new ListNode();
        $dummyHead->next = $head;
        
        $ptr = $dummyHead;
        while (!is_null($ptr->next) && !is_null($ptr->next->next)) {
            if ($ptr->next->val == $ptr->next->next->val) {
                $copy = $ptr->next->next;
                while(!is_null($copy->next) && $copy->val == $copy->next->val) {
                    $copy = $copy->next;
                }
                $ptr->next = $copy->next;
            } else {
                $ptr = $ptr->next;
            }
        }
        return $dummyHead->next;
    }
}

