<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HubHeader;

class HubHeaderSeeder extends Seeder
{
    public function run()
    {
        HubHeader::create([
            'header_title' => 'Elevate Your Workflow with an Intelligent Digital Hub',
            'header_subtitle' => 'Streamline operations with a centralized dashboard: manage tools, automate processes, and visualize data to enhance team efficiency.',
        ]);
    }
}
