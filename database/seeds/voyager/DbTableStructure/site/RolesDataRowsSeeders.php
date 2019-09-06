<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class RolesDataRowsSeeders extends VDbTableStructureSeeders
{


    public function run()
    {
        $DataType = DataType::where('slug', 'roles')->firstOrFail();



        $dataRow = $this->dataRow($DataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }


        $dataRow = $this->dataRow($DataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }



        $dataRow = $this->dataRow($DataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 3,
            ])->save();
        }



        $dataRow = $this->dataRow($DataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 4,
            ])->save();
        }



        $dataRow = $this->dataRow($DataType, 'display_name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.display_name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 5,
            ])->save();
        }



//
//        /**
//         * role_id
//         */
//        $dataRow = $this->dataRow($DataType, 'role_id');
//        if (!$dataRow->exists) {
//            $dataRow->fill([
//                'type'         => 'text',
//                'display_name' => __('voyager::seeders.data_rows.role'),
//                'required'     => 1,
//                'browse'       => 1,
//                'read'         => 1,
//                'edit'         => 1,
//                'add'          => 1,
//                'delete'       => 1,
//                'order'        => 9,
//            ])->save();
//        }
//        //endregion




    }
}
