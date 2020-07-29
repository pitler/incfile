<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendPostJob;


class SendPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send post';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->info('Add a new Post call');
        SendPostJob::dispatch();


        return 0;
    }
}
