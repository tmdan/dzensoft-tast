<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;


class FeedbackMenuItemsSeeder extends VMenuSeeder
{



    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();



        $feedbackMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => "Обратная связь",
            'url'     => '',
            'route'   => 'voyager.feedback.index',
        ]);
        if (!$feedbackMenuItem->exists) {
            $feedbackMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-bubble',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 7,
            ])->save();
        }

    }






    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }
}
