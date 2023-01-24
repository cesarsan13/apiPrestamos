<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
        ->insert([ 
            'nombres' => 'Martha Mireya',
            'ap_paterno'=>'Esquivel',
            'ap_materno'=>'Monreal',
            'email'=>'suculento.el@gmail.com',
            'username'=>'meya_esquivel',
            'password'=>'bubu2206',
            'baja'=>'',
            'role_id'=>1
        ]);
        DB::table('users')
        ->insert([ 
            'nombres' => 'Cesar Omar',
            'ap_paterno'=>'Sanchez',
            'ap_materno'=>'Tapia',
            'email'=>'cesaromarsancheztapia@gmail.com',
            'username'=>'cesar_san13',
            'password'=>'costcesar',
            'baja'=>'',
            'role_id'=>1
        ]);

    }
}
