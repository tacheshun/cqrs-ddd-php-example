<?php

namespace CodelyTv\Tests\Unit;

use CodelyTv\Test\PhpUnit\TestCase\UnitTestCase;
use CodelyTv\Tests\Unit\Enum\NumberTestEnum;
use CodelyTv\Tests\Unit\Enum\StringTestEnum;

final class EnumTest extends UnitTestCase
{
    /** @test */
    public function it_should_be_able_to_construct_enums_with_strings_inside()
    {
        $this->assertEquals('one', StringTestEnum::one()->value());
        $this->assertEquals('two', StringTestEnum::two()->value());
        $this->assertEquals('A very large number', StringTestEnum::aVeryLargeNumber()->value());
    }

    /** @test */
    public function it_should_be_able_to_construct_enums_with_numbers_inside()
    {
        $this->assertEquals(1, NumberTestEnum::one()->value());
        $this->assertEquals(2, NumberTestEnum::two()->value());
    }
}
