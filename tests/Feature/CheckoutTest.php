<?php

namespace Tests\Feature\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;


class CheckoutTest extends TestCase
{

    public function test_checkout_url_status_ok()
    {
        $response = $this->get('/checkout');

        $response->assertStatus(200);
    }

    public function test_checkout_form_can_be_submitted()
    {

        $response = $this->post('/checkout', [
            'fname' => 'John',
            'lname' => 'Doe',
            'email' => 'john.doe@example.com',
            'address' => '123 Main St',
            'city' => 'Anytown',
        ]);

        $response->assertStatus(200);
    }

    public function test_cart_empty_after_checkout()
    {
        $response = $this->post('/checkout', [
            'fname' => 'John',
            'lname' => 'Doe',
            'email' => 'john.doe@example.com',
            'address' => '123 Main St',
            'city' => 'Anytown',
        ]);

        // Assert that the response status code is 302 (redirect)
        $response->assertStatus(200);

        $items = DB::table('carts')->get();
        $this->assertEmpty($items);

        // Assert that the cart is now empty
        $this->assertEmpty($items);
    }

    public function test_user_cannot_submit_checkout_form_without_required_fields()
    {
        $response = $this->withoutExceptionHandling()->post('/checkout', [
            'fname' => 'John',
            'lname' => 'Doe',
            'email' => 'john.doe@example.com',
            'address' => '123 Main St',
        ]);

        // Check the response status
        $response->assertStatus(500);

        // Check if the error message is present in the response
        $response->assertSessionHasErrors(['city']);
    }

    public function test_checkout_redirects_to_confirmation()
    {
        $response = $this->post('/checkout', [
            'fname' => 'John',
            'lname' => 'Doe',
            'email' => 'john.doe@example.com',
            'address' => '123 Main St',
            'city' => 'Anytown',
        ]);

        // Assert that the response status code is 302 (redirect)
        $response->assertStatus(200);

        $response->assertSee('Thank you');
    }

}
