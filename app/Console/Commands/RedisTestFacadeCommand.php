<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class RedisTestFacadeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:goFacade';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        $post = Post::find(1);
//        Redis::set('posts:' . $post->id, $post);
       // $post = Redis::get('posts:1');
     //   $post = Post::make((array)json_decode($post));
       // dd($post);


       // Redis::lpush('posts', 'some_post', 'another_post'); // а как это получить пример внизу
        $posts = Redis::lrange('posts', 0, -1);
        dd($posts);
    }
}
