<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Item;
use Illuminate\Foundation\Testing\DatabaseTransactions;
#use Illuminate\Foundation\Testing\WithFaker;

uses(DatabaseTransactions::class);

/** @test */
test('lists users items', function() {
    $user = User::factory()->create();

    $this->actingAs($user);

    Item::factory()->create([
        'user_id' => $user->id
    ]);

    $this->get('/dashboard')
        ->assertOk();
});
