<?php
/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution {
    /**
     * @param Node $root
     * @return integer[]
     */

    function preorder($root) {
        $res = [];
        return $this->ord($res , $root);
    }

    function ord($res, $root){
        if($root->val === null) return $res;
        $res[] = $root->val;
        foreach($root->children as $key => $value){
            $res = $this->ord($res, $value);
        }
        return $res;
    }
}
