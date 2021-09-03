<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibraryLibrarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_librarian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uid', 30)->unique();
            $table->string('card_id', 15);
            $table->string('certification', 100);
            $table->string('contact', 30);
            $table->longText('address');
            $table->string('transport', 100)->nullable();
            $table->string('country', 60)->nullable();
            $table->string('birth_date', 10)->nullable();
            $table->string('emergency_contact_relation', 20);
            $table->string('emergency_contact_name', 30);
            $table->string('emergency_contact', 30);
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
        Schema::dropIfExists('library_librarian');
    }
}
