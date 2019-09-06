<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{


    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        $admin = Role::where('name', 'admin')->firstOrFail();
        $moderator = Role::where('name', 'moderator')->firstOrFail();


        User::create([
            'name'           => 'Мухаммед',
            'settings'       =>collect(["locale"=>"ru"]),
            'avatar'         => 'users/dev.png',
            'email'          => env("ADMIN_EMAIL"),
            'password'       => bcrypt(env("ADMIN_PASSORD",'@password')),
            'remember_token' => Str::random(60),
            'role_id'        => $admin->id,
        ])->roles()->sync([$admin->id]);


        User::create([
            'name'           => 'User',
            'settings'       =>collect(["locale"=>"ru"]),
            'email'          => 'user@admin.com',
            'password'       => bcrypt('password'),
            'remember_token' => Str::random(60),
            'role_id'        => $moderator->id,
        ])->roles()->sync([$moderator->id]);


    }
}
