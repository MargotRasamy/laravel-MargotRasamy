<?php

namespace Database\Factories;

use App\Models\Product;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Xvladqt\Faker\LoremFlickrProvider;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = DB::table('categories')->select('id')->inRandomOrder()->limit(1)->value('id');
        $this->faker = FakerFactory::create();
        // $this->faker->addProvider(new LoremFlickrProvider($this->faker));
        $this->faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($this->faker));
        return [
            'name' => $this->faker->productName,
            'price' => $this->faker->randomNumber(2),
            'image' => $this->faker->imageUrl(400, 500, 'technics'),
            'description' => $this->faker->realText(200, 2),
            'stock' => $this->faker->randomNumber(2),
            'category_id' => $category,
        ];
    }
}
