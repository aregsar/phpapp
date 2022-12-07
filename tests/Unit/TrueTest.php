<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;

class TrueTest extends TestCase
{
    /**
     * @test
     */
    public function trueIsTrue(): void
    {

        $this->assertTrue(true);
    }
}
