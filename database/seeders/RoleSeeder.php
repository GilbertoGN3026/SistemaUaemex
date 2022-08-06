<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        /*$role2 = Role::create(['name'=>'Alumno']);*/
        Permission::create(['name'=>'admin.home'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.tipos.index'])->assignRole($role1);
        Permission::create(['name'=>'admin.tipos.create'])->assignRole($role1);
        Permission::create(['name'=>'admin.tipos.edit'])->assignRole($role1);
        Permission::create(['name'=>'admin.tipos.show'])->assignRole($role1);
        Permission::create(['name'=>'admin.tipos.destroy'])->assignRole($role1);

        Permission::create(['name'=>'admin.numeros.index'])->assignRole($role1);
        Permission::create(['name'=>'admin.numeros.create'])->assignRole($role1);
        Permission::create(['name'=>'admin.numeros.edit'])->assignRole($role1);
        Permission::create(['name'=>'admin.numeros.destroy'])->assignRole($role1);

        Permission::create(['name'=>'admin.licenciaturas.index'])->assignRole($role1);
        Permission::create(['name'=>'admin.licenciaturas.create'])->assignRole($role1);
        Permission::create(['name'=>'admin.licenciaturas.edit'])->assignRole($role1);
        Permission::create(['name'=>'admin.licenciaturas.destroy'])->assignRole($role1);

        Permission::create(['name'=>'admin.insumos.index'])->assignRole([$role1]);
        Permission::create(['name'=>'admin.insumos.create'])->assignRole([$role1]);
        Permission::create(['name'=>'admin.insumos.edit'])->assignRole([$role1]);
        Permission::create(['name'=>'admin.insumos.show'])->assignRole([$role1]);
        Permission::create(['name'=>'admin.insumos.destroy'])->assignRole($role1);

        Permission::create(['name'=>'admin.charts.index'])->assignRole([$role1]);
        Permission::create(['name'=>'computos.index'])->assignRole([$role1]);
        Permission::create(['name'=>'computos.index2'])->assignRole([$role1]);
        Permission::create(['name'=>'admin.reportes.reporte_dia'])->assignRole([$role1]);
        Permission::create(['name'=>'admin.reportes.reportes_fecha'])->assignRole([$role1]);
        
        Permission::create(['name'=>'admin.reportes.reporteC_dia'])->assignRole([$role1]);
        Permission::create(['name'=>'admin.reportes.reportesC_fecha'])->assignRole([$role1]);

        

        

       
    }
}