<?php

use Illuminate\Database\Seeder;
use App\Models\User; 

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mauricio Chacon',
            'email' => "mauchacon99@gmail.com",
            'password' => bcrypt("mauchacon99@gmail.com"),
        ])->assignRole('admin');

    }
}
