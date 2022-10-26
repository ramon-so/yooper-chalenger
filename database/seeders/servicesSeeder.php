<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class servicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('services')->insert([
            'servicce_name' => 'Social Media',
        ]);
        \DB::table('services')->insert([
            'servicce_name' => 'CRM',
        ]);
        \DB::table('services')->insert([
            'servicce_name' => 'Mídia',
        ]);
        \DB::table('services')->insert([
            'servicce_name' => 'SEO',
        ]);
    }
}
