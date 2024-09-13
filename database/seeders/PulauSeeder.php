<?php

namespace Database\Seeders;

use App\Models\Pulau;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PulauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Pulau::factory()->create(
            [
                'nama-pulau' => 'Jawa',
            ]
        );

        Pulau::factory()->create(
            [
                'nama-pulau' => 'Sulawesi',
            ]
        );
        Pulau::factory()->create(
            [
                'nama-pulau' => 'Sumatera',
            ]
        );
        Pulau::factory()->create(
            [
                'nama-pulau' => 'Kalimantan',
            ]
        );
        Pulau::factory()->create(
            [
                'nama-pulau' => 'Bali',
            ]
        );
        Pulau::factory()->create(
            [
                'nama-pulau' => 'Papua',
            ]
        );
    }
}
