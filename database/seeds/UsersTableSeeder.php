<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::where('email', 'admin@admin.com')->forceDelete();
        
        $user = User::create([
          'name' => 'Admin',
          'email' => 'admin@admin.com',
          'password' => bcrypt('password'),
        ]);

        $user->assignRole('super_admin');
    }
}
