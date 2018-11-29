<?php

namespace Kata;

class MarsRover
{
    public const FORWARD = 'f';
    public const BACKWARD = 'b';
    public const LEFT = 'l';
    /**
     * @var Position
     */
    private $position;
    /**
     * @var Direction
     */
    private $direction;

    public function __construct(Position $position, Direction $direction)
    {
        $this->position = $position;
        $this->direction = $direction;
    }

    /**
     * @return Position
     */
    public function position(): Position
    {
        return $this->position;
    }

    /**
     * @return Direction
     */
    public function direction(): Direction
    {
        return $this->direction;
    }

    public function move(array $commands):void
    {
        foreach ($commands as $command) {
            switch ($command) {
                case self::FORWARD:
                    $this->position = $this->position->forward($this->direction);
                    break;
                case self::BACKWARD:
                    $this->position = $this->position->backward($this->direction);
                    break;
                case self::LEFT:
                    $this->direction  = $this->direction->turnLeft();
            }
        }
    }

}
