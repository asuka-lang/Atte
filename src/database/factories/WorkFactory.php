<?php

namespace Database\Factories;

use App\Models\Work;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Work::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween($startDate='-1 week',$endDate='+1 week');
        return [
            'user_id' => User::factory(),
            'start' =>$date->format('Y-m-d H::s'),
            'end' => $date->modify('+9hour')->format('Y-m-d H:i:s'),
        ];
    }
}
