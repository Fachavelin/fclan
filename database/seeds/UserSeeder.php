<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        Role::truncate();

        $adminRole = Role::create(['name'=>'Admin']);
        $writterRole = Role::create(['name'=>'Writter']);

        $Admin= new User;
        $Admin -> name = "Admin";
        $Admin -> email = "adminFclan@gmail.com";
        $Admin -> password = bcrypt('123');
        $Admin ->save();

        $Admin->assignRole($adminRole);

        $Writter = new User;
        $Writter -> name = "Alex";
        $Writter -> email = "freddyalexander2.chavez@gmail.com";
        $Writter -> password = bcrypt('123');
        $Writter ->save();

        $Writter->assignRole($writterRole);
    }
}
