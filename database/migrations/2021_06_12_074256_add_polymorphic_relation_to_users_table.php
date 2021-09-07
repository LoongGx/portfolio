<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPolymorphicRelationToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->string('status', 100);
            // $table->longText('address');
            // $table->string('contact', 20);
            $table->string("first_name", 150)->after('name')->nullable();
            $table->string("last_name", 150)->after('first_name')->nullable();
            $table->string("ip_address", 15)->after('id')->nullable();
            $table->string("company")->nullable();
            $table->boolean('confirmed')->default(true);
            $table->nullableMorphs('entity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name', 'ip_address', 'company', 'confirmed']);
            $table->dropMorphs('entity');
        });
    }
}
