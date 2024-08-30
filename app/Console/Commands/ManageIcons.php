<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ManageIcons extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'icons:manage {action}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manage allowed icons dynamically from the command line.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $action = $this->argument('action');

        // Fetch allowed icons from the config
        $allowedIcons = config('icons.allowed');

        if ($action === 'list') {
            // List all allowed icons
            $this->info('Allowed Icons:');
            foreach ($allowedIcons as $key => $iconClass) {
                $this->line("$key: $iconClass");
            }
        } elseif ($action === 'add') {
            // Add a new icon to the list (temporarily, as changes won't persist to config file)
            $key = $this->ask('Enter the icon key (e.g., newspaper):');
            $iconClass = $this->ask('Enter the icon class (e.g., fas fa-newspaper):');

            if (!empty($key) && !empty($iconClass)) {
                // Temporarily add the icon (Note: This does not persist to the config file)
                $allowedIcons[$key] = $iconClass;
                
                $this->info("Icon '$key' added with class '$iconClass'. (Temporary only, not persisted)");
                // Optionally log the change or perform additional actions.
            } else {
                $this->error('Both key and class are required.');
            }
        } else {
            $this->error('Invalid action. Use "list" or "add".');
        }

        return 0;
    }
}
