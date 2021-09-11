<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::table('admins')->insert([
            'name' => 'Administrador',
            'email' => 'admin@pertence-it.com.br',
            'password' => Hash::make('Rafa007986'),
        ]);

    }
}
