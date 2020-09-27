<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name')->nullable(false);
            $table->text('address');
            $table->string('contact')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('state')->nullable();
            $table->boolean('main_unit')->default(false);
            $table->auditables();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}
