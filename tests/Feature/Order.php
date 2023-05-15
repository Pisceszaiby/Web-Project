<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Order extends TestCase
{
    
    public function test_order_was_added()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
