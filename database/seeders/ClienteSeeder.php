<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cliente::factory()
        ->count(25)
        ->hasEquipos(10)
        ->create();
        Cliente::factory()
        ->count(251)
        ->hasEquipos(102)
        ->create();
        Cliente::factory()
        ->count(253)
        ->hasEquipos(104)
        ->create();
        Cliente::factory()
        ->count(255)
        ->hasEquipos(106)
        ->create();
    }
}
