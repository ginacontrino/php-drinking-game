<?php namespace Gina\DrinkingGame;

class DrinkingGameFactory {

    public static function create()
    {
        return new DrinkingGame(RandomNumberFactory::create());
    }
}