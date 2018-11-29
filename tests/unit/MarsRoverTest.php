<?php

namespace Kata\Test;

use Kata\Direction;
use Kata\MarsRover;
use Kata\Position;
use PHPUnit\Framework\TestCase;

/**
 * @group
 */
class MarsRoverTest extends TestCase
{
    /** @var MarsRover */
    private $SUT;

    public function setUp()
    {
        $this->SUT = new MarsRover(new Position(0, 0), Direction::north());
    }

    /**
     * @test
     */
    public function it_moves_forward(): void
    {
        $this->SUT->move(['f']);
        self::assertEquals(new Position(1, 0), $this->SUT->position());
    }

    /**
     * @test
     */
    public function it_moves_backward(): void
    {
        $this->SUT->move(['b']);
        self::assertEquals(new Position(-1, 0), $this->SUT->position());
    }

    /**
     * @test
     */
    public function it_moves_forward_then_backward(): void
    {
        $this->SUT->move(['f', 'b']);
        self::assertEquals(new Position(0, 0), $this->SUT->position());
    }

    /**
     * @test
     */
    public function it_returns_left(): void
    {
        $this->SUT->move(['l']);
        self::assertEquals(Direction::west(), $this->SUT->direction());
    }
}
