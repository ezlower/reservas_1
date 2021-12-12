<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'empleado']);

        Permission::create(['name'=>'home'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'rooms.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'rooms.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'rooms.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'rooms.destroy'])->syncRoles([$role1,$role2]);


        Permission::create(['name'=>'reservas.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'reservas.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'reservas.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'reservas.destroy'])->syncRoles([$role1,$role2]);
    }
}
