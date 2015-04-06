<?php namespace spec\Gina\DrinkingGame;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Gina\DrinkingGame\RandomNumber;


class DrinkingGameSpec extends ObjectBehavior {
    public $guessNumber;

    function let(RandomNumber $random)
    {
        $random->reset()->willReturn($random);
        $this->beConstructedWith($random);
    }

    function it_tells_if_guess_is_too_high(RandomNumber $random)
    {
        $random->getRandomNumberOnce()->willReturn(5);
        $this->play(10)->shouldReturn('10 is the wrong number. Lower! The secret number is 5' . PHP_EOL);

    }

    function it_tells_if_guess_is_too_low(RandomNumber $random)
    {
        $random->getRandomNumberOnce()->willReturn(20);
        $this->play(10)->shouldReturn('10 is the wrong number. Higher! The secret number is 20' . PHP_EOL);

    }

    function it_tells_if_guessed_correctly(RandomNumber $random)
    {
        $random->getRandomNumberOnce()->willReturn(10);
        $this->play(10)->shouldReturn('10 is the correct number!' . PHP_EOL);
    }
}
