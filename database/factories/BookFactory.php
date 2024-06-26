<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sentence = $this->faker->sentence(5);
        $title = substr($sentence, 0, strlen($sentence) - 1);

        return [
            'name' => $title,
            'isbn' => $this->faker->isbn13(),
            'value' => $this->faker->randomNumber(2),
        ];
    }
}
