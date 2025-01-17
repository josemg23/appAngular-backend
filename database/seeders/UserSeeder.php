<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
    * Run the database seeds.
    */

    public function run(): void {
        $user = new \App\Models\User([
            'username' => 'Admin',
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => '1xNl8@example.com',
            'password' =>  Hash::make('password'), // password
            'created_at' => now(),
        ]);

        $user->department()->associate( \App\Models\Department::first() );
        $user->position()->associate( \App\Models\Position::first() );
        $user->save();
    }
}
