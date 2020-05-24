<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $arr = [];
        foreach ($nums as $key => $value) {
            $diff = $target - $value;
            if (array_key_exists($diff, $arr)) {//搜寻表中找到与差相同的值，则返回其index
                return [$arr[$diff], $key];
            }
            $arr[$value] = $key;
        }
        return null;
    }
}
$da = new Solution();
$nums = [2, 7, 11, 15];
$target = 9;

$res = $da->twoSum($nums, $target);
var_dump($nums);
return;

?>