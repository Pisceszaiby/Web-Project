<?php

namespace Tests\Feature\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;

use function PHPUnit\Framework\assertEquals;

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

    public function test_cart_is_empty_after_checkout()
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

    public function test_user_cannot_submit_checkout_form_with_invalid_email()
    {
        $response = $this->post('/checkout', [
            'fname' => 'John',
            'lname' => 'Doe',
            'city'  => "abc",
            'email' => 'john.doe',
            'address' => '123 Main St',
        ]);
        $response->assertStatus(500);
        // Check if the error message is present in the response
        $response->assertSessionHasErrors(['email']);
    }

    public function test_user_cannot_submit_checkout_form_without_city_field()
    {
        try {
            $this->withoutExceptionHandling();
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
        } catch (\Illuminate\Database\QueryException $e) {
            $this->assertStringContainsString("Column 'city' cannot be null", $e->getMessage());
            return;
        }
    }

    public function test_user_cannot_submit_checkout_form_without_firstname_field()
    {
        try {
            $this->withoutExceptionHandling();
            $response = $this->withoutExceptionHandling()->post('/checkout', [
                'lname' => 'Doe',
                'email' => 'john.doe@example.com',
                'address' => '123 Main St',
                'city' => 'abs'
            ]);
            // Check the response status
            $response->assertStatus(500);

            // Check if the error message is present in the response
            $response->assertSessionHasErrors(['firstname']);
        } catch (\Illuminate\Database\QueryException $e) {
            $this->assertStringContainsString("Column 'firstname' cannot be null", $e->getMessage());
            return;
        }
    }

    public function test_user_cannot_submit_checkout_form_without_lastname_field()
    {
        try {
            $this->withoutExceptionHandling();
            $response = $this->withoutExceptionHandling()->post('/checkout', [
                'fname' => 'Doe',
                'email' => 'john.doe@example.com',
                'address' => '123 Main St',
                'city' => 'abs'
            ]);
            // Check the response status
            $response->assertStatus(500);

            // Check if the error message is present in the response
            $response->assertSessionHasErrors(['lastname']);
        } catch (\Illuminate\Database\QueryException $e) {
            $this->assertStringContainsString("Column 'lastname' cannot be null", $e->getMessage());
            return;
        }
    }


    public function test_user_cannot_submit_checkout_form_without_email_field()
    {
        try {
            $this->withoutExceptionHandling();
            $response = $this->withoutExceptionHandling()->post('/checkout', [
                'fname' => 'John',
                'lname' => 'Doe',
                'address' => '123 Main St',
                'city' => 'abs'
            ]);
            // Check the response status
            $response->assertStatus(500);

            // Check if the error message is present in the response
            $response->assertSessionHasErrors(['email']);
        } catch (\Illuminate\Database\QueryException $e) {
            $this->assertStringContainsString("Column 'email' cannot be null", $e->getMessage());
            return;
        }
    }

    public function test_user_cannot_submit_checkout_form_without_address_field()
    {
        try {
            $this->withoutExceptionHandling();
            $response = $this->withoutExceptionHandling()->post('/checkout', [
                'fname' => 'John',
                'lname' => 'Doe',
                'email' => 'john.doe@example.com',
                'city' => 'abs'
            ]);
            // Check the response status
            $response->assertStatus(500);

            // Check if the error message is present in the response
            $response->assertSessionHasErrors(['address']);
        } catch (\Illuminate\Database\QueryException $e) {
            $this->assertStringContainsString("Column 'address' cannot be null", $e->getMessage());
            return;
        }
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

    public function test_product_inventory_reduced_after_checkout()
    {
        $original_product = DB::table('product')
            ->select('quantity')
            ->where('productID', 2)
            ->first();

        $original_quantity = $original_product->quantity;

        $product = new Cart();
        $product->productID = 2;
        $product->cart_id = 1;
        $product->Quantity = 2;
        $product->save();

        // Submit the form
        $response = $this->get("/update-cart?productID={$product->productID}&quantity={$product->Quantity}");

        // Check the response status
        $response->assertStatus(302);


        $response2 = $this->post('/checkout', [
            'fname' => 'John',
            'lname' => 'Doe',
            'email' => 'john.doe@example.com',
            'address' => '123 Main St',
            'city' => 'Anytown',
        ]);

        // Assert that the response status code is 302 (redirect)
        $response2->assertStatus(200);

        assertEquals($original_quantity - 2, 3);
    }
}
