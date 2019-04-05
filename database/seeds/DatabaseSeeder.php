<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Privileges;
use App\Roles;
use App\UserRoles;
use App\Locations;
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
			'verified' => '1',
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
         //locations
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Alicia',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Aurora',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Burgos',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Cabatuan',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Cauayan',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Cordon',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Dinapigue',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Echague',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Gamu',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Ilagan',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Jones',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Palanan',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Quezon',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Quirino',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Ramon',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Reina Mercedes',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Roxas',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'San Agustin',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'San Guillermo',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'San Isidro',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'San Manuel',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'San Mariano',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'San Mateo',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Santiago',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Santo Tomas',
			]);
         $locations = Locations::create([
			'province' => 'Isabela',
			'state' => 'Tumauini',
			]);
    }
}
