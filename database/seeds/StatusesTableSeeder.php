<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Faker\Generator::class);
        $user_ids = \App\Models\User::all()->pluck('id');

        $statuses = factory(\App\Models\Status::class)
            ->times(5000)
            ->make()
            ->each(function ($status) use ($faker, $user_ids) {
                $status->user_id = $faker->randomElement($user_ids);
            });
        \App\Models\Status::insert($statuses->toArray());
    }
}
