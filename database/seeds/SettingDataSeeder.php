<?php

use Illuminate\Database\Seeder;
use App\Setting;
class SettingDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             // create first  data setting 
            Setting::create([
                'app_name' => 'recipe ',
                'app_key' => '5edffba6-63c8-4682-b101-799e436ad553',
                'more_app' => 'https://play.google.com/store/apps',
                'privacy_policy' => 'Google Analytics is an analysis service provided by Google Inc. Google utilizes the collected data to track and examine the use of Apps, to prepare reports on user activities and share them with other Google services. Google may use the data to contextualize and personalize the ads of its own advertising network.',
                'facebook_url' => 'https://www.facebook.com/',
                'youtube_url' => 'https://www.youtube.com/',
                'Instagram_url' => 'https://www.instagram.com/'
            ]);
    
    }
}
