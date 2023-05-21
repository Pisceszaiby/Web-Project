<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Product;

class ViewProductTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    use DatabaseMigrations;
     public function testViewProduct():void{

        $Lipproducts = Product::where('Category'=='LIPS');
        $Faceproducts = Product::where('Category'=='FACE');
        $BodyProducts = Product::where('Category'=='BODY');
        $SkincareProducts = Product::where('Category'=='SKINCARE');
        $EyeProducts = Product::where('Category'=='EYES');
        


    $this->browse(function (Browser $browser) use ($Lipproducts,$Faceproducts,$BodyProducts,$SkincareProducts,$EyeProducts){  
        foreach ($Lipproducts as $Lipproduct) { 
        $browser->visit('/lips')
            ->assertSee($Lipproduct->Title) // Verify that the product name is displayed on the page
            ->clickLink($Lipproduct->Title) // Click on the product link
            ->assertPathIs('/productInfo/' . $Lipproduct->id) // Verify that the user is redirected to the product details page
            ->assertSee($Lipproduct->Description) // Verify that the product description is displayed on the page
            ->assertSee($Lipproduct->price); // Verify that the product price is displayed on the page

        }

        foreach($Faceproducts as $Faceproduct){
            $browser->visit('/face')
            ->assertSee($Faceproduct->Title) // Verify that the product name is displayed on the page
            ->clickLink($Faceproduct->Title) // Click on the product link
            ->assertPathIs('/productInfo/' . $Faceproduct->id) // Verify that the user is redirected to the product details page
            ->assertSee($Faceproduct->Description) // Verify that the product description is displayed on the page
            ->assertSee($Faceproduct->price); // Verify that the product price is displayed on the page
        }





        foreach($EyeProducts as $EyeProduct){
            $browser->visit('/eyes')
            ->assertSee($EyeProduct->Title) // Verify that the product name is displayed on the page
            ->clickLink($EyeProduct->Title) // Click on the product link
            ->assertPathIs('/productInfo/' . $EyeProduct->id) // Verify that the user is redirected to the product details page
            ->assertSee($EyeProduct->Description) // Verify that the product description is displayed on the page
            ->assertSee($EyeProduct->price); // Verify that the product price is displayed on the page
        }

        foreach($SkincareProducts as $SkincareProduct){
            $browser->visit('/skincare')
            ->assertSee($SkincareProduct->Title) // Verify that the product name is displayed on the page
            ->clickLink($SkincareProduct->Title) // Click on the product link
            ->assertPathIs('/productInfo/' . $SkincareProduct->id) // Verify that the user is redirected to the product details page
            ->assertSee($SkincareProduct->Description) // Verify that the product description is displayed on the page
            ->assertSee($SkincareProduct->price); // Verify that the product price is displayed on the page

        }

        foreach($BodyProducts as $BodyProduct){
            $browser->visit('/body')
            ->assertSee($BodyProduct->Title) // Verify that the product name is displayed on the page
            ->clickLink($BodyProduct->Title) // Click on the product link
            ->assertPathIs('/productInfo/' . $BodyProduct->id) // Verify that the user is redirected to the product details page
            ->assertSee($BodyProduct->Description) // Verify that the product description is displayed on the page
            ->assertSee($BodyProduct->price); // Verify that the product price is displayed on the page

        }

    });

}
}
