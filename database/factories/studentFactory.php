<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\students>
 */
class studentFactory extends Factory
{

    protected $model = \App\Models\Students::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create();
        return [
           'name' => $faker->name(),
           'gender' => Arr::random(['L' , 'P']),
           'nis' => mt_rand(00001 , 99999),
           'class_id' =>Arr::random([1,2,3,4]),
        ];
    }
}
