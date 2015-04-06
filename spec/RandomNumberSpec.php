<?php namespace spec\Gina\DrinkingGame;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use RandomLib\Factory;
use RandomLib\Generator;
use SecurityLib\Strength;


class RandomNumberSpec extends ObjectBehavior {

    function let(Generator $generator)
    {
        $this->beConstructedWith($generator);
    }

    function it_creates_random_number_only_once(Generator $generator)
    {
        $generator->generateInt(0, 100)->willReturn(15);
        $this->getRandomNumberOnce()->shouldReturn(15);

        $generator->generateInt(0, 100)->willReturn(99);
        $this->getRandomNumberOnce()->shouldReturn(15);
    }

    function it_creates_different_random_number_after_resetting(Generator $generator)
    {
        $generator->generateInt(0, 100)->willReturn(15);
        $this->getRandomNumberOnce()->shouldReturn(15);

        $this->reset();

        $generator->generateInt(0, 100)->willReturn(99);
        $this->getRandomNumberOnce()->shouldReturn(99);
    }

    function it_should_be_chainable()
    {
        $this->reset()->shouldBeAnInstanceOf('Gina\DrinkingGame\RandomNumber');
    }
}
