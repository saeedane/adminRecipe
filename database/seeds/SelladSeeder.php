<?php

use Illuminate\Database\Seeder;
use App\Sellad;
class SelladSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // first data of ads 

        Sellad::create([
            'admob_native' => 'ca-app-pub-3940256099942544/2247696110',
            'admob_interstitial' => 'ca-app-pub-3940256099942544/1033173712', 
            'admob_banner' => 'ca-app-pub-3940256099942544/6300978111', 
            'admob_video' => 'ca-app-pub-3940256099942544/5224354917', 

     ]);
    }
}
