<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testEmail()
    {
        $result = validate_email('josequiloz@gmail.com');
        $this->assertTrue($result);

        $result = validate_email('josequiloz@@gmail.com');
        $this->assertFalse($result);
    }
}
