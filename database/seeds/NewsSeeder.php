<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
        	'category_id'=>1,
        	'status'=>'new',
        	'name'=>'UPS Announces Largest-Ever Expansion Of UPS My Choice® Service To Improve The Global Customer Experience',
        	'user_id'=>0,
        	'body'=>'UPS introduces UPS My Choice in Africa, Asia Pacific and the Indian Sub-continent, Caribbean and Central and South America, Middle East, and Oceania, marking the largest expansion since the service’s launch -- Expansion offers users enhanced visibility in 96 new countriesand territories with the opportunity to control delivery dates and locations where available -- More visibility and control for consumers helps merchants receive fewer “Where’s my order?” calls, and consumers enjoy a better delivery experience -- UPS My Choice membership exceeds milestone of 52 million worldwide enrollments',
        	'url'=>'https://www.apnews.com/6f03610d77504ae0bf1ace8761e3fc3'
        	]);
    }
}
