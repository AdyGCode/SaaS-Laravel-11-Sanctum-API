<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('has products page')
    ->get('/api/v1/products')
    ->assertStatus(200);

//it('returns all products', function() {
//
//    // Arrange the test
//    $products = Product::factory(5)->create();
//
//    // Act on the endpoint
//    $response = $this->get('/api/v1/products');
//
//    // Assert the results are correct
//    $response->assertStatus(200)
//        ->assertCount(5);
//
//});


