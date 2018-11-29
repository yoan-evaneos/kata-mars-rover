<?php

namespace Kata;

class Direction
{
    public const NORTH = 'N';
    public const EAST = 'E';
    public const SOUTH = 'S';
    public const WEST = 'W';

    private $rotations = [
        self::NORTH,
        self::EAST,
        self::SOUTH,
        self::WEST,
    ];

    /**
     * @var string
     */
    private $direction;

    private function __construct(string $direction)
    {
        $this->direction = $direction;
    }

    public static function north(): Direction
    {
        return new self(self::NORTH);
    }

    public static function south(): Direction
    {
        return new self(self::SOUTH);
    }

    public static function east(): Direction
    {
        return new self(self::EAST);
    }

    public static function west(): Direction
    {
        return new self(self::WEST);
    }

    /**
     * @return string
     */
    public function direction(): string
    {
        return $this->direction;
    }

    public function turnLeft(): Direction
    {
        $position = array_search($this->direction, $this->rotations, true);
        $nextPosition = (4 + $position) - 1;
        return new self($this->rotations[$nextPosition % 4]);
    }
}
