<?php

declare(strict_types=1);

namespace Turker\Devops\Tests;

use PHPUnit\Framework\TestCase;
use Turker\Devops\UserModel;

class UserModelTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testId(): void
    {
        $user = new UserModel();
        $this->assertEquals(1, $user->id());
    }
}
