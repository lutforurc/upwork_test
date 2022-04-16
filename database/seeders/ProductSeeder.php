<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
          $products = [
            [
            'name'        => 'Pen',
            'description' => 'This is description',
            'author_name' => 'Admin User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
            [
            'name'        => 'Book',
            'description' => 'This is Book',
            'author_name' => 'Admin User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
            [
            'name'        => 'Monitor',
            'description' => 'This is Monitor',
            'author_name' => 'Admin User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
            [
            'name'        => 'Mouse',
            'description' => 'This is Mouse',
            'author_name' => 'Admin User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
            [
            'name'        => 'Mobile S100',
            'description' => 'This is Mobile',
            'author_name' => 'Admin User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
            [
            'name'        => 'Mobile S900',
            'description' => 'This is Mobile',
            'author_name' => 'Admin User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
            [
            'name'        => 'Key Board',
            'description' => 'This is Key Board',
            'author_name' => 'Admin User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
    
          [
            'name'        => 'Pen',
            'description' => 'This is description',
            'author_name' => 'Editor User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
            [
            'name'        => 'Book',
            'description' => 'This is Book',
            'author_name' => 'Editor User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
            [
            'name'        => 'Monitor',
            'description' => 'This is Monitor',
            'author_name' => 'Editor User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
    
          [
            'name'        => 'Pen',
            'description' => 'This is description',
            'author_name' => 'User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
            [
            'name'        => 'Book',
            'description' => 'This is Book',
            'author_name' => 'User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
            [
            'name'        => 'Monitor',
            'description' => 'This is Monitor',
            'author_name' => 'User',
            'entry_date'  => \Carbon\Carbon::today()->subDays(rand(0, 10)),
            'price'       => rand(10,50),
            'unit'        => 'No',
          ],
        ];

        foreach($products as $product){
          DB::table('products')->insert($product);
        }
    }
}