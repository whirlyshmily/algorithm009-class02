<?php

class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function isAnagram($s, $t) {
        if (strlen($s) != strlen($t)) return false;
        $s_arr = [];
        for ($i=0; $i < strlen($s); $i++) {
            if (isset($s_arr[$s[$i]])) {
                $s_arr[$s[$i]]++;
            }else{
                $s_arr[$s[$i]] = 1;
            }
        }
        for ($i=0; $i < strlen($t); $i++) { 
            if (!isset($s_arr[$t[$i]]) || $s_arr[$t[$i]] == 0) return false;
            $s_arr[$t[$i]]--;
        }
        return true;
    }
}
$da = new Solution();

$s = "anagram";
$t = "nagaram";
$res = $da->isAnagram($s, $t);
var_dump($res);
return;

?>