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
        //Admin 1
        $user1 = new User();
        $user1->username = 'Admin1';
        $user1->password = bcrypt('abc123');
        $user1->user_type = 0;
        $user1->save();
        
        //Student 1
        $user2 = new User();
        $user2->username = 'Std1';
        $user2->password = bcrypt('abc123');
        $user2->user_type = 1;
        $user2->save();
        
        //Student 2
        $user3 = new User();
        $user3->username = 'Std2';
        $user3->password = bcrypt('abc123');
        $user3->user_type = 1;
        $user3->save();
        
        //Student 3
        $user4 = new User();
        $user4->username = 'Std3';
        $user4->password = bcrypt('abc123');
        $user4->user_type = 1;
        $user4->save();
    }
}
