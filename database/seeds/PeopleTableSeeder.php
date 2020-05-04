<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
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
                "name" => "taro",
                "mail" => "taro@yamada.jp",
                "age" => 12,
            ],
            [
                "name" => "hanako",
                "mail" => "hanako@flower.jp",
                "age" => 34,
            ], [
                "name" => "sachiko",
                "mail" => "sachiko@happy.jp",
                "age" => 56,
            ],
        ];
        DB::table("people")->insert($params);
    }
}
