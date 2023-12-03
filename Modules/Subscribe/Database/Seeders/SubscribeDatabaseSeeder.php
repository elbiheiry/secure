<?php

namespace Modules\Subscribe\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Subscribe\Entities\Subscriber;

class SubscribeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();

        for ($i=0; $i < 50; $i++) { 
            Subscriber::create([
                'email' => 'test'.$i.'@test.com'
            ]);
        }

        // $this->call("OthersTableSeeder");
    }
}
