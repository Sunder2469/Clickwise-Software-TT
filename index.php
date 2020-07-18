<?php
$cost = $_POST['cost'];
function bitcoinCost(array $cost = [])
{
    $countOfPrice = count($cost);

    if (empty($cost) || $countOfPrice < 2) {
        echo 'Nothing count';
    } elseif ($countOfPrice > 1) {
        $minPrice = min($cost);
        $keyMin = array_search((int)$minPrice,$cost);
        $newArrayCost = array_slice($cost,$keyMin+1);
        $maxPrice = max($newArrayCost);
        $result = $maxPrice - $minPrice;

        if ($result< 0){
            echo 'Less price in last day. Need new solution(case)';
        }else{
            echo $result;
        }
    }
}

call_user_func('bitcoinCost', $cost);

