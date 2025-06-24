<?php

namespace Turker\Devops;

class UserModel
{
    public function __construct(private string $data) {
    }
    public function id(): int
    {
        return 1;
    }
}
