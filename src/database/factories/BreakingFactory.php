<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Work;
use App\Models\Breaking;

class BreakingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Breaking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $time = $this->faker->dateTimeBetween($startDate='-3 day ',$endDate='+1 week');
        return [
            'work_id' => Work::factory(),
            'break_in' =>$time->format('Y-m-d H:i:s'),
            'break_out' => $time->modify('+30 minutes')->format('Y-m-d H:i:s'),
        ];
    }
}
