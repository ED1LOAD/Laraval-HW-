<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name'=> 'admin']);
        $buyer = Role::create(['name'=> 'buyer']);

        $productShow = Permission::create([
            'name' => 'product.show',
        ]);
        $productDestroy = Permission::create([
            'name' => 'product.destroy',
        ]);
        $productIndex = Permission::create([
            'name' => 'product.index',
        ]);

        $buyer->givePermissionTo($productShow);
        $admin->givePermissionTo(Permission::all());
    }
}
