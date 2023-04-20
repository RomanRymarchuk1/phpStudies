<?php

namespace App;

class Game {

    private Player $firstPlayer;
    private Player $secondPlayer;
    private int $scrollCount = 0;

    public function __construct (Player $firsPlayer, Player $secondPlayer) 
    {
        $this->setFirstPlayer($firsPlayer);
        $this->setSecondPlayer($secondPlayer);
    }

    public function setFirstPlayer (Player $firsPlayer): void 
    {
        $this->firstPlayer = $firsPlayer;
    }

    public function getFirstPlayer (): Player 
    {
        return $this->firstPlayer;
    }

    public function setSecondPlayer (Player $secondPlayer): void 
    {
        $this->secondPlayer = $secondPlayer;
    }

    public function getSecondPlayer (): Player 
    {
        return $this->secondPlayer;
    }

    public function setScrollCount ($i): void 
    {
        $this->scrollCount = $i;
    }

    public function getScrollCount (): int 
    {
        return $this->scrollCount;
    }

    public function start (): void 
    {
        $i = 0;

        while($this->getFirstPlayer()->getBank() > 0 && $this->getSecondPlayer()->getBank() > 0 )
        {
            $this->roll();
            $i++;
        }


        if($this->getFirstPlayer()->getBank() == 0)
            $this->echoWinner($this->getSecondPlayer());
        else
            $this->echoWinner($this->getFirstPlayer());

        $this->setScrollCount($i);
        echo "Total rolls: ". $this->getScrollCount();
    }  

    public function roll (): void 
    {
       $res = rand(0, 1) ? "Red" : "Black";
       $firstPlayer = $this->getFirstPlayer();
       $secondPlayer = $this->getSecondPlayer();

       if($res === "Red")
            $firstPlayer->roundWin($secondPlayer);
       else 
            $secondPlayer->roundWin($firstPlayer);
    }

    public function echoWinner(Player $winner): void
    {
        echo 'Winner: '. $winner->getName(). "<br>". "With ". $winner->getBank(). " coins". "<br>" ;
    }
    
};