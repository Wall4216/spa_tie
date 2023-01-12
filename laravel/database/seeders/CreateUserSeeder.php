<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateSuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superUser = User::create([
            'email' => 'user@gmail.com',
            'name' => 'Ksusha',
            'password' => Hash::make('ksu'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Role::create([
            'name' => 'ksu-user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $superUser->assignRole('ksu-user');
    }
}
