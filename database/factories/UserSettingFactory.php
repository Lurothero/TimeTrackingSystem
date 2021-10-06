<?php

namespace Database\Factories;

use App\Models\UserSetting;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\Boolean;

class UserSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id'=>$this->faker->numberBetween(1,5),
             'typography_size_id'=>$this->faker->numberBetween(1,4),
              'dark_theme'=>$this->faker->boolean(),
               'avatar'=>$this->faker->imageUrl(200, 300),
                'avatar_original'=>$this->faker->imageUrl(200, 300),
                 'is_enabled'=>$this->faker->Boolean(),
                 'time_format_id'=>$this->faker->numberBetween(1,2),
            
            
            //
        ];
    }
}
