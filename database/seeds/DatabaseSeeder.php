<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(ForumTableSeeder::class);
        $this->call(EventsTableSeeder::class);
    }
}