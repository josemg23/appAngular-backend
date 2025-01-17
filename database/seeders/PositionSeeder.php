<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [];
        for ($i = 1; $i <= 20; $i++) {
            $positions[] = [
                'id' => $i,
                'codigo' => "P{$i}",
                'nombre' => "Posici n {$i}",
                'active' => true,
                'user_id' => 1,
                'created_at' => now(),
            ];
        }
        DB::table( 'positions' )->insert( $positions );

    }
}
