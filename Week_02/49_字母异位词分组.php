<?php

class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function groupAnagrams($strs) {
        $res = [];
        $str_has = [];
        foreach ($strs as $key => $value) {
            $str = $this->sort_str($value);
            if (!isset($str_has[$str])) {
                $str_has[$str] = count($res);
            }
            $res[$str_has[$str]][] = $value;
        }
        return $res;
    }

    function sort_str($str){
        $str_arr = str_split($str);
        arsort($str_arr);
        return implode('', $str_arr);
    }
}
$da = new Solution();

$nums = ["eat", "tea", "tan", "ate", "nat", "bat"];
$res = $da->groupAnagrams($nums);
var_dump($res);
return;

?>