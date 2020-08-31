<?php

use App\Category;
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
        $categories = DB::table('categories')->get()->pluck('id');

        factory(App\Product::class, 30)
            ->make()
            ->each(function($product) use ($categories) {
                $product->category_id = $categories->random();
                $product->save();
            });
    }
}
