<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CreateObservers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'observers:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create observers for all models';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $modelsPath = app_path('Models');
        $observersPath = app_path('Observers');

        // Create observers directory if it doesn't exist
        if (!File::isDirectory($observersPath)) {
            File::makeDirectory($observersPath);
        }

        // Get all model files
        $modelFiles = File::files($modelsPath);

        foreach ($modelFiles as $modelFile) {
            $modelPath = $modelFile->getPathname();
            $modelName = Str::before($modelFile->getFilename(), '.php');
            $observerName = $modelName . 'Observer';
            $observerPath = $observersPath . '/' . $observerName . '.php';

            // Check if the observer doesn't exist
            if (!File::exists($observerPath)) {
                $stub = File::get(__DIR__ . '\stubs\observer.stub');
                $stub = str_replace('{{modelName}}', $modelName, $stub);
                $stub = str_replace('{{observerName}}', $observerName, $stub);

                File::put($observerPath, $stub);

                $this->info("Created observer: $observerName");
            } else {
                $this->info("Observer already exists: $observerName");
            }
        }

        $this->info("Observers created successfully!");
    }
}
