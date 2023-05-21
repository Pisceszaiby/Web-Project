<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Product;

class EditProductTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    use DatabaseMigrations;
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $products = Product::all();
            foreach ($products as $product){
            $browser->visit('/productTable')
                    ->assertSee($product->Title)
                    ->clickLink('Edit')
                    ->assertPathIs('/editProduct/'.$product->id)
                    ->assertSee($product->Title)
                    ->type('quantity','40') // Fill in the name field
                    ->type('price', '15')
                    ->press('Update Product')
                    ->assertPathIs('/productTable')
                    ->assertSee($product->Title);

            }
        });
    }
}
