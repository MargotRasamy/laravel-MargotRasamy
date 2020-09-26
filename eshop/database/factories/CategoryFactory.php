<?php

namespace Database\Factories;

use App\Models\Category;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Xvladqt\Faker\LoremFlickrProvider;
use Illuminate\Support\Facades\DB;
use Bezhanov\Faker\Provider\Commerce;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker = FakerFactory::create();
        $this->faker->addProvider(new LoremFlickrProvider($this->faker));
        // $this->faker->addProvider(new PicsumPhotosProvider($this->faker));
        \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($this->faker);



        return [

            'name' => $this->faker->department,
            'image' => $this->faker->imageUrl(1280, 720, ['product']),
            // 'updated_at' => $this->faker->dateTime,
            // 'created_at' => $this->faker->dateTime,
        ];
    }
}
