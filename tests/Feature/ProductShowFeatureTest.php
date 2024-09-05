<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

//it('has a products/{id} route')
//    ->get('/api/v1/products/1')
//    ->assertStatus(200);

//it('retrieves one product', function() {
//
//    // Arrange the test
//    $products = Product::factory(5)->create();
//    $product = Product::first()->get();
//    $id = $product->id;
//
//    // Act on the endpoint
//    $response = $this->get('/api/v1/products/{$id}');
//
//    // Assert the results are correct
//    $response->assertStatus(200)
//        ->assertCount(1);
//
//});
//
//
//
//it('provides error when product does not exist', function() {
//
//    // Arrange the test
//    $products = Product::factory(5)->create();
//
//    // Act on the endpoint
//    $response = $this->get('/api/v1/products/999999');
//
//    // Assert the results are correct
//    $response->assertStatus(404);
//
//});
//
//
//it('retrieves correct product', function() {
//
//    // Arrange the test
//    $products = Product::factory(5)->create();
//    $product = Product::first()->get();
//    $id = $product->id;
//
//    // Act on the endpoint
//    $response = $this->get('/api/v1/products/{$id}');
//
//    // Assert the results are correct
//    $response->assertStatus(200)
//        ->assertJson($product->json());
//
//});
