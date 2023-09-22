<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class CounterGenerator extends Command
{
    public $counterableId;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'counter:generate {counterable_id}';

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
        $post=Post::find( $this->counterableId);


        return 0;
    }

}
