<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodesOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes_officer', function (Blueprint $table) {
          $table->id('node_id');
          $table->string('name', 500);
          $table->string('country_codes', 500);
          $table->string('countries', 500);
          $table->string('sourceID', 500);
          $table->string('valid_until', 500);
          $table->string('note', 1000);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodes_officer');
    }
}
