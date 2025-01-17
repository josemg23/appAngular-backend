<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder {
    /**
    * Run the database seeds.
    */

    public function run(): void {

        DB::table( 'departments' )->insert( [
            [
                'id' => 1,
                'codigo' => 'D001',
                'nombre' => 'Marketing',
                'active' => true,
                'user_id' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'codigo' => 'D002',
                'nombre' => 'Sales',
                'active' => true,
                'user_id' => 2,
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'codigo' => 'D003',
                'nombre' => 'HR',
                'active' => true,
                'user_id' => 3,
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'codigo' => 'D004',
                'nombre' => 'HR1',
                'active' => true,
                'user_id' => 4,
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'codigo' => 'D005',
                'nombre' => 'HR2',
                'active' => true,
                'user_id' => 5,
                'created_at' => now(),
            ],
            [
                'id' => 6,
                'codigo' => 'D006',
                'nombre' => 'HR3',
                'active' => true,
                'user_id' => 6,
                'created_at' => now(),
            ],

        ] );

    }
}
