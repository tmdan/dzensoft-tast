<?php
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;



class VContentSeeder extends Seeder
{


    public function run()
    {
        $this->call(MenusTableSeeder::class);
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
