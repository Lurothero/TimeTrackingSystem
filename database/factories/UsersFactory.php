<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class UsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'dob' => $this->faker->date(),
            'google_id' => '@gmail.com',
            'email'=>$this->faker->safeEmail(),
            
            'role_id'=>$this->faker->numberBetween(0,5),
            'timestamp_lastlogin' => $this->faker->date(),



            //
        ];
    }
}
