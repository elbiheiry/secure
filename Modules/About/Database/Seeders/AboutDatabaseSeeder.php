<?php

namespace Modules\About\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\About\Entities\About;
use Modules\About\Entities\AboutTranslation;

class AboutDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        // $this->call("OthersTableSeeder");

        for ($i=1; $i <= 7; $i++) { 
            About::create([
                'image' => $i == 1 ? 'image.jpg' : null,
                'icon' => $i != 1 ? 'test' : null,
            ]);

            AboutTranslation::create([
                'title' => 'title',
                'description' => 'description',
                'locale' => 'en',
                'about_id' => $i
            ]);

            AboutTranslation::create([
                'title' => 'title',
                'description' => 'description',
                'locale' => 'ar',
                'about_id' => $i
            ]);
        }
    }
}
