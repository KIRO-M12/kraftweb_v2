<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ManageIcons extends Command
{
    protected $signature = 'icons:manage {action}';
    protected $description = 'Manage allowed icons dynamically from the command line.';

    public function handle()
    {
        $action = $this->argument('action');
        
        // Fetch allowed icons from config
        $allowedIcons = config('icons.allowed');

        if ($action === 'list') {
            $this->info('Allowed Icons:');
            foreach ($allowedIcons as $key => $iconClass) {
                $this->line("$key: $iconClass");
            }
        } elseif ($action === 'add') {
            $key = $this->ask('Enter the icon key (e.g., newspaper):');
            $iconClass = $this->ask('Enter the icon class (e.g., fas fa-newspaper):');

            $this->info("Icon '$key' added with class '$iconClass'.");
        } else {
            $this->error('Invalid action. Use "list" or "add".');
        }

        return 0;
    }
}
