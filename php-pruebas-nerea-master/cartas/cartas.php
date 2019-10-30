<?php
class PlayCards{
    private $deck;
    private $usedDeck;
    private $players;
    private $cardsFirstHand;
    private $cardsNextHands;
    private $hands;

    public function __construct() {
        $this->generateDeck();
        $this->shuffleDeck();
    }

    private function generateDeck() {
        $types = ['Bastos', 'Oros', 'Espadas', 'Copas'];
        $numbers = ['Dos', 'Tres', 'Cuatro', 'Cinco', 'Seis', 'Siete', 'Sota', 'Caballo', 'Rey', 'As'];

        $deck = [];
        foreach ($types as $type){
            foreach($numbers as $number){
                $deck[] = [
                    'palo' => $type,
                    'numero' => $number
                ];
            }
        }

        $this->deck = $deck;
    }

    private function shuffleDeck() {
        shuffle($this->deck);
        shuffle($this->deck);
        shuffle($this->deck);
    }

    public function setPlayers($players) {
        $this->players = $players;
    }

    public function setCardsPerDistribute($cardsFirstHand, $cardsNextHands) {
        $this->cardsFirstHand = $cardsFirstHand;
        $this->cardsNextHands = $cardsNextHands;
    }

    public function getFirstHand() {
        $hands = [];
        $this->usedDeck = [];
        $cardsFirstHand = $this->cardsFirstHand;

        while($cardsFirstHand > 0){
            for($i=0; $i<$this->players; $i++){
                if(empty($hands[$i])){
                    $hands[$i] = [];
                }
                $card = array_shift($this->deck);
                $this->usedDeck[] = $card;
                $hands[$i][] = $card;
            }
            $cardsFirstHand--;
        }

        $this->hands = $hands;

        return $hands;
    }

    public function playRound() {
        for($i=0; $i<count($this->hands); $i++){
            shuffle($this->hands[$i]);
            array_shift($this->hands[$i]);
        }
    }

    public function getNextHand() {
        $this->playRound();

        $cardsNextHands = $this->cardsNextHands;

        while($cardsNextHands > 0){
            for($i=0; $i<$this->players; $i++){
                $card = array_shift($this->deck);
                $this->usedDeck[] = $card;
                $this->hands[$i][] = $card;
            }
            $cardsNextHands--;
        }

        return $this->hands;
    }
}


function printHands($hands){
    $jugador = 1;
    foreach($hands as $hand){
        echo '<h2>Jugador: ' . $jugador . "</h2>\n\r";
        foreach($hand as $card) {
            echo $card['numero'] . ' de ' . $card['palo'] . "\n\r";
        }
        $jugador++;
    }
}

$playCards = New PlayCards();
$playCards->setPlayers(4);
$playCards->setCardsPerDistribute(4, 1);
$hands = $playCards->getFirstHand();
printHands($hands);

$hands = $playCards->getNextHand();
printHands($hands);
$hands = $playCards->getNextHand();
printHands($hands);
$hands = $playCards->getNextHand();
printHands($hands);
$hands = $playCards->getNextHand();
printHands($hands);

?>