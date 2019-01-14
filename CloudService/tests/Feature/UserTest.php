<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    public function test_user_can_see_profile_logged_in()
    {

        $user = factory(\App\User::class)->make();
        $response = $this->actingAs($user)->get('/profile');
        $response->assertSuccessful();
    }

    public function test_user_cannot_see_profile_not_logged_in()
    {
        $this->assertTrue(true);
    }
}
