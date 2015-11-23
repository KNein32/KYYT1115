<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AlexaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:alexa';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Copies the top 500 domains from Alexa';

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
     * @return mixed
     */
    public function handle()
    {
      //As far as I can see you can either sign up for to alexa via AWS. Pay 25C per 100 sites.
      //So $1.25 for 500. Don't mind doing a few time but would rather not be charged. 
      //or download a free csv via this link // http://s3.amazonaws.com/alexa-static/top-1m.csv.zip
      //Can probably use something like Laravel Excel v2.0 or Laravel.IO to help with the second but i don't think i'll get to it.
      //Either way don't think I have time today to write the code so I did an import using navicat db import tool
    }
}
