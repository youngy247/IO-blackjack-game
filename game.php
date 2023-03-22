<?php




function deal() {

    $deck = [
        '2-h',
        '3-h',
        '4-h',
        '5-h',
        '6-h',
        '7-h',
        '8-h',
        '9-h',
        '10-h',
        'J-h',
        'Q-h',
        'K-h',
        'A-h',
        '2-c',
        '3-c',
        '4-c',
        '5-c',
        '6-c',
        '7-c',
        '8-c',
        '9-c',
        '10-c',
        'J-c',
        'Q-c',
        'K-c',
        'A-c',
        '2-s',
        '3-s',
        '4-s',
        '5-c',
        '6-c',
        '7-c',
        '8-c',
        '9-c',
        '10-c',
        'J-c',
        'Q-c',
        'K-c',
        'A-c',
        '2-d',
        '3-d',
        '4-d',
        '5-d',
        '6-d',
        '7-d',
        '8-d',
        '9-d',
        '10-d',
        'J-d',
        'Q-d',
        'K-d',
        'A-d',
    ];


    shuffle($suits);
    shuffle($numbers);
    $dealCard1 = $suits[array_rand($suits)] . '-' . array_rand($numbers) . '<p></p>';
    $dealCard2 = $suits[array_rand($suits)] . '-' . array_rand($numbers);
    $player1Cards = $dealCard1 . $dealCard2;
//    $player2Cards = $dealCard1 . $dealCard2;
    $dealtCards=[];
    $array_push($)
    echo $player1Cards;
//    echo $player2Cards;


};
echo deal();

function playGame(){
    deal();

}

