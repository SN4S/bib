<?php

namespace App\Console\Commands;

use App\Http\Controllers\NewsUpdate;
use App\Http\Parsers\RSSParser;
use App\Repository\NewsRepository;
use Illuminate\Console\Command;

class updfeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feed:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'parse news from shitty sites';

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
    public function handle(NewsUpdate $update)
    {
        $update->UpdateFeed(new NewsRepository(),new RSSParser());
    }
}
