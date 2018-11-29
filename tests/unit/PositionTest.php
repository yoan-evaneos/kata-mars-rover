<?php

namespace Kata\Test;

use Kata\Direction;
use Kata\Position;
use PHPUnit\Framework\TestCase;

/**
 * @group
 */
class PositionTest extends TestCase
{
    /** @var Position */
    private $SUT;

    public function setUp()
    {
        $this->SUT = new Position(0, 0);
    }

    public function provideForwardExamples(): array
    {
        return [
            'Forward to north must return (1,0)' => [
                Direction::north(),
                new Position(1, 0),
            ],
            'Forward to south must return (-1,0)' => [
                Direction::south(),
                new Position(-1, 0),
            ],
            'Forward to east must return (0,1)' => [
                Direction::east(),
                new Position(0, 1),
            ],
            'Forward to west must return (0, -1)' => [
                Direction::west(),
                new Position(0, -1),
            ],
        ];
    }

    public function provideBackwardExamples(): array
    {
        return [
            'Backward to north must return (-1,0)' => [
                Direction::north(),
                new Position(-1, 0),
            ],
            'Backward to south must return (1,0)' => [
                Direction::south(),
                new Position(1, 0),
            ],
            'Backward to east must return (0,-1)' => [
                Direction::east(),
                new Position(0, -1),
            ],
            'Backward to west must return (0, 1)' => [
                Direction::west(),
                new Position(0, 1),
            ],
        ];
    }

    /** @test
     * @dataProvider provideForwardExamples
     *
     * @param Direction $direction
     * @param Position $position
     */
    public function it_forwards(Direction $direction, Position $position):void
    {
        $newPosition = $this->SUT->forward($direction);
        self::assertEquals($position, $newPosition);
    }

    /** @test
     * @dataProvider provideBackwardExamples
     *
     * @param Direction $direction
     * @param Position $position
     */
    public function it_backwards(Direction $direction, Position $position): void
    {
        $newPosition = $this->SUT->backward($direction);
        self::assertEquals($position, $newPosition);
    }
}
