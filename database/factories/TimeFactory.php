<?php

namespace Database\Factories;

use App\Models\Time;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Time::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id'=>$this->faker->numberBetween(1, 5),
             'date_worked'=>$this->faker->date(),
              'entry'=>$this->faker->text(10),
               'time_in'=>$this->faker->date(),
             'time_out'=>$this->faker->date(),
              'total_hours'=>$this->faker->numberBetween(8,10),
               'regular_hours'=>$this->faker->numberBetween(1,5),
             'over_time'=>$this->faker->numberBetween(1,5),
            //
        ];
    }
}
