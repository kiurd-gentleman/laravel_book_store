<?php

use App\Models\productImage;
use Illuminate\Database\Seeder;
use App\Models\product;
use App\Models\category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(product::class,25)->create();
        factory(category::class,4)->create();
        factory(productImage::class,100)->create();
    }
}
