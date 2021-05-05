<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            [
                'title'=>'My fist tile',
                'body'=>'My first body'
            ],
            [
                'title'=>'My second tile',
                'body'=>'My second body'
            ],
            [
                'title'=>'My third tile',
                'body'=>'My third body'
            ],
            [
                'title'=>'My fourth tile',
                'body'=>'My fourth body'
            ],
            [
                'title'=>'My fifth tile',
                'body'=>'My fifth body'
            ],
            [
                'title'=>'My sixth tile',
                'body'=>'My sixth body'
            ],
            [
                'title'=>'My seventh tile',
                'body'=>'My seventh body'
            ],
            [
                'title'=>'My eighth tile',
                'body'=>'My eighth body'
            ],
            [
                'title'=>'My nineth tile',
                'body'=>'My nineth body'
            ],
            [
                'title'=>'My tenth tile',
                'body'=>'My tench body'
            ],
        ];
        Post::insert($post);
    }
}
