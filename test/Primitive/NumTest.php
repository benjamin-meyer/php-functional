<?php

declare(strict_types=1);

namespace test\Primitive;

use Widmogrod\Helpful\SetoidLaws;
use Widmogrod\Primitive\Num;

class NumTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider provideSetoidLaws
     */
    public function test_it_should_obay_setoid_laws(
        $a,
        $b,
        $c
    ) {
        SetoidLaws::test(
            [$this, 'assertEquals'],
            $a,
            $b,
            $c
        );
    }

    private function randomize()
    {
        return Num::of(random_int(-100000000, 100000000));
    }

    public function provideSetoidLaws()
    {
        return array_map(function () {
            return [
                $this->randomize(),
                $this->randomize(),
                $this->randomize(),
            ];
        }, array_fill(0, 50, null));
    }
}
