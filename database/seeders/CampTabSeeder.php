<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;
//BAWAAN LARAVEL
//use Str;

class CampTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title'=>'MASTERING LEARNING',
                'slug'=>'MASTERING-LEARNING', 
                'price'=>200,
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),

                //DARI USE STR DI ATAS 'slug'  => Str::slug('MASTERING LEARNING')
            ],
            [
                'title'=>'BARU MULAI',
                'slug'=>'BARU-MULAI', 
                'price'=>140,
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
        ];

        foreach ($camps as $key => $camp) {
            # code...
            Camp::create($camp);

        }
    }
}
