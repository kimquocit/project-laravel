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
         $this->call(NameTableSeeder::class);
    }
}

class NameTableSeeder extends Seeder {
	public function run() {
		DB::table('Users')->insert([
		array('name' => 'kimquoc','email'=>'kimquoc@gmail.com','password'=>'123'),
	]);
	}
}