<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->uuid('id_role')->primary();
            // $table->timestamps();
            $table->string('name');

            // $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');

        // Schema::table('roles', function (Blueprint $table) {
        //     $table->dropForeign(['id_role']);
        //     $table->dropColumn(['id_role']);
            
        // });
    }
}
