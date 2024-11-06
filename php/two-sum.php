<?php
/**
 * Given an array of integers nums and an integer target,
 * return indices of the two numbers such that they add up to target.
 *
 * You may assume that each input would have exactly one solution,
 * and you may not use the same element twice.
 *
 * You can return the answer in any order.
 */
class Solution
{
    public function twoSums(&$nums, $target)
    {
        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];
            for ($j = $i + 1; $j <= count($nums); $j++) {
                if ($complement == $nums[$j]) {
                    return [$i, $j];
                }
            }
        }
        return [];
    }
}

$solution = new Solution();
$nums = [3, 7, 11, 15, 2];
$result = $solution->twoSums($nums, 9);
print_r($result);
