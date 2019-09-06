<?php

use Illuminate\Database\Seeder;

class VSeeder extends Seeder
{


    public function run()
    {
        $this->call(VEntitiesSeeder::class);
        $this->call(VDbTableStructureSeeders::class);
        $this->call(VContentSeeder::class);
        $this->call(VSecuritySeeder::class);
        $this->call(VMenuSeeder::class);
        $this->call(VToolsSeeder::class);

    }
}
