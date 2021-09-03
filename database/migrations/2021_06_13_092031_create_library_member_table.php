<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibraryMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uid', 30)->unique();
            $table->string('card_id', 15);
            $table->string('member_name', 50);
            $table->string('status', 15);
            $table->longText('member_address');
            $table->string('country', 60);
            $table->string('city', 100);
            $table->string('state', 15);
            $table->string('postal_codes', 20);
            $table->string('contact', 30);
            $table->string('birth_date', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('library_member');
    }
}
