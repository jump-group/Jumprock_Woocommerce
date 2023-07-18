<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GenerateBlockFolder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:block {name* : The name of the block}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new ACF block folder in views/blocks';

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
        dump(get_template_directory());
        // Give user a select option to choose the files to generate
        $files = $this->choice(
            'Do you want to generate other files?', 
            ['scss', 'js', 'ts', 'all'], 
            'all'
        );

        $name = $this->argument('name');
        $name = implode('-', $name);
        $kebabName = Str::kebab(Str::afterLast($name, '\\'));

        $path = get_template_directory() . '/resources/views/blocks/' . $kebabName;
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $this->info('Block folder created successfully.');

        // Generate block view file using the command:
        // php wp acorn generate:view blocks/{block-name}/{block-name}
        $this->call('acf:block', [
            'name' => $name,
        ]);

        // move the block view file to the block folder
        $blockViewFile = get_template_directory() . '/resources/views/blocks/' . $kebabName . '.blade.php';
        $blockViewFileNew = get_template_directory() . '/resources/views/blocks/' . $kebabName . '/' . $kebabName . '.blade.php';
        rename($blockViewFile, $blockViewFileNew);

        // if choice is scss or all, generate scss file
        if ($files == 'scss' || $files == 'all') {
            // generate a scss file in the block folder
            $scssFile = get_template_directory() . '/resources/views/blocks/' . $kebabName . '/' . $kebabName . '.scss';
            $scssFileContent = file_get_contents(get_template_directory() . '/stubs/scss.stub');
            file_put_contents($scssFile, $scssFileContent);
            $this->info('SCSS file created successfully.');
        }

        // if choice is js or all, generate js file
        if ($files == 'js' || $files == 'all') {
            // generate a js file in the block folder
            $jsFile = get_template_directory() . '/resources/views/blocks/' . $kebabName . '/' . $kebabName . '.js';
            $jsFileContent = file_get_contents(get_template_directory() . '/stubs/js.stub');
            file_put_contents($jsFile, $jsFileContent);
            $this->info('JS file created successfully.');
        }

        // if choice is ts or all, generate ts file
        if ($files == 'ts' || $files == 'all') {
            // generate a ts file in the block folder
            $tsFile = get_template_directory() . '/resources/views/blocks/' . $kebabName . '/' . $kebabName . '.ts';
            $tsFileContent = '';
            file_put_contents($tsFile, $tsFileContent);
            $this->info('TS file created successfully.');
        }

        return 0;
    }
}
