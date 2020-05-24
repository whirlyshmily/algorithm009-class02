<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        // $nums = array_unique($nums);
        $_n = 0;
        $sum = count($nums);
        for($i = 0; $i < $sum; $i++){
            if ($i == 0){
                $_n++;
                continue;
            }
            if ($nums[$i] == $nums[$i - 1]) continue;
            $nums[$_n] = $nums[$i];
            $_n++;
        }
        for ($_n; $_n < $sum; $_n++){
            unset($nums[$_n]);
        }
    }
}

$da = new Solution();
$nums = [0,0,1,1,1,2,2,3,3,4];
$da->removeDuplicates($nums);

var_dump($nums);

?>