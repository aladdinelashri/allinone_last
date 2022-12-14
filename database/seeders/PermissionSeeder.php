<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Str;






class PermissionSeeder extends Seeder
{
      /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'create brands']);
        Permission::create(['name' => 'update brands']);
        Permission::create(['name' => 'delete brands']);
        Permission::create(['name' => 'view brands']);
        Permission::create(['name' => 'edit brands']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);
        Permission::create(['name' => 'view roles']);
         Permission::create(['name' => 'edit roles']);
        Permission::create(['name' => 'create coloroptions']);
        Permission::create(['name' => 'update coloroptions']);
        Permission::create(['name' => 'delete coloroptions']);
        Permission::create(['name' => 'view coloroptions']);
        Permission::create(['name' => 'edit coloroptions']);


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'writer']);
        $role1->givePermissionTo('view brands');
        $role1->givePermissionTo('view coloroptions');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('create users');
        $role2->givePermissionTo('update users');

        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Employee User',
            'email' => 'employee@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin'=> '0',


        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin'=> '1',
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Super-Admin User',
            'email' => 'superadmin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin'=> '1',
        ]);
        $user->assignRole($role3);
   

// create categoryitem
        $categoryitem = \App\Models\Categoryitem::factory()->create([
             'Title' => '----',
            
        ]);

      //  create categoryproduct
        $categoryproduct = \App\Models\Categoryproduct::factory()->create([
             'Title' => '----',
            
        ]);

      //  create tagitem
        $tagitem = \App\Models\Tagitem::factory()->create([
             'Title' => '----',
            
        ]);

      //   create tagproduct
        $tagproduct = \App\Models\Tagproduct::factory()->create([
             'Title' => '----',
            
        ]);

        //   create coloroption
        $coloroption = \App\Models\Coloroption::factory()->create([
             'Title' => '----',
            
        ]);

        //   create sizeoption
        $sizeoption = \App\Models\Sizeoption::factory()->create([
             'Title' => '----',
            
        ]);

        //   create weightoption
        $weightoption = \App\Models\Weightoption::factory()->create([
             'Title' => '----',
            
        ]);
}
 }