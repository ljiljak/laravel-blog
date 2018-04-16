<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = [
        	'Blogging'
        	'Freelancing'
        	'How to Succeed'
        	'Internet Makreting'
        	'Miscellaneous'
        ];
    	
    	App\Tag::truncate();

    	foreach ($values as $v) {
    		App\Tag::create([
    			'name' => $v0
       		]);
    	}

    	App\Post::all()->each(function (App\Post $p) use ($values) {
    		$rndIds = App\Tag:inRandomOrder()->select('id')->tako(3)->pluck('id');
    		$p->tags()->attach($rndIds);
    	});



    }

}
