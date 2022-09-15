<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class GetFormTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_returns_product_data(): void
    {
        $id = $this->app->make('db')->table('form')->insertGetId([
            'form_id' => 1,
            'form_name' => 'Form 1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        $this->json('GET', "/api/test")
            ->assertStatus(200)
            ->assertJson([
                'form_id' => 1,
            ]);
    }
}
