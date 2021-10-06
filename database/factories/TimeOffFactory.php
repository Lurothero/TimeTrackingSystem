<?php

namespace Database\Factories;

use App\Models\TimeOff;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimeOffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TimeOff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'users_id'=>$this->faker->numberBetween(1, 5),
                'time_off_desc_id'=>$this->faker->numberBetween(1,4),
                'date_from'=>$this->faker->date(),
                'date_to'=>$this->faker->date(),
            
            
            //
        ];
    }
}
