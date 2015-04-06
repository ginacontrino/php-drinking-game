<?php namespace Gina\DrinkingGame;

class DrinkingGame
{
    private $randomNumber;
    private $guessNumber;
    private $result;

    public function __construct(RandomNumber $randomNumber)
    {
        $this->randomNumber = $randomNumber;
    }

    public function play($guessNumber)
    {
        return $this->start($guessNumber)->getResult();
    }

    public function start($guessNumber)
    {
        $this->randomNumber->reset();

        $this->guessNumber = $guessNumber;
        $this->result = $this->compareGuessNumberToSecretNumber();

        return $this;
    }


    private function getSecretNumber()
    {
        return $this->randomNumber->getRandomNumberOnce();
    }

    public function compareGuessNumberToSecretNumber()
    {
        if ($this->guessIsBiggerThanSecretNumber()) {
            return $this->guessNumber . ' is the wrong number. Lower! The secret number is ' . $this->getSecretNumber() . PHP_EOL;
        }

        if ($this->guessIsSmallerThanSecretNumber()) {
            return $this->guessNumber . ' is the wrong number. Higher! The secret number is ' . $this->getSecretNumber() . PHP_EOL;
        }

        return $this->guessNumber . ' is the correct number!' . PHP_EOL;

    }

    private function guessIsBiggerThanSecretNumber()
    {
        return $this->guessNumber > $this->getSecretNumber();
    }

    private function guessIsSmallerThanSecretNumber()
    {
        return $this->guessNumber < $this->getSecretNumber();
    }


    public function getResult()
    {
        return $this->result;
    }

}
