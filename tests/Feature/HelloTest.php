<?php

namespace Tests\Feature;

use App\Person;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     * @throws \Exception
     */
    public function testHello()
    {
        factory(User::class)->create([
            "name" => "AAA",
            "email" => "BBB@CCC.COM",
            "password" => "ABCABC"
        ]);
        factory(User::class, 10)->create();

        $this->assertDatabaseHas("users", [
            "name" => "AAA",
            "email" => "BBB@CCC.COM",
            "password" => "ABCABC"
        ]);

        factory(Person::class)->create([
            "name" => "XXX",
            "mail" => "YYY@ZZZ.COM",
            "age" => 123
        ]);
        factory(Person::class, 10)->create();

        $this->assertDatabaseHas("people", [
            "name" => "XXX",
            "mail" => "YYY@ZZZ.COM",
            "age" => 123
        ]);

    }
}
