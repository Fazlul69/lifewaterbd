<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        /*Model::unguard();
        $this->call(UsersTablesSeeder::class);*/
        DB::table('users')->insert([
            'name' => str_random(10).'Faysal',
            'email' => str_random(10).'lifewaterbd@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
    public function run(){
    	$this->call(UsersTablesSeeder::class);
    }
}
