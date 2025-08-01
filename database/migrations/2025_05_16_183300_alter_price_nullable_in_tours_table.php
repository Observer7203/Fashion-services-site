<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->nullable()->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->change();
        });
    }    
};
