<?php

use Illuminate\Database\Seeder;
use App\News;

class Newseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      News::create([      	
      	'name'=>"Добропожаловать на сайт",
      	'body'=>"Ghbdtnbr",
      	'url'=>"google.com"
      ]);
    }
}
