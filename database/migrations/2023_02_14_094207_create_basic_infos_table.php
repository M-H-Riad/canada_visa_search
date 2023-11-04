<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_infos', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('passport');
            $table->string('pass_exp_date')->nullable();
            $table->string('lmia')->nullable();
            $table->string('lmia_active')->nullable();
            $table->string('document_id')->nullable();
            $table->string('document_valid')->nullable();
            $table->string('remark')->nullable();

            $table->string('status1_date')->nullable();
            $table->string('status2_date')->nullable();
            $table->string('status3_date')->nullable();
            $table->string('status4_date')->nullable();
            $table->string('status5_date')->nullable();
            $table->string('status6_date')->nullable();
            $table->string('status7_date')->nullable();
            $table->string('status1_note')->nullable();
            $table->string('status2_note')->nullable();
            $table->string('status3_note')->nullable();
            $table->string('status4_note')->nullable();
            $table->string('status5_note')->nullable();
            $table->string('status6_note')->nullable();
            $table->string('status7_note')->nullable();

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
        Schema::dropIfExists('basic_infos');
    }
}
