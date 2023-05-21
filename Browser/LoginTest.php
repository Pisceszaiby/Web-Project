<?php

namespace Tests\Browser;

use App\Models\User;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogInTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A basic browser test example.
     */
    use DatabaseMigrations;
    public function testLogin(): void
    {

        

        $this->browse(function (Browser $browser) {
            $user = User::first();
            $browser->visit('/login')
            ->type('email', $user->email)
            ->type('password', 'password')
            ->press('Login')
            ->assertPathIs('/adminHomePage') // Verify that the user is redirected to the home page
            ->assertAuthenticated(); // Verify that the user is authenticated
        });
    }
}
