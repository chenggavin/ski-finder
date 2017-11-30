<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resorts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug');
            $table->text('location')->nullable();
            $table->boolean('open');
            $table->string('conditions')->nullable();
            $table->decimal('new_snow_in', 3,1)->nullable();
            $table->decimal('pct_open', 3,1)->nullable();
            $table->decimal('upper_snow', 3,1)->nullable();
            $table->decimal('lower_snow', 3,1)->nullable();
            $table->string('last_snow')->nullable();
            $table->string('lifts_open')->nullable();
            $table->string('img')->nullable();
            $table->text('website')->nullable();
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
        Schema::dropIfExists('resorts');
    }
}
