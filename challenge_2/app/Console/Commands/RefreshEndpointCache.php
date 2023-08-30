<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class RefreshEndpointCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh-endpoint-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'clear endpoint response';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Cache::delete('response');
        $this->info("End point cache Cleared");
    }
}
