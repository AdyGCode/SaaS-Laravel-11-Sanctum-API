<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('has products show route')
    ->get('/api/v1/products/1')
    ->assertStatus(200);


