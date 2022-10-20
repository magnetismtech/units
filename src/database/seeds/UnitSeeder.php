<?php

namespace Magnetism\Units\database\seeds;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Magnetism\Units\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            ['name' => 'no'],
            ['name' => 'cft'],
            ['name' => 'bag'],
            ['name' => 'kg'],
            ['name' => 'lit'],
            ['name' => 'sft'],
            ['name' => 'gal'],
            ['name' => 'pc'],
            ['name' => 'litre'],
            ['name' => 'yard'],
            ['name' => 'rft'],
            ['name' => 'lbs'],
            ['name' => 'pair'],
            ['name' => 'set'],
            ['name' => 'pkt'],
            ['name' => 'doz'],
            ['name' => 'box'],
        ];
        foreach($units as $unit){
            Unit::create($unit);
        }
    }
}
