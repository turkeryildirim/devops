<?php

declare(strict_types=1);

namespace App\Devops\Tests;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testSample(): void
    {
        $data = null;

        $this->assertNull($data);
    }
}
