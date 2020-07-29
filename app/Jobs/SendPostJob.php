<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use GuzzleHttp\Client;

class SendPostJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


     /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
     public $tries = 5;

     /**
     * The number of seconds to wait before retrying the job.
     *
     * @var int
     */
    public $retryAfter = 2;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //Create the post call to the url
        echo ("Processing Job: -> ".$this->job->getJobId());

        $client = new Client();
        $res = $client->request('POST', ' https://atomic.incfile.com/fakepost');

        if ($res->getStatusCode() == 200)
        {
        //Actions if response 200
        }
        else
        {
          //Actiosn if other response
        }


    }
}
