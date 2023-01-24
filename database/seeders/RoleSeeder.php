<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
        DB::table('roles')
        ->insert([ 
            'role_id' => 1,
            'role_name'=>'Administrador',
            'baja'=>''
        ]);
        
        DB::table('roles')
        ->insert([ 
            'role_id' => 2,
            'role_name'=>'Cliente',
            'baja'=>''
        ]);
        
        DB::table('roles')
        ->insert([ 
            'role_id' => 3,
            'role_name'=>'Socio',
            'baja'=>''
        ]);
    }
}
