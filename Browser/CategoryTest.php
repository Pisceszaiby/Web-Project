<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoryTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    use DatabaseMigrations;
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                ->clickLink('lipsDropLink') // Click on the "Lip" category
                ->assertVisible('nav-item dropdown') // Verify that the dropdown items are visible
                ->select('Lips','Lips Main') // Click on the first dropdown item
                ->assertPathIs('/lips') // Verify that the user is redirected to the Lip category page
                ->clickLink('Pencils') 
                ->assertPathIs('/lipPencils') 
                ->clickLink('Lip Sticks') // Click on the "Eye" category
                ->assertPathIs('/lipSticks') // Verify that the user is redirected to the lipsticks category page
                ->clickLink('Lip Tints') // Click on the "Lip Tints" link
                ->assertPathIs('/lipTints') 
                ->clickLink('Lip Sets') // Click on the "Lip Sets" category
                ->assertPathIs('/lipSets') // Verify that the user is redirected to the lipsets category page
       
                ->clickLink('Face') // Click on the "Lip" category
                ->assertVisible('nav-item dropdown') // Verify that the dropdown items are visible
                ->clickLink('Face Main') // Click on the first dropdown item
                ->assertPathIs('/face') // Verify that the user is redirected to the Lip category page
                ->clickLink('Highlighters') // Click on the "Back to Dashboard" link
                ->assertPathIs('/highlighter') // Verify that the user is redirected back to the dashboard
                ->clickLink('Concealers') // Click on the "Eye" category
                ->assertPathIs('/concealer') // Verify that the user is redirected to the Eye category page
                ->clickLink('Blush') // Click on the "Back to Dashboard" link
                ->assertPathIs('/blush') // Verify that the user is redirected back to the dashboard
                ->clickLink('Foundation') // Click on the "Skin" category
                ->assertPathIs('/foundation') // Verify that the user is redirected to the Skin category page
                ->clickLink('Brushes') // Click on the "Skin" category
                ->assertPathIs('/brushes') // Verify that the user is redirected to the Skin category page


                ->clickLink('Body') // Click on the "Lip" category
                ->assertVisible('nav-item dropdown') // Verify that the dropdown items are visible
                ->clickLink('Body Main') // Click on the first dropdown item
                ->assertPathIs('/body') // Verify that the user is redirected to the Lip category page
                ->clickLink('Scrubs') // Click on the "Back to Dashboard" link
                ->assertPathIs('/scrubs') // Verify that the user is redirected back to the dashboard
                ->clickLink('Oils') // Click on the "Eye" category
                ->assertPathIs('/oils') // Verify that the user is redirected to the Eye category page
                ->clickLink('Lotion') // Click on the "Back to Dashboard" link
                ->assertPathIs('/lotions') // Verify that the user is redirected back to the dashboard
               
                ->clickLink('Skincare') // Click on the "Lip" category
                ->assertVisible('nav-item dropdown') // Verify that the dropdown items are visible
                ->clickLink('Skincare Main') // Click on the first dropdown item
                ->assertPathIs('/skincare') // Verify that the user is redirected to the Lip category page
                ->clickLink('Serums') // Click on the "Back to Dashboard" link
                ->assertPathIs('/serums') // Verify that the user is redirected back to the dashboard
                ->clickLink('Masks') // Click on the "Eye" category
                ->assertPathIs('/masks') // Verify that the user is redirected to the Eye category page
                ->clickLink('Cleansers') // Click on the "Back to Dashboard" link
                ->assertPathIs('/cleanser') // Verify
                
                
                ->clickLink('Eyes') // Click on the "Lip" category
                ->assertVisible('nav-item dropdown') // Verify that the dropdown items are visible
                ->clickLink('Eyes Main') // Click on the first dropdown item
                ->assertPathIs('/eyes') // Verify that the user is redirected to the Lip category page
                ->clickLink('Mascara') // Click on the "Back to Dashboard" link
                ->assertPathIs('/mascara') // Verify that the user is redirected back to the dashboard
                ->clickLink('Eye Liners') // Click on the "Eye" category
                ->assertPathIs('/eyeliner') // Verify that the user is redirected to the Eye category page
                ->clickLink('Eye Shadows') // Click on the "Back to Dashboard" link
                ->assertPathIs('/eyeshadows') // Verify 
        
       
                ->clickLink('About Us') // Click on the "Lip" category
                ->assertVisible('nav-item dropdown') // Verify that the dropdown items are visible
                ->clickLink('About Us') // Click on the first dropdown item
                ->assertPathIs('/AboutUs') // Verify that the user is redirected to the Lip category page
                ->clickLink('Contact Us') // Click on the "Back to Dashboard" link
                ->assertPathIs('/contactUs') // Verify that the user is redirected back to the dashboard
                ->clickLink('Privacy Policy') // Click on the "Eye" category
                ->assertPathIs('/privacyPolicy');
            });

    }
}
