<?php

use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;


class MusicItemsSeeder extends VMenuSeeder
{


    public function run()
    {
        $admin = Menu::where('name', 'admin')->firstOrFail();

        $music = MenuItem::firstOrNew([
            'menu_id' => $admin->id,
            'title' => "Музыка",
            'url' => '',
            'route' => '',
        ]);
        if (!$music->exists) {
            $music->fill([
                'target' => '_self',
                'icon_class' => 'voyager-music',
                'color' => null,
                'parent_id' => null,
                'order' => 2,
            ])->save();
        }


        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $admin->id,
            'title' => "Треки",
            'url' => '',
            'route' => 'voyager.music-tracks.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => null,
                'parent_id' => $music->id,
                'order' => 1,
            ])->save();
        }



        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $admin->id,
            'title' => "Жанры",
            'url' => '',
            'route' => 'voyager.music-genres.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => null,
                'parent_id' => $music->id,
                'order' => 1,
            ])->save();
        }



        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $admin->id,
            'title' => "Артисты",
            'url' => '',
            'route' => 'voyager.music-artists.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => null,
                'parent_id' => $music->id,
                'order' => 1,
            ])->save();
        }

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
            'field' => $field,
        ]);
    }
}
