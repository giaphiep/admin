<?php

namespace GiapHiep\Admin\Commands;

use Illuminate\Console\Command;
use Artisan;

class AdminInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Template admin';

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
    	Artisan::call('vendor:publish',['--tag' => 'admin_migrations']);
    	Artisan::call('vendor:publish',['--tag' => 'admin_seeds']);
    	Artisan::call('vendor:publish',['--tag' => 'admin_public']);
    	Artisan::call('vendor:publish',['--tag' => 'admin_views']);
    	exec('composer dump-autoload');
    	Artisan::call('migrate');
    	Artisan::call('db:seed',['--class' => 'UsersTableSeeder']);

    }
}
