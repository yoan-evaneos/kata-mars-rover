<?php

namespace Kata\Test;

use Kata\Direction;
use PHPUnit\Framework\TestCase;

/**
 * @group
 */
class DirectionTest extends TestCase
{
    /** @var Direction */
    private $SUT;

    public function setUp()
    {
        $this->SUT = Direction::north();
    }

    /**
//     * @test
     */
    public function it_turns_left(): void
    {
        $newDirection = $this->SUT->turnLeft();
        self::assertEquals(Direction::west(), $newDirection);
    }

    /**
     * @test
     */
    public function it_turns_left_twice(): void
    {
        $newDirection = $this->SUT->turnLeft()->turnLeft();
        self::assertEquals(Direction::south(), $newDirection);
    }
}
