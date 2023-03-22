<?php

//Define the cards and suits
$suits = ['Hearts', 'Diamonds', 'Clubs', 'Spades'];
$cards = [
    '2'=>2,
    '3'=>3,
    '4'=>4,
    '5'=>5,
    '6'=>6,
    '7'=>7,
    '8'=>8,
    '9'=>9,
    '10'=>10,
    'J'=>10,
    'Q'=>10,
    'K'=>10,
    'A'=>11
    ];

//Create the deck
$deck = array();
foreach ($suits as $suit) {
    foreach ($cards as $card) {
        $deck[] = $card . " of " . $suit;
    }
}

//printing the deck
/*//echo '<pre>';
//print_r($deck);
//echo '</pre';*/

//shuffle deck
shuffle($deck);

//dealing cards to player and dealer
function deal(){
    global $deck;
    $dealerHand = [];
    $playerHand = [];

    $dealerHand[] = array_shift($deck);
    $playerHand[] = array_shift($deck);
    $dealerHand[] = array_shift($deck);
    $playerHand[] = array_shift($deck);
}



