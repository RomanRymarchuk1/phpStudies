<?php

namespace App;

class Player {

    private string $name;
    private int $bank;

    public function __construct ($name, $bank)
    {
        $this->setName($name);
        $this->setBank($bank);
    }

    public function setName (string $name): void 
    {
        $this->name = $name;
    }

    public function getName (): string 
    {
        return $this->name;
    }

    public function setBank (int $bank): void 
    {
        $this->bank = $bank;
    }

    public function getBank (): int 
    {
        return $this->bank;
    }

    public function roundWin (Player $looser): void
    {
        $this->setBank($this->getBank() + 1);
        $looser->setBank($looser->getBank() - 1);
    }

}