<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_gunung' => $this->faker->title(),
            'harga_simaksi' => '10000',
            'alamat' => $this->faker->address(),
            'konten' => $this->faker->paragraph(4)
        ];
    }
}
