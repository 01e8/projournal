<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->text('note')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('patronymic');
            $table->unsignedBigInteger('group_id')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('parent_phone')->nullable();
            $table->timestamps();
        });

        Schema::table('students', function(Blueprint $table) {
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
