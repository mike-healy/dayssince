<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Item;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Inertia\Testing\AssertableInertia as Assert;

uses(DatabaseTransactions::class);

/** @test */
test('lists users items', function() {
    $user = User::factory()->create();

    $item = Item::factory()->create([
        'user_id' => $user->id
    ]);
    
    $this->actingAs($user)
        ->get('/dashboard')
        ->assertOk()
        ->assertInertia(fn (Assert $page) => $page
            ->component('Dashboard')
            ->has('items')
            // ... more detail please
        );
});
