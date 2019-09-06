<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{



    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => "Админ",
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'user']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' =>"Пользователь",
                ])->save();
        }



        $role = Role::firstOrNew(['name' => 'moderator']);
        if (!$role->exists) {
            $role->fill([
                'display_name' =>"Модератор",
            ])->save();
        }



    }
}
