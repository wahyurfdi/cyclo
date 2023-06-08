<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrashTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trash_type', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('description', 128);
            $table->string('image', 128);
            $table->integer('coin_per_qty')->default(0);
            $table->decimal('weight_per_qty')->default(0);
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
        Schema::dropIfExists('trash_type');
    }
}
