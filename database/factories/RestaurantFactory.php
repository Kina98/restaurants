<?php
 
namespace Database\Factories;
 
use Illuminate\Database\Eloquent\Factories\Factory;
 
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Au fin gourmet', "A l'ombre du Sakura", "Slow food", "Pizza Yolo",
            ]),
            'address' => $this->faker->address,
            'type' => $this->faker->randomElement(['Asiatique', 'Tradi', 'Italien'])
        ];
    }
}