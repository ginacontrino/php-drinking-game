<?php namespace Gina\DrinkingGame;

use RandomLib\Factory;
use SecurityLib\Strength;

class RandomNumberFactory {

    public static function create()
    {
        $generator = (new Factory())->getGenerator(new Strength(Strength::MEDIUM));

        return new RandomNumber($generator);
    }
}