<?php

namespace BiuradPHP\Toolbox\ConsoleLiteTest\fixtures;

use BiuradPHP\Toolbox\ConsoleLite\Command;

class FooCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'foo:bar1';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        //code...
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //code...
    }
}
