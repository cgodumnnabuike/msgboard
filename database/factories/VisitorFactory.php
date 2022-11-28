<?php

namespace Database\Factories;

use App\Models\Visitor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visitor>
 */
class VisitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    Protected $model = Visitor::class;

    public function definition()
    {
        return [

            'user_id' => User::factory(1)->create()->first(),
            
            'comments' => $this->faker->realText(500)
            
            ];
    }
}
?>