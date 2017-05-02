<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Dev extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'geo:dev';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'develop something';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $devFile = base_path().DIRECTORY_SEPARATOR.'_dev.php';
        if(!is_file($devFile)) {
            return $this->comment("please coding in {$devFile}");
        }
        return include $devFile;
    }
}
