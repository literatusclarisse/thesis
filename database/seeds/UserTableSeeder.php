<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin=  \App\User::create([
            'firstname' =>'Arjie',
            'lastname' =>'Pablio',
            'middlename' =>'B',
            'contact_no'=>'12121212',
            'email'=>'admin@gmail.com',
            'password' =>\Illuminate\Support\Facades\Hash::make('password'),
            'address'=>'General Santos City',
        ]);
      $admin->assignRole('admin');
        $staff=  \App\User::create([
            'firstname' =>'Jenn',
            'lastname' =>'Literatus',
            'middlename' =>'B',
            'contact_no'=>'12121212',
            'email'=>'staff@gmail.com',
            'password' =>\Illuminate\Support\Facades\Hash::make('password'),
            'address'=>'General Santos City',
        ]);
        $staff->assignRole('staff');

        $staff=  \App\User::create([
            'firstname' =>'mitzi',
            'lastname' =>'test',
            'middlename' =>'B',
            'contact_no'=>'12121212',
            'email'=>'staff1@gmail.com',
            'password' =>\Illuminate\Support\Facades\Hash::make('password'),
            'address'=>'General Santos City',
        ]);
        $staff->assignRole('staff');

    }
}
