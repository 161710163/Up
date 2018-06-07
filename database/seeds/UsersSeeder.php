<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat lutfhi
        $adminRole = new Role();
        $adminRole->name ='admin';
        $adminRole->display_name='admin';
        $adminRole->Save();

        //membuat alfikiri
        $memberRole = new Role();
        $memberRole->name ='user';
        $memberRole->display_name='user';
        $memberRole->Save();

        //membuat sample luthfi
        $admin = new User();
        $admin->name= 'Admin';
        $admin->email ='admin@gmail.com';
        $admin->password =bcrypt('rahasia');
        $admin->Save();
        $admin->attachRole($adminRole);

        //membuat sample alfikri
        $member = new User();
        $member->name= 'Member';
        $member->email ='member@gmail.com';
        $member->password =bcrypt('rahasia');
        $member->Save();
        $member->attachRole($memberRole);
    }
}
