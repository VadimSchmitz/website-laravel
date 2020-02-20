<?php

use App\Article;
use App\Assignment;
use App\User;
use App\Grade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        factory(User::class,2)->create();
//        factory(Article::class,3)->create(['user_id' => 2]);
//        factory(Grade::class, 10)->create();


//        DB::table('courses')->insert([
//            'name'=>'test',
//            'ecs'=> 4,
////                'cursus' => 'test',
////                'toets' => 'toetspoijhgfhiotest',
////                'weging' => '20',
////                'ec' => '14',
////                'cijfer' => '13'
//            ]);


        factory(Assignment::class,5)->create(['course_id'=> 4]);
    }
}
