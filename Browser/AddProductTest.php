<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddProductTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    use DatabaseMigrations;
    public function testAddProduct(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/adminHomePage')
                ->assertSee('Add Product')
                ->clickLink('Add Product') // Click on the "Add Product" link
                ->assertPathIs('/addProduct')
                ->type('title', 'New Product') // Fill in the name field
                ->type('type', 'lips') // Fill in the description field
                ->type('sub-cat', 'liptint') 
                ->type('price', '5') 
                ->type('quantity', '2') 
                ->type('img', 'http://127.0.0.1:8000/images/signin.png') 
                ->type('img2', 'http://127.0.0.1:8000/images/signin.png')
                ->type('desc', 'this is a product')
                // Fill in the price field
                ->press('Add Product') // Click the "Add Product" button
                ->assertPathIs('/productTable') // Verify that the user is redirected to the products page
                ->assertSee('New Product') // Verify that the added product name is displayed on the page
                ->assertSee('This is a new product') // Verify that the added product description is displayed on the page
                ->assertSee('5'); // Verify that the added product price is displayed on the page
        });
       
    }
}
