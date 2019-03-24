<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_privileges', function(Blueprint $table)
        {
            $table->integer('role_id')->unsigned()->index('role_privileges_role_id_foreign');
            $table->integer('privilege_id')->unsigned()->index('role_privileges_privilege_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('role_privileges');
    }
}
