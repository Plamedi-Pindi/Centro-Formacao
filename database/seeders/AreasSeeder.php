<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create(['nome' => 'Virtualização']);
        Area::create(['nome' => 'Programação']);
        Area::create( ['nome' => 'Administração de Sistema']);
        Area::create(['nome' => 'Redes de Computadores']);
        Area::create(['nome' => 'Design']);
        Area::create(['nome' => 'Segurança']);
        Area::create(['nome' => 'Análise de Dados']);
    }
}
