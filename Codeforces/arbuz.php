<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 20.05.2022
 * Time: 13:41
 */

function solve()
{
    $nums = [3,1,-2,-5,2,-4];
    return rearrangeArray($nums);
}

function isPalindrome($s)
{
    $s = preg_replace("/[^A-Za-z ]/", '', $s);
    echo(strlen($s));
    for ($i = 0; $i < strlen($s) / 2; $i++) {
        if ($s[$i] != $s[strlen($s) - $i - 1]) return false;
    }
    return true;
}
function rearrangeArray($nums): array
{
    $pos = [];
    $neg = [];
    $ans = [];
    foreach($nums as $num){
        $num>0 ? array_push($pos, $num) : array_push($neg, $num);
    }
    for($i=0; $i<count($nums) / 2; $i++){
        $ans[] = $pos[$i];
        $ans[] = $neg[$i];
    }
    return $ans;
}
solve();
