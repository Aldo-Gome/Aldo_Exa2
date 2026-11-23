<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    protected $model = Equipo::class;

    public function definition(): array
    {
        return [
            'codigo' => fake()->unique()->bothify('PRO-####'),
            'nombre' => fake()->words(3, true),
            'marca' => fake()->words(2, true),
            'fecha_adquisicion' => fake()->date(),
            'estado' => fake()->randomElement(['Activo', 'Inactivo', 'Mantenimiento']),
        ];
    }
}
