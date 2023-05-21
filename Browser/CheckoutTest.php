<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Checkout;
use App\Models\User;
use App\Models\Product;

class CheckoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    use DatabaseMigrations;
    public function testExample(): void
    {

        $this->browse(function (Browser $browser){
            $product = Product::first();
            $browser
                ->visit('/homepage') // Visit the product details page   
                ->assertSee($product->Title) // Verify that the product is displayed on the page
                ->clickLink('Add to Cart')
                ->assertPathIs('/homepage')
                // Click the "Add to Cart" button
                ->clickLink('/cart') // Click the "Cart" link
                ->assertPathIs('/cart') // Verify that the user is redirected to the cart page
                ->assertSee($product->name) // Verify that the product is displayed in the cart
                ->press('Checkout') // Click the "Proceed to Checkout" button
                ->assertPathIs('/checkout') // Verify that the user is redirected to the checkout page
                ->type('fname', 'John ') // Fill in the name field
                ->type('lname', 'Doe')
                ->type('email', 'john@example.com') // Fill in the email field
                ->type('address', '123 Main St') // Fill in the address field
                ->type('city', 'New York') // Fill in the city field
                ->press('Confirm Order')
                ->assertPathIs('/checkout')
                 // Click the "Place Order" button
                ->assertSee('Order Again'); 
        });
        
    }
}
