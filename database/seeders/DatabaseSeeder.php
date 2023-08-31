<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\RBAC\Permission;
use App\Models\RBAC\Role;
use App\Models\RBAC\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
         Role::factory(2)->create();
         Permission::factory(10)->create();

         foreach (User::all() as $user) {
             $minRoleId = Role::first()->getAttribute(Role::FIELD_ID);
             $maxRoleId = Role::orderBy(Role::FIELD_ID, 'DESC')->first()->getAttribute(Role::FIELD_ID);
             $user->roles()->attach(rand($minRoleId, $maxRoleId));
         }

         foreach (Role::all() as $role)
         {
             $minPermId = Permission::first()->getAttribute(Permission::FIELD_ID);
             $maxPermId = Permission::orderBy(Permission::FIELD_ID, 'DESC')->first()->getAttribute(Permission::FIELD_ID);
             $midPermId = $maxPermId / 2;
             for ($i = 0; $i < 5; $i++) {
                 $role->permissions()->attach(rand(rand($minPermId, $midPermId), $maxPermId));
             }
         }

        // \App\Models\RBAC\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
