<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Privileges;
use App\Roles;
use App\UserRoles;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = User::create([
			'username'	=>	'admin',
			'email' => 'admin@admin.com',
			'password'	=>	Hash::make('admin'),
			'full_name'	=>	'bornoks',
			'address' => 'none',
			'status' => '0',
			'contact_no'=>	'7493345',
			'photo'=>	'anon.png',
			]);
        $roles_super = Roles::create([
			'role_name' => 'superadmin',
			]);
        $roles_admin = Roles::create([
			'role_name' => 'admin',
			]);
        $roles_mod = Roles::create([
			'role_name' => 'moderator',
			]);
        $roles_normal = Roles::create([
			'role_name' => 'normaluser',
			]);
        $is_superadmin_account = Privileges::create([
			'name' => 'is_superadmin_account',
			]);
        $is_admin_account = Privileges::create([
			'name' => 'is_admin_account',
			]);
        $is_moderator_account = Privileges::create([
			'name' => 'is_moderator_account',
			]);
        $is_normaluser_account = Privileges::create([
			'name' => 'is_normaluser_account',
			]);
        $is_allow_add_product = Privileges::create([
			'name' => 'is_allow_add_product',
			]);
        $is_allow_edit_product = Privileges::create([
			'name' => 'is_allow_edit_product',
			]);
        $is_allow_delete_product = Privileges::create([
			'name' => 'is_allow_delete_product',
			]);

        //superadmin
        DB::table('role_privileges')->insert([
			'role_id' => $roles_super->id,
			'privilege_id' => $is_superadmin_account->id,
			]);
        DB::table('role_privileges')->insert([
			'role_id' => $roles_super->id,
			'privilege_id' => $is_allow_add_product->id,
			]);
        DB::table('role_privileges')->insert([
			'role_id' => $roles_super->id,
			'privilege_id' => $is_allow_edit_product->id,
			]);
        DB::table('role_privileges')->insert([
			'role_id' => $roles_super->id,
			'privilege_id' => $is_allow_delete_product->id,
			]);
        //normaluser
        DB::table('role_privileges')->insert([
			'role_id' => $roles_normal->id,
			'privilege_id' => $is_allow_add_product->id,
			]);
        DB::table('role_privileges')->insert([
			'role_id' => $roles_normal->id,
			'privilege_id' => $is_allow_edit_product->id,
			]);
        DB::table('role_privileges')->insert([
			'role_id' => $roles_normal->id,
			'privilege_id' => $is_allow_delete_product->id,
			]);
        //user roles
         $user_roles = UserRoles::create([
			'user_id' => $user->id,
			'role_id' => $roles_super->id,
			]);
    }
}
