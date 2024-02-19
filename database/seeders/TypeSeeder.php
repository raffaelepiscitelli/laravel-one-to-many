<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types=[
            'full-stack',
            'front-end',
            'back-end'
        ];
        
        foreach ($types as $singleType) {
            $type = new Type();
            $type->name= $singleType ;
            $type->save();
        }
    }
}
