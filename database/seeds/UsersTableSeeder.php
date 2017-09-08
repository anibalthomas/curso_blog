<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User;
        $user->name = 'Jorge Luis';
        $user->email = 'jorge@aprendible.com';
        $user->password = bcrypt('123123');
        $user->save();
  
    }
}





