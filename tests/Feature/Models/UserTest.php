<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;


    public function testUser()
    {
        User::factory()->create([
            'email' => 'josequiloz@gmail.com'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'josequiloz@gmail.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'josequiloz2@gmail.com'
        ]);
    }
}
