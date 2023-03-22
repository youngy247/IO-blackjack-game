<?php




function deal() {

    $suits = [
        1 => 'diamonds',
        2 => 'hearts',
        3 => 'clubs',
        4 => 'spades'];
    $numbers =[
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        'J' => 10,
        'Q' => 10,
        'K' => 10,
        'A' => 11
    ];

    $dealCard1 = $suits[array_rand($suits)] . '-' . array_rand($numbers);
    echo $dealCard1;
};
echo deal();


