<?php
use App\User;                           // required to use the 'User' model
use Illuminate\Support\Facades\Hash;    //  required to use the Hash encryption function
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    // DON'T FORGET TO REFERENCE THIS CLASS IN 'DatabaseSeeder.php'

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // the create test users for the database
        User::create([
            'name' => 'kristin',
            'email' => 'kristin@kristin.com',
            'password'=> Hash::make('secret')
        ]);

        User::create([
            'name' => 'james',
            'email' => 'james@james.com',
            'password'=> Hash::make('secret')
        ]);
    }
}
