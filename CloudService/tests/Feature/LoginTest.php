<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * View login form
     *
     * @return void
     */
    public function test_user_can_view_login_form()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();
    }

    public function test_user_cannot_view_login_form()
    {
        $user = factory(\App\User::class)->make();
        $response = $this->actingAs($user)->get('/login');
        $response->assertRedirect('/');
    }

    public function test_user_can_login_with_correct_credentials()
    {
        $user = factory(\App\User::class)->create([
            'client_number' => '123456',
            'password' => bcrypt($password = '123456'),
        ]);

        $response = $this->post('/login', [
            'client_number' => $user->client_number,
            'password' => $password,
        ]);

        $this->assertAuthenticatedAs($user);
        $response->assertRedirect('/');
    }

    public function test_user_can_logout()
    {
        $user = factory(\App\User::class)->create([
            'client_number' => '123456',
            'password' => bcrypt($password = '123456'),
        ]);

        $this->post('/login', [
            'client_number' => $user->client_number,
            'password' => $password,
        ]);

        $response = $this->get('/logout');

        $this->assertGuest();
        $response->assertRedirect('/login');
    }
}
