<?php

class Solution {

    /**
     * @param int[] $nums1
     * @param int $m
     * @param int[] $nums2
     * @param int $n
     */
    function merge(
        array &$nums1,
        int $m,
        int $nums2,
        int $n
    ): void {
        $nums1 = array_splice($nums1, 0, $m);
        $nums1 = array_merge($nums1, $nums2);
        sort($nums1);
    }
}