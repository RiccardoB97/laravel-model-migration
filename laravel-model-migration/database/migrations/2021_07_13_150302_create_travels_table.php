<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->text('description')->nullable();
            $table->string('cover_image')->nullable();
            $table->decimal('price', 6,2);
            $table->string('destination', 30);
            $table->date('departure_date')->nullable();
            $table->date('return_date')->nullable();
            $table->date('published_at')->default(NOW());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
