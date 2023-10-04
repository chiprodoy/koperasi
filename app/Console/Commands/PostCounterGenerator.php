<?php

namespace App\Console\Commands;

use App\Models\Counter;
use App\Models\Galeri;
use App\Models\Post;
use App\Models\PostCounter;
use Illuminate\Console\Command;

class PostCounterGenerator extends Command
{
    public $counterableId;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'counter:generate-post {counterable_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->counterableId=$this->argument('counterable_id');

        //find post
        $galeri=Post::find( $this->counterableId);

        if(!$galeri){
            $this->info('Post tidak ditemukan');
            return;
        }

        PostCounter::factory()->count(2)->like()->create([
            'post_id'=>$galeri->id
        ]);
        //$galeri->counters()->factory()->count(2000)->like()->make();

        return 0;
    }

}
