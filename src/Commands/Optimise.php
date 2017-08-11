<?php

namespace Vool\Unamerican\Commands;

use Illuminate\Console\Command;

class Optimise extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'optimise';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Optimise the framework for better performance';

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
        $this->info('Generating optimised class loader');   
        $this->error('Please ignore the typo on the following line :)');
        $this->call('optimize');
    }
}
