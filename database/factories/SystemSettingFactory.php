<?php

namespace Database\Factories;

use App\Models\SystemSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

class SystemSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SystemSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'system_time'=>'Central Daylight time',
            'domain_list_id'=>$this->faker->numberBetween(1,2),
            'enforce_domain'=>$this->faker->boolean(),
            'system_logo'=>$this->faker->imageUrl(200, 300),

            //
        ];
    }
}
