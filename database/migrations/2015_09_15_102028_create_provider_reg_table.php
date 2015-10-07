<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_regs', function (Blueprint $table) {
            $table->string('emp_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('pass');
            $table->string('conf_pass');
            $table->timestamps();
            $table->timestamp('regi_at');
            $table->bigInteger('auto_id')->unsigned();
            $table->unique('auto_id');
            $table->primary('auto_id');
            $table->double('latitude');
            $table->double('longitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('provider_regs');
    }
}
