<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tacos;
use Illuminate\Support\Facades\DB;

class TacosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Nombre_Taco =["Pastor","tripa","suadero","longaniza"];
        $T_Carne_Taco =["Res","cerdo","pollo"];
        $T_Tortilla_Taco=["harina","maiz"];
        $T_Salsa_Tacos =["guacamole","salsa_verde","salsa_roja"];

        for($i=0;$i<50;$i++) {
            DB::table('Tacos') ->insert([
                'Nombre' => $Nombre_Taco[rand(0,3)],
                'T_Carne' => $T_Carne_Taco[rand(0,2)],
                'T_Tortilla' => $T_Tortilla_Taco[rand(0,1)],
                'T_Salsa' => $T_Salsa_Tacos[rand(0,2)]
            ]);
        }
    }
}

