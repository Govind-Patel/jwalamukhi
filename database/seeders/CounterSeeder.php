<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Counter;
class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Counter::insert(
            [
                [ 'label' => 'label1', 'value' => '34', 'color' => 'red'],
                [ 'label' => 'label2', 'value' => '35', 'color' => 'blue'],
                [ 'label' => 'label3', 'value' => '36', 'color' => 'yellow'],
                [ 'label' => 'label4', 'value' => '38', 'color' => 'pink']
            ]
        );
    }
}