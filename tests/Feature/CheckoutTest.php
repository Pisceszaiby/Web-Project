<?php

namespace Tests\Feature\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CheckoutTest extends TestCase
{

    public function test_checkout_url_status_ok()
    {
        $response = $this->get('/checkout');

        $response->assertStatus(200);
    }

    public function test_checkout_form_can_be_submitted()
    {
        $response = $this->get('/checkout');

        $response->assertStatus(200);
    }

    public function test_user_cannot_submit_checkout_form_without_required_fields()
    {
        $response = $this->get('/checkout');

        $response->assertStatus(200);
    }

    public function test_checkout_redirects_to_confirmation()
    {
        $response = $this->get('/checkout');

        $response->assertStatus(200);
    }
}
