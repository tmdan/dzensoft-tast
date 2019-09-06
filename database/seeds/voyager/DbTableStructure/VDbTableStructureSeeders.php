<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\DataRow;


class VDbTableStructureSeeders extends Seeder
{



    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('data_rows')->truncate();


        $this->call(RolesDataRowsSeeders::class);
        $this->call(UsersDataRowsSeeders::class);
        $this->call(MenuDataRowsSeeders::class);
        $this->call(FeedbackDataRowsSeeders::class);

    }









    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }
}
