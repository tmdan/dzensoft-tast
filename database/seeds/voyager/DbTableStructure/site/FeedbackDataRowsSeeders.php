<?php

use TCG\Voyager\Models\DataType;

class FeedbackDataRowsSeeders extends VDbTableStructureSeeders
{


    public function run()
    {
        $DataType = DataType::where('slug', 'feedback')->firstOrFail();



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
                'type'         => 'string',
                'display_name' => "Имя",
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }





        $dataRow = $this->dataRow($DataType, 'email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'string',
                'display_name' => "Email",
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 3,
            ])->save();
        }




        $dataRow = $this->dataRow($DataType, 'phone');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'string',
                'display_name' => "Телефон",
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 4,
            ])->save();
        }



        $dataRow = $this->dataRow($DataType, 'comment');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => "Комментарий",
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 5,
            ])->save();
        }





        $dataRow = $this->dataRow($DataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => "Статус",
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'order'        => 6,
                'details'      => [
                    "on"=>"Прочитанный",
                    "off"=>"Не прочитанный"
                ],
            ])->save();
        }


    }
}
