<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GallaryCategory;
class GallarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GallaryCategory::insert(
            [
            ['title' => 'school'],
            ['title' => 'school2'],
            ['title' => 'school3']
        ]);
    }
}
