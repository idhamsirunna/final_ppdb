<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNatExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nat_exams', function (Blueprint $table) {
            $table->id();
            $table->string('participant_numb')->nullable();
            $table->string('diploma_blank_numb')->nullable();
            $table->string('skhun_bank_numb')->nullable();
            $table->date('graduate_date')->nullable();
            $table->float('ne_bind');
            $table->float('ne_bing');
            $table->float('ne_ipa');
            $table->float('ne_mat');
            $table->foreignId('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nat_exams');
    }
}