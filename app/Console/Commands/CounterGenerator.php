<?php

namespace App\Console\Commands;

use App\Models\Galeri;
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
        $galeri=Galeri::find( $this->counterableId);

        if(!$galeri){
            $this->info('Galeri tidak ditemukan');
            return;
        }

        $galeri->counters()->factory()->count(2000)->like()->make();

        return 0;
    }

}
