<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        // DB::table('users')->truncate();
        // User::factory()->times(50)->create();

        // DB::table('categories')->truncate();
        // Category::factory()->times(10)->create();

        // DB::table('products')->truncate(); 
        // Product::factory()->times(100)->create();

        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);

        Schema::enableForeignKeyConstraints();
        Model::reguard();
    }
}
