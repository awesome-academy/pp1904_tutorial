<?php

use Illuminate\Database\Seeder;
use App\Models\ProductLine;

class ProductLineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// factory
    	factory(ProductLine::class, 10)->create();

        // QueryBuilder
        // DB::table('productlines')->insert([
        // 	'productLine' => Str::random(5),
	       //  'textDescription' => Str::random(200),
	       //  'htmlDescription' => Str::random(200),
	       //  'images' => Str::random(100),
        // ]);

        //Query String SQL
        /* INSERT INTO productlines (productLine, textDescription, htmlDescription, images) VALUES ('productLine', 'textDescription', 'htmlDescription', 'images') */
    }
}
