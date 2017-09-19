<?php

use Illuminate\Database\Seeder;
use App\FeaturedItem;
use Faker\Factory;

class FeaturedItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 4; $i++)
        {
            $product = FeaturedItem::create(array(
                'text' => $faker->sentence(7, true),
                'image_url' => $faker->imageUrl(275, 275, 'nightlife', true),
                'type' => $faker->randomElement(['article', 'event', 'music']),
                'link' => $faker->randomElement(['/articles/test']),
                'storage_path' => $faker->randomElement(['/img/'])
            ));
        }
    }
}
