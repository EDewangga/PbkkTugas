<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 25 ; $i++) { 
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => 'mhs'.($i).'@gmail.com',
                'kode' => '5116100'.($i),
                'semester' => rand(1,8),
                'role' => '2',
                'password' => bcrypt('456')
                
            ]);
        }
        for ($i=0; $i < 25 ; $i++) { 
					DB::table('users')->insert([
							'name' => $faker->name,
							'email' => 'dosen'.($i).'@gmail.com',
							'kode' => '1111'.($i),
							'role' => '1',
							'password' => bcrypt('123')
							
					]);
			}

			}
}
