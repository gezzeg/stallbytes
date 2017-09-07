<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            // $table->increments('id');
            // $table->string('name');
            // $table->timestamps();
    
		DB::table('categories')->insert([     	
	        [
	        'name' => 'Burger Ayam',
	        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
	        [
	        'name' => 'Burger Daging',
	        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
	        [
	        'name' => 'Burger Telur',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			],
        ]);     

    }
}
