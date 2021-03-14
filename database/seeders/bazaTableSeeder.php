<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\baza;

class bazaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = \Faker\Factory::create();
		
		for($index=0;$index<200;$index++) { 
		
         $baza = new Baza();
		 $baza->pracownik= $faker->company;
		 $baza->stanowisko=$faker->text(30);
		 
		 $baza->wynagrodzenie=0;
		 $baza->save();
		 
		}
		  
		 
    }
}
