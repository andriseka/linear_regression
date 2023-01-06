<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable(true);
            $table->float('open', 15, 2)->nullable(true);
            $table->float('high', 15, 2)->nullable(true);
            $table->float('low', 15, 2)->nullable(true);
            $table->float('close', 15, 2)->nullable(true);
            $table->float('adj_close', 15, 2)->nullable(true);
            $table->float('volume', 15, 2)->nullable(true);
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
        Schema::dropIfExists('stocks');
    }
}
