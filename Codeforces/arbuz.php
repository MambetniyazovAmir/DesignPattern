<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 20.05.2022
 * Time: 13:41
 */

function solve() {
    $n = fread(STDIN, 80);
    if ($n<=2) echo "NO";
    elseif ($n%2==0) echo "YES";
    else echo "NO";
}
function run() {
    solve();
}

run();