<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(array(
            'id' => 1,
            'name' => 'owner',
            'display_name' => 'Site Owner',
            'description' => 'User is the owner of the Site.',
        ));

        $role2 = Role::create(array(
            'id' => 2,
            'name' => 'admin',
            'display_name' => 'Site Admin',
            'description' => 'User is an admin of the Site.',
        ));

        $role3 = Role::create(array(
            'id' => 3,
            'name' => 'writer',
            'display_name' => 'Site Writer',
            'description' => 'User is a writer for the Site.',
        ));

        $role4 = Role::create(array(
            'id' => 4,
            'name' => 'member',
            'display_name' => 'Site Member',
            'description' => 'User is a member of the Site.',
        ));

        $permission1 = Permission::create(array(
            'id' => 1,
            'name' => 'edit-site',
            'display_name' => 'Edit Site',
            'description' => 'User can change website settings.',
        ));

        $permission2 = Permission::create(array(
            'id' => 2,
            'name' => 'write-article',
            'display_name' => 'Write Article',
            'description' => 'User can write an article.',
        ));

        $permission3 = Permission::create(array(
            'id' => 3,
            'name' => 'publish-article',
            'display_name' => 'Publish Article',
            'description' => 'User can publish an article.',
        ));

        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id' => 1,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id' => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 2,
            'role_id' => 1,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 2,
            'role_id' => 2,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 2,
            'role_id' => 3,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 3,
            'role_id' => 1,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 3,
            'role_id' => 2,
        ]);

    }
}
