<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = (array) config('boilerplate.roles');
        foreach ($roles as $role) {
          $newRole = Role::firstOrcreate(['name' => $role['name']]);
          foreach ($role['permissions'] as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission]);
            $newRole->givePermissionTo($perm->name);
          }
        }
    }
}
