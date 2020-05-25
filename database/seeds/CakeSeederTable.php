<?php

use Illuminate\Database\Seeder;

class CakeSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Cake::class, 20)->create();
    }
}
