<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Memo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MemoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Memo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $number = mt_rand(1, 100);
      return [
        'title' => 'test' . "_{$number}",
        'content' => $this->faker->text(20),
        'user_id' => User::all()->first(),
    ];
}

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
