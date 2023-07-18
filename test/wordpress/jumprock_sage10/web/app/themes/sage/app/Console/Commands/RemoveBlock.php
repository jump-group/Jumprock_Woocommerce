<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class RemoveBlock extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:block {name* : The name of the block}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove an ACF block in views/blocks and app/Blocks';

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
        $name = $this->argument('name');
        $name = implode('-', $name);
        $kebabName = Str::kebab(Str::afterLast($name, '\\'));

        $view_path = get_template_directory() . '/resources/views/blocks/' . $kebabName;
        if (file_exists($view_path)) {
            $this->removeDirectory($view_path);
        }

        $block_path = get_template_directory() . '/app/Blocks/' . $name . '.php';
        if (file_exists($block_path)) {
            unlink($block_path);
        }

        $this->info('Block removed successfully.');

        return 0;
    }

    public function removeDirectory($path) {

        $files = glob($path . '/*');
        foreach ($files as $file) {
            is_dir($file) ? removeDirectory($file) : unlink($file);
        }
        rmdir($path);
    
        return;
    }
}
