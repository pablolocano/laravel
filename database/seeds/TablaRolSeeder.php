<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'administrador',
            'editor',
            'supervidor'
        ];
        foreach($rols as $key => $value){
            Rol::create([
                'nombre' => $value
            ]);

        }
    }
}
