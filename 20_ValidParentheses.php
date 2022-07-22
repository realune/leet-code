<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = new SplStack();

        foreach (str_split($s) as $c) {
            if ($c == '(' || $c == '[' || $c == '{') {
                $stack->push($c);
            } elseif ($c == ')' && !$stack->isEmpty() && $stack->top() == '(') {
                $stack->pop();
            } elseif ($c == ']' && !$stack->isEmpty() && $stack->top() == '[') {
                $stack->pop();
            } elseif ($c == '}' && !$stack->isEmpty() && $stack->top() == '{') {
                $stack->pop();
            } else {
                return false;
            }
        }
        return $stack->isEmpty();              
    }
}

