<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $params = [
            [
                "id" => 1,
                "email" => "goda@eyemovic.com",
                "password" => '$2y$10$RsrDtci/0rH2JZqiT47sTeULlwjFNUjn6oKzqZhx/F9AqUf3quCii',
                "name" => "合田　和樹"


            ]
        ];
        DB::table("users")->insert($params);

//        ,,2020-05-10 12:51:56,2020-05-10 12:51:56

    }
}
