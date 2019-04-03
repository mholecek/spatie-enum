<?php

namespace Spatie\Enum\OldTests;

use PHPUnit\Framework\TestCase;
use Spatie\Enum\Tests\Enums\WeekDayEnum;

class WeekDayEnumTest extends TestCase
{
    /** @test */
    public function can_create_instance_from_static_method()
    {
        $monday = WeekDayEnum::monday();

        $this->assertInstanceOf(WeekDayEnum::class, $monday);
        $this->assertSame(1, $monday->getIndex());
        $this->assertSame('Montag', $monday->getValue());
    }

    /** @test */
    public function can_make_instance_from_value()
    {
        $tuesday = WeekDayEnum::make('Dienstag');

        $this->assertInstanceOf(WeekDayEnum::class, $tuesday);
        $this->assertSame(2, $tuesday->getIndex());
        $this->assertSame('Dienstag', $tuesday->getValue());
    }

    /** @test */
    public function can_make_instance_from_name()
    {
        $wednesday = WeekDayEnum::make('wednesday');

        $this->assertInstanceOf(WeekDayEnum::class, $wednesday);
        $this->assertSame(3, $wednesday->getIndex());
        $this->assertSame('Mittwoch', $wednesday->getValue());
    }

    /** @test */
    public function can_make_instance_from_index()
    {
        $thursday = WeekDayEnum::make(4);

        $this->assertInstanceOf(WeekDayEnum::class, $thursday);
        $this->assertSame(4, $thursday->getIndex());
        $this->assertSame('Donnerstag', $thursday->getValue());
    }

    /** @test */
    public function can_represent_itself_as_array()
    {
        $this->assertEquals([
            'Montag' => 1,
            'Dienstag' => 2,
            'Mittwoch' => 3,
            'Donnerstag' => 4,
            'Freitag' => 5,
            'Samstag' => 6,
            'Sonntag' => 7,
        ], WeekDayEnum::toArray());
    }

    /** @test */
    public function can_represent_its_values_as_array()
    {
        $this->assertEquals([
            'Montag',
            'Dienstag',
            'Mittwoch',
            'Donnerstag',
            'Freitag',
            'Samstag',
            'Sonntag',
        ], WeekDayEnum::getValues());
    }

    /** @test */
    public function can_represent_its_indices_as_array()
    {
        $this->assertEquals([
            1,
            2,
            3,
            4,
            5,
            6,
            7,
        ], WeekDayEnum::getIndices());
    }
}
