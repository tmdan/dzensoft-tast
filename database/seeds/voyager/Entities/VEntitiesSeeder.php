<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Permission;

class VEntitiesSeeder extends Seeder
{
    public function run()
    {
        $this->call(DataTypesTableSeeder::class);
    }





    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
                'data_type_id' => $type->id,
                'field'        => $field,
        ]);
    }


    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
