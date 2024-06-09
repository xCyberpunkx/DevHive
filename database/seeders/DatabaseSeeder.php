<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
 use Spatie\Permission\Models\Permission;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        // Create an admin role
        $adminRole = Role::create(['name' => 'admin']);

        // Create an admin user
        $adminUser = User::create([
            'name' => 'admin',
            'email' => 'admin@local.com',
            'password' => bcrypt('password'), // Replace with your desired password
        ]);

        // Assign the admin role to the admin user
        $adminUser->assignRole($adminRole);

        // Create listings associated with the admin user
        Listing::factory()->create([
            'user_id' => $adminUser->id,
        ]);

        // Create additional users using factory
        User::factory()->create();
    }
}
