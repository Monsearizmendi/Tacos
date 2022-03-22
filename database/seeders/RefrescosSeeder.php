<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Refrescos;
use Illuminate\Support\Facades\DB;
class RefrescosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $Sabor_R = ["Uva","Manzana","Coca-Cola","B_Mango"];
       $Distribuidora_R =["coca_cola","Pepsi"];
       $Tamaño_R = ["500ML","350","1LT"];

       for($i=0;$i<50;$i++) {
        DB::table('Refrescos') ->insert([
            'Sabor' => $Sabor_R[rand(0,3)],
            'Distribuidora' => $Distribuidora_R[rand(0,1)],
            'Tamaño' => $Tamaño_R[rand(0,2)]
        
        ]);
    }
    }
}
