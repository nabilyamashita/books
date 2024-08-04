<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $data =[
        //     ['name' => 'budi' , 'gender' => 'L' , 'nis' => '01234' , 'class_id' => 2],
        //     ['name' => 'beni' , 'gender' => 'p' , 'nis' => '00001' , 'class_id' => 1],
        //     ['name' => 'baba' , 'gender' => 'p' , 'nis' => '01235' , 'class_id' => 3],
        //     ['name' => 'beno' , 'gender' => 'L' , 'nis' => '01236' , 'class_id' => 1]

        // ];

        // foreach ($data as $value) {
        //     Students::create([
        //     'name' => $value['name'],
        //     'gender' => $value['gender'],
        //     'nis' => $value['nis'],
        //     'class_id' => $value['class_id']
        //     ]); 
        // }

        Students::factory()->count(10)->create();

    }
}
