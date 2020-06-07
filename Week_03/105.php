<?php

class Solution {

    /**
     * @param Integer[] $preorder
     * @param Integer[] $inorder
     * @return TreeNode
     */
    function buildTree($preorder, $inorder) {
        $this->preorder = $preorder;
        $this->inorder = $inorder;
        $this->inmap = array_flip($inorder);
        return $this->helper(0,count($inorder)-1);
    }
    
    private $inmap;
    private $preindex = 0;
    private $preorder;
    private $inorder;
    
    function helper($instart,$inend){
        if($instart > $inend) return null;
        $nodeval = $this->preorder[$this->preindex];
        $inindex = $this->inmap[$nodeval];
        $node = new TreeNode($nodeval);
        $this->preindex++;
        
        $node->left = $this->helper($instart,$inindex-1);
        $node->right = $this->helper($inindex+1,$inend);
        return $node;
    }
}


?>