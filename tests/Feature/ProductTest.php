<?php

namespace Tests\Feature\feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Admin;

use function PHPUnit\Framework\assertNotNull;


class ProductTest extends TestCase
{

    public function test_homepage_showing_products_status_ok()
    {
        $response = $this->get('/homepage');
        $response->assertStatus(200);
        $product = Product::where('Quantity', '10')->first();
        $this->assertNotNull($product);
        $response->assertSeeText($product->title);
    }

    public function test_category_page_body_showing_products_status_ok()
    {
        $response = $this->get('/body');
        $response->assertStatus(200);
        $product = Product::where('Category', 'BODY')->first();
        $this->assertNotNull($product);
        $response->assertSeeText($product->title);
    }
    public function test_category_page_eyes_showing_products_status_ok()
    {
        $response = $this->get('/eyes');
        $response->assertStatus(200);
        $product = Product::where('Category', 'EYES')->first();
        $this->assertNotNull($product);
        $response->assertSeeText($product->title);
    }
    public function test_category_page_skincare_showing_products_status_ok()
    {
        $response = $this->get('/skincare');
        $response->assertStatus(200);
        $product = Product::where('Category', 'SKINCARE')->first();
        $this->assertNotNull($product);
        $response->assertSeeText($product->title);
    }
    public function test_category_page_face_showing_products_status_ok()
    {
        $response = $this->get('/face');
        $response->assertStatus(200);
        $product = Product::where('Category', 'FACE')->first();
        $this->assertNotNull($product);
        $response->assertSeeText($product->title);
    }
    public function test_category_page_lips_showing_products_status_ok()
    {
        $response = $this->get('/lips');
        $response->assertStatus(200);
        $product = Product::where('Category', 'LIPS')->first();
        $this->assertNotNull($product);
        $response->assertSeeText($product->title);
    }
    public function test_category_page_sale_showing_products_status_ok()
    {
        $response = $this->get('/Sale');
        $response->assertStatus(200);
        $product = Product::where('Sale', '1')->first();
        $this->assertNotNull($product);
        $response->assertSeeText($product->title);
    }

    public function test_subcategory_page__showing_products_status_ok()
    {
        $response = $this->get('/mascara');
        $response->assertStatus(200);
        $product = Product::where('SubCategory', 'MASCARA')->first();
        $this->assertNotNull($product);
        $response->assertSeeText($product->title);
    }

    public function test_product_info_page_showing_products_status_ok()
    {

        $product = Product::inRandomOrder()->first();
        $productId = $product->id;
        $response = $this->get('/productInfo/' . $productId);
        $this->assertNotNull($product);
        $response->assertSeeText($product->title);
        $response->assertSeeText($product->description);
        $response->assertSeeText($product->price);
        $response->assertSeeText($product->quantity);
        $response->assertSeeText($product->category);
    }

    public function test_redirect_to_product_table_with_only_authentication_of_admin()
    {

        $response = $this->get('/productTable');
        $response->assertStatus(404);
        $response->assertRedirect('/login');
    }

    public function test_redirect_to_add_product_with_only_authentication_of_admin()
    {

        $response = $this->get('/addProduct');
        $response->assertStatus(404);
        $response->assertRedirect('/login');
    }


    public function test_redirect_to_edit_product_without_authentication_of_admin()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->id;
        $this->assertNotNull($product);
        $response = $this->get('/editProduct/' . $productId);
        $response->assertStatus(404);
        $response->assertRedirect('/login');
    }


    public function test_redirect_to_delete_product_without_authentication_of_admin()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->id;
        $this->assertNotNull($product);
        $response = $this->get('/deleteProduct/' . $productId);
        $response->assertStatus(404);
        $response->assertRedirect('/login');
    }


    public function test_edit_a_product_not_in_db()
    {
        $productID = 0;
        $response = $this->get('/editProduct/' . $productID);
        $response->assertRedirect("/");
    }
    public function test_delete_a_product_not_in_db()
    {
        $productID = 0;
        $response = $this->get('/deleteProduct/' . $productID);
        $response->assertRedirect("/");
    }
    public function test_edit_a_product_which_is_in_db_with_complete_fields()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '44',
            'quantity' => '123',
            'desc' => 'test',
            'img' => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png'
        ]);

        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $this->assertEquals($product->Title, 'test');
        $this->assertEquals($product->Category, 'EYES');
        $this->assertEquals($product->SubCategory, 'MASCARA');
        $this->assertEquals($product->price, '44');
        $this->assertEquals($product->Quantity, '123');
        $this->assertEquals($product->Description, 'test');
        $this->assertEquals($product->picPath, 'http://127.0.0.1:8000/images/signin.png');
        $this->assertEquals($product->picPath2, 'http://127.0.0.1:8000/images/signin.png');
    }
    public function test_edit_a_product_with_incomplete_fields_Title()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, [

            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '44',
            'quantity' => '123',
            'desc' => 'test',
            'img' => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png'
        ]);

        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $response->assertInvalid('title');
    }
    public function test_edit_a_product_with_incomplete_fields_Category()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, [
            'title' => 'test',
            'sub-cat' => 'MASCARA',
            'price' => '44',
            'quantity' => '123',
            'desc' => 'test',
            'img' => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png'
        ]);

        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $response->assertInvalid('type');
    }
    public function test_edit_a_product_with_incomplete_fields_SubCategory()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, [
            'title' => 'test',
            'type' => 'EYES',

            'price' => '44',
            'quantity' => '123',
            'desc' => 'test',
            'img' => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png'
        ]);

        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $response->assertInvalid('sub-cat');
    }
    public function test_edit_a_product_with_incomplete_fields_Price()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',

            'quantity' => '123',
            'desc' => 'test',
            'img' => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png'
        ]);

        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $response->assertInvalid('price');
    }
    public function test_edit_a_product_with_incomplete_fields_Quantity()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '44',

            'desc' => 'test',
            'img' => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png'
        ]);

        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $response->assertInvalid('quantity');
    }
    public function test_edit_a_product_with_incomplete_fields_Description()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '44',
            'quantity' => '123',

            'img' => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png'
        ]);

        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $response->assertInvalid('desc');
    }
    public function test_edit_a_product_with_incomplete_fields_Image1()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '44',
            'quantity' => '123',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png'
        ]);

        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $response->assertInvalid('img');
    }
    public function test_edit_a_product_with_incomplete_fields_Image2()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '44',
            'quantity' => '123',
            'img'  => 'http://127.0.0.1:8000/images/signin.png'
        ]);

        $response->assertStatus(302);

        $response->assertInvalid('img2');
    }
    public function test_edit_a_product_with_incomplete_fields_All()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, []);

        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $response->assertInvalid('title');
        $response->assertInvalid('type');
        $response->assertInvalid('sub-cat');
        $response->assertInvalid('price');
        $response->assertInvalid('quantity');
        $response->assertInvalid('desc');
        $response->assertInvalid('img');
        $response->assertInvalid('img2');
    }

    public function test_edit_a_product_with_incorrect_datatypes_Quantity()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '44',
            'quantity' => 'red',
            'img'  => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png',

        ]);
        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $productQuantity = $product->Quantity;
        $this->assertNotEquals($productQuantity, 'red');
    }
    public function test_edit_a_product_with_incorrect_datatypes_Price()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => 'jjj',
            'quantity' => '5',
            'img'  => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);
        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $productPrice = $product->price;
        $this->assertNotEquals($productPrice, 'jjj');
    }
    public function test_edit_a_product_with_incorrect_datatypes_Title()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->post('/editProduct/' . $productId, [
            'title' => 5,
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '5',
            'quantity' => '5',
            'img'  => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);
        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $title = $product->title;
        $this->assertNotEquals($title, 5);
    }
    public function test_add_a_product_with_complete_fields()
    {
        $response = $this->post('/addProduct', [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '44',
            'desc' => 'test',
            'quantity' => '123',
            'img'  => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);
        $response->assertStatus(302);

        $lastProduct = Product::orderBy('productID', 'desc')->first();
        $this->assertEquals($lastProduct->Title, 'test');
        $this->assertEquals($lastProduct->Category, 'EYES');
        $this->assertEquals($lastProduct->SubCategory, 'MASCARA');
        $this->assertEquals($lastProduct->price, '44');
        $this->assertEquals($lastProduct->Quantity, '123');
        $this->assertEquals($lastProduct->Description, 'test');
        $this->assertEquals($lastProduct->picPath, 'http://127.0.0.1:8000/images/signin.png');
        $this->assertEquals($lastProduct->picPath2, 'http://127.0.0.1:8000/images/signin.png');
    }
    public function test_add_a_product_with_incomplete_fields_Title()
    {
        $response = $this->post('/addProduct', [

            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '44',
            'desc' => 'test',
            'quantity' => '123',
            'img'  => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);
        $response->assertStatus(302);

        $lastProduct = Product::orderBy('productID', 'desc')->first();
        $this->assertNotEquals($lastProduct->Title, 'testing12345');
    }
    public function test_add_a_product_with_complete_fields_type()
    {
        $response = $this->post('/addProduct', [
            'title' => 'test',

            'sub-cat' => 'MASCARA',
            'price' => '44',
            'desc' => 'test',
            'quantity' => '123',
            'img'  => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);
        $response->assertStatus(302);

        $lastProduct = Product::orderBy('productID', 'desc')->first();
        $this->assertNotEquals($lastProduct->Category, 'testing12345');
    }
    public function test_add_a_product_with_complete_fields_sub_cat()
    {
        $response = $this->post('/addProduct', [
            'title' => 'test',

            'type' => 'EYES',
            'price' => '44',
            'desc' => 'test',
            'quantity' => '123',
            'img'  => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);
        $response->assertStatus(302);

        $lastProduct = Product::orderBy('productID', 'desc')->first();
        $this->assertNotEquals($lastProduct->SubCategory, 'testing12345');
    }
    public function test_add_a_product_with_incomplete_fields_price()
    {
        $response = $this->post('/addProduct', [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'desc' => 'test',
            'quantity' => '123',
            'img'  => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);
        $response->assertStatus(302);

        $lastProduct = Product::orderBy('productID', 'desc')->first();
        $this->assertNotEquals($lastProduct->price, '95984038403');
    }
    public function test_add_a_product_with_incomplete_fields_Quantity()
    {
        $response = $this->post('/addProduct', [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'desc' => 'test',
            'price' => '44',

            'img'  => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);
        $response->assertStatus(302);

        $lastProduct = Product::orderBy('productID', 'desc')->first();
        $this->assertNotEquals($lastProduct->Quantity, '95984038403');
    }
    public function test_add_a_product_with_incomplete_fields_Image1()
    {
        $response = $this->post('/addProduct', [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'desc' => 'test',
            'price' => '44',
            'quantity' => '123',

            'img2'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);
        $response->assertStatus(302);

        $lastProduct = Product::orderBy('productID', 'desc')->first();
        $this->assertNotEquals($lastProduct->picPath, '95984038403');
    }
    public function test_add_a_product_with_incomplete_fields_Image2()
    {
        $response = $this->post('/addProduct', [
            'title' => 'test',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'desc' => 'test',
            'price' => '44',
            'quantity' => '123',

            'img'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);
        $response->assertStatus(302);

        $lastProduct = Product::orderBy('productID', 'desc')->first();
        $this->assertNotEquals($lastProduct->picPath2, '95984038403');
    }
    public function test_add_a_product_with_all_incomplete_fields()
    {
        $response = $this->post('/addProduct', []);
        $response->assertStatus(302);

        $lastProduct = Product::orderBy('productID', 'desc')->first();
        $this->assertNotEquals($lastProduct->picPath2, '95984038403');
    }
    public function test_add_a_product_with_incorrect_datatypes_price()
    {
        $response = $this->post('/addProduct', [
            'title' => 'testing12345',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '4f4',
            'desc' => 'test',
            'quantity' => '123',
            'img'  => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);


        $lastProduct = Product::orderBy('productID', 'desc')->first();
        $this->assertNotEquals($lastProduct->Title, 'testing12345');
    }
    public function test_add_a_product_with_incorrect_datatypes_quantity()
    {
        $response = $this->post('/addProduct', [
            'title' => 'testing12345',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '44',
            'desc' => 'test',
            'quantity' => 'a123',
            'img'  => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);


        $lastProduct = Product::orderBy('productID', 'desc')->first();
        $this->assertNotEquals($lastProduct->Title, 'testing12345');
    }
    public function test_delete_a_product_in_db()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $response = $this->get('/deleteProduct/' . $productId);
        $product = Product::where('productID', $productId)->first();
        $this->assertNull($product);
    }


    public function test_delete_a_product_and_check_if_it_is_reflected_in_product_table()
    {

        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $productTitle = $product->Title;
        $response = $this->get('/deleteProduct/' . $productId);
        $product = Product::where('productID', $productId)->first();
        $this->assertNull($product);
        $response = $this->get('/productTable');
        $response->assertDontSee($productTitle);
    }
    public function test_edit_a_product_and_check_if_it_is_reflected_in_product_table()
    {
        $product = Product::inRandomOrder()->first();
        $productId = $product->productID;
        $productTitle = $product->Title;

        $response = $this->post('/editProduct/' . $productId, [
            'title' => 'testing12345',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '44',
            'quantity' => '123',
            'desc' => 'test',
            'img' => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png'
        ]);

        $response->assertStatus(302);
        $product = Product::where('productID', $productId)->first();
        $this->assertEquals($product->Title, 'testing12345');
        $response = $this->get('/productTable');
        $response->assertDontSee($productTitle);
    }
    public function test_add_a_product_and_check_if_it_is_reflected_in_product_table()
    {
        $response = $this->post('/addProduct', [
            'title' => 'test987',
            'type' => 'EYES',
            'sub-cat' => 'MASCARA',
            'price' => '44',
            'desc' => 'test',
            'quantity' => '123',
            'img'  => 'http://127.0.0.1:8000/images/signin.png',
            'img2'  => 'http://127.0.0.1:8000/images/signin.png',
        ]);
        $response->assertStatus(302);

        $lastProduct = Product::orderBy('productID', 'desc')->first();
        $response = $this->get('/productTable');

        $response->assertSee($lastProduct->Title);
    }
}
