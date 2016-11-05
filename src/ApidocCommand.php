<?php

namespace Rowbone\Apidoc;

use Illuminate\Console\Command;

class ApidocCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbitdoc:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'to install rowbone apidoc';

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
        $this->info('Thank to use Rabbit doc');
    }
}
