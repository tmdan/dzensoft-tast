<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\Menu;


class VAdminMenuSeeder extends Seeder
{


    public function run()
    {

        $this->call(DashboardMenuItemsSeeder::class);
        $this->call(MediaMenuItemsSeeder::class);
        $this->call(UsersMenuItemsSeeder::class);
        $this->call(RolesMenuItemsSeeder::class);
        $this->call(ToolsMenuItemsSeeder::class);
        $this->call(SettingsMenuItemsSeeder::class);
        $this->call(FeedbackMenuItemsSeeder::class);

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
