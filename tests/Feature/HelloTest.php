<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     * @throws \Exception
     */
    public function testHello()
    {
        $this->assertTrue(true);

        $response = $this->get("/");
        $response->assertStatus(200);

        $response = $this->get("/hello");
        $response->assertStatus(302);

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get("/hello");
        $response->assertStatus(200);


        $response = $this->get("no_route");
        $response->assertStatus(404);

    }
}
