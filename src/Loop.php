<?php

namespace ThibaudDauce\PHPStanBlade;

class Loop
{
    /** @var 0|positive-int */
    public int $index;

    /** @var positive-int */
    public int $iteration;

    /** @var positive-int */
    public int $remaining;

    /** @var positive-int */
    public int $count;

    public bool $first;

    public bool $last;

    public bool $even;

    public bool $odd;

    /** @var positive-int */
    public int $depth;

    /** @var __benevolent<Loop|null> */
    public Loop|null $parent;
}