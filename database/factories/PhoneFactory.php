<?php

namespace Database\Factories;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class PhoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        return [            
            'manufacturer_id' => $this->faker->numberBetween(1,3),
            'color_id' => $this->faker->numberBetween(1,9),
            'os_id' => $this->faker->numberBetween(1,8),
            'model' => Str::random(5),
            'name' => $this->faker->randomElement(['iPhone', 'Samsung Galaxy', 'One Plus']),
            'storage' => $this->faker->randomElement(['64', '128', '256', '512', '1024']),
            'ram' => $this->faker->randomElement(['4', '6']),
            'battery' => $this->faker->randomElement(['3200', '4000']),
            'fiveg_capable' => $this->faker->numberBetween(0,1),
            'release_year' => $this->faker->randomElement(['2018', '2019','2020','2021']),
            'price' => $this->faker->numberBetween(15000,35000),
        ];
    }
}
