<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testEmail()
    {
        $result = Email::validate('josequiloz@gmail.com');
        $this->assertTrue($result);

        $result = Email::validate('josequiloz@@gmail.com');
        $this->assertFalse($result);


    }
}
