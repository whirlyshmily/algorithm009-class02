<?php



class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function twoSum($nums, $target) {
    	$arr = [];
    	foreach ($nums as $key => $value) {
    		# code...
    		$diff = $target - $value;
    		if (isset($arr[$diff])) {
    			return [$arr[$diff], $key];
    		}
    		$arr[$value] = $key;
    	}
        return null;
    }

}
$da = new Solution();

$res = $da->twoSum([2,7,11,15], 9);
var_dump($res);
return;

?>