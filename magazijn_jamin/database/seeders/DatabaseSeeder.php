<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Magazijn;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'a',
            'email' => 'a@gmail.com',
        ]);

        Magazijn::factory()->create([
            'ProductId' => '1',
            'VerpakkingsEenheid' => '1',
            'AantalAanwezig' => '1',
            'IsActief' => '1',
            'Opmerkingen' => ' ',
            'DatumAangemaakt' => ' ',
            'DatumGewijzigd' => ' ',
        ]);

        // Other seeders can be called here
        // $this->call(OtherSeeder::class);
    }
}
