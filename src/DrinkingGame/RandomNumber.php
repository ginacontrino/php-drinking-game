<?php namespace Gina\DrinkingGame;

class RandomNumber {

    protected $generator;

    protected $randomNumber = null;

    public function __construct($generator)
    {
        $this->generator = $generator;
    }

    public function reset()
    {
        $this->randomNumber = null;

        return $this;
    }

    public function getRandomNumberOnce()
    {
        if ($this->randomNumber === null)
        {
            $this->randomNumber = $this->generator->generateInt(0, 100);
        }

        return $this->randomNumber;
    }
}