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

    function inorderTraversal($root) {
        $res = $this->inorder($res, $root);

        return $res;
    }

    function inorder($res, $root){
        if ($root->left) $res = $this->inorder($res, $root->left);
        $res[] = $root->val;
        if ($root->right) $res = $this->inorder($res, $root->right);
        return $res;
    }
}
