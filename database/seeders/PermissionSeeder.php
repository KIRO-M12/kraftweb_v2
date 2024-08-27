<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $createPost = Permission::create(['name' => 'create-post']);
        $editPost = Permission::create(['name' => 'edit-post']);
        $deletePost = Permission::create(['name' => 'delete-post']);
        $publishPost = Permission::create(['name' => 'publish-post']);

        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo([$createPost, $editPost, $deletePost, $publishPost]);
    }
}
