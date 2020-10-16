<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    $users = array();
    $faker = \Faker\Factory::create();

    // And now, let's create a few articles in our database:
    for ($i = 0; $i < 50; $i++) {
        
        array_push($users,   'name' => $this->faker->name,
        'email' => $this->faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
        // password
        'remember_token' => Str::random(10));
    } 

    public function definition()
    {
        return $users;
    }
}
