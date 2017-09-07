<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // $table->increments('id');
            // $table->string('name');
            // $table->string('category');
            // $table->decimal('price',5,2);
            // $table->timestamps();   
            // 
	         // DB::table('smoking_statuses')->insert(array(
	         // array('name'=>'Attempt'),
	         // array('name'=>'Quit'),
	         // array('name'=>'Withdraw'),
	         // ));     
      
        DB::table('items')->insert([
        	array(       	
            'name' => 'Burger A',
            'category' => rand(1, 3),
            'price'=>2.50,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        	),
        	array( 
        	'name' => 'Burger B',
            'category' => rand(1, 3),
            'price'=>2.50,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        	),  
        	array(
        	'name' => 'Burger C',
            'category' => rand(1, 3),
            'price'=>2.50,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        	)
        ]);         
       	
    }
}
