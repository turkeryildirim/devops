<?php

declare(strict_types=1);

namespace App\Devops\Tests;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    private int $data;

    protected function setUp(): void
    {
        parent::setUp();
        $this->data = 10 / 2;
    }

    public function testSample(): void
    {
        $this->assertEquals(5, $this->data);
    }
}
