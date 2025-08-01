<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('blocks', function (Blueprint $table) {
            $table->string('status')->default('published')->after('order');
        });
    }
    
    public function down()
    {
        Schema::table('blocks', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }    
};
