<?php

namespace Tests\Feature\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Admin;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_is_able_to_login()
    {
        $response = $this->post('/login', [
            'email' => 'zanwaar.bese20seecs@seecs.edu.pk',
            'password' => '123',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/adminHomePage');
    }

    public function test_admin_cannot_log_in_with_invalid_email()
    {
        $response = $this->post('/login', [
            'email' => 'zanwaar',
            'password' => '123',
        ]);

        $response->assertSessionHasErrors();
    }

    public function test_admin_cannot_log_in_with_invalid_password()
    {
        $response = $this->post('/login', [
            'email' => 'zanwaar.bese20seecs@seecs.edu.pk',
            'password' => '123422312',
        ]);

        $response->assertStatus(200);
    }

    public function test_admin_cannot_log_in_with_invalid_username_and_password()
    {
        $response = $this->post('/login', [
            'email' => 'zanwaar',
            'password' => '1234898',
        ]);

        $response->assertSessionHasErrors();
    }
}
