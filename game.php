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

//Defining playerHand and dealerHand
$playerHand = [];
$dealerHand = [];

//Create the deck
function createDeck($suits, $cards)
{


    $deck = [];
    foreach ($suits as $suit) {
        foreach ($cards as $card) {
            $deck[] = $card . " of " . $suit;
        }
    }
    return $deck;
}
// Create a new deck of cards
$deck = createDeck($suits, $cards);

//shuffle deck
shuffle($deck);


//dealing cards to player and dealer
function dealDealer($deck): array
{
    $dealerHand = [];
    $dealerHand[] = array_shift($deck);
    $dealerHand[] = array_shift($deck);

    return $dealerHand;
};

function dealPlayer($deck): array
{
    $playerHand = [];
    $playerHand[] = array_shift($deck);
    $playerHand[] = array_shift($deck);

    return $playerHand;
}

// Define function to calculate the total value of a hand of cards
function calcHandValue($hand) {
    $value = 0;
    $aceCount = 0;
    foreach ($hand as $card) {
        $cardValue = substr($card, 0, strpos($card, " "));
        switch ($cardValue) {
            case "Ace":
                $aceCount++;
                $value += 11;
                break;
            case "King":
            case "Queen":
            case "Jack":
                $value += 10;
                break;
            default:
                $value += intval($cardValue);
                break;
        }
    }
    while ($aceCount > 0 && $value > 21) {
        $value -= 10;
        $aceCount--;
    }
    return $value;
}

// Print out the player's cards and their total value
function displayPlayerCards($playerHand)
{
    echo "Player's cards:<br>";
    foreach ($playerHand as $card) {
        echo $card . "<br>";
    }
    $playerTotal = calculateHandValue($playerHand);
    echo "Player's total: " . $playerTotal . "<br>";
}

// Print out the dealer's first card
function displayDealerCard1($dealerHand)
{
    echo "Dealer's cards:<br>";
    echo $dealerHand[0] . "<br>";
}

dealDealer($deck);
dealPlayer($deck);
calcHandValue($playerHand);

