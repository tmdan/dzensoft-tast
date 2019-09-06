<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name', 'admin')->firstOrFail();
        $moderator = Role::where('name', 'moderator')->firstOrFail();

        $permissions = Permission::all();

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('permission_role')->truncate();


        $admin->permissions()->sync(
            $permissions->pluck('id')->all()
        );


        $moderator->permissions()->sync(
            $permissions = Permission::all()->filter(function ($item) {
                return
                    $item->key == "browse_admin" ||
                    $item->table_name == "feedback";
                    //$item->table_name=="menus" ||
                    //$item->key=="browse_bread" ||
                    //$item->key=="browse_database" ||
                    //$item->key=="browse_media" ||
                    //$item->key=="browse_compass" ||
                    //$item->key=="browse_menus" ||
                    //$item->table_name=="roles" ||
                    //$item->table_name=="users" ||
                    //$item->table_name=="settings" ||
                    //$item->table_name=="menus" ||
//                    ($item->table_name == "feedback" && $item->key == "browse_feedback") ||
//                    ($item->table_name == "feedback" && $item->key == "read_feedback") ||
//                    ($item->table_name == "feedback" && $item->key == "edit_feedback") ||
//                    ($item->table_name == "feedback" && $item->key == "delete_feedback");
            })->pluck('id')->all()
        );

    }
}
