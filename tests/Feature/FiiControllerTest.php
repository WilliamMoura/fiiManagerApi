<?php

namespace Tests\Feature;

use App\Models\Fii;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class FiiControllerTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware();
        $this->route = '/api/fiis';
        $this->seed();
    }

    public function testIndex(): void
    {
        $response = $this->get($this->route);
        $response->assertStatus(200);
    }

    public function testStore(): void
    {
        $data = Fii::factory()->make()->toArray();

        $response = $this->post($this->route, $data);
        $response->assertJsonFragment($data)
        ->assertStatus(201);        
    }

    public function testUpdate(): void
    {
        $data = Fii::factory()->create()->toArray();
        $data['fii_price'] = 11.11;

        $response = $this->put($this->route . '/' . $data['fii_id'], $data);
        $response->assertJsonFragment($data)
        ->assertStatus(200);
    }
}
