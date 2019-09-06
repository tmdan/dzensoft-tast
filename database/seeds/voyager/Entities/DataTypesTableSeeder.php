<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{



    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('data_types')->truncate();




        $dataType = $this->dataType('slug', 'feedback');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'feedback',
                'display_name_singular' => "сообщение",
                'display_name_plural'   => "Сообщения из обратной связи",
                'icon'                  => 'voyager-mail',
                'model_name'            => 'App\\Feedback',
                'controller'            => 'App\\Http\\Controllers\\backend\\FeedbackController',
                'generate_permissions'  => 1,
                'description'           => null,
            ])->save();
        }



        //Data Type for Users
        $dataType = $this->dataType('slug', 'users');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'users',
                'display_name_singular' => __('voyager::seeders.data_types.user.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.user.plural'),
                'icon'                  => 'voyager-person',
                'model_name'            => 'TCG\\Voyager\\Models\\User',
                'policy_name'           => '',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }


        //Data Type for Menus
        $dataType = $this->dataType('slug', 'menus');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'menus',
                'display_name_singular' => __('voyager::seeders.data_types.menu.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.menu.plural'),
                'icon'                  => 'voyager-list',
                'model_name'            => 'TCG\\Voyager\\Models\\Menu',
                'controller'            => '',
                'policy_name'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }




        //Data Type for Roles
        $dataType = $this->dataType('slug', 'roles');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'roles',
                'display_name_singular' => __('voyager::seeders.data_types.role.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.role.plural'),
                'icon'                  => 'voyager-lock',
                'model_name'            => 'TCG\\Voyager\\Models\\Role',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }



    }




    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
