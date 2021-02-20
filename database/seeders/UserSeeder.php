<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'manirujjamanakash@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "Anichur Rahaman";
            $user->email = "admin@gmail.com";
            $user->password = Hash::make('admin12345');
            $user->save();
        }
    }
}
