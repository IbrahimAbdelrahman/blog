<?php

use Illuminate\Database\Seeder;

class TagTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new \App\Tag();
        $tag->name = 'tutorial';
        $tag->save();

        $tag = new \App\Tag();
        $tag->name = 'Industry News';
        $tag->save();
    }
}
