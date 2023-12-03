<?php

namespace Modules\About\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\About\Entities\Work;
use Modules\About\Entities\WorkTranslation;

class WorkSeedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        Work::create(
            ['id' => 1]
        );

        WorkTranslation::create([
            'locale' => 'en' ,
            'description1' => 'description1',
            'description2' => 'description2',
            'work_id' => 1
        ]);

        WorkTranslation::create([
            'locale' => 'ar' ,
            'description1' => 'description1',
            'description2' => 'description2',
            'work_id' => 1
        ]);

        // $this->call("OthersTableSeeder");
    }
}
