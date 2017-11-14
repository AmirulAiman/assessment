<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->username = 'Admin1';
        $user1->password = bcrypt('abc123');
        $user1->save();
        $user2 = new User();
        $user2->username = 'Admin2';
        $user2->password = bcrypt('abc123');
        $user2->save();
        $user3 = new User();
        $user3->username = 'Admin3';
        $user3->password = bcrypt('abc123');
        $user3->save();
    }
}
