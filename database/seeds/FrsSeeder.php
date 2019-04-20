<?php

use Illuminate\Database\Seeder;

class FrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
				for ($i=0; $i < 25; $i++) 
				{ 
					DB::table('data_akademik')->insert
					([
						'id_matkul' => rand(1,95),
						'id_dosen' => rand(26,50)
					]);
				}
    }
}
