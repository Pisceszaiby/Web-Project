<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Product;

class DeleteProductTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     */
    use DatabaseMigrations;
    public function testExample(): void
    {
        
        $this->browse(function (Browser $browser) {
            $product = Product::first();
            $browser->visit('/productTable')
                    ->assertSee($product->Title)
                    ->clickLink('Delete')
                    ->assertPathIs('/productTable')
                    ->assertDontSee($product->Title);
                    
        });
    }
}
