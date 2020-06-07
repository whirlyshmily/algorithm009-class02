<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $this->backtracking($nums, []);
        return $this->res;
    }
    function backtracking($nums, $arr) {
        if (count($arr) == count($nums)) {
            $this->res[] = $arr;
            return;
        }

        foreach ($nums as $value) {
            if (!in_array($value, $arr)) {
                $arr[] = $value;
                $this->backtracking($nums, $arr);
                array_pop($arr);
            }
        }
    }
}
