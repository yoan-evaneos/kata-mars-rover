<?php

namespace Kata;

class Position
{
    /**
     * @var int
     */
    private $x;
    /**
     * @var int
     */
    private $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function forward(Direction $direction): Position
    {
        switch ($direction->direction()) {
            case Direction::NORTH:
                return new Position($this->x + 1, $this->y);
            case Direction::SOUTH:
                return new Position($this->x - 1, $this->y);
            case Direction::EAST:
                return new Position($this->x, $this->y + 1);
            case Direction::WEST:
                return new Position($this->x, $this->y - 1);
        }
    }


    public function backward(Direction $direction): Position
    {
        switch ($direction->direction()) {
            case Direction::NORTH:
                return new Position($this->x - 1, $this->y);
            case Direction::SOUTH:
                return new Position($this->x + 1, $this->y);
            case Direction::EAST:
                return new Position($this->x, $this->y - 1);
            case Direction::WEST:
                return new Position($this->x, $this->y + 1);
        }
    }

    /**
     * @return int
     */
    public function x(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function y(): int
    {
        return $this->y;
    }
}
