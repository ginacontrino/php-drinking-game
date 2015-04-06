<?php

use Gina\Utilities as Utils;
use Gina\DrinkingGame\DrinkingGameFactory;

require 'vendor/autoload.php';

try
{
    $guessNumber = Utils::getArrayOrFail($argv, 1, 'Please enter guess number as first Argument.');
    echo DrinkingGameFactory::create()->play($guessNumber);
} catch (Exception $e)
{
    echo $e->getMessage();
}


