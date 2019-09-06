<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class UsersDataRowsSeeders extends VDbTableStructureSeeders
{


    public function run()
    {
        $DataType = DataType::where('slug', 'users')->firstOrFail();


        $dataRow = $this->dataRow($DataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 1,
            ])->save();
        }


        $dataRow = $this->dataRow($DataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => "Название",
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 2,
            ])->save();
        }


        $dataRow = $this->dataRow($DataType, 'email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => "Email",
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 3,
            ])->save();
        }


        $dataRow = $this->dataRow($DataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.slug'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'slugify' => [
                        'origin' => 'nickname',
                    ],
                    'validation' => [
                        'rule'  => 'unique:users,slug',
                    ],
                ],
                'order' => 4,
            ])->save();
        }


        $dataRow = $this->dataRow($DataType, 'password');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'password',
                'display_name' => "Пароль",
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'order' => 4,
            ])->save();
        }



        $dataRow = $this->dataRow($DataType, 'bio');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text_area',
                'display_name' => "Биография",
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'order' => 4,
            ])->save();
        }




        $dataRow = $this->dataRow($DataType, 'remember_token');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => __('voyager::seeders.data_rows.remember_token'),
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 5,
            ])->save();
        }


        $dataRow = $this->dataRow($DataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 6,
            ])->save();
        }


        $dataRow = $this->dataRow($DataType, 'email_verified_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.email_verified_at'),
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 6,
            ])->save();
        }


        $dataRow = $this->dataRow($DataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 7,
            ])->save();
        }


        $dataRow = $this->dataRow($DataType, 'avatar');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'image',
                'display_name' => "Аватар",
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 1,
                'details' => [
                    "validation"=>[
                      "rule"=>"image",
                    ],
                    'resize' =>
                        [
                            'width' => '250',
                            'height' => '250',
                        ],
                    'quality' => '70%',
                    'upsize' => true,
                ],
            ])->save();
        }




        $dataRow = $this->dataRow($DataType, 'birthdate');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'date',
                'display_name' => "Дата рождения",
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 3,
            ])->save();
        }



        $dataRow = $this->dataRow($DataType, 'nickname');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => "Ник",
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'order' => 3,
            ])->save();
        }



        $dataRow = $this->dataRow($DataType, 'role_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => "Идентификатор Роли",
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 4,
            ])->save();
        }


        $dataRow = $this->dataRow($DataType, 'user_belongsto_role_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'relationship',
                'display_name' => __('voyager::seeders.data_rows.role'),
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => [
                    'model' => 'TCG\\Voyager\\Models\\Role',
                    'table' => 'roles',
                    'type' => 'belongsTo',
                    'column' => 'role_id',
                    'key' => 'id',
                    'label' => 'display_name',
                    'pivot_table' => 'roles',
                    'pivot' => 0,
                ],
                'order' => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($DataType, 'user_belongstomany_role_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'Доп. Роли',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model'       => 'TCG\\Voyager\\Models\\Role',
                    'table'       => 'roles',
                    'type'        => 'belongsToMany',
                    'column'      => 'id',
                    'key'         => 'id',
                    'label'       => 'display_name',
                    'pivot_table' => 'user_roles',
                    'pivot'       => '1',
                    'taggable'    => '0',
                ],
                'order'        => 11,
            ])->save();
        }



        $dataRow = $this->dataRow($DataType, 'settings');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => "Настройки",
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'order' => 12,
            ])->save();
        }


    }
}
