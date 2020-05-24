<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $_num = count($nums);
        if($_num < $k) $k = $k % $_num;

        $k_arr = [];
        $j = $k - 1;
        for($i = $_num - 1; $i >= 0; $i--){
            if ($j >= 0) {
                $k_arr[$j] = $nums[$i];
                $j--;
            }
            if ($i < $k) {
                $nums[$i] = $k_arr[$i];
            } else {
                $nums[$i] = $nums[$i - $k];
            }
        }
    }
}
$da = new Solution();
$nums = [1,2];
$k = 3;
$da->rotate($nums, $k);
var_dump($nums);

?>